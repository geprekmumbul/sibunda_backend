<?php

use App\Models\KiaIdentitasAnak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStatementAnakYearsTable extends Migration
{
    public function up()
    {
        Schema::create('service_statement_anak_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('year')->default(1);
            $table->foreignIdFor(KiaIdentitasAnak::class, 'kia_anak_id')->constrained();
            $table->text('img_url')->nullable();
            $table->unique(['year', 'kia_anak_id']);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_statement_anak_years');
    }
}
