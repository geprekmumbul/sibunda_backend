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
            $table->foreignIdFor(Immunization::class, 'immunization_id')->constrained();
            $table->date('date')->nullable();
            $table->string('location')->nullable();
            $table->string('pic')->nullable(); // dokter/bidang/perawat
            $table->foreignIdFor(KiaIdentitasIbu::class, 'kia_ibu_id')->constrained();
            $table->smallInteger('trisemester');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_ibu_immunization');
    }
}
