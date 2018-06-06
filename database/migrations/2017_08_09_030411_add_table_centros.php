<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCentros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->string('ubicacion');
            $table->bigInteger('celular');
            $table->bigInteger('nit')->unique();
            $table->string('direccion',255);
            $table->string('nombreContacto');
            $table->bigInteger('telefonoContacto');
            $table->timestamps();
        });
        //['razons','email','celular','nit','nivel','direccion','nombreContacto','telefonoContacto']
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros');
    }
}
