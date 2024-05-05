<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidFormAnsTable extends Migration
{
    public function up()
    {
        Schema::create('covid_form_ans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('q_id');
            $table->unsignedBigInteger('form_id');
            $table->boolean('ans');
            $table->timestamps();
            $table->foreign('q_id')->references('id')->on('covid_questionnaire');
            $table->foreign('form_id')->references('id')->on('covid_form');
        });
    }
    public function down()
    {
        Schema::dropIfExists('covid_form_ans');
    }
}
