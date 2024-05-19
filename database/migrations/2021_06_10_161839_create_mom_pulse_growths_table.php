<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMomPulseGrowthsTable extends Migration
{
    public function up()
    {
        Schema::create('mom_pulse_growths', function (Blueprint $table) {
            $table->id('week');
            $table->timestamps();

            $table->double('top_threshold');
        });
    }
    public function down()
    {
        Schema::dropIfExists('mom_pulse_growths');
    }
}
