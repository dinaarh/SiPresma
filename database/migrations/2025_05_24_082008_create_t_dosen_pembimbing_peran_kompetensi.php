<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_dosen_pembimbing_peran_kompetensi', function (Blueprint $table) {
            $table->unsignedBigInteger('peran_id');
            $table->unsignedBigInteger('kompetensi_id');
            $table->timestamps();

            $table->primary(['peran_id', 'kompetensi_id']);
            $table->foreign('peran_id')->references('peran_id')->on('t_dosen_pembimbing_peran');
            $table->foreign('kompetensi_id')->references('kompetensi_id')->on('m_kompetensi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_dosen_pembimbing_peran_kompetensi');
    }
};
