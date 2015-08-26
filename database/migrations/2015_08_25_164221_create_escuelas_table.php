<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre')->unique()  ;
            $table->string('titular');
            $table->integer('tiempo_en_cargo');
            $table->string('designacion');
            $table->date('terminacion');
            $table->string('organigrama');
            $table->text('observaciones_generales');
            //datos finanncieros
            $table->integer('presupuesto_estatal');
            $table->integer('presupUesto_federal');
            $table->integer('ingresos_propios');
            $table->integer('otros_estatales');
            $table->integer('otros_federales');
            $table->integer('avance_gastos');
            $table->integer('total_nomina_mensual');
            $table->integer('total_personal');
            $table->string('nomina_administrativa');
            $table->string('nomina_academica_plaza');
            $table->string('nomina_honorarios');
            $table->text('observaciones_financieras');
            //infraestructura
            $table->integer('recursos_obra');
            $table->text('origen_recursos');
            $table->integer('porcentaje_avance');
            $table->integer('recursos_ejercer');
            $table->date('fecha_terminacion');
            $table->text('observaciones_infraestructura');

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
        Schema::drop('escuelas');
    }
}
