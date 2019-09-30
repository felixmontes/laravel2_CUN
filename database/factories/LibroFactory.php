<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Libro::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->jobTitle,
        'descripcion'=>$faker->text($maxNbChars = 200),
        'numero_paginas'=>$faker->buildingNumber,

        'autor_id'=>function(){
            return Factory(App\Models\Autor::class)-> create()->id;
              }

    ];
});
