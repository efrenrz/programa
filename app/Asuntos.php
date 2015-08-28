<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Asuntos extends Model
{
    protected $table = "asuntos";

    protected $fillable = [
        'id_escuela',
        'descripcion',
        'tipo',
        'organismos_relacionados'
    ];
}
