<?php

use App\Models\DaerahKotakab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahanTable extends Migration
{
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kecamatan_id')->unsigned();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');

            $table->char('nama', 50);
        });
    }
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
}
