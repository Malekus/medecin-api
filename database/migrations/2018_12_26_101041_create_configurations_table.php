<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    public function up()
    {
        Schema::create('Configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categorie');
            $table->string('type');
            $table->string('label');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Configurations');
    }
}
