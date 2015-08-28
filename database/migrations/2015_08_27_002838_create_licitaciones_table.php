<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitaciones',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_escuela');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('fecha');
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
        Schema::drop('licitaciones');
    }
}
