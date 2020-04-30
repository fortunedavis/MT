<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Departements\Departement;
use Faker\Generator as Faker;

$factory->define(Departement::class, function (Faker $faker) {
    return [
          'name'=> $faker->name,
          'observations'=>$faker->paragraph
    ];
});
