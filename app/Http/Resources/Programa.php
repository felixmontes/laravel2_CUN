<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Programa extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'registro'=>$this->registro,
            'nombre'=>$this->nombre,
        ];
    }
}
