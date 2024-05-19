<?php

use App\Models\DaerahProvinsi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotaTable extends Migration
{
    public function up()
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('provinsi_id')->unsigned();
            $table->foreign('provinsi_id')->references('id')->on('provinsi');

            $table->char('nama', 50);
        });
    }
    public function down()
    {
        Schema::dropIfExists('kota');
    }
}
