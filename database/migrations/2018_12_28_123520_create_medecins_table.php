<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('diplome_id')->unsigned()->nullable();
            $table->foreign('diplome_id')->references('id')->on('configurations')->onDelete('set null');
            $table->integer('specialite_id')->unsigned()->nullable();
            $table->foreign('specialite_id')->references('id')->on('configurations')->onDelete('set null');
            $table->integer('centre_id')->unsigned()->nullable();
            $table->foreign('centre_id')->references('id')->on('centres')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecins');
    }
}
