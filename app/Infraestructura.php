<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    protected $table = 'infraestructura';

    protected $fillable = [
        'id_escuela',
        'tipo_recursos',
        'total_recursos',
        'avance',
        'recursos_ejercer',
        'fecha',
        'observaciones',
    ];
}
