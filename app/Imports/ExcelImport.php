<?php

namespace App\Imports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        use Importable;

        return new Excel([
            'nik'     => $row[1],
            'tipe_absen'    => $row[2], 
            'saldo' => $row[3],
            'valid_from' => $row[4],
            'valid_to' => $row[5],
            'max_hutang' => $row[6],
            'valid_from_hutang' => $row[7],
        ]);
    }
}
