<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementAnakNeonatusSixHoursTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_anak_neonatus_six_hours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('monthly_checkup_id')->unsigned();
            $table->foreign('monthly_checkup_id', 'monthly_checkup_id_foreign')->references('id')->on('service_statement_anak_monthly_checkup');
            $table->unique('monthly_checkup_id', 'monthly_checkup_id_unique');

            $table->date('date');
            $table->time('time');
            $table->string('masalah'); ///Bisa jadi tidak ada
            $table->string('dirujuk_ke');
            $table->string('petugas');
            $table->string('catatan_penting');

            $table->double('bb'); // gr
            $table->double('tb'); // cm
            $table->double('lingkar_kepala'); // cm
            $table->boolean('q_imd')->default(false);
            $table->boolean('q_vit_k1')->default(false);
            $table->boolean('q_salep')->default(false);
            $table->boolean('q_imunisasi_hb')->default(false);
            $table->string('no_batch');

        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_anak_neonatus_six_hours');
    }
}
