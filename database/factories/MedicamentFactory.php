<?php

use Faker\Generator as Faker;

$factory->define(\App\Medicament::class, function (Faker $faker) {
    return [
        'nom_id' => \App\Configuration::where(['categorie' => 'Médicament', 'type' => 'Nom'])->get()->random()->id,
        'type_id' => \App\Configuration::where(['categorie' => 'Médicament', 'type' => 'Type'])->get()->random()->id,
    ];
});
