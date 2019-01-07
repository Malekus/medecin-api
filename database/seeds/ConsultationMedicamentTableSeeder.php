<?php

use Illuminate\Database\Seeder;

class ConsultationMedicamentTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\ConsultationMedicament::class, 200)->create();
    }
}
