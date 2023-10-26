<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahLaporanController extends Controller
{
    public function indexAddLaporan(){
        return view('daftarAplikasi.addLaporan');
    }
    public function indexTambahLaporan(){
        return view('daftarAplikasi.laporanKegiatan');
    }

    public function indexKoordinatorKegiatan(){
        return view('daftarAplikasi.koordinatorKegiatan');
    }
    public function modalTambahPeserta(){
        return view('daftarAplikasi.koordinatorKegiatan');
    }
}
