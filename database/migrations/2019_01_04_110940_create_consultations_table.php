<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medecin_id')->unsigned()->index();
            $table->foreign('medecin_id')->references('id')->on('medecins')->onDelete('cascade');
            $table->integer('patient_id')->unsigned()->index();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Consultations');
    }
}
