<?php

use App\Models\Immunization;
use App\Models\KiaIdentitasIbu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementIbuImmunizationTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_ibu_immunization', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('kia_ibu_id')->unsigned();
            $table->foreign('kia_ibu_id')->references('id')->on('kia_identitas_ibu');
            $table->bigInteger('immunization_id')->unsigned();
            $table->foreign('immunization_id')->references('id')->on('immunization');

            $table->date('date')->nullable();
            $table->string('location')->nullable();
            $table->string('pic')->nullable(); // dokter/bidang/perawat
            $table->smallInteger('trimester');
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_ibu_immunization');
    }
}
