<?php

use Faker\Generator as Faker;

$factory->define(\App\ConsultationMedicament::class, function (Faker $faker) {
    return [
        'consultation_id' => \App\Consultation::all()->random()->id,
        'medicament_id' => \App\Medicament::all()->random()->id,
    ];
});
