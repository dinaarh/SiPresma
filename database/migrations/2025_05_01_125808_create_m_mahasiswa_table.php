<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('m_mahasiswa', function (Blueprint $table) {
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('bidang_keahlian');
            $table->string('kompetensi');
            $table->string('minat');
            $table->string('lokasi_preferensi');
            $table->string('foto_profil_url');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('periode_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('m_users');
            $table->foreign('prodi_id')->references('prodi_id')->on('m_program_studi');
            $table->foreign('periode_id')->references('periode_id')->on('m_periode');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
