<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasaportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasaportes', function (Blueprint $table) {
            $table->Increments('id');
            $table->double('numero');
            $table->integer('pasajero_id')->unsigned();
            $table->foreign('pasajero_id')->references('id')->on('pasajeros')->onDelete('cascade');
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
        Schema::dropIfExists('pasaportes');
    }
}
