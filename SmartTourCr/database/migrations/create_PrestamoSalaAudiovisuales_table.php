<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoSalaAudiovisualesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamoSalaAudiovisuales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreSolicitante');
            $table->date('tema');
            $table->string('seccion');
            $table->int('totalEstudiantes');
            $table->date('fecha');
            $table->time('horaEntrada');
            $table->time('horaSalida');
            $table->string('observaciones');
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
        Schema::drop('prestamoSalaAudiovisuales');
    }
}
