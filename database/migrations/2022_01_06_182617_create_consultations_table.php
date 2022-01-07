<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docteurs_id')->constrained();
            // $table->foreignId('patients_id')->constrained();
            $table->bigInteger('patients_id');
            $table->foreign('patients_id')->on('patients')->references('register');
            $table->date('date');
            $table->time('heure');
            $table->foreignId('hopital_locals_id')->constrained();
            $table->foreignId('type_consultations_id')->constrained();
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
        Schema::dropIfExists('consultations');
    }
}
