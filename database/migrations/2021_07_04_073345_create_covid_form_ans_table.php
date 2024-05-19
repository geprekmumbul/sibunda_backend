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
            $table->timestamps();

            $table->bigInteger('q_id')->unsigned();
            $table->bigInteger('form_id')->unsigned();
            $table->foreign( 'q_id')->references('id')->on('covid_questionnaire');
            $table->foreign('form_id')->references('id')->on('covid_form');

            $table->boolean('ans');

        });
    }
    public function down()
    {
        Schema::dropIfExists('covid_form_ans');
    }
}
