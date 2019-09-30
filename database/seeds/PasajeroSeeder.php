<?php

use Illuminate\Database\Seeder;

class PasajeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasajeros=factory(App\Models\Pasajero::class,5)->create()
        ->each(function($pasajero){
            $pasajero->pasaporte()->save(factory(App\Models\Pasaporte::class)->make());
       
        }); 
    }
}
