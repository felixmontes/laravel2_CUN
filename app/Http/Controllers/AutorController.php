<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Libro;
class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autor=Autor::all();
        return $autor;
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
    public function store(Request $request)
    {
        $autor=Autor::create($request->all());
        $autorg=$autor->libros()->saveMany([ new Libro([
                
            'nombre'=>'chafdd ruing',
            'descripcion'=>'panteringffff',
            'numero_paginas'=>'510', ]),
         
                new Libro([
            
                'nombre'=>'charter ruing',
                'descripcion'=>'panteringffff',
                'numero_paginas'=>'410',
            ]),
            
       ]);    
       return $autorg;
       

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $autor=Autor::create($request->all());
        $autorg=$autor->libros()->createMany([
            [ 
                'nombre'=>'walter rung',
                'descripcion'=>'principe charter ',
                'numero_paginas'=>'451', 
            ],
            [ 
                'nombre'=>'brena ned',
                'descripcion'=>'arturo card ',
                'numero_paginas'=>'551', 
            ],
        ]);
        return $autorg;
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
