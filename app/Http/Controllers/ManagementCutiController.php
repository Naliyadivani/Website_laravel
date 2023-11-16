<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementCutiController extends Controller
{
    public function IndexAbsen(){
        return view('managementCuti.dashboardAbsen');
    }

    // public function PengajuanAbsen(){
    //     return view('managementCuti.pengajuanAbsen');
    // }
    
}
