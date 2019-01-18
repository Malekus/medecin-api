<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    public function up()
    {
        Schema::create('Consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medecin_id')->unsigned()->index();
            $table->foreign('medecin_id')->references('id')->on('medecins')->onDelete('cascade');
            $table->integer('patient_id')->unsigned()->index();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->integer('type_id')->unsigned()->index();
            $table->foreign('type_id')->references('id')->on('configurations')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('consultation_medicament', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consultation_id')->unsigned()->index();
            $table->foreign('consultation_id')->references('id')->on('consultations')->onDelete('cascade');
            $table->integer('medicament_id')->unsigned()->index();
            $table->foreign('medicament_id')->references('id')->on('medicaments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Consultations');
    }
}
