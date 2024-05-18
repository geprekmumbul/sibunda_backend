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
            $table->foreignIdFor(UserGroup::class,'user_group_id')->constrained();
            $table->foreignIdFor(UserRole::class,'user_role_id')->constrained();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_groups_roles');
    }
}
