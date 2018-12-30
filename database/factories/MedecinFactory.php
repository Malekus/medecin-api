<?php

use Faker\Generator as Faker;

$factory->define(\App\Medecin::class, function (Faker $faker) {

    return [
        'nom' => $faker->name,
        'prenom' => $faker->firstName,
        'diplome' => $faker->randomElement(\App\Configuration::where(['categorie' => 'Médecin', 'type' => 'Diplôme'])->pluck('id')),
        'specialite' => $faker->randomElement(\App\Configuration::where(['categorie' => 'Médecin', 'type' => 'Spécialité'])->pluck('id')),
    ];
});
