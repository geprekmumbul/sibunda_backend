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
            $table->text('img_url')->nullable();
            $table->string('desc');
            $table->date('date');
            $table->longText('content');
            $table->foreignIdFor(User::class,'user_id')->nullable()->constrained();
            $table->foreignIdFor(TipsCategory::class, 'tips_category_id')->constrained();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tips_dan_info');
    }
}
