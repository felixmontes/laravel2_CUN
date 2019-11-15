<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table='clases';

    protected $fillable = ['nombre','aula','estado','curso_id' ];

    public function curso(){
        return $this->belongsTo('App\Models\Curso','curso_id');
    }

    public function programas(){
        return $this->hasMany('App\Models\Programa');
    }

     public function getDatosClaseAttribute(){
     return "{$this->id} {$this->nombre} {$this->aula} {$this->curso_id}";  
     }

     public function getListaProgramaAttribute(){
       return $this->programas;
     }

     public function getListaCursoAttribute(){
      return $this->cursos;
     }

     Protected $appends=[
       'lista_programa',
       ];

   protected $casts = [
      'estado' => 'boolean',];
  
}

