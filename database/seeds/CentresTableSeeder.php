<?php

use Illuminate\Database\Seeder;

class CentresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Centre::class, 10)->create();
    }
}
