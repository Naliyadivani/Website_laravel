<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagementCutiController extends Controller
{
    public function IndexAbsen()
    {
        $user = Session::get('user');
        // var_dump($user);
        // die();
        if ($user != null) {
            return view('managementCuti.dashboardAbsen', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    // public function PengajuanAbsen(){
    //     return view('managementCuti.pengajuanAbsen');
    // }

}
