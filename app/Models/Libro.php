<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected  $table='libros';
    protected $fillable =['id','nombre','descripcion','numero_paginas'];

    public function autore(){
        return $this->belongsTo('App\Models\Autor','autor_id');
}
}