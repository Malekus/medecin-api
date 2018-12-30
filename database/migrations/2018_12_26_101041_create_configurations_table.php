<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categorie');
            $table->string('type');
            $table->string('label');
            $table->timestamps();
        });

        Schema::table('medecins', function (Blueprint $table) {
            $table->integer('diplome')->unsigned()->index();
        });

        Schema::table('medecins', function (Blueprint $table) {
            $table->integer('specialite')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Configurations');
    }


}
