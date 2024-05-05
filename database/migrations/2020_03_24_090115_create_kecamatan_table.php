<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatanTable extends Migration
{
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->char('nama', 50);
            $table->unsignedBigInteger('kota_id');
            $table->foreign('kota_id')->references('id')->on('kota');
        });
    }
    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
}
