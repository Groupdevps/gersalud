<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablePacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name1');
            $table->string('lastname');
            $table->string('lastname1');
            $table->integer('cc')->index();
            $table->enum('tipo_dc',['C.C','T.I','R.C','N.V','N.N'])->defaul('C.C');
            $table->string('sexo');
            $table->integer('telefono');
            $table->integer('telefono1');
            $table->string('email');
            $table->string('direccion');
            $table->date('fecha_nac');
            $table->integer('edad');
            $table->string('zona');
            $table->string('barrio');
            $table->string('ocupacion'); //Datos familiares 
            $table->string('name2'); //Padre
            $table->string('lastname2');
            $table->integer('cc1');
            $table->enum('tipo_dc1',['C.C','T.I','R.C','N.V','N.N'])->defaul('C.C');
            $table->string('name3'); //Madre
            $table->string('lastname3');
            $table->integer('cc2');
            $table->enum('tipo_dc2',['C.C','T.I','R.C','N.V','N.N'])->defaul('C.C');
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
        Schema::dropIfExists('pacientes');
    }
}
