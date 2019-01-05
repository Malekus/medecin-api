<?php

use Illuminate\Database\Seeder;

class ConsultationMedicamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ConsultationMedicament::class, 200)->create();
    }
}
