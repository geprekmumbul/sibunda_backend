<?php

use App\Models\DaerahKotakab;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKiaIdentitasIbuTable extends Migration
{
    public function up()
    {
        Schema::create('kia_identitas_ibu', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('tempat_lahir')->unsigned()->nullable();
            $table->foreign('tempat_lahir')->references('id')->on('kota');

            $table->string('nama');
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

            $table->string('puskesmas_domisili')->nullable();
            $table->string('nomor_register_kohort_ibu')->nullable();
            $table->text('img_url')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kia_identitas_ibu');
    }
}
