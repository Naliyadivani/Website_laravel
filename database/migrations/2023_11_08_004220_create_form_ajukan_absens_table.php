<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAjukanAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_absen', function (Blueprint $table) {
            $table->id();
            $table->string('id_pengajuan_absen');
            $table->integer('nik');
            $table->string('comp_code');
            $table->string('tipe_absen_id');
            $table->string('deskripsi');
            $table->date('mulai_absen');
            $table->date('akhir_absen');
            $table->date('tgl_pengajuan');
            $table->string('status');
            $table->string('created_by');
            $table->string('keterangan');
            $table->string('periode');
            $table->string('approved_by');
            $table->integer('jumlah_hari_kalender');
            $table->integer('jumlah_hari_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_absen');
    }
}
