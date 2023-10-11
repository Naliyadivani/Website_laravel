<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth'); // Middleware auth akan memastikan hanya pengguna yang sudah login yang dapat mengakses halaman ini.
    // }

    public function indexHome()
    {
        
        return view('dashboard.home'); // Nama view home mengacu pada file blade yang akan menampilkan halaman utama.
    }

    public function indexdaftarAPK()
    {
        return view('daftarAplikasi.daftarApk');
    }

    // public function backHome() 
    // {
    //     return redirect()->action([HomeController::class, 'indexHome']);   
    // }
    public function indexTjslPage(){
        return view('daftarAplikasi.tjslPage');
    }

    public function indexAddLaporan(){
        return view('daftarAplikasi.addLaporan');
    }

    public function indexTambahLaporan(){
        return view('daftarAplikasi.laporanKegiatan');
    }

    public function indexMasterKegiatan(){
        return view('daftarAplikasi.masterKegiatan');
    }
    
}
