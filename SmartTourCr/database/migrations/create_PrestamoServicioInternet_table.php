<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoServicioInternetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamoServicioInternet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreSolicitante');
            $table->string('seccion');
            $table->date('tema');
            $table->date('fecha');
            $table->time('horaEntrada');
            $table->time('horaSalida');
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
        Schema::drop('prestamoServicioInternet');
    }
}
