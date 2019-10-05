<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Imagen;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = Empleado::find(2); 
        $imagen = $empleado->imagen; 
        return $imagen;
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
    public function storecreate (Request $request)
    {
        $empleado=Empleado::find(4);
        $imagen=[
            'url'=>'https://www.easyclass.com'
        ];
        $emp=$empleado->imagen()->create($imagen);
        return $emp;
    }

    public function storecreatemany(Request $request)
{
    $empleado=Empleado::find(5);
    $emp=$empleado->imagen()->createMany([
        [
            'url'=>'https://www.msn.com/es-co/?refurl=%2fes',  
        ],
        [
            'url'=>'https://www.youtube.com'
        ],
    ]);
    return $emp;
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
    public function update(Request $request, $id)
    {
        //
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
