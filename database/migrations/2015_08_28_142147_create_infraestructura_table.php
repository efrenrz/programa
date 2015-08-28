<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraestructuraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructura',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_escuela');
            $table->string('tipo_recursos');
            $table->string('total_recursos');
            $table->string('avance');
            $table->string('recursos_ejercer');
            $table->string('fecha');
            $table->text('observaciones');
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
        Schema::drop('infraestructura');
    }
}
