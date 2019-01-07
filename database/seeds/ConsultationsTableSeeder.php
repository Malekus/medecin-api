<?php

use Illuminate\Database\Seeder;

class ConsultationsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Consultation::class, 50)->create();
    }
}
