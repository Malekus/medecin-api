<?php

use Faker\Generator as Faker;

$factory->define(\App\Consultation::class, function (Faker $faker) {
    return [
        'medecin_id' => \App\Medecin::all()->get()->random()->id,
        'patient_id' => \App\Patient::all()->get()->random()->id,
    ];
});
