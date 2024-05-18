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
            $table->char('nama', 50);
            $table->foreignIdFor(DaerahProvinsi::class, 'provinsi_id')->constrained();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kota');
    }
}
