<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Patient::class, 80)->create();
    }
}
