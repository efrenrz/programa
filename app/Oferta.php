<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = "oferta";

    protected $fillable = [
        'id_escuela',
        'nombre',
        'tipo',
        'estatus'
    ];


}
