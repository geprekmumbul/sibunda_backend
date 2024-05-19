<?php

use App\Models\UserGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_group_id')->unsigned();
            $table->foreign('user_group_id')->references('id')->on('user_groups');

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('img')->nullable();
            $table->string('fcm_token')->nullable();
            $table->longText('access_token')->nullable();
            $table->rememberToken();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
