<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Contracts\Session\Session;
session_start();
class HomeController extends Controller
{
    public function index(){
        $id = session()->get('id');
        $jobnoibac = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Luottheodoi DESC LIMIT ?',[6]);
        $jobvip = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Soluonghoso DESC LIMIT ?',[6]);
        $jobsave = DB::select('SELECT job.idJob,Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,0,6]);
        $jobjoin = DB::select('SELECT job.idJob,Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,1,6]);
        $company = DB::select('select * from company limit ?', [6]);
        $camnan = DB::table('camnan')->get();
        // dd($jobsave);
        return view('page.home')->with('jobnoibac',$jobnoibac)->with('jobvip',$jobvip)->with('jobsave',$jobsave)->with('jobjoin',$jobjoin)->with('company',$company)->with('camnan',$camnan);
    }
    public function new_job(){
        $newjob = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Ngaycapnhat DESC');
        $jobnoibac = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany and Luottheodoi > ? ORDER BY Luottheodoi DESC Limit ?',[0,20]);
        return view('page.new_job')->with('newjob', $newjob) ->with('jobnoibac', $jobnoibac);
    }
    public function all_job(){
        $newjob = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany');
        $jobnoibac = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany and Luottheodoi > ? ORDER BY Luottheodoi DESC Limit ?',[0,20]);
        return view('page.all_job')->with('newjob', $newjob) ->with('jobnoibac', $jobnoibac);
    }
    public function timungvien()
    {
        $timuv = DB::select('select * from user AS us,infomation AS info where us.idUser = info.idUser and Tuyendung = ?',[0]);
        return view('page.ds_ungvien')->with('timuv',$timuv);
    }
    public function dang_tuyen(){
        if(session()->get('id')== null)
        {
            session()->put('messenger', 'Vui lòng đăng nhập');
            return redirect('/login');
        }
        return view('page.dang_tuyen');
    }
    public function save_dang_tuyen(Request $request)
    {
        $data = array();
        $data['idCompany'] = session()->get('id');
        $data['Nganhnghe'] = $request->txtNganhnghe;
        $data['Luong'] = $request->txtLuong;
        $data['Hinhthuc'] = $request->txtHinhthuc;
        $data['Capbac'] = $request->txtCapbac;
        $data['Kinhnghiem'] = $request->txtKinhnghiem;
        $data['Ngayhethan'] = $request->txtNgayhethan;
        $data['Phucloi'] = $request->txtPhucloi;
        $data['Mota'] = $request->txtMota;
        $data['Yeucau'] = $request->txtYeucau;
        $data['Quyenloi'] = $request->txtQuyenloi;
        $data['Lydo'] = $request->txtLydo;
        $data['Ngaycapnhat'] = date('Y-m-d');
        $data['Daduyet'] = '0';
        $data['Luottheodoi'] = '0';
        $data['Soluonghoso'] = '0';
        DB::table('job')->insert($data);
        session()->put('messenger','Bạn đã đăng tuyển thành công');
        return redirect('./trang-chu');
    }
    // public function tim_kiem(Request $request)
    // {
    //     $id = session()->get('id');
    //     $jobnoibac = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Luottheodoi DESC LIMIT ?',[6]);
    //     $jobvip = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Soluonghoso DESC LIMIT ?',[6]);
    //     $jobsave = DB::select('SELECT Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,0,6]);
    //     $jobjoin = DB::select('SELECT Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,1,6]);
    //     $company = DB::select('select * from company limit ?', [6]);
    //     $camnan = DB::table('camnan')->get();
    //     // dd($jobsave);
    //     return view('page.search')->with('jobnoibac',$jobnoibac)->with('jobvip',$jobvip)->with('jobsave',$jobsave)->with('jobjoin',$jobjoin)->with('company',$company)->with('camnan',$camnan);
    // }
    public function tim_kiem(Request $request){
        $chucvu = $request->chucvu;
        $dd = $request->diadiem;
        if($chucvu=="")
        {
            if($dd == "")
            {
                session()->put('messenger','Vui lòng nhập chức vụ hoặc địa điểm');
                return redirect('/trang-chu');
            }
            else{
                $db = DB::table('job')->join('company','company.idCompany','=','job.idCompany')->where('Diachi','like','%'.$dd.'%')->get();
                if($db==null || $db == "" || $db == []|| $db ==false)
                {
                    session()->put('messenger','Không có kết quả tìm kiếm phù hợp');
                    return redirect('/trang-chu');
                }
                else{
                    return view('ketquatimkiem')->with('search',$db);
                }
                // dd($db);
            }

        }
        elseif($dd == ""){
            if($chucvu=="")
            {
                session()->put('messenger','Vui lòng nhập chức vụ hoặc địa điểm');
                return redirect('/trang-chu');
            }
            else{
                $db = DB::table('job')->join('company','company.idCompany','=','job.idCompany')->where('Nganhnghe','like','%'.$chucvu.'%')->get();
                // dd($db);
                if($db==null || $db == "")
                {
                    session()->put('messenger','Không có kết quả tìm kiếm phù hợp');
                    return redirect('/trang-chu');
                }
                return view('ketquatimkiem')->with('search',$db);
            }
        }
        else{
            $db = DB::table('job')->join('company','company.idCompany','=','job.idCompany')->where('Diachi','like','%'.$dd.'%')->where('Nganhnghe','like','%'.$chucvu.'%')->get();
            if($db==null || $db == "")
                {
                    session()->put('messenger','Không có kết quả tìm kiếm phù hợp');
                    return redirect('/trang-chu');
                }
            return view('ketquatimkiem')->with('search',$db);
        }
    }
    public function info_job($idJob){
        $info_job = DB::table('Job')->join('company','job.idCompany','=','company.idCompany')->where('idJob','=',$idJob)->get();
        return view('info_job')->with('info_job',$info_job);
    }
    public function like_job($idJob){
        $id = session()->get('id');
        $data = array();
        $data['idUser'] = $id;
        $data['idJob'] = $idJob;
        $data['Trangthai'] = '0';
        if($id == null)
        {
            session()->put('messenger', 'Vui lòng đăng nhập trước');
            return redirect('/login');
        }
        else{
            DB::table('favourite_job')->insert($data);
            session()->put('messenger', 'Bạn đã yêu thích job');
            return redirect('/trang-chu');
        }
    }
    public function join_job($idJob){
        $id = session()->get('id');
        $data = array();
        $data['idUser'] = $id;
        $data['idJob'] = $idJob;
        $data['Trangthai'] = '1';
        if($id == null)
        {
            session()->put('messenger', 'Vui lòng đăng nhập trước');
            return redirect('/login');
        }
        else{
            DB::table('favourite_job')->insert($data);
            session()->put('messenger', 'Bạn đã nộp đơn thành công');
            return redirect('/trang-chu');
        }
    }
}
