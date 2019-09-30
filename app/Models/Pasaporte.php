<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasaporte extends Model
{
    protected  $table='pasaportes';
    protected $fillable =['id','numero','pasajero_id'];

    public function pasajero(){
        return $this->belongsTo('App\Models\Pasajero','pasajero_id');
}



}