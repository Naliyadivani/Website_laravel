<?php

namespace App\Http\Controllers;

use App\Models\formAjukanAbsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('managementCuti.absenceApprover',compact('absenceApprover'));
    }

    public function readJSON()
    {
        $absenceApprover = formAjukanAbsen::all();
        return response()->json(['status'=>200,'data'=>$absenceApprover],200);
    }


    public function readAbsenApprover()
    {
        $ModelAbsenceApprover = DB::table('pengajuan_absen')->get();
        $dAA=[];
        foreach($ModelAbsenceApprover as $y){
            $dAA[]=$y;
        }
        $absenceApprover= ['status'=>200,
        'data'=>$dAA
        ];
        return response()->json($absenceApprover,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
