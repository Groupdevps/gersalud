<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadicacionEpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radicacion_eps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eps');
            $table->integer('nit');
            $table->integer('radicacion');
            $table->string('nombre');
            $table->enum('tipo_dc',['Cedula de ciudadania','Tarjeta de identidad','Registro civil'])->default('Cedula de ciudadania');
            $table->integer('cc');
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
        Schema::dropIfExists('radicacion_eps');
    }
}
