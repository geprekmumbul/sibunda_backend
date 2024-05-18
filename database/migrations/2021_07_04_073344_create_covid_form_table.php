<?php

use App\Models\KiaIdentitasAnak;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidFormTable extends Migration
{
    public function up()
    {
        Schema::create('covid_form', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_ibu');
            $table->date('date');
            $table->foreignIdFor(User::class, 'user_id')->constrained();
            $table->boolean('result_is_normal')->nullable();
            $table->string('result_desc')->nullable();
            $table->string('result_long_desc')->nullable();
            $table->foreignIdFor(KiaIdentitasAnak::class, 'kia_anak_id')->nullable()->constrained();
            $table->text('img_url')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('covid_form');
    }
}
