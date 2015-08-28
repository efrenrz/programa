<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model
{
    protected $table = "escuelas";

    protected $fillable = [
            'nombre',
            'titular',
            'tiempo_en_cargo',
            'designacion',
            'terminacion',
            'organigrama',
            'observaciones_generales',
            'presupuesto_estatal',
            'presupuesto_federal',
            'ingresos_propios',
            'otros_estatales',
            'otros_federales',
            'avance_gastos',
            'total_nomina_mensual',
            'total_personal',
            'nomina_administrativa',
            'nomina_academica_plaza',
            'nomina_honorarios',
            'observaciones_financieras',
            'recursos_obra',
            'origen_recursos',
            'porcentaje_avance',
            'recursos_ejercer',
            'fecha_terminacion',
            'observaciones_infraestructura'
        ];

    //
}
