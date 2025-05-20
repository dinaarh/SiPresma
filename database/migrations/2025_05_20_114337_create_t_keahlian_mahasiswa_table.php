<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_keahlian_mahasiswa', function (Blueprint $table) {
            $table->string('nim');
            $table->unsignedBigInteger('bidang_keahlian_id');

            $table->primary(['nim', 'bidang_keahlian_id']);

            $table->foreign('nim')->references('nim')->on('m_mahasiswa');
            $table->foreign('bidang_keahlian_id')->references('bidang_keahlian_id')->on('m_bidang_keahlian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_keahlian_mahasiswa');
    }
};
