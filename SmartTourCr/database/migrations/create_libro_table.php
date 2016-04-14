<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('id');
            $table->int('numeroInscripcion');
            $table->string('signatura');
            $table->date('fechaRegistro');
            $table->string('autor');
            $table->string('titulo');
            $table->string('edicion');
            $table->string('lugar');
            $table->string('editorial');
            $table->int('ano');
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
        Schema::drop('libro');
    }
}
