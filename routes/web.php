<?php

use App\Http\Controllers\AbsenceApproverController;
use App\Models\KoordinatorKegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\daftarApkController;
use App\Http\Controllers\FormPengajuanAbsenController;
use App\Http\Controllers\TambahLaporanController;
use App\Http\Controllers\KoordinatorKegiatanController;
use App\Http\Controllers\ManagementCutiController;
use App\Http\Controllers\ManagementSaldoController;

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

// Route::get('/', function () {
//     return view('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/home');
});

// });
// Route::get('/registpage',[App\Http\Controllers\Auth\RegisterController::class,'indexRegister']);
// // // Route::post('/registpage',[RegisterController::class,'store']);

Route::get('/loginpage',[loginController::class,'indexLogin'])->name('loginpage');
Route::post('/actionlogin',[loginController::class,'loginAction'])->name('loginAction')->middleware('auth');

// //halaman utama
//untuk menggunakan route pakai name
Route::get('/dashboard',[HomeController::class,'indexHome'])->name('dashboard');

// //menu di daftar aplikasi
Route::get('/daftarAplikasi',[HomeController::class,'indexdaftarAPK'])-> name('daftarAplikasi');
Route::get('/tjsl',[HomeController::class, 'indexTjslPage'])-> name('tjsl');

// //tampilan tabel tambah laporan 
Route::get('/addLaporan',[TambahLaporanController::class, 'indexAddLaporan'])-> name('addLaporan');
//tambilan ketika klik button Tambah laporan, halaman untuk pengajuan laporan
Route::get('/pengajuan_laporan',[TambahLaporanController::class,'indexTambahLaporan'])->name('pengajuan_laporan');
// ketika pilih tipe kegiatan = Group, klik button tambah koordinator, mengarah ke halaman tambah koordinator kegiatan di url 'koordinator_kegiatan'
Route::get('/koordinator_kegiatan',[TambahLaporanController::class,'indexKoordinatorKegiatan'])->name('koordinator_kegiatan');

// //crud master kegiatan
Route::get('/master_kegiatan',[CrudController::class,'index'])->name('master_kegiatan');
Route::get('/read',[CrudController::class,'read']);
Route::get('/readJSON',[CrudController::class,'indexJSON'])->name('readJSON');
Route::get('/create',[CrudController::class,'create']);
Route::post('/store',[CrudController::class,'store']);
Route::get('/show/{id}',[CrudController::class,'show']);
Route::get('/edit/{id}',[CrudController::class,'edit']);
Route::get('/destroy/{id}',[CrudController::class,'delete']);

// Menu Management Cuti
Route::get('/dashboard_absen',[ManagementCutiController::class,'IndexAbsen'])->name('dashboard_absen');
Route::get('/pengajuan_absen',[FormPengajuanAbsenController ::class,'PengajuanAbsen'])->name('pengajuan_absen');

//Form pengajuan Cuti
Route::get('/form_pengajuan_absen',[FormPengajuanAbsenController::class,'FormAbsen'])->name('form_pengajuan_absen');
Route::get('/readFormAbsen',[FormPengajuanAbsenController::class,'readFormAbsen']);
Route::get('/read_JSON_form_absen',[FormPengajuanAbsenController::class,'readJSON'])->name('read_JSON_form_absen');
Route::get('/create',[FormPengajuanAbsenController::class,'create']);
Route::post('/store',[FormPengajuanAbsenController::class,'store']);
Route::get('/show{id}',[FormPengajuanAbsenController::class,'show']);
Route::get('/edit{id}',[FormPengajuanAbsenController::class,'edit']);
Route::get('/destroy{id}',[FormPengajuanAbsenController::class,'delete']);

// Management Saldo Cuti
Route::get('/management_saldo',[ManagementSaldoController::class,'ManagementSaldo'])->name('management_saldo');
Route::get('/readSaldo',[ManagementSaldoController::class,'readSaldo']);
Route::get('/readJSON',[ManagementSaldoController::class,'readJSON'])->name('readJSON');
Route::get('/create',[ManagementSaldoController::class,'create']);
Route::post('/store',[ManagementSaldoController::class,'store']);
Route::get('/show{id}',[ManagementSaldoController::class,'show']);
Route::get('/edit{id}',[ManagementSaldoController::class,'edit']);
Route::get('/destroy{id}',[ManagementSaldoController::class,'delete']);

//show search karyawan
Route::get('/searchData',[ManagementSaldoController::class,'searchData']);

//Upload excel file menu management saldo
Route::get('/upload',[ManagementSaldoController::class,'uploadExcel']);

// Menu Absence Approver
Route::get('/absence_approver',[AbsenceApproverController::class,'Index'])->name('absence_approver');
