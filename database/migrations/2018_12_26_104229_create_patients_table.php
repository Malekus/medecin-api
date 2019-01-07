<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{

    public function up()
    {
        Schema::create('Patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('numsecu')->nullable();
            $table->string('adresse')->nullable();
            $table->string('tel')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Patients');
    }
}
