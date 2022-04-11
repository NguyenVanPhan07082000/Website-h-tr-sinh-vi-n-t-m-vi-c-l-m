<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();
class AdminContrller extends Controller
{
    public function AuthLogin(){
        $admin = session()->get('admin');
        if($admin)
        {
            return redirect('/admin');
        }
        else
        {
            return redirect('/login')->send();
        }
    }
    public function index()
    {
        $this->AuthLogin();
        $all_Job = DB::table('job')->join('company','job.idCompany','=','company.idCompany')->where('daduyet','=','1')->get();
        // dd($all_Job);
        $manager_Job = view('page.allViecLam')-> with('all_Job', $all_Job);
        return view('Admin')->with('page.allViecLam',$manager_Job);
    }
    public function add_Admin()
    {
        $this->AuthLogin();
        return view('page.add-admin');
    }
    public function save_Admin(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['User'] = $request->txtTk;
        $data['Password'] = $request->txtPass;
        $data['HotenAdmin'] = $request->txtTen;
        $data['Ngaysinh'] = $request->txtNgaysinh;
        $data['Gioitinh'] = $request->gioitinh;
        $data['Email'] = $request->txtEmail;
        $data['SDT'] = $request->txtSDT;
        $data['Diachi'] = $request->txtDiachi;
        // $data['Hinhanh'] = $request->hinhanh;
        $data['Quyen'] = $request->quyenquantri;
        
        $get_img = $request->file('hinhanh');
        if($get_img)
        {
            $ext = $request->hinhanh->extension();
            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'|| $ext == 'gif')
            {
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.',$get_name_img));
                $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                $get_img ->move('backend/img',$new_img);
                $data['Hinhanh'] = $new_img;
                DB::table('admin')->insert($data);
                Session()->put('messenger', 'Thêm admin thành công');
                return redirect('/admin/them-admin');
            }
            else
            {
                Session()->put('messenger', 'File không phải file ảnh');
                return redirect('/admin/them-admin');
            }
        }
    }
    public function job_wait(){
        $this->AuthLogin();
        $all_Job = DB::table('job')->join('company','job.idCompany','=','company.idCompany')->where('daduyet','=','0')->get();
        // dd($all_Job);
        $manager_Job = view('page.job_wait')-> with('all_Job', $all_Job);
        return view('Admin')->with('page.job_wait',$manager_Job);
    }
    public function job_end(){
        $this->AuthLogin();
        $all_Job = DB::table('job')->join('company','job.idCompany','=','company.idCompany')->where('Ngayhethan','<',date('Y-m-d'))->get();
        // dd($all_Job);
        $manager_Job = view('page.job_end')-> with('all_Job', $all_Job);
        return view('Admin')->with('page.job_end',$manager_Job);
    }
    public function all_camnang(){
        $this->AuthLogin();
        $all_Job = DB::table('camnan')->get();
        // dd($all_Job);
        $manager_Job = view('page.all_camnang')-> with('all_Job', $all_Job);
        return view('Admin')->with('page.all_camnang',$manager_Job);
    }
    public function add_Camnang()
    {
        $this->AuthLogin();
        return view('page.add_camnang');
    }
    public function save_Camnang(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['Tencamnan'] = $request->txtTen;
        $data['Tieude'] = $request->txtTieude;
        $data['Gioithieu'] = $request->txtGioithieu;
        
        $get_img = $request->file('hinhanh');
        if($get_img)
        {
            $ext = $request->hinhanh->extension();
            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'|| $ext == 'gif')
            {
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.',$get_name_img));
                $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                $get_img ->move('fontend/img/camnan',$new_img);
                $data['Hinhanh'] = $new_img;
                DB::table('camnan')->insert($data);
                Session()->put('messenger', 'Thêm cẩm nang thành công');
                return redirect('/admin/them-cam-nang');
            }
            else
            {
                Session()->put('messenger', 'File không phải file ảnh');
                return redirect('/admin/them-cam-nang');
            }
        }
    }
    public function all_quangcao(){
        $this->AuthLogin();
        $all_Job = DB::table('quangcao')->get();
        // dd($all_Job);
        $manager_Job = view('page.all_quangcao')-> with('all_Job', $all_Job);
        return view('Admin')->with('page.all_quangcao',$manager_Job);
    }
    public function add_quangcao()
    {
        $this->AuthLogin();
        return view('page.add_quangcao');
    }
    public function save_Quangcao(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['Slogan'] = $request->txtSlogan;
        $data['Link'] = $request->txtLink;
        
        $get_img = $request->file('hinhanh');
        if($get_img)
        {
            $ext = $request->hinhanh->extension();
            if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'|| $ext == 'gif')
            {
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.',$get_name_img));
                $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                $get_img ->move('fontend/img/quangcao',$new_img);
                $data['Hinhanh'] = $new_img;
                DB::table('camnan')->insert($data);
                Session()->put('messenger', 'Thêm cẩm nang thành công');
                return redirect('/admin/them-cam-nang');
            }
            else
            {
                Session()->put('messenger', 'File không phải file ảnh');
                return redirect('/admin/them-cam-nang');
            }
        }
    }
    public function all_admin(){
        $this->AuthLogin();
        $all_Job = DB::table('admin')->get();
        // dd($all_Job);
        $manager_Job = view('page.all_admin')-> with('all_Job', $all_Job);
        return view('Admin')->with('page.all_admin',$manager_Job);
    }
    public function edit_camnang($idCamnang){
        $this->AuthLogin();
        $edit_camnang = DB::table('camnan')->where('idCamnan',$idCamnang)->get();
        $manager_camnang = view('page.edit_camnang')->with('edit',$edit_camnang);
        return view('Admin')->with('page.edit_camnang', $manager_camnang);
    }
    public function update_camnang(Request $request ,$idCamnang){
        $this->AuthLogin();
        $data = array();
        $data['Tencamnan'] = $request->txtTen;
        $data['Tieude'] = $request->txtTieude;
        $data['Gioithieu'] = $request->txtGioithieu;
        DB::table('camnan')->where('idCamnan',$idCamnang)->update($data);
        session()->put('messenger', 'Sửa dữ liệu thành công');
        return redirect('/admin/tat-ca-cam-nang');
    }
    public function delete_camnang($idCamnang)
    {
        $this->AuthLogin();
        DB::table('camnan')->where('idCamnan',$idCamnang)->delete();
        session()->put('messenger', 'Xoá dữ liệu thành công');
        return redirect('/admin/tat-ca-cam-nang');
    }
    public function delete_job($idJob)
    {
        $this->AuthLogin();
        DB::table('job')->where('idJob',$idJob)->delete();
        session()->put('messenger', 'Xoá dữ liệu thành công');
        return redirect('/admin/tat-ca-viec-lam');
    }
    public function duyet_job($idJob){
        $this->AuthLogin();
        DB::table('job')->where('idJob',$idJob)->update(['daduyet'=> 1,'Ngaycapnhat' => date('Y-m-d')]);
        session()->put('messenger', 'Đã Duyệt Thành Công');
        return redirect('/admin/viec-lam-cho-duyet');
    }
    public function edit_quangcao($idQuangcao){
        $this->AuthLogin();
        $edit_quangcao = DB::table('quangcao')->where('idQuangcao',$idQuangcao)->get();
        $manager_quangcao = view('page.edit_quangcao')->with('edit',$edit_quangcao);
        return view('Admin')->with('page.edit_quangcao', $manager_quangcao);
    }
    public function update_quangcao(Request $request ,$idQuangcao){
        $this->AuthLogin();
        $data = array();
        $data['Slogan'] = $request->txtSlogan;
        $data['Link'] = $request->txtLink;
        DB::table('quangcao')->where('idQuangcao',$idQuangcao)->update($data);
        session()->put('messenger', 'Sửa dữ liệu thành công');
        return redirect('/admin/tat-ca-quang-cao');
    }
    public function delete_quangcao($idQuangcao)
    {
        $this->AuthLogin();
        DB::table('quangcao')->where('idCamnan',$idQuangcao)->delete();
        session()->put('messenger', 'Xoá dữ liệu thành công');
        return redirect('/admin/tat-ca-quang-cao');
    }
    public function edit_admin($idAdmin){
        $this->AuthLogin();
        $edit = DB::table('admin')->where('idAdmin',$idAdmin)->get();
        $manager = view('page.edit_admin')->with('edit',$edit);
        return view('Admin')->with('page.edit_admin', $manager);
    }
    public function update_admin(Request $request ,$idAdmin){
        $this->AuthLogin();
        $data = array();
        $data['User'] = $request->txtTk;
        $data['Password'] = $request->txtPass;
        $data['HotenAdmin'] = $request->txtTen;
        $data['Ngaysinh'] = $request->txtNgaysinh;
        $data['Gioitinh'] = $request->gioitinh;
        $data['Email'] = $request->txtEmail;
        $data['SDT'] = $request->txtSDT;
        $data['Diachi'] = $request->txtDiachi;
        $data['Quyen'] = $request->quyenquantri;

        DB::table('admin')->where('idAdmin',$idAdmin)->update($data);
        session()->put('messenger', 'Sửa dữ liệu thành công');
        return redirect('/admin/tat-ca-admin');
    }
    public function delete_admin($idAdmin)
    {
        $this->AuthLogin();
        DB::table('admin')->where('idAdmin',$idAdmin)->delete();
        session()->put('messenger', 'Xoá dữ liệu thành công');
        return redirect('/admin/tat-ca-admin');
    }
}
