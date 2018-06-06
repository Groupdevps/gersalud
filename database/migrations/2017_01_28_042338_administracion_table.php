<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdministracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administracion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->integer('CC');
            $table->integer('Telefono');
            $table->integer('Celular');
            $table->string('Email');
            $table->enum('roll',['Admin','Admisionista'])->default('Admisionista');
            $table->integer('User_id')->unsigned()->nullable(false)->change();;
           // $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('administracion');
    }
}
