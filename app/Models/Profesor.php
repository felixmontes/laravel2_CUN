<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected  $table='profesores';
    protected $fillable =['nombre','apellido','edad','alumno_id'];

    public function alumnos(){
        return $this->belongsToMany('App\Models\Alumno','alumno_id');
}
}