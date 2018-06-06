<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incapacidads', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechainc');
            $table->string('entidad');
            $table->integer('code');
            $table->enum('tipo_dc',['C.C','T.I','R.C','N.V','N.N'])->default('C.C');
            $table->string('direccion');
            $table->bigInteger('tel');
            $table->bigInteger('cc');
            $table->string('municipio');
            $table->bigInteger('cel');
            $table->date('fechanac');
            $table->string('depart');
            $table->string('email');
            $table->string('tipo_tra');
            $table->string('regimen');
            $table->string('origen');
            $table->string('motivo');
            $table->string('diagnostico');
            $table->date('fecin');
            $table->string('ubipac');
            $table->date('fecfinc');
            $table->string('diainc');
            $table->string('nombre');
            $table->string('dir_ips');
            $table->string('cargo');
            $table->bigInteger('tel1');
            $table->string('ips_pre');
            $table->string('observacion');
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
        Schema::dropIfExists('incapacidads');
    }
}
