<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PasajeroRequest;
use App\Models\Pasajero;
use App\Models\Pasaporte;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pasajero=Pasajero::all();
       // return $pasajero;
         return csrf_token(); //u6frn5H8XepuZsIXPuAqXzaPL9vxEJsry03iwzPF
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasajeroRequest $request)
    {
        // $pasajero=Pasajero::create($request->all());
        // $pasaporte= [ 'numero'=>'4514'];
        // $pasajero_pasaporte=$pasajero->pasaporte()->create($pasaporte);
        // return $pasajero_pasaporte;
        
        $data=$request->all();
     $pasajero=Pasajero::create($data);
        return $pasajero;
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PasajeroRequest $request, $id)
    {
$pasajero=Pasajero::find($id);
$datosp=array();
$datosp['nombre']=$request->nombre;
$datosp['apellido']=$request->apellido;
$datosp['direccion']=$request->direccion;
$datosp['telefono']=$request->telefono;

$pasajero->update($datosp);
return $pasajero;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
