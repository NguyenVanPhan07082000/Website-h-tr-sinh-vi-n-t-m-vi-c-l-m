<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyCV extends Controller
{
    public function MyCV($id)
    {
        // $cv = DB::select('SELECT CV FROM cv WHERE idUser = ?', [$id]);
        $myCV = DB::select('SELECT * FROM cv WHERE idUser = ?', [$id]);
        $education = DB::select('SELECT * FROM education WHERE idUser = ?', [$id]);
        $kinhNghiem = DB::select('SELECT * FROM kinhnghiem WHERE idUser = ?', [$id]);
        $kyNang = DB::select('SELECT * FROM kynang WHERE idUser = ?', [$id]);
        $soThich = DB::select('SELECT * FROM sothich WHERE idUser = ?', [$id]);
        $thanhTich = DB::select('SELECT * FROM thanhtich WHERE idUser = ?', [$id]);
        $hoatDong = DB::select('SELECT * FROM hoatdong WHERE idUser = ?', [$id]);
        foreach ($myCV as $key => $value) {
            $cv = $value->CV;
        }
        if ($cv == 1) {
            // return view('cv-1');
            return view('cv-1')->with('myCV', $myCV)->with('education', $education)->with('kinhNghiem', $kinhNghiem)->with('kyNang', $kyNang)->with('soThich', $soThich)->with('thanhTich', $thanhTich)->with('hoatDong', $hoatDong);
        } else if ($cv == 2) {
            // return view('cv-2');
            return view('cv-2')->with('myCV', $myCV)->with('education', $education)->with('kinhNghiem', $kinhNghiem)->with('kyNang', $kyNang)->with('soThich', $soThich)->with('thanhTich', $thanhTich)->with('hoatDong', $hoatDong);
        } else if ($cv == 3) {
            return view('cv-4')->with('myCV', $myCV)->with('education', $education)->with('kinhNghiem', $kinhNghiem)->with('kyNang', $kyNang)->with('soThich', $soThich)->with('thanhTich', $thanhTich)->with('hoatDong', $hoatDong);
        } else {
            return view('cv-5')->with('myCV', $myCV)->with('education', $education)->with('kinhNghiem', $kinhNghiem)->with('kyNang', $kyNang)->with('soThich', $soThich)->with('thanhTich', $thanhTich)->with('hoatDong', $hoatDong);
        }
    }
    public function add_info_uv()
    {
        if (session()->get('id')) {
            $id = session()->get('id');
            $myCV = DB::select('SELECT * FROM cv WHERE idUser = ?', [$id]);
            $education = DB::select('SELECT * FROM education WHERE idUser = ?', [$id]);
            $kinhNghiem = DB::select('SELECT * FROM kinhnghiem WHERE idUser = ?', [$id]);
            $kyNang = DB::select('SELECT * FROM kynang WHERE idUser = ?', [$id]);
            $soThich = DB::select('SELECT * FROM sothich WHERE idUser = ?', [$id]);
            $thanhTich = DB::select('SELECT * FROM thanhtich WHERE idUser = ?', [$id]);
            $hoatDong = DB::select('SELECT * FROM hoatdong WHERE idUser = ?', [$id]);
            if ($myCV) {
                return view('edit_info_uv')->with('myCV', $myCV)->with('education', $education)->with('kinhNghiem', $kinhNghiem)->with('kyNang', $kyNang)->with('soThich', $soThich)->with('thanhTich', $thanhTich)->with('hoatDong', $hoatDong);
            }
            return view('add_info_uv');
        }
        return redirect('/login');
    }
    public function save_ung_vien(Request $request)
    {
        $data = array();
        $data['idUser'] = session()->get('id');
        $data['Hoten'] = $request->txtName;
        $data['Nganhnghe'] = $request->txtNganhnghe;
        $data['Ngaysinh'] = $request->txtNgaysinh;
        $data['Gioitinh'] = $request->txtGioitinh;
        $data['SDT'] = $request->txtSdt;
        $data['Diachi'] = $request->txtDiachi;
        $data['TKMXH'] = $request->txtTaikhoan;
        $data['LinkTKMXH'] = $request->txtLinkTK;
        $data['Email'] = $request->txtEmail;
        $data['Muctieu'] = $request->txtMuctieu;
        $data['CV'] = $request->cv;
        $get_img = $request->file('hinhanh');
        if ($get_img) {
            $ext = $request->hinhanh->extension();
            if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'gif') {
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.', $get_name_img));
                $new_img = $name_img . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();
                $get_img->move('public/fontend/img/cv', $new_img);
                $data['Hinhanh'] = $new_img;
                DB::table('cv')->insert($data);
                foreach ($_POST['txtSothich'] as $key => $value) {
                    $dataSothich = array();
                    $dataSothich['idUser'] = session()->get('id');
                    $dataSothich['tenSoThich'] = $_POST['txtSothich'][$key];
                    DB::table('sothich')->insert($dataSothich);
                }
                foreach ($_POST['txtTenKyNang'] as $key => $value) {
                    $dataKynang = array();
                    $dataKynang['idUser'] = session()->get('id');
                    $dataKynang['tenKyNang'] = $_POST['txtTenKyNang'][$key];
                    $dataKynang['mucDo'] = $_POST['txtMucDo'][$key];
                    DB::table('kynang')->insert($dataKynang);
                }
                foreach ($_POST['txtTentruong'] as $key => $value) {
                    $dataTrinhdo = array();
                    $dataTrinhdo['idUser'] = session()->get('id');
                    $dataTrinhdo['tenTruong'] = $_POST['txtTentruong'][$key];
                    $dataTrinhdo['ngayBatDau'] = $_POST['txtNgayBatDau'][$key];
                    $dataTrinhdo['ngayKetthuc'] = $_POST['txtNgayKetThuc'][$key];
                    $dataTrinhdo['xepLoai'] = $_POST['txtXepLoai'][$key];
                    $dataTrinhdo['diemTB'] = $_POST['txtDiemTB'][$key];
                    $dataTrinhdo['moTa'] = $_POST['txtMota'][$key];
                    DB::table('education')->insert($dataTrinhdo);
                }
                foreach ($_POST['txtTenCTY'] as $key => $value) {
                    $dataKinhnghiem = array();
                    $dataKinhnghiem['idUser'] = session()->get('id');
                    $dataKinhnghiem['tenCTY'] = $_POST['txtTenCTY'][$key];
                    $dataKinhnghiem['tuNgay'] = $_POST['txtNgayBatDau'][$key];
                    $dataKinhnghiem['denNgay'] = $_POST['txtNgayKetThuc'][$key];
                    $dataKinhnghiem['moTa'] = $_POST['txtMota'][$key];
                    DB::table('kinhnghiem')->insert($dataKinhnghiem);
                }
                foreach ($_POST['txtThanhTich'] as $key => $value) {

                    if ($_POST['txtThanhTich']) {
                        $dataThanhTich = array();
                        $dataThanhTich['idUser'] = session()->get('id');
                        $dataThanhTich['thanhTich'] = $_POST['txtThanhTich'][$key];
                        DB::table('thanhtich')->insert($dataThanhTich);
                    }
                }
                foreach ($_POST['txtHoatDong'] as $key => $value) {

                    if ($_POST['txtHoatDong']) {
                        $dataThanhTich = array();
                        $dataThanhTich['idUser'] = session()->get('id');
                        $dataThanhTich['hoatDong'] = $_POST['txtHoatDong'][$key];
                        DB::table('hoatdong')->insert($dataThanhTich);
                    }
                }
                Session()->put('messenger', 'Thêm thành công');
                return redirect('/trang-chu');
            } else {
                Session()->put('messenger', 'File không phải file ảnh');
                return redirect('/add-info-uv');
            }
        } else {
            Session()->put('messenger', 'Ảnh không được trống');
            return redirect('/add-info-uv');
        }
    }
    public function edit_ung_vien(Request $request, $id)
    {
        $data = array();
        $data['idUser'] = session()->get('id');
        $data['Hoten'] = $request->txtName;
        $data['Nganhnghe'] = $request->txtNganhnghe;
        $data['Ngaysinh'] = $request->txtNgaysinh;
        $data['Gioitinh'] = $request->txtGioitinh;
        $data['SDT'] = $request->txtSdt;
        $data['Diachi'] = $request->txtDiachi;
        $data['TKMXH'] = $request->txtTaikhoan;
        $data['LinkTKMXH'] = $request->txtLinkTK;
        $data['Email'] = $request->txtEmail;
        $data['Muctieu'] = $request->txtMuctieu;
        $data['CV'] = $request->cv;
        $get_img = $request->file('hinhanh');
        if ($get_img) {
            $ext = $request->hinhanh->extension();
            if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'gif') {
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.', $get_name_img));
                $new_img = $name_img . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();
                $get_img->move('public/fontend/img/cv', $new_img);
                $data['Hinhanh'] = $new_img;
                DB::table('cv')->where('id', $id)->update($data);
                // foreach ($_POST['txtSothich'] as $sothich => $value) {
                //     $dataSothich = array();
                //     $dataSothich['idUser'] = session()->get('id');
                //     $dataSothich['tenSoThich'] = $_POST['txtSothich'][$sothich];
                //     DB::table('sothich')->where('id', $_POST['txtID'][$sothich])->update($dataSothich);
                // }
                // foreach ($_POST['txtTenKyNang'] as $key => $value) {
                //     $dataKynang = array();
                //     $dataKynang['idUser'] = session()->get('id');
                //     $dataKynang['tenKyNang'] = $_POST['txtTenKyNang'][$key];
                //     $dataKynang['mucDo'] = $_POST['txtMucDo'][$key];
                //     $idKN = $_POST['txtID'][$key];
                //     DB::table('kynang')->where('id', $idKN)->update($dataKynang);
                // }
                // foreach ($_POST['txtTentruong'] as $key => $value) {
                //     $dataTrinhdo = array();
                //     $dataTrinhdo['idUser'] = session()->get('id');
                //     $dataTrinhdo['tenTruong'] = $_POST['txtTentruong'][$key];
                //     $dataTrinhdo['ngayBatDau'] = $_POST['txtNgayBatDau'][$key];
                //     $dataTrinhdo['ngayKetthuc'] = $_POST['txtNgayKetThuc'][$key];
                //     $dataTrinhdo['xepLoai'] = $_POST['txtXepLoai'][$key];
                //     $dataTrinhdo['diemTB'] = $_POST['txtDiemTB'][$key];
                //     $dataTrinhdo['moTa'] = $_POST['txtMota'][$key];
                //     DB::table('education')->where('id', $_POST['txtID'][$key])->update($dataTrinhdo);
                // }
                // foreach ($_POST['txtTenCTY'] as $kinhnghiem => $value) {
                //     $dataKinhnghiem = array();
                //     $dataKinhnghiem['tenCTY'] = $_POST['txtTenCTY'][$kinhnghiem];
                //     $dataKinhnghiem['tuNgay'] = $_POST['txtNgayBatDau'][$kinhnghiem];
                //     $dataKinhnghiem['denNgay'] = $_POST['txtNgayKetThuc'][$kinhnghiem];
                //     $dataKinhnghiem['moTa'] = $_POST['txtMota'][$kinhnghiem];
                //     $idCTY = $_POST['txtID'][$kinhnghiem];
                //     dd($idCTY, $request);
                //     DB::table('kinhnghiem')->where('id', $idCTY)->update($dataKinhnghiem);
                // }
                // foreach ($_POST['txtThanhTich'] as $key => $value) {

                //     if ($_POST['txtThanhTich']) {
                //         $dataThanhTich = array();
                //         $dataThanhTich['idUser'] = session()->get('id');
                //         $dataThanhTich['thanhTich'] = $_POST['txtThanhTich'][$key];
                //         DB::table('thanhtich')->where('id', $_POST['txtID'][$key])->update($dataThanhTich);
                //     }
                // }
                // foreach ($_POST['txtHoatDong'] as $key => $value) {

                //     if ($_POST['txtHoatDong']) {
                //         $dataThanhTich = array();
                //         $dataThanhTich['idUser'] = session()->get('id');
                //         $dataThanhTich['hoatDong'] = $_POST['txtHoatDong'][$key];
                //         DB::table('hoatdong')->where('id', $_POST['txtID'][$key])->update($dataThanhTich);
                //     }
                // }
                Session()->put('messenger', 'Chỉnh sửa thành công');
                return redirect('/trang-chu');
            } else {
                Session()->put('messenger', 'File không phải file ảnh');
                return redirect('/add-info-uv');
            }
        } else {
            Session()->put('messenger', 'Ảnh không được trống');
            return redirect('/add-info-uv');
        }
    }
}