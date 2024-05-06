<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementMonthlyPerkembanganTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_monthly_perkembangan', function (Blueprint $table) {
            Schema::dropIfExists('service_statement_monthly_perkembangan');
            $table->id();
            $table->unsignedBigInteger('monthly_report_id');
            $table->unsignedBigInteger('questionnaire_id');
            $table->boolean('ans');
            $table->unique(['monthly_report_id', 'questionnaire_id'], 'service_statement_monthly_perkemebangan_unique');
            $table->timestamps();
            $table->foreign('monthly_report_id', 'service_statement_monthly_perkemebangan_report')->references('id')->on('service_statement_anak_monthly_checkup');
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_monthly_perkembangan');
    }
}
