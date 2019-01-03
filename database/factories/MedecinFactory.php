<?php

use Faker\Generator as Faker;

$factory->define(\App\Medecin::class, function (Faker $faker) {

    return [
        'nom' => $faker->name,
        'prenom' => $faker->firstName,
        'diplome_id' => \App\Configuration::where(['categorie' => 'Médecin', 'type' => 'Diplôme'])->get()->random()->id,
        'specialite_id' => \App\Configuration::where(['categorie' => 'Médecin', 'type' => 'Spécialité'])->get()->random()->id,
    ];
});
