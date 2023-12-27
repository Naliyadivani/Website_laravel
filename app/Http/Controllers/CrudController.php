<?php

namespace App\Http\Controllers;

use App\Models\M_Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

// Controller untuk halaman Master Kegiatan
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function indexMasterKegiatan(){
    //     return view('daftarAplikasi.masterKegiatan');
    // }

    public function index()
    {
        $data = M_Crud::all();
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.masterKegiatan', compact('data'), ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    public function indexJSON()
    {
        $data = M_Crud::all(); // M_Crud model
        return response()->json(['status' => 200, 'data' => $data], 200);
    }

    public function read()
    {
        // $response = Http::post('10.9.12.55:9096/listKegiatan');
        // $data = $response->json();

        // return view('daftarAplikasi.read')->with(['data' => $data]);

        $model = DB::table('kegiatan')->get();
        $data1 = [];
        foreach ($model as $x) {
            $data1[] = $x;
        }
        $data = [
            'status' => 200,
            'data' => $data1
        ];
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Session::get('user');
        if ($user != null) {
            return view('daftarAplikasi.masterKegiatan', compact('data'), ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Crud::findOrFail($id); //mencari string id
        return view('edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = [
            'namaKegiatan' => $request->input('namaKegiatan'),
            'descKegiatan' => $request->input('descKegiatan')
        ];

        M_Crud::insert($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = M_Crud::findOrFail($id); // Retrieve the data to edit
        $user = Session::get('user');
        if ($user != null) {
            return view('edit', compact('data'), ['user' => $user]);
        }
        return redirect()->route('loginpage');
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
        $data = [
            'namaKegiatan' => $request->input('namaKegiatan'),
            'descKegiatan' => $request->input('descKegiatan')
        ];

        M_Crud::where('id', $id)->update($data); // Update the record

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
        $data = M_Crud::findOrFail($id); // Find the data to delete
        $data->delete(); // Delete the data

        return redirect()->route('')->with('success', 'Data deleted successfully');
    }
}
