<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saldoCuti extends Model
{
    use HasFactory;
    protected $table = 'saldo_cuti';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik','tipe_cuti_id','saldo','valid_from','valid_to','created_by',
    ];
    protected $hidden;
}
