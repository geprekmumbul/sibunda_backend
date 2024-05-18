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
            $table->char('nama', 50);
            $table->foreignIdFor(DaerahKotakab::class, 'kecamatan_id')->constrained();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
}
