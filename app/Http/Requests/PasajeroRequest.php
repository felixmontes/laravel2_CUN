<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PasajeroRequest extends FormRequest
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
            'nombre'=>'required|min:5|max:30|alpha_spaces|uppercase',
           'apellido'=>'required|min:5|max:20|alpha_spaces',
           'direccion'=>'required|alpha_num',
        'telefono'=>'required|starts_with:+|min:4|numeric',
        
        ];
    }
    public function attributes()
   {
    return [
        'nombre'=>'Nombres',
       'apellido'=>'Apellidos',
       'direccion'=>'Direccion',
       'telefono'=>'Telefono',
    ];
   }
   public function messages()
   {
    return [ 
    'nombre.required'=>'El Nombre es requerido',
    'apellido.required'=>'El Apellido es requerido',
    'direccion.required'=>'La Direccion es requerida',
    'telefono.required'=>'El Telefono es requerido', 

    'nombre.min'=>'El Nombre debe tener al menos 5 caracteres',
    'nombre.alpha_spaces'=>'El Nombre solo puede contener letras y espacios.',
    'nombre.uppercase'=>'El Nombre debe tener alguna letra en mayúscula',
    'apellido.min'=>'El Apellido debe tener al menos 5 caracteres.',
    'apellido.alpha_spaces'=>'El Apellido solo puede contener letras y espacios.',
    'direccion.alpha_num'=>'La Dirección solo puede contener  letras y números.',
     'telefono.numeric'=>'El Telefono requiriere ser numérico',
     'telefono.starts_with'=>'El Teléfono debe comenzar con el siguiente:+',
   'telefono.min'=>'El teléfono debe tener al menos más de 4 caracteres.',
      
   ];
   }
}

