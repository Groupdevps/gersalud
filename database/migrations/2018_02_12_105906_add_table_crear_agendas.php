<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCrearAgendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crear_agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora_in');
            $table->time('hora_out');
            $table->integer('User_id');//id_profesional
            $table->string('sede');
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
        Schema::dropIfExists('crear_agendas');
    }
}
