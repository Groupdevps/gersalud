<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadicacionepssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radicacionepss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eps');
            $table->integer('nit');
            $table->string('nombre');
            $table->enum('tipo_dc',['C.C','T.I','R.C','N.V','N.N'])->default('C.C');
            $table->integer('cc');
            $table->string('asunto');
            $table->string('descripcion');
            $table->string('observacion');
            $table->integer('radicado');
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
        Schema::dropIfExists('radicacionepss');
    }
}
