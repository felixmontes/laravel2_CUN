<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


     $this->call(PasajeroSeeder::class);
      // $this->call(AutorSeeder::class);
      //$this->call(AlumnoSeeder::class);
      // $this->call(CursoSeeder::class);
      
      // $this->call(AdministradorSeeder::class);
       // $this->call(EmpleadoSeeder::class);
      // $this->call(UsuarioSeeder::class);
    }
}
