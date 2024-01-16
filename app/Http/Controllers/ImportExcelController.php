<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ImportExcelController extends Controller
{
    public function import(Request $request) 
    {
        $file = $request->file('excel_file');

        // Example: convert Excel data to an array
        $data = Excel::toArray([], $file);

        // Process $data as needed, e.g., convert it to JSON
        $jsonData = json_encode($data);

        // Send data to an endpoint using jQuery or any HTTP client

        // return redirect('/import')->with('success', 'Excel imported successfully');
        return response()->json(['data' => $jsonData, 'message' => 'Excel imported successfully']);
    }
}
