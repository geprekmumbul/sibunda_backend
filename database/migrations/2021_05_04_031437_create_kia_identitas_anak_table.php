<?php

use App\Models\DaerahKotakab;
use App\Models\KiaIdentitasIbu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKiaIdentitasAnakTable extends Migration
{
    public function up()
    {
        // data anak / bayi
        Schema::create('kia_identitas_anak', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('kia_ibu_id')->unsigned();
            $table->foreign('kia_ibu_id')->references('id')->on('kia_identitas_ibu');
            $table->bigInteger('tempat_lahir')->unsigned()->nullable();
            $table->foreign('tempat_lahir')->references('id')->on('kota');

            $table->string('nama')->nullable();
            $table->text('img_url')->nullable();
            $table->unsignedSmallInteger('anak_ke')->nullable();
            $table->string('no_akte_kelahiran')->nullable();
            $table->string('nik')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P', 'N'])->nullable();
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_jkn')->nullable();
            $table->date('tanggal_berlaku_jkn')->nullable();
            $table->string('no_kohort')->nullable();
            $table->string('no_catatan_medik')->nullable();
            // jika bayi
            $table->date('hpl')->nullable();
            $table->date('hpht')->nullable();
            $table->boolean('is_janin')->default(true);
            $table->boolean('is_lahir')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kia_identitas_anak');
    }
}
