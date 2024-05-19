<?php

use App\Models\ServiceStatementAnakMonthlyCheckup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementAnakNeonatusKn2Table extends Migration
{
    public function up()
    {
        Schema::create('service_statement_anak_neonatus_kn2', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('monthly_checkup_id')->unsigned()->unique();
            $table->foreign('monthly_checkup_id')->references('id')->on('service_statement_anak_monthly_checkup');

            $table->date('date');
            $table->time('time');
            $table->string('masalah');
            $table->string('dirujuk_ke');
            $table->string('petugas');
            $table->string('catatan_penting');

            $table->boolean('q_menyusu')->default(false);
            $table->boolean('q_tali_pusat')->default(false);
            $table->boolean('q_tanda_bahaya')->default(false);
            $table->boolean('q_identifikasi_kuning')->default(false);
            $table->boolean('q_imunisasi_hb')->default(false);// cm

            $table->string('no_batch');
            $table->double('bb'); // gr
            $table->double('tb'); // cm
            $table->double('lingkar_kepala');
            $table->boolean('q_skrining_hipotiroid_kongenital')->default(false);
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_anak_neonatus_kn2');
    }
}
