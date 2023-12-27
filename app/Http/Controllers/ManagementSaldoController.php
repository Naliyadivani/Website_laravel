<?php

namespace App\Http\Controllers;

use App\Models\saldoCuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ManagementSaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //create
    public function ManagementSaldo()
    {
        $dataSaldo = saldoCuti::all();
        $user = Session::get('user');
        if ($user != null) {
            return view('managementCuti.managementSaldo', compact('dataSaldo'), ['user' => $user]);
        }
        return redirect()->route('loginpage');
    }

    public function readJSON()
    {
        $dataSaldo = saldoCuti::all(); // saldoCuti model
        return response()->json(['status' => 200, 'data' => $dataSaldo], 200);
    }

    // public function searchData(Request $request){
    //     if($request->ajax()){
    //         $dataSaldo=DB::where('nik','like','%',$request->searchData,'%')->get();

    //     }
    // }

    // Get Data Pegawai
    public function searchData(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->input('key'); // Get the search query from the request

            $results = DB::table('saldo_cuti')
                ->select('nik', 'nama') // Adjust columns as needed
                ->where('nik', 'like', "%$data%")
                ->get();

            return response()->json($results);
        }
    }

    //Get Tipe Absen
    // public function getTipeAbsen(Request $request){
    //     //
    // }

    // //pagination 
    // public function indexPagination(){
    //     //
    // }


    public function uploadExcel(Request $request)
    {
        $request->validate([
            'customFile' => 'required|mimes:xlsx,xls',
        ]);

        if ($request->file('customFile')) {
            $file = $request->file('customFile');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName); // Adjust the storage path as needed

            // You can save the file information to the database or perform other actions here
            // Return a response with any necessary data
            return response()->json(['message' => 'File uploaded successfully']);
        } else {
            return response()->json(['message' => 'File not found'], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function readSaldo()
    {
        $modelSaldo = DB::table('saldo_cuti')->get();
        $ds1 = [];
        foreach ($modelSaldo as $y) {
            $ds1[] = $y;
        }
        $dataSaldo = [
            'status' => 200,
            'data' => $ds1
        ];
        return response()->json($dataSaldo, 200);
    }

    public function create()
    {
        return view('managementCuti.managementSaldo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataSaldo = [
            'nik' => $request->input('nik'),
            'tipe_absen_id' => $request->input('tipe_absen_id'),
            'nama_tipe_absen' => $request->input('nama_tipe_absen'),
            'saldo' => $request->input('saldo'),
            'valid_from' => $request->input('valid_from'),
            'valid_to' => $request->input('valid_to'),
            'created_by' => $request->input('created_by')
        ];

        saldoCuti::insert($dataSaldo);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataSaldo = saldoCuti::findOrFail($id);
        return view('edit')->with([
            'dataSaldo' => $dataSaldo
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
        $dataSaldo = saldoCuti::findOrFail($id); // Retrieve the data to edit
        return view('edit', compact('dataSaldo'));
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
        $dataSaldo = [
            'nik' => $request->input('nik'),
            'tipe_absen_id' => $request->input('tipe_absen_id'),
            'nama_tipe_absen' => $request->input('nama_tipe_absen'),
            'saldo' => $request->input('saldo'),
            'valid_from' => $request->input('valid_from'),
            'valid_to' => $request->input('valid_to'),
            'created_by' => $request->input('created_by')
        ];

        saldoCuti::where('id', $id)->update($dataSaldo); // Update the record

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
        $dataSaldo = saldoCuti::findOrFail($id); // Find the data$dataSaldo to delete
        $dataSaldo->delete(); // Delete the data

        return redirect()->route('')->with('success', 'Data deleted successfully');
    }
}
