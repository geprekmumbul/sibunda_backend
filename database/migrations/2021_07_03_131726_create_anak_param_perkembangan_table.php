<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakParamPerkembanganTable extends Migration
{
    public function up()
    {
        Schema::create('anak_param_perkembangan', function (Blueprint $table) {
            $table->id();

            $table->boolean('is_laki');
            $table->smallInteger('month');
            $table->smallInteger('s_threshold');
            $table->smallInteger('m_threshold');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('anak_param_perkembangan');
    }
}
