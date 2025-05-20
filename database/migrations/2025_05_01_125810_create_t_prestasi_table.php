<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPrestasiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_prestasi', function (Blueprint $table) {
            $table->id('prestasi_id');
            $table->string('prestasi_juara');
            $table->string('prestasi_surat_tugas_url');
            $table->string('prestasi_poster_url');
            $table->string('prestasi_foto_juara_url');
            $table->string('prestasi_proposal_url');
            $table->string('prestasi_sertifikat_url');
            $table->enum('prestasi_status', ['Disetujui', 'Ditolak', 'Pending']);
            $table->text('prestasi_catatan')->nullable();
            $table->unsignedBigInteger('lomba_id');
            $table->timestamp('validated_at')->nullable();
            $table->timestamps();

            $table->foreign('lomba_id')->references('lomba_id')->on('m_lomba');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_prestasi');
    }
}
