<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use SebastianBergmann\Environment\Console;
session_start();
class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $user = $request -> loginUser;
        $pass = $request ->loginPwd;
        // $result = DB::table('user') -> where('Taikhoan',$user)->where('Matkhau',$pass)->first();
        $users = DB::select('select * from user where Taikhoan = ? and Matkhau = ?', [$user,$pass]);
        if($users==null)
        {
            $users = DB::select('select * from admin where User = ? and Password = ?', [$user,$pass]);
            if($users==null)
            {
                // $request->session()->put('user',$user);
                // session()->flash('fail', session()->get('user'));
                session()->flash('fail', 'Tài khoản hoặc mật khẩu không chính xác.');
                return redirect('/login');
            }
            foreach ($users as $admin) {
                $admin = $admin->HotenAdmin;
                // $admin_img = $admin->Hinhanh;
                // $id = $admin->idAdmin;
            }
            // session()->flash('fail', $idadmin);
            session()->put('name',$admin);
            // session()->put('img',$admin_img);
            session()->put('admin',$admin);
            // session()->put('id',$id);
            // dd(session()->get('img'));
            return redirect('/admin');
        }
        else{
            foreach ($users as $user) {
                $iduser = $user->idUser;
            }
            $names = DB::select('select * from infomation where idUser = ?', [$iduser]);
            foreach ($names as $name) {
                $userName = $name->Hoten;
                $img = $name->Hinhanh;
                
            }
            session()->put('name',$userName);
            session()->put('img',$img);
            session()->put('id',$iduser);
            // session()->flash('fail', $userName);
            return redirect('/trang-chu');
        }
    }
    public function logout(){
        session()->put('name', null);
        session()->put('admin',null);
        session()->put('id',null);
        return redirect('/trang-chu');
    }
    public function change_pass(){
        return view('page.doimatkhau');
    }
    public function infomation(){
        return view('infomation');
    }
    public function add_info_sv(){
        return view('add_info_sv');
    }
    public function add_user(){
        return view('create_account');
    }
    public function save_matkhau(Request $request){
        $pass = $request->txtPass;
        $nhaplai = $request->txtNhaplai;
        if($pass == $nhaplai)
        {
                $data = array();
                $id = session()->get('id');
                // $data['Taikhoan'] = $request->txtUser;
                $data['Matkhau'] = $request->txtPass;
                DB::table('user')->where('idUser','=',$id)->update(['Matkhau'=> $pass]);
                session()->put('messenger','Đổi mật khẩu thành công');
                return redirect('/doi-mat-khau');
        }
        else{
            session()->put('messenger','Nhập lại mật khẩu không đúng');
            return redirect('/doi-mat-khau');
        }
    }
    public function save_user(Request $request){
        $data = array();
        $data['Taikhoan'] = $request->txtUser;
        $data['Matkhau'] = $request->txtPass;
        $data['Email'] = $request->txtEmail;
        $pass = $request->txtPass;
        $nhaplai = $request->txtNhaplai;
        $taikhoan = $request->txtUser;
        if($pass!=$nhaplai)
        {
            session()->put('messenger','Nhập lại mật khẩu không đúng');
            return redirect('/creat-account');
        }
        else{
            DB::table('user')->insert($data);
            session()->put('messenger','Đăng Ký Thành Công! Vui lòng Làm các bước tiếp theo');
            $list = DB::table('user')->where('Taikhoan','=',$taikhoan)->get();
            foreach ($list as $key => $value) {
                $id = $value->idUser;
            }
            session()->put('id',$id);
            return redirect('/question');
        }
    }
    public function question()
    {
        return view('question');
    }
    public function ung_vien()
    {
        return view('add_info_uv');
    }
    public function tuyen_dung()
    {
        return view('add_info_td');
    }
    public function save_ung_vien(Request $request){
        $data = array();
        $data['idUser'] = session()->get('id');
        $data['Hoten'] = $request->txtUser;
        $data['SDT'] = $request->txtSDT;
        $data['Diachi'] = $request->txtDiachi;
        $data['Ngaysinh'] = $request->txtNgaysinh;
        $data['Gioitinh'] = $request->txtGioitinh;
        // $data['Hinhanh'] = $request->hinhanh;
        $data['Gioithieu'] = $request->txtGioithieu;
        $data['Chuyennganh'] = $request->txtChuyenganh;
        // $data['Email'] = $request->txtEmail;
        $data['Trinhdo'] = $request->txtTrinhdo;

        $get_img = $request->file('hinhanh');
        if($get_img)
        {
            $ext = $request->hinhanh->extension();
            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'|| $ext == 'gif')
            {
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.',$get_name_img));
                $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                $get_img ->move('fontend/img/avatar',$new_img);
                $data['Hinhanh'] = $new_img;
                DB::table('infomation')->insert($data);
                Session()->put('messenger', 'Thêm thành công');
                return redirect('/trang-chu');
            }
            else
            {
                Session()->put('messenger', 'File không phải file ảnh');
                return redirect('/trang-chu');
            }
        }
    }
    public function save_tuyen_dung(Request $request){
        $data = array();
        // $data['idUser'] = session()->get('id');
        $data['Tencongty'] = $request->txtTenconty;
        $data['SDT'] = $request->txtSDT;
        // $data['Hinhanh'] = $request->hinhanh;
        $data['Gioithieu'] = $request->txtGioithieu;
        $data['Diachi'] = $request->txtDiachi;
        $data['Email'] = $request->txtEmail;
        $data['Link'] = $request->txtLink;
        $data['Tuyendung']= '1';

        $get_img = $request->file('hinhanh');
        if($get_img)
        {
            $ext = $request->hinhanh->extension();
            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'|| $ext == 'gif')
            {
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.',$get_name_img));
                $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                $get_img ->move('fontend/img/company',$new_img);
                $data['Hinhanh'] = $new_img;
                DB::table('company')->insert($data);
                Session()->put('messenger', 'Thêm thành công');
                return redirect('/trang-chu');
            }
            else
            {
                Session()->put('messenger', 'File không phải file ảnh');
                return redirect('/trang-chu');
            }
        }
    }
    public function profile(){
        $id = session()->get('id');
        $sel = DB::select('select * from user where idUser=?', [$id]);
        foreach ($sel as $key => $value) {
            $tuyendung = $value->Tuyendung;
        }
        if($tuyendung == 0)
        {
            $profile = DB::select('select * from user AS us, infomation AS inf where us.idUser=inf.idUser and inf.idUser=? ', [$id]);
            return view('infomation')->with('profile',$profile);
        }
        else
        {
            $profile = DB::select('select * from company where idCompany=? ', [$id]);
            return view('infomation_td')->with('profile',$profile);
        }
        // dd($profile);
        
    }
    public function profile_id($idUser){
        $sel = DB::select('select * from user where idUser=?', [$idUser]);
        foreach ($sel as $key => $value) {
            $tuyendung = $value->Tuyendung;
        }
        if($tuyendung == 0)
        {
            $profile = DB::select('select * from user AS us, infomation AS inf where us.idUser=inf.idUser and inf.idUser=? ', [$idUser]);
            return view('infomation')->with('profile',$profile);
        }
        else
        {
            $profile = DB::select('select * from company where idCompany=? ', [$idUser]);
            return view('infomation_td')->with('profile',$profile);
        }
        // dd($profile);
        
    }
    public function profile_td($idCompany){
        
            $profile = DB::select('select * from company where idCompany=? ', [$idCompany]);
            return view('infomation_td')->with('profile',$profile);
        // dd($profile);
        
    }
}