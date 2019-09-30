<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected  $table='alumnos';
    protected $fillable =['nombre','apellido','edad'];

    public function profesores(){
        return $this->belongsToMany('App\Models\Profesor');
    }
}


 //return $this->belongsToMany('App\Models\Profesor','alumnos_profesores')