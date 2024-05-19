<?php

use App\Models\ServiceStatementAnakYear;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementAnakMonthlyCheckupTable extends Migration
{
    public function up()
    {
        //
        Schema::create('service_statement_anak_monthly_checkup', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('year_id')->unsigned();
            $table->foreign('year_id')->references('id')->on('service_statement_anak_years');

            $table->unsignedSmallInteger('month');
            $table->date('date');
            $table->string('location');
            $table->string('pemeriksa');
            $table->unsignedSmallInteger('age'); // dalam hari
            $table->double('bb'); // in kg
            $table->double('tb'); // in cm
            $table->double('lingkar_kepala'); // in cm
            $table->double('imt');
            $table->unique(['year_id', 'month']);
        });
    }
    public function down()
    {
        //
        Schema::dropIfExists('service_statement_anak_monthly_checkup');
    }
}
