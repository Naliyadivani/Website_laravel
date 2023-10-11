<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\daftarApkController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registpage',[RegisterController::class,'indexRegister']);
// // Route::post('/registpage',[RegisterController::class,'store']);

Route::get('/loginpage',[loginController::class,'indexLogin'])->name('loginpage');
Route::post('/actionlogin',[loginController::class,'loginAction'])->name('loginAction');

Route::get('/dashboard',[HomeController::class,'indexHome'])->name('dashboard');//untuk menggunakan route pakai name
// Route::get('actionlogout',[RegisterController::class,'actionlogout'])->name('actionlogout');

Route::get('/daftarAplikasi',[HomeController::class,'indexdaftarAPK'])-> name('daftarAplikasi');
Route::get('/tjsl',[HomeController::class, 'indexTjslPage'])-> name('tjsl');
Route::get('/addLaporan',[HomeController::class, 'indexAddLaporan'])-> name('addLaporan');
Route::get('/pengajuan_laporan',[HomeController::class,'indexTambahLaporan'])->name('pengajuan_laporan');
// Route::get('/master_kegiatan',[HomeController::class,'indexMasterKegiatan'])->name('master_kegiatan');

// Route::get('/indexCrud',[CrudController::class,'index'])->name('indexCrud');

Route::get('/master_kegiatan',[CrudController::class,'index'])->name('master_kegiatan');
Route::get('/read',[CrudController::class,'read']);
Route::get('/readJSON',[CrudController::class,'indexJSON'])->name('readJSON');
Route::get('/create',[CrudController::class,'create']);
Route::post('/store',[CrudController::class,'store']);
Route::get('/show/{id}',[CrudController::class,'show']);
Route::get('/edit/{id}',[CrudController::class,'edit']);
Route::get('/destroy/{id}',[CrudController::class,'delete']);

// Route::get('/test',[daftarApkController::class,'test']);
