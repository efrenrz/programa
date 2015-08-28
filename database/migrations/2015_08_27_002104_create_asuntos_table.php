<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuntos',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_escuela');
            $table->string('descripcion');
            $table->enum('tipo',['Recursos','Elección','Jurídico','Proyectos','Eventos']);
            $table->string('organismos_relacionados');
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
        Schema::drop('asuntos');
    }
}
