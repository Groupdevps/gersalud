<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableInfoAseguradoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_aseguradoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eps');
            $table->enum('contrato',['Contrato1','Contrato2'])->default('Contrato1');
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
        Schema::dropIfExists('info_aseguradoras');
    }
}
