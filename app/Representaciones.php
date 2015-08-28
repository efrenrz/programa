<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Representaciones extends Model
{
    protected $table = "representaciones";

    protected $fillable = [
        'id_escuela',
        'nombre_representante',
        'cargo',
        'vigencia',
        'pendientes'
    ];


}
