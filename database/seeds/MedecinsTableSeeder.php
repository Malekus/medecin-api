<?php

use Illuminate\Database\Seeder;

class MedecinsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Medecin::class, 50)->create();
    }
}
