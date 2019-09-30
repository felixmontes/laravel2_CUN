<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Profesor::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastName,
        'edad'=>$faker->numberBetween($min = 22, $max = 80),

        'alumno_id'=>function(){
          return Factory(App\Models\Alumno::class)-> create()->id;
        }
    ];
});
