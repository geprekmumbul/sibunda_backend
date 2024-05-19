<?php

use App\Models\DaerahKotakab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatanTable extends Migration
{
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kota_id')->unsigned();
            $table->foreign('kota_id')->references('id')->on('kota');

            $table->char('nama', 50);
        });
    }
    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
}
