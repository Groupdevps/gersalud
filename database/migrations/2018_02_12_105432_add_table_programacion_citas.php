<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableProgramacionCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacion_citas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('servicios',['Medicina general','Odontologia','Promocion y prevencion','Ayudas diagnostica','Laboratorio','Especialidad'])->default('Medicina general');
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
        Schema::dropIfExists('programacion_citas');
    }
}
