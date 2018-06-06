<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableProMedicamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_medicamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit_pro')->unsigned()->nullable(false)->change();
            $table->integer('codigo_atc')->unsigned()->nullable(false)->change();;
          //  $table->foreign('nit_pro')->references('nit')->on('proveedores')->onDelete('cascade');
           // $table->foreign('codigo_atc')->references('codigo_atc')->on('medicamentos')->onDelete('cascade');
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
        Schema::dropIfExists('pro_medicamentos');
    }
}
