<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulasMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulas_medicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->bigInteger('cc');
            $table->string('eps');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->bigInteger('n_atencion');
            $table->string('diagnostico');
            $table->string('tratamiento');
            $table->string('medicamento');
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
        Schema::dropIfExists('formulas_medicas');
    }
}
