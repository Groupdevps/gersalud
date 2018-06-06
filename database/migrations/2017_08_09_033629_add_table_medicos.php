<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableMedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nitcentro')->index();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->bigInteger('cc')->index();
            $table->bigInteger('telefono');
            $table->string('tarjeta_p');
            $table->enum('roll',['Medico General','Medico PYP','Medico Hipertensos'])->default('Medico General');
            //$table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('nitcentro')->references('nit')->on('centros')->onDelete('cascade');
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
        Schema::dropIfExists('medicos');
    }
}
