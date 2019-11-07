<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasaporteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'numero'=>'required|numeric',
            'pasajero_id'=>'required|numeric',
            
        ];
    }
    public function attributes()
    {
     return [
         'numero'=>'Numero',
        'pasajero_id'=>'Pasajero',
     ];
    }

    public function messages()
    {
     return [ 
     'numero.required'=>'El Número de pasaporte es requerido',
     'pasajero_id.required'=>'El Pasajero del pasaporte es requerido',
    
     'numero.numeric'=>'El Número de pasaporte solo puede contener números.',
     'pasajero_id.numeric'=>'El Pasajero del pasaporte requiriere ser numérico',
  
    ];
    }
}
