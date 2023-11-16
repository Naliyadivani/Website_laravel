<?php

namespace App\Http\Controllers;

use App\Models\formAjukanAbsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormPengajuanAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PengajuanAbsen(){
        $formAbsen = formAjukanAbsen::all();
        return view('managementCuti.pengajuanAbsen',compact('formAbsen'));
    }

    public function FormAbsen(){
        return view('managementCuti.formAjukanAbsen');
    }

    public function readJSON(){
        $formAbsen = formAjukanAbsen::all(); // saldoCuti model
        return response()->json(['status'=>200,'data'=>$formAbsen],200);
    }

    
    // public function fromAjukanAbsen(){
    //     return view('managementCuti.formAjukanAbsen');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function readFormAbsen(){
        $modelAbsen = DB::table('formAjukanAbsen')->get();
        $dFA=[];
        foreach($modelAbsen as $y){
            $dFA[]=$y;
        }
        $formAbsen=['status'=>200,
        'data'=>$dFA
        ];
        return response()->json($formAbsen,200);
    }
    
    public function create()
    {
        return view('managementCuti.formAjukanAbsen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formAbsen = [
            'nik' =>$request->input('nik'),
            'deskripsi' =>$request->input('deskripsi'),
            'mulai_absen' =>$request->input('mulai_absen'),
            'akhir_absen' =>$request->input('akhir_absen'),
            'created_by' => $request->input('created_by')
        ];
        formAjukanAbsen::insert($formAbsen);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formAbsen = formAjukanAbsen::findOrFail($id);
        return view('edit')->with([
            'formAbsen'=>$formAbsen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formAbsen = formAjukanAbsen::findOrFail($id);
        return view('edit',compact('formAbsen'));
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
        $formAbsen = [
            'nik' =>$request->input('nik'),
            'deskripsi' =>$request->input('deskripsi'),
            'mulai_absen' =>$request->input('mulai_absen'),
            'akhir_absen' =>$request->input('akhir_absen'),
            'created_by' => $request->input('created_by')
        ];
        formAjukanAbsen::where('id',$id)->update($formAbsen);
        return redirect()->route('')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formAbsen = formAjukanAbsen::findOrFail($id);
        $formAbsen->delete();

        return redirect()->route('')->with('success', 'Data deleted Successfully');
    }
}
