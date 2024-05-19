<?php

use App\Models\ServiceStatementIbuHamil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementIbuHamilPeriksaTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_ibu_hamil_periksa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('trimester_id')->unsigned();
            $table->foreign('trimester_id')->references('id')->on('service_statement_ibu_hamil');

            $table->smallInteger('week');
            $table->unique(['trimester_id', 'week']);
            $table->date('tanggal_periksa');
            $table->string('tempat_periksa')->nullable();
            $table->string('nama_pemeriksa')->nullable();
            $table->string('keluhan_bunda')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P', 'N'])->nullable();
            $table->date('tanggal_periksa_kembali')->nullable();
            $table->date('hpht')->nullable();
            $table->date('hpl')->nullable();
            $table->double('bb')->nullable();
            $table->double('kenaikan_bb')->nullable();
            $table->double('tb')->nullable();
            $table->string('tfu')->nullable();
            $table->string('djj')->nullable();
            $table->string('sistolik')->nullable();
            $table->string('diastolik')->nullable();
            $table->string('map')->nullable();
            $table->string('gerakan_bayi')->nullable();
            $table->string('resep_obat')->nullable();
            $table->string('alergi_obat')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->text('catatan_khusus')->nullable();
            $table->text('img_usg')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_ibu_hamil_periksa');
    }
}
