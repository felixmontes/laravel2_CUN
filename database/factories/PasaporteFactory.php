<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Pasaporte::class, function (Faker $faker) {
    return [

     'numero'=>$faker->numberBetween($min = 1000, $max = 9000),

     'pasajero_id'=>function(){
     return Factory(App\Models\Pasajero::class)-> create()->id;
       }
        
    ];
});
  