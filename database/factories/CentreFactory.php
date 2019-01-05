<?php

use Faker\Generator as Faker;

$factory->define(\App\Centre::class, function (Faker $faker) {
    return [
        'nom' => $faker->cityPrefix,
        'type_id' => \App\Configuration::where(['categorie' => 'Centre', 'type' => 'Type'])->get()->random()->id,
        'adresse' => $faker->address,
    ];
});
