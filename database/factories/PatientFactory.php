<?php

use Faker\Generator as Faker;

$factory->define(\App\Patient::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'numsecu' => $faker->numberBetween(intval(100010100100101), intval(899129598999997)),
        'adresse' => $faker->address,
        'tel' => $faker->e164PhoneNumber,
    ];
});
