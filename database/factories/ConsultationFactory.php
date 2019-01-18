<?php

use Faker\Generator as Faker;

$factory->define(\App\Consultation::class, function (Faker $faker) {
    return [
        'medecin_id' => \App\Medecin::all()->random()->id,
        'patient_id' => \App\Patient::all()->random()->id,
        'type_id' => \App\Configuration::where(['categorie' => 'Consultation', 'type' => 'Type'])->get()->random()->id,
    ];
});
