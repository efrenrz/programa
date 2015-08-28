<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Convenios extends Model
{
    protected $table = "convenios";
    protected $fillable = [
        'id_escuela',
        'descripcion',
        'fecha',
        'monto'
    ];


}
