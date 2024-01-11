<?php

namespace App\Http\Controllers;

use App\Models\formAjukanAbsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Storage;
use Storage;


class FormPengajuanAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PengajuanAbsen()
    {
        $formAbsen = formAjukanAbsen::all();
        $user = Session::get('user');
        if ($user != null) {
            return view('managementCuti.pengajuanAbsen', compact('formAbsen'), ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    public function FormAbsen()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('managementCuti.formAjukanAbsen', ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    public function readJSON()
    {
        $formAbsen = formAjukanAbsen::all(); // saldoCuti model
        return response()->json(['status' => 200, 'data' => $formAbsen], 200);
    }


    // public function fromAjukanAbsen(){
    //     return view('managementCuti.formAjukanAbsen');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function readFormAbsen()
    {
        $modelAbsen = DB::table('formAjukanAbsen')->get();
        $dFA = [];
        foreach ($modelAbsen as $y) {
            $dFA[] = $y;
        }
        $formAbsen = [
            'status' => 200,
            'data' => $dFA
        ];
        return response()->json($formAbsen, 200);
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
            'nik' => $request->input('nik'),
            'deskripsi' => $request->input('deskripsi'),
            'mulai_absen' => $request->input('mulai_absen'),
            'akhir_absen' => $request->input('akhir_absen'),
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
            'formAbsen' => $formAbsen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function edit(Request $request, $id_absence == null)
    // {
    //     //varibel
    //     // if(isset $id_absence)
    //     return view('managementCuti.formAjukanAbsen', compact('id_absence'));
    // }

    public function edit($id_absen)
    {
        
        $formAbsen = formAjukanAbsen::findOrFail($id);
        return view('managementCuti.formAjukanAbsen',compact('formAbsen'));

        // $user = Session::get('user');
        // if ($user != null) {
        //     return view('managementCuti.formAjukanAbsen', ['user' => $user]);
        // }
        // return redirect()->route('loginpage');
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
            'nik' => $request->input('nik'),
            'deskripsi' => $request->input('deskripsi'),
            'mulai_absen' => $request->input('mulai_absen'),
            'akhir_absen' => $request->input('akhir_absen'),
            'created_by' => $request->input('created_by')
        ];
        formAjukanAbsen::where('id', $id)->update($formAbsen);
        return redirect()->route('')->with('success', 'Data updated successfully');
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

    // public function uploadFile(Request $request)
    // {

    //     $gcs = Storage::disk('gcs');
    //     $data = [];

    //     if ($request->hasFile('file')) {
    //         $files = $request->file('file');
    //         foreach ($files as $file) {
    //             $filename = date('dmY_His').' - '.$file->getClientOriginalName();
    //             $path = 'CutiKaryawan/'.date('Y').'/';
    //             $uploadFile = $gcs->putFileAs($path, $file, $filename);
    //             $gcs->setVisibility($uploadFile, 'public');
    //             $url = $gcs->url($path.$filename);
    //             // Store the file in Google Cloud Storage
    //             $data[] = [
    //                 'url'=> $url,
    //                 'name' => $filename 
    //             ];
    //     }

    //     return response()->json([
    //         'status' => 200,
    //         'success' => 'Success',
    //         'data' => $data
    //     ]);
    // }}

    public function uploadFile(Request $request)
    {
        $gcs = Storage::disk('gcs');
        $data = [];

        if ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                // Use unique name to prevent overwriting files with same names
                $filename = date('dmY_His') . '_' . uniqid() . '_' . $file->getClientOriginalName();
                $path = 'CutiKaryawan/' . date('Y') . '/';
                $uploadFile = $gcs->putFileAs($path, $file, $filename);
                $extension = '.'.pathinfo($filename,PATHINFO_EXTENSION);
                $original_name = $file->getClientOriginalName();
                $size = $file->getSize();
 
                if ($uploadFile !== false) {
                    $gcs->setVisibility($path . $filename, 'public');
                    $url = $gcs->url($path . $filename);
                    $data[] = [
                        'url' => $url,
                        'filename' => $original_name,
                        'extension'=> $extension
                        // ,
                        // 'original_name'=> $original_name,
                        // 'size' => $size
                    ];
                } else {
                    // Handle the case when the file upload fails
                    return response()->json([
                        'status' => 500,
                        'error' => 'File upload failed'
                    ]);
                }
            }
        } else {
            // Handle the case when no file is uploaded
            return response()->json([
                'status' => 400,
                'error' => 'No file uploaded'
            ]);
        }

        return response()->json([
            'status' => 200,
            'success' => 'Success',
            'info' => 'Files uploaded successfully',
            'data' => $data
        ]);
    }
}
