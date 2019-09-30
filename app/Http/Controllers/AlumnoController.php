<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use App\Models\Profesor;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno=Alumno::all();
        return $alumno;
        //return csrf_token();
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

     public function storeAttach(Request $request)
        {
            $alumno=Alumno::find(41);
            $profesor=Profesor::all()->pluck('id');
    
            $alumno->profesores()->attach($profesor);
            return  $alumno->profesor;
    
        }
        public function storeSync(Request $request)
        {
            $alumno=Alumno::find(60);
            $profesor=Profesor::all()->pluck('id')->toArray();
    
            $alumno->profesores()->sync($profesor);
            return  $alumno->profesor;
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
