<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentresTable extends Migration
{
    public function up()
    {
        Schema::create('Centres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('configurations')->onDelete('set null');
            $table->string('adresse')->nullable();
            $table->timestamps();
        });

        Schema::create('centre_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('centre_id')->unsigned()->index();
            $table->foreign('centre_id')->references('id')->on('centres')->onDelete('cascade');
            $table->integer('patient_id')->unsigned()->index();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            //$table->unique(['centre_id', 'patient_id']);
        });

    }

    public function down()
    {
        Schema::dropIfExists('Centres');
    }
}
