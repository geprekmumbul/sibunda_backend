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
            $table->boolean('is_message');
            $table->string('title');
            $table->string('desc');
            $table->dateTime('datetime');
            $table->text('img_url')->nullable();
            $table->text('url')->nullable();
            $table->foreignIdFor(User::class, 'user_id')->nullable()->constrained();
            $table->foreignIdFor(NotificationTemplate::class, 'template_id')->nullable()->constrained();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
