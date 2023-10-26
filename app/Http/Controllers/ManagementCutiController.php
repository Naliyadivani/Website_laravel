<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementCutiController extends Controller
{
    public function IndexCuti(){
        return view('managementCuti.dashboardCuti');
    }

    public function PengajuanCuti(){
        return view('managementCuti.pengajuanCuti');
    }
}
