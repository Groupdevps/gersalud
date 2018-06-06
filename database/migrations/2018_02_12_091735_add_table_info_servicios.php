<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableInfoServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('servicio',['Consulta externa','Promocion y prevencion','Servicio de urgencia','Hospitalizacion','Servicios especializados'])->default('Consulta externa');
            $table->enum('nivel_socioeconomico',['1','2','3','4'])->default('1');
            $table->enum('cuota_moderadora',['1','2','3','4'])->default('1');
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
        Schema::dropIfExists('info_servicios');
    }
}
