<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CalibrationController extends Controller
{
    public function indexKalibrasi()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('Kalibrasi.dashboardCalibration', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }
    public function PerformanceKalibrasi()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('Kalibrasi.performanceCalibration', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }
}
