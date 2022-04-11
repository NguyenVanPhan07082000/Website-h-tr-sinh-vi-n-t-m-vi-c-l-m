<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminContrller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Trang chủ
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu',[HomeController::class, 'index']);
Route::post('/tim-kiem',[HomeController::class, 'tim_kiem']);
// Route::post('/ket-qua-tim-kiem',[HomeController::class, 'ket-qua']);
//Trang Login
Route::get('/login',[LoginController::class, 'index']);
Route::get('/logout',[LoginController::class, 'logout']);
Route::post('/login-success',[LoginController::class, 'login']);
Route::get('/doi-mat-khau',[LoginController::class, 'change_pass']);
Route::post('/doi-mat-khau/luu-mat-khau',[LoginController::class, 'save_matkhau']);

//Thông tin người dung
Route::get('/infomation',[LoginController::class, 'infomation']);
Route::get('/add-info-sv',[LoginController::class, 'add_info_sv']);
Route::get('/create-account',[LoginController::class, 'add_user']);
Route::post('/save-account',[LoginController::class, 'save_user']);
Route::get('/question',[LoginController::class, 'question']);
Route::get('/ung-vien',[LoginController::class, 'ung_vien']);
Route::get('/tuyen-dung',[LoginController::class, 'tuyen_dung']);
Route::post('/save-ung-vien',[LoginController::class, 'save_ung_vien']);
Route::post('/save-tuyen-dung',[LoginController::class, 'save_tuyen_dung']);
Route::get('/profile',[LoginController::class, 'profile']);
Route::get('/profile/{idUser}',[LoginController::class, 'profile_id']);
Route::get('/info-job/{idJob}',[HomeController::class, 'info_job']);
Route::get('/like-job/{idJob}',[HomeController::class, 'like_job']);
Route::get('/join-job/{idJob}',[HomeController::class, 'join_job']);
Route::get('/profile_td/{idCompany}',[LoginController::class, 'profile_td']);


// Trang Admin
Route::get('/admin',[AdminContrller::class, 'index']);
//Việc làm
Route::get('/admin/tat-ca-viec-lam',[AdminContrller::class, 'index']);
Route::get('/admin/viec-lam-cho-duyet',[AdminContrller::class, 'job_wait']);
Route::get('/admin/viec-lam-het-han',[AdminContrller::class, 'job_end']);
Route::get('/admin/delete-job/{idJob}',[AdminContrller::class, 'delete_job']);
Route::get('/admin/duyet-job/{idJob}',[AdminContrller::class, 'duyet_job']);
//quản lý admin
Route::get('/admin/them-admin',[AdminContrller::class, 'add_Admin']);
Route::post('/admin/save-admin',[AdminContrller::class, 'save_Admin']);
Route::get('/admin/tat-ca-admin',[AdminContrller::class, 'all_admin']);
Route::get('/admin/edit-admin/{idAdmin}',[AdminContrller::class, 'edit_admin']);
Route::post('/admin/update-admin/{idAdmin}',[AdminContrller::class, 'update_admin']);
Route::get('/admin/delete-admin/{idAdmin}',[AdminContrller::class, 'delete_admin']);
//cẩm nang
Route::get('/admin/tat-ca-cam-nang',[AdminContrller::class, 'all_camnang']);
Route::get('/admin/them-cam-nang',[AdminContrller::class, 'add_Camnang']);
Route::post('/admin/save-camnang',[AdminContrller::class, 'save_Camnang']);
Route::get('/admin/edit-camnang/{idCamnang}',[AdminContrller::class, 'edit_camnang']);
Route::post('/admin/update-camnang/{idCamnang}',[AdminContrller::class, 'update_camnang']);
Route::get('/admin/delete-camnang/{idCamnang}',[AdminContrller::class, 'delete_camnang']);
//quảng cáo
Route::get('/admin/tat-ca-quang-cao',[AdminContrller::class, 'all_quangcao']);
Route::get('/admin/them-quang-cao',[AdminContrller::class, 'add_quangcao']);
Route::post('/admin/save-quangcao',[AdminContrller::class, 'save_Quangcao']);
Route::get('/admin/edit-quangcao/{idQuangcao}',[AdminContrller::class, 'edit_quangcao']);
Route::post('/admin/update-quangcao/{idQuangcao}',[AdminContrller::class, 'update_quangcao']);
Route::get('/admin/delete-quangcao/{idQuangcao}',[AdminContrller::class, 'delete_quangcao']);
//font end
Route::get('/viec-lam-moi-nhat',[HomeController::class, 'new_job']);
Route::get('/tat-ca-viec-lam',[HomeController::class, 'all_job']);
Route::get('/tim-ung-vien',[HomeController::class, 'timungvien']);
Route::get('/dang-tuyen',[HomeController::class, 'dang_tuyen']);
Route::post('/save-dang-tuyen',[HomeController::class, 'save_dang_tuyen']);






