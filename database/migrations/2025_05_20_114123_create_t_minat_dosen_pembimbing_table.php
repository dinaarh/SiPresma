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
        Schema::create('t_minat_dosen_pembimbing', function (Blueprint $table) {
            $table->string('nip');
            $table->unsignedBigInteger('minat_id');

            $table->primary(['nip', 'minat_id']);

            $table->foreign('nip')->references('nip')->on('m_dosen_pembimbing');
            $table->foreign('minat_id')->references('minat_id')->on('m_minat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_minat_dosen_pembimbing');
    }
};
