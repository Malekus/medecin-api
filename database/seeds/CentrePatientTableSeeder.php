<?php

use Illuminate\Database\Seeder;

class CentrePatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CentrePatient::class, 100)->create();
    }
}
