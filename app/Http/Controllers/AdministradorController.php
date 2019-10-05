<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Models\Imagen;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $administrador=Administrador::all();
        return csrf_token();  //tdqGr7qezbLnFDeEW7odFNvVNuEUv7szlmyNCHVh  */
        $administrador = Administrador::find(2); 
        $imagen = $administrador->imagen; 
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
    public function storecreate(Request $request)
    {
        $administrador=Administrador::find(1);
        $imagen=[
            'url'=>'https://www.gettyimages.es'
        ];
        $adm=$administrador->imagen()->create($imagen);
        return $adm;
    }

    public function storecreatemany(Request $request)
{
    $administrador=Administrador::find(2);
    $adm=$administrador->imagen()->createMany([
        [
            'url'=>'https://richos.gitbooks.io/laravel-5/content/capitulos/chapter8.html',  
        ],
        [
            'url'=>'https://github.com/felixmontes/laravel2_CUN'
        ],
    ]);

    return $adm;
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
