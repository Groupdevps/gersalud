<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanillaCppypsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_cppyps', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('roll',['Agudeza visual','Aduldo mayos'])->default('Agudeza visual');
            $table->string('numero_atencion');
            $table->string('numero_ingreso');
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
        Schema::dropIfExists('planilla_cppyps');
    }
}
