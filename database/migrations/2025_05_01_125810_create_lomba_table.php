<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLombaTable extends Migration
{
    public function up()
    {
        Schema::create('lomba', function (Blueprint $table) {
            $table->id('lomba_id');
            $table->string('lomba_nama');
            $table->string('lomba_kategori');
            $table->string('lomba_penyelenggara');
            $table->string('lomba_lokasi');
            $table->string('lomba_tingkat');
            $table->text('lomba_persyaratan');
            $table->date('lomba_mulai_pendaftaran');
            $table->date('lomba_akhir_pendaftaran');
            $table->string('lomba_link_registrasi');
            $table->date('lomba_mulai_pelaksanaan');
            $table->date('lomba_selesai_pelaksanaan');
            $table->unsignedBigInteger('periode_id');
            $table->string('lomba_bidang_keahlian');
            $table->timestamps();

            $table->foreign('periode_id')->references('periode_id')->on('periode');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lomba');
    }
}
