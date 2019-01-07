<?php

use Illuminate\Database\Seeder;

class CentrePatientTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\CentrePatient::class, 100)->create();
    }
}
