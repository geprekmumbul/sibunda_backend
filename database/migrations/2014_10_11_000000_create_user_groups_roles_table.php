<?php

use App\Models\UserGroup;
use App\Models\UserRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsRolesTable extends Migration
{
    public function up()
    {
        Schema::create('user_groups_roles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_group_id')->unsigned();
            $table->bigInteger('user_role_id')->unsigned();
            $table->foreign('user_group_id')->references('id')->on('user_groups');
            $table->foreign('user_role_id')->references('id')->on('user_roles');
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_groups_roles');
    }
}
