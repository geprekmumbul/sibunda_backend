<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidQuestionnaireTable extends Migration
{
    public function up()
    {
        Schema::create('covid_questionnaire', function (Blueprint $table) {
            $table->id();
            $table->longText('question');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('covid_questionnaire');
    }
}
