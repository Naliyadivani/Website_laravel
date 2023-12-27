<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TambahLaporanController extends Controller
{
    public function indexAddLaporan()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.addLaporan', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }
    public function indexTambahLaporan()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.laporanKegiatan', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    public function indexKoordinatorKegiatan()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.koordinatorKegiatan', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }
    public function modalTambahPeserta()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.koordinatorKegiatan', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }
}
