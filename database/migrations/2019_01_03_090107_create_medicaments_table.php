<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    public function up()
    {
        Schema::create('Medicaments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nom_id')->unsigned()->index();
            $table->foreign('nom_id')->references('id')->on('configurations')->onDelete('cascade');
            $table->integer('type_id')->unsigned()->nullable()->index();
            $table->foreign('type_id')->references('id')->on('configurations')->onDelete('set null');
            $table->unique(['nom_id', 'type_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Medicaments');
    }
}
