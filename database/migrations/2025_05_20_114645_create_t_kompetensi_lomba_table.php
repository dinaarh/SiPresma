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
        Schema::create('t_kompetensi_lomba', function (Blueprint $table) {
            $table->unsignedBigInteger('lomba_id');
            $table->unsignedBigInteger('kompetensi_id');
            $table->timestamps();

            $table->primary(['lomba_id', 'kompetensi_id']);

            $table->foreign('lomba_id')->references('lomba_id')->on('m_lomba');
            $table->foreign('kompetensi_id')->references('kompetensi_id')->on('m_kompetensi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_kompetensi_lomba');
    }
};
