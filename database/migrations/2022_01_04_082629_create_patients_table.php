<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger('register')->unique();
            $table->string('name');
            $table->string('prenom');
            $table->string('date_naissance');
            // $table->string('num_registre');
            $table->string('genre');
            $table->string('adresse');
            $table->string('pays');
            $table->string('ville');
            $table->integer('code_postal');
            $table->string('num_telephone');
            $table->string('personne_contact');
            $table->string('num_telephone_contact');
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
        Schema::dropIfExists('patients');
    }
}
