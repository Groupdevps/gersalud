<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesAmbulatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_ambulatorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->bigInteger('cc');
            $table->string('eps');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->bigInteger('n_atencion');
            $table->string('diagnostico');
            $table->string('especialidad');
            $table->string('sustentacion');
            $table->string('medicina_interna');
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
        Schema::dropIfExists('ordenes_ambulatorias');
    }
}
