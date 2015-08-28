<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representaciones',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_escuela');
            $table->string('nombre_representante');
            $table->string('cargo');
            $table->string('vigencia');
            $table->string('pendientes');
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
        Schema::drop('representaciones');
    }
}
