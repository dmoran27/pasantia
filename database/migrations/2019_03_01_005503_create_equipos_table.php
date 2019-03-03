<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('tipo')->nullable();
            $table->string('identificador')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->string('serial');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->string('estado_equipo');
            $table->string('perteneciente');
            $table->string('Observacion');
            $table->foreign('user_id')->references('id')->on('users');
              $table->string('estado_bd')->nullable();

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
        Schema::dropIfExists('equipos');
    }
}
