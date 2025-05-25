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
        Schema::create('t_minat_lomba', function (Blueprint $table) {
            $table->unsignedBigInteger('lomba_id');
            $table->unsignedBigInteger('minat_id');
            $table->timestamps();

            $table->primary(['lomba_id', 'minat_id']);

            $table->foreign('lomba_id')->references('lomba_id')->on('m_lomba');
            $table->foreign('minat_id')->references('minat_id')->on('m_minat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_minat_lomba');
    }
};
