<?php

use App\Models\PerkembanganQuestionnaire;
use App\Models\ServiceStatementAnakMonthlyCheckup;
use App\Models\ServiceStatementMonthlyPerkembangan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementMonthlyPerkembanganTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_monthly_perkembangan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('monthly_checkup_id')->unsigned();
            $table->foreign('monthly_checkup_id', 'monthly_checkup_id_foreign2')->references('id')->on('service_statement_anak_monthly_checkup');
            $table->bigInteger('questionnaire_id')->unsigned();
            $table->foreign('questionnaire_id', 'questionnaire_id_foreign')->references('id')->on('perkembangan_questionnaire');

            $table->unique(['monthly_checkup_id', 'questionnaire_id'],'monthly_checkup_questionnaire_unique');
            $table->boolean('ans');

        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_monthly_perkembangan');
    }
}
