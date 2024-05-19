<?php

use App\Models\NotificationTemplate;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('template_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('template_id')->references('id')->on('notification_template');

            $table->boolean('is_message');
            $table->string('title');
            $table->string('desc');
            $table->dateTime('datetime');
            $table->text('img_url')->nullable();
            $table->text('url')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
