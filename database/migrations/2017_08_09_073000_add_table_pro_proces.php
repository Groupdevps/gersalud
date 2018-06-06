<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableProProces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_proces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pro')->unsigned()->nullable(false)->change();
            $table->integer('id_proce')->unsigned()->nullable(false)->change();
            //$table->foreign('id_pro')->references('id')->on('proveedores');
            //$table->foreign('id_proce')->references('id')->on('procedimientos')->onDelete('cascade');
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
        Schema::dropIfExists('pro_proces');
    }
}
