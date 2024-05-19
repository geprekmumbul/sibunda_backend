<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightGrowthsTable extends Migration
{
    public function up()
    {
        Schema::create('weight_growths', function (Blueprint $table) {
            $table->id('week');
            $table->timestamps();

            $table->double('bottom_obesity_threshold');
            $table->double('bottom_over_threshold');
            $table->double('bottom_normal_threshold');
        });
    }
    public function down()
    {
        Schema::dropIfExists('weight_growths');
    }
}
