<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatNotificationTemplateTable extends Migration
{
    public function up()
    {
        //
        Schema::create('notification_template', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title');
            $table->string('desc');
            $table->text('img_url')->nullable();
            $table->text('url')->nullable();
        });
    }
    public function down()
    {
        //
        Schema::dropIfExists('notification_template');
    }
}
