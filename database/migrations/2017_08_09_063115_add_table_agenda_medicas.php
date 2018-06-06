<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableAgendaMedicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_medicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_medico')->unsigned()->nullable(false)->change();;
            $table->integer('id_centro')->unsigned()->nullable(false)->change();;
            $table->datetime('fecha_in');
            $table->datetime('fecha_out');
            $table->integer('id_cuarto')->unsigned()->nullable(false)->change();;
            //$table->foreign('id_medico')->references('id')->on('medicos')->onDelete('cascade');
           // $table->foreign('id_centro')->references('id')->on('centros')->onDelete('cascade');
             //$table->foreign('id_cuarto')->references('id')->on('pabellones')->onDelete('cascade');
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
        Schema::dropIfExists('agenda_medicas');
    }
}
