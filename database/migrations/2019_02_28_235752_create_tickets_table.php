<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('identificador');
            $table->string('accion');
            $table->string('prioridad');
            $table->string('observacion');
            $table->string('fecha_i');
            $table->string('fecha_c');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('Observacion');
            $table->foreign('cliente_id')->references('id')->on('clientess');
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
        Schema::dropIfExists('tickets');
    }
}
