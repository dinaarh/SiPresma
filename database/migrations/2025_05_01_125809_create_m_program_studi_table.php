<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProgramStudiTable extends Migration
{
    public function up()
    {
        Schema::create('m_program_studi', function (Blueprint $table) {
            $table->id('prodi_id');
            $table->string('prodi_nama');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('program_studi');
    }
}
