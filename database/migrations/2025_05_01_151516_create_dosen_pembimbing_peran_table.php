<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosen_pembimbing_peran', function (Blueprint $table) {
            $table->id('peran_id');
            $table->string('nip');
            $table->unsignedBigInteger('kelompok_id');
            $table->string('nama_peran');
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('dosen_pembimbing');
            $table->foreign('kelompok_id')->references('kelompok_id')->on('kelompok');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosen_pembimbing_peran');
    }
};
