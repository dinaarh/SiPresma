<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenPembimbingTable extends Migration
{
    public function up()
    {
        Schema::create('dosen_pembimbing', function (Blueprint $table) {
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('bidang_keahlian');
            $table->string('kompetensi');
            $table->string('minat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen_pembimbing');
    }
}
