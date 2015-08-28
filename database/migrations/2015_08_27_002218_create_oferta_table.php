<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_escuela');
            $table->string('nombre');
            $table->string('tipo');
            $table->enum('estatus',['tramite', 'vigente']);
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
        Schema::drop('oferta');
    }
}
