<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Becas extends Model
{
    protected $table = "becas";

    protected $fillable = [
        'id_escuela',
        'tipo',
        'numero_beneficiarios',
        'vigencia',
        'monto',
        'periodicidad'
    ];

}
