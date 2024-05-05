<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahanTable extends Migration
{
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->char('nama', 50);
            $table->unsignedBigInteger('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
        });
    }
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
}
