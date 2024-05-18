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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('img')->nullable();
            $table->string('fcm_token')->nullable();
            $table->longText('access_token')->nullable();
            $table->foreignId('user_group_id');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignIdFor(UserGroup::class, 'user_group_id')->constrained();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
