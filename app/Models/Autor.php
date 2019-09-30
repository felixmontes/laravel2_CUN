<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected  $table='autores';
    protected $fillable =['nombre','apellido','edad'];

    public function libros(){
        return $this->hasMany('App\Models\Libro');
}
}