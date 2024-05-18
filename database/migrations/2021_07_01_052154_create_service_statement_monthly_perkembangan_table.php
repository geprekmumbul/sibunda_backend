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
            $table->foreignIdFor(ServiceStatementAnakMonthlyCheckup::class, 'monthly_report_id')->constrained();
            $table->foreignIdFor(PerkembanganQuestionnaire::class, 'questionnaire_id')->constrained();
            $table->boolean('ans');
            $table->unique(['monthly_report_id', 'questionnaire_id']);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_monthly_perkembangan');
    }
}
