<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected  $table='empleados';
    protected $fillable =['nombre'];

    public function imagen() { 
        return $this->morphMany('App\Models\Imagen','imageable');
    }
}   