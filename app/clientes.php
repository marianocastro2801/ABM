<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    public function scopeNombres($query, $nombre) {
    	if ($nombre) {
    		return $query->where('nombre','like',"%$nombre%");
    	}
    }

/*  PARA BUSCAR POR MAS CAMPOS
     public function scopeApellidos($query, $apellido) {
    	if ($apellido) {
    		return $query->where('apellido','like',"%$apellido%");
    	}
    }


    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    } */



}
