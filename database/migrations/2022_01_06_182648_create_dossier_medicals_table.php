<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_medicals', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('patients_id');
            $table->foreign('patients_id')->on('patients')->references('register');
            $table->foreignId('consultations_id')->constrained();
            $table->foreignId('maladies_id')->constrained();
            $table->foreignId('dignostiques_id')->constrained();
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
        Schema::dropIfExists('dossier_medicals');
    }
}
