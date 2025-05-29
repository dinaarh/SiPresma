<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinatLombaSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_minat_lomba')->insert([
            // Lomba ID 1 - Hackathon Nasional 2025
            ['lomba_id' => 1, 'minat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['lomba_id' => 1, 'minat_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Lomba ID 2 - Business Plan Competition
            ['lomba_id' => 2, 'minat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['lomba_id' => 2, 'minat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Lomba ID 3 - AI Innovation Challenge
            ['lomba_id' => 3, 'minat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['lomba_id' => 3, 'minat_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Lomba ID 4 - Smart City Competition
            ['lomba_id' => 4, 'minat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['lomba_id' => 4, 'minat_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Lomba ID 5 - Cybersecurity Challenge
            ['lomba_id' => 5, 'minat_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['lomba_id' => 5, 'minat_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
