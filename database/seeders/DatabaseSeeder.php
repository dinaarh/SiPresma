<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProgramStudiSeeder::class,
            PeriodeSeeder::class,
            AdminSeeder::class,
            DosenPembimbingSeeder::class,
            MahasiswaSeeder::class,
            LombaSeeder::class,
            KelompokSeeder::class,
            DosenPembimbingPeranSeeder::class,
            MahasiswaPeranSeeder::class,
            PrestasiSeeder::class,
        ]);
    }
}
