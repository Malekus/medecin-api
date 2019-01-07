<?php

use Illuminate\Database\Seeder;

class CentresTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Centre::class, 10)->create();
    }
}
