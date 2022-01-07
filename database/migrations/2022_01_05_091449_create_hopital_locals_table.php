<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopitalLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopital_locals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hopitals_id')->constrained();
            $table->foreignId('locals_id')->constrained();
            $table->foreignId('type_locals_id')->constrained();
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
        Schema::dropIfExists('hopital_locals');
    }
}
