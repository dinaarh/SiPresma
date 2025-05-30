<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_mahasiswa', function (Blueprint $table) {
            $table->string('nim', 10)->primary();
            $table->string('nama');
            $table->string('lokasi_preferensi');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('prodi_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('m_users');
            $table->foreign('prodi_id')->references('prodi_id')->on('m_program_studi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_mahasiswa');
    }
}
