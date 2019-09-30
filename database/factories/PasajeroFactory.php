<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Pasajero::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastName,
        'direccion'=>$faker->address,
        'telefono' =>$faker->numberBetween($min = 2000, $max = 10000),
    ];
});
