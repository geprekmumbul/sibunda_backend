<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDjjGrowthsTable extends Migration
{
    public function up()
    {
        Schema::create('djj_growths', function (Blueprint $table) {
            $table->id('week');
            $table->timestamps();

            $table->double('bottom_threshold');
            $table->double('top_threshold');
        });
    }
    public function down()
    {
        Schema::dropIfExists('djj_growths');
    }
}
