<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumeroAtencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//contratos
        Schema::create('numero_atencions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_contrato');
            $table->string('eps');
            $table->string('estado');
            $table->string('fecha_venc');
            $table->string('monto');
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
        Schema::dropIfExists('numero_atencions');
    }
}
