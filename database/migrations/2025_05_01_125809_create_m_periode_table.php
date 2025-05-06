<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPeriodeTable extends Migration
{
    public function up()
    {
        Schema::create('m_periode', function (Blueprint $table) {
            $table->id('periode_id');
            $table->string('periode_nama');
            $table->integer('periode_tahun_awal');
            $table->integer('periode_tahun_akhir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periode');
    }
}
