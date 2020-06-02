<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modele\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(3, true),
        'anneeSortie' => $faker->year($max='now'),
        'description' => $faker->sentence(4, false),
        'id_categorie' => $faker->numberBetween(1,5),
    ];
});
