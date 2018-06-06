<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCentroPabells extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_pabells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pabe')->unsigned();
            $table->integer('nit_centro')->unsigned();
            $table->datetime('fecha');
         //   $table->foreign('id_pabe')->references('id')->on('pabellones')->onDelete('cascade');
           // $table->foreign('nit_centro')->references('nit')->on('centros')->onDelete('cascade');
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
        Schema::dropIfExists('centro_pabells');
    }
}
