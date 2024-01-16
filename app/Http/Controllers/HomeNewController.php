<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeNewController extends Controller
{
    public function index()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('dashboard.homeNew', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }
    public function indexdaftarAPK()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.daftarApk', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }
    public function indexTjslPage()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.tjslPage', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    // modul KALIBRASI
    // public function indexKalibrasi()
    // {
    //     $user = Session::get('user');
    //     if ($user != null) {
    //         return view('Kalibrasi.dashboardCalibration', ['user' => $user]);
    //     }
    //     return redirect()->route('loginpage');
    // }
}
