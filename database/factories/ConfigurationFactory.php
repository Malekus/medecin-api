<?php

use Faker\Generator as Faker;

$factory->define(\App\Configuration::class, function (Faker $faker) {
    return [
        'categorie' => $faker->randomElement(['ahjhgt', 'fqffzeb', 'cdzedzedzed']),
        'type' => $faker->randomElement(['ahjhgt', 'fqffzeb', 'cdzedzedzed']),
        'label' => $faker->randomElement(['ahjhgt', 'fqffzeb', 'cdzedzedzed']),
    ];
});
