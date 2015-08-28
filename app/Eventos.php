<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = "eventos";

    protected $fillable = [
        'id_escuela',
        'tipo_evento',
        'fecha_compromiso',
        'monto_recursos',
    ];


}
