<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDosenPembimbingTable extends Migration
{
    public function up()
    {
        Schema::create('m_dosen_pembimbing', function (Blueprint $table) {
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('bidang_keahlian');
            $table->string('kompetensi');
            $table->string('minat');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('m_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen_pembimbing');
    }
}
