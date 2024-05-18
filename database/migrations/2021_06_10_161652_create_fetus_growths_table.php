<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFetusGrowthsTable extends Migration
{
    public function up()
    {
        Schema::create('fetus_growths', function (Blueprint $table) {
            $table->id('week');
            $table->double('length')->nullable();
            $table->double('weight')->nullable();
            $table->string('desc')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('fetus_growths');
    }
}
