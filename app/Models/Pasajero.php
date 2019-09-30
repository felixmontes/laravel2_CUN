<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    protected  $table='pasajeros';

    protected $fillable =['nombre','apellido','direccion','telefono'];

    public function pasaporte(){
        return $this->hasOne('App\Models\Pasaporte');

    }

  
}
