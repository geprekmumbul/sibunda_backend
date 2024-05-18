<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyHealthTipsTable extends Migration
{
    public function up()
    {
        Schema::create('family_health_tips', function (Blueprint $table) {
            $table->id();
            $table->text('img_url')->nullable();
            $table->string('desc');
            $table->foreignIdFor(User::class, 'user_id')->nullable()->constrained();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('family_health_tips');
    }
}
