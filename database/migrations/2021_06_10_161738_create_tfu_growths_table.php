<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTfuGrowthsTable extends Migration
{
    public function up()
    {
        Schema::create('tfu_growths', function (Blueprint $table) {
            $table->id('week');
            $table->double('bottom_threshold');
            $table->double('normal_threshold');
            $table->double('top_threshold');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tfu_growths');
    }
}
