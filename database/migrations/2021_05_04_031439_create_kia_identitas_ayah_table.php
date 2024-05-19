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
            $table->timestamps();


            $table->bigInteger('kia_ibu_id')->unsigned();
            $table->foreign('kia_ibu_id')->references('id')->on('kia_identitas_ibu');
            $table->bigInteger('tempat_lahir')->unsigned()->nullable();
            $table->foreign('tempat_lahir')->references('id')->on('kota');

            $table->string('nama');
            $table->text('img_url')->nullable();
            $table->string('nik');
            $table->string('pembiayaan')->nullable();
            $table->string('no_jkn')->nullable();
            $table->string('faskes_tk1')->nullable();
            $table->string('faskes_rujukan')->nullable();
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('telp')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kia_identitas_ayah');
    }
}
