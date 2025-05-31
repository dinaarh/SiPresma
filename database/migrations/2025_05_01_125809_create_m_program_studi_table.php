<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProgramStudiTable extends Migration
{
    public function up()
    {
        Schema::create('m_program_studi', function (Blueprint $table) {
            $table->id('program_studi_id');
            $table->string('program_studi_nama');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_program_studi');
    }
}
