<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becas',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_escuela');
            $table->string('tipo');
            $table->integer('numero_beneficiarios');
            $table->string('vigencia');
            $table->integer('monto');
            $table->string('periodicidad');
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
        Schema::drop('becas');
    }
}
