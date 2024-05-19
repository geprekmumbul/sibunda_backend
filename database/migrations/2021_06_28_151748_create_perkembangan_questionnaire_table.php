<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkembanganQuestionnaireTable extends Migration
{
    public function up()
    {
        Schema::create('perkembangan_questionnaire', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedSmallInteger('no');
            $table->text('question');
            $table->string('img_url')->nullable();
            $table->smallInteger('month_start');
            $table->smallInteger('month_until');
        });
    }
    public function down()
    {
        Schema::dropIfExists('perkembangan_questionnaire');
    }
}
