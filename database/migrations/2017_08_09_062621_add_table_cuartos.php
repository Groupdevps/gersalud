<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCuartos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuartos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_pabell')->unsigned()->nullable(false)->change();
            //$table->foreign('id_pabell')->references('id')->on('pabellones')->onDelete('cascade');
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
        Schema::dropIfExists('cuartos');
    }
}
