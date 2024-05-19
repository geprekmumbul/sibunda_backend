<?php

use App\Models\Immunization;
use App\Models\KiaIdentitasAnak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementAnakImmunizationTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_anak_immunization', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('immunization_id')->unsigned();
            $table->foreign('immunization_id')->references('id')->on('immunization');
            $table->bigInteger('kia_anak_id')->unsigned();
            $table->foreign('kia_anak_id')->references('id')->on('kia_identitas_anak');

            $table->date('date')->nullable();
            $table->string('location')->nullable();
            $table->string('pic')->nullable(); // dokter/bidang/perawat
            $table->string('no_batch')->nullable();
            $table->unsignedSmallInteger('month_type'); // tipe bulan e.g 0 - 4, 5 ++ bulan
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_anak_immunization');
    }
}
