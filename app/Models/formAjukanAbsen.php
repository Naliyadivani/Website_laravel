<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formAjukanAbsen extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_absen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'is_pengajuan_absen','nik','comp_code','tipe_absen_id',
        'deskripsi','mulai_absen','akhir_absen','tgl_pengajuan',
        'status','created_by','keterangan','periode','approved_by',
        'jumlah_hari_kalender','jumlah_hari_kerja',
    ];
    protected $hidden;
}
