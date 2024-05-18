<?php

use App\Models\CovidForm;
use App\Models\CovidQuestionnaire;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidFormAnsTable extends Migration
{
    public function up()
    {
        Schema::create('covid_form_ans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CovidQuestionnaire::class, 'q_id')->constrained();
            $table->foreignIdFor(CovidForm::class, 'form_id')->constrained();
            $table->boolean('ans');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('covid_form_ans');
    }
}
