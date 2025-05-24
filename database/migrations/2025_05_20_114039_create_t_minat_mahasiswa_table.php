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
        Schema::create('t_minat_mahasiswa', function (Blueprint $table) {
            $table->string('nim');
            $table->unsignedBigInteger('minat_id');
            $table->timestamps();

            $table->primary(['nim', 'minat_id']);

            $table->foreign('nim')->references('nim')->on('m_mahasiswa');
            $table->foreign('minat_id')->references('minat_id')->on('m_minat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_minat_mahasiswa');
    }
};
