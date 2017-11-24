<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Grupo extends Model
{
    protected $table = "grupo";

    protected $fillable = ['id','nombre','descripcion','id_asignacion','id_persona'];


    public function scopeSearch($query,$nombre)
    {
    	$id = Auth::id();

    	return $query ->whereHas('nombre', 'LIKE',"%$nombre%",function());



    return $query->whereHas('categories', function($q) use ($categoryId){
        $q->where('id', $categoryId)

    }

}