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
            $table->timestamps();

            $table->bigInteger( 'user_id')->unsigned();
            $table->foreign( 'user_id')->references('id')->on('users');

            $table->bigInteger('kia_anak_id')->unsigned()->nullable();
            $table->foreign('kia_anak_id')->references('id')->on('kia_identitas_anak');

            $table->boolean('is_ibu');
            $table->date('date');
            $table->boolean('result_is_normal')->nullable();
            $table->string('result_desc')->nullable();
            $table->string('result_long_desc')->nullable();
            $table->text('img_url')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('covid_form');
    }
}
