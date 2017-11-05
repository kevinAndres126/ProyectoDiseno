<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = "asignacion";

    protected $fillable = ['id','nombre','descripcion','tipo','fechaCreacion','fechaEntrega','valor','calificacion'];
}