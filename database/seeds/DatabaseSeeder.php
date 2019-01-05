<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ConfigurationsTableSeeder::class,
            MedecinsTableSeeder::class,
            MedicamentsTableSeeder::class,
            PatientsTableSeeder::class,
            ConsultationsTableSeeder::class,
            ConsultationMedicamentTableSeeder::class,
            CentresTableSeeder::class,
        ]);
    }
}
