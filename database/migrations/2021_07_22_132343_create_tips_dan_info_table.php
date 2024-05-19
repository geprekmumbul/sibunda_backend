<?php

use App\Models\TipsCategory;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsDanInfoTable extends Migration
{
    public function up()
    {
        Schema::create('tips_dan_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('tips_category_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tips_category_id')->references('id')->on('tips_category');

            $table->text('img_url')->nullable();
            $table->string('desc');
            $table->date('date');
            $table->longText('content');
        });
    }
    public function down()
    {
        Schema::dropIfExists('tips_dan_info');
    }
}
