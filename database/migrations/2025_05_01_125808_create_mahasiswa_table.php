<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('bidang_keahlian');
            $table->string('kompetensi');
            $table->string('minat');
            $table->string('lokasi_preferensi');
            $table->string('foto_profil_url');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('periode_id');
            $table->timestamps();

            $table->foreign('prodi_id')->references('prodi_id')->on('program_studi');
            $table->foreign('periode_id')->references('periode_id')->on('periode');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
