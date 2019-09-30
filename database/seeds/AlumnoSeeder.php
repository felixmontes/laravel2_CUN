<?php

use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumnos=factory(App\Models\Alumno::class,10)->create()
        ->each(function($alumno){
            $alumno->profesores()->save(factory(App\Models\Profesor::class)->make());
       
        });
    }
}
