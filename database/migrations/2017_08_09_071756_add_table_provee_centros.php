<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableProveeCentros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provee_centros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit_pro')->unsigned()->nullable(false)->change();
            $table->string('nit_centro')->unsigned()->nullable(false)->change();
            $table->datetime('fecha');
            //$table->foreign('nit_pro')->references('nit')->on('proveedores')->onDelete('cascade');
            //$table->foreign('nit_centro')->references('nit')->on('centros')->onDelete('cascade');
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
        Schema::dropIfExists('provee_centros');
    }
}
