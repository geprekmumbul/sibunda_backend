<?php

use App\Models\DaerahKotakab;
use App\Models\KiaIdentitasIbu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKiaIdentitasAyahTable extends Migration
{
    public function up()
    {
        Schema::create('kia_identitas_ayah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('img_url')->nullable();
            $table->string('nik');
            $table->string('pembiayaan')->nullable();
            $table->string('no_jkn')->nullable();
            $table->string('faskes_tk1')->nullable();
            $table->string('faskes_rujukan')->nullable();
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->foreignIdFor(DaerahKotakab::class,'tempat_lahir')->nullable()->constrained();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('telp')->nullable();
            $table->foreignIdFor(KiaIdentitasIbu::class, 'kia_ibu_id')->constrained();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kia_identitas_ayah');
    }
}
