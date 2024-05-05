<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotaTable extends Migration
{
    public function up()
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->char('nama', 50);
            $table->unsignedBigInteger('provinsi_id');
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
        });
    }
    public function down()
    {
        Schema::dropIfExists('kota');
    }
}
