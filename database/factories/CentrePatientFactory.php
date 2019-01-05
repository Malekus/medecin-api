<?php

use Faker\Generator as Faker;

$factory->define(\App\CentrePatient::class, function (Faker $faker) {
    return [
        'centre_id' => \App\Centre::all()->random()->id,
        'patient_id' => \App\Patient::all()->random()->id,
    ];
});
