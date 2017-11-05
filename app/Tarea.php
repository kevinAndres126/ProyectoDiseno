<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = "Tarea";

    protected $fillable = ['id','nombre','descripcion','tipo','fechaCreacion','fechaEntrega','valor','calificacion','id_grupo'];
}