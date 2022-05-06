<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyCV extends Controller
{
    public function cv1(){
        // $id = session()->get('id');
        // $jobnoibac = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Luottheodoi DESC LIMIT ?',[6]);
        // $jobvip = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Soluonghoso DESC LIMIT ?',[6]);
        // $jobsave = DB::select('SELECT job.idJob,Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,0,6]);
        // $jobjoin = DB::select('SELECT job.idJob,Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,1,6]);
        // $company = DB::select('select * from company limit ?', [6]);
        // $camnan = DB::table('camnan')->get();
        // dd($jobsave);
        // return view('page.home')->with('jobnoibac',$jobnoibac)->with('jobvip',$jobvip)->with('jobsave',$jobsave)->with('jobjoin',$jobjoin)->with('company',$company)->with('camnan',$camnan);
        return view('cv-1');
    }
    public function cv2(){
        // $id = session()->get('id');
        // $jobnoibac = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Luottheodoi DESC LIMIT ?',[6]);
        // $jobvip = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Soluonghoso DESC LIMIT ?',[6]);
        // $jobsave = DB::select('SELECT job.idJob,Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,0,6]);
        // $jobjoin = DB::select('SELECT job.idJob,Tencongty,cp.Hinhanh,Nganhnghe,Luong,Quyenloi FROM company AS cp,favourite_job AS fj,job WHERE cp.idCompany = job.idCompany AND fj.idJob = job.idJob AND idUser = ? AND fj.Trangthai = ? LIMIT ?', [$id,1,6]);
        // $company = DB::select('select * from company limit ?', [6]);
        // $camnan = DB::table('camnan')->get();
        // dd($jobsave);
        // return view('page.home')->with('jobnoibac',$jobnoibac)->with('jobvip',$jobvip)->with('jobsave',$jobsave)->with('jobjoin',$jobjoin)->with('company',$company)->with('camnan',$camnan);
        return view('cv-2');
    }
    public function cv3(){
        return view('cv-3');
    }
    public function cv4(){
        return view('cv-4');
    }
    public function cv5(){
        return view('cv-5');
    }
}
