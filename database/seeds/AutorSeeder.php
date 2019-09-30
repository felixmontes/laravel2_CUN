<?php

use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autores=factory(App\Models\Autor::class,6)->create()
        ->each(function($autor){
            $autor->libros()->save(factory(App\Models\Libro::class)->make());
       
        });
    }
}
