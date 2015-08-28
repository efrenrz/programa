<?php

namespace programa;

use Illuminate\Database\Eloquent\Model;

class Reforma extends Model
{
    protected $table = "reforma";

    protected $fillable = [
        'id_escuela',
        'impacto',
        'descripcion'
    ];


}
