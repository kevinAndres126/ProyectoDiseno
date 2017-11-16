<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "grupo";

    protected $fillable = ['id','nombre','descripcion','id_asignacion','id_persona'];


    public function scopeSearch($query,$nombre)
    {
    	return $query ->where('nombre', 'LIKE',"%$nombre%");
    }

}