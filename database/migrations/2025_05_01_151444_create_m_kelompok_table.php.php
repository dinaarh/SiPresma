<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKelompokTable extends Migration
{
    public function up(): void
    {
        Schema::create('m_kelompok', function (Blueprint $table) {
            $table->id('kelompok_id');
            $table->string('nama_kelompok');
            $table->unsignedBigInteger('lomba_id');
            $table->timestamps();

            $table->foreign('lomba_id')->references('lomba_id')->on('m_lomba');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelompok');
    }
};
