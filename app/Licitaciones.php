<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Licitaciones extends Model
{
    protected $table = "licitaciones";

    protected $fillable = [
        'id_escuela',
        'nombre',
        'descripcion',
        'fecha'
    ];

}
