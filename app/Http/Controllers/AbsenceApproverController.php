<?php

namespace App\Http\Controllers;

use App\Models\formAjukanAbsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AbsenceApproverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absenceApprover = formAjukanAbsen::all();
        $user = Session::get('user');
        if ($user != null) {
            return view('managementCuti.absenceApprover', compact('absenceApprover'), ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    public function readJSON()
    {
        $absenceApprover = formAjukanAbsen::all();
        return response()->json(['status' => 200, 'data' => $absenceApprover], 200);
    }


    public function readAbsenApprover()
    {
        $ModelAbsenceApprover = DB::table('pengajuan_absen')->get();
        $dAA = [];
        foreach ($ModelAbsenceApprover as $y) {
            $dAA[] = $y;
        }
        $absenceApprover = [
            'status' => 200,
            'data' => $dAA
        ];
        return response()->json($absenceApprover, 200);
    }
}
