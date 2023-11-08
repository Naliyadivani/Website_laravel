<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldoCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_cuti', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_absen_id');
            $table->string('nama_tipe_absen');
            $table->string('nik');
            $table->integer('saldo');
            $table->date('valid_from');
            $table->date('valid_to');
            $table->string('tipe_absen');
            $table->integer('periode');
            $table->string('created_by');
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
        Schema::dropIfExists('saldo_cuti');
    }
}
