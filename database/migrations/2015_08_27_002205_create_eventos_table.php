<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_escuela');
            $table->string('tipo_evento');
            $table->string('fecha_compromiso');
            $table->integer('monto_recursos');
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
        Schema::drop('eventos');
    }
}
