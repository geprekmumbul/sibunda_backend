<?php

use App\Models\KiaIdentitasAnak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementBayiTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_bayi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('kia_anak_id')->unsigned();
            $table->foreign('kia_anak_id')->references('id')->on('kia_identitas_anak');

            $table->string('bb');
            $table->string('pb');
            $table->string('lk');
            $table->string('perkembangan');
            $table->string('kie');
            $table->string('imunisasi');
            $table->string('vit_a');
            $table->string('ppia');
            $table->unsignedSmallInteger('period');
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_bayi');
    }
}
