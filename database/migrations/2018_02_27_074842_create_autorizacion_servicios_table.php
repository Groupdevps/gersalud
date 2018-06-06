<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorizacionServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorizacion_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('n_servicio');
            $table->date('fecha_exp');
            $table->string('eps');
            $table->bigInteger('nit');
            $table->bigInteger('codigo');
            $table->bigInteger('tel');
            $table->string('direccion');
            $table->string('municipio');
            $table->string('beneficiario');
            $table->date('fecha_nac');
            $table->integer('edad');
            $table->bigInteger('n_sisben');
            $table->enum('tipo_dc',['C.C','T.I','R.C','N.V','N.N'])->default('C.C');
            $table->bigInteger('cc');
            $table->string('carnet');
            $table->string('ficha');
            $table->string('contrato');
            $table->string('direccion1');
            $table->string('municipio1');
            $table->bigInteger('telefono');
            $table->string('modalidad');
            $table->date('f_inicio');
            $table->date('f_salida');
            $table->bigInteger('codigo1');
            $table->string('descripcion');
            $table->integer('nivel');
            $table->string('servicio');
            $table->string('especialidad');
            $table->string('ambito');
            $table->string('ubi_pac');
            $table->integer('codigo2');
            $table->string('descripcion1');
            $table->integer('cantidad');
            $table->string('valido');
            $table->string('o_solicitud');
            $table->string('observacion');
            $table->bigInteger('numero');
            $table->date('f_medico');
            $table->string('ips');
            $table->string('persona');
            $table->bigInteger('telefono1');
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
        Schema::dropIfExists('autorizacion_servicios');
    }
}
