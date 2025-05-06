<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAdminTable extends Migration
{
    public function up()
    {
        Schema::create('m_admin', function (Blueprint $table) {
            $table->string('nip')->unique();
            $table->string('nama');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('m_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
