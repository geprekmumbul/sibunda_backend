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
            $table->char('nama', 50);
            $table->foreignIdFor(DaerahKotakab::class, 'kota_id')->constrained();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
}
