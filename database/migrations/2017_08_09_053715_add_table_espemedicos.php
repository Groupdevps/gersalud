<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableEspemedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espemedicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cc_doctor')->index();
            $table->integer('id_esp')->unsigned()->nullable(false)->change();;
            $table->datetime('fecha');
            $table->timestamps();
           // $table->foreign('cc_doctor')->references('cc')->on('medicos')->onDelete('cascade');
          //  $table->foreign('id_esp')->references('id')->on('especialidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espemedicos');
    }
}
