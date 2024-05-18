<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabyMovementGrowthsTable extends Migration
{
    public function up()
    {
        Schema::create('baby_movement_growths', function (Blueprint $table) {
            $table->id('week');
            $table->double('top_threshold');
            $table->double('bottom_threshold');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('baby_movement_growths');
    }
}
