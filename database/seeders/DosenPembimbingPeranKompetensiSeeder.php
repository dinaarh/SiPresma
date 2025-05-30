<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenPembimbingPeranKompetensiSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_dosen_pembimbing_peran_kompetensi')->insert([
            // Peran ID 1 (Pembimbing Utama) - multiple kompetensi
            [
                'peran_id' => 1,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 1,
                'kompetensi_id' => 2, // Project Management
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 1,
                'kompetensi_id' => 3, // Communication
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 2 (Co-Pembimbing) - kompetensi teknis
            [
                'peran_id' => 2,
                'kompetensi_id' => 4, // Technical Skills
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 2,
                'kompetensi_id' => 5, // Problem Solving
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 3 (Pembimbing Utama kelompok 2)
            [
                'peran_id' => 3,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 3,
                'kompetensi_id' => 3, // Communication
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 4 (Mentor Teknis)
            [
                'peran_id' => 4,
                'kompetensi_id' => 4, // Technical Skills
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 4,
                'kompetensi_id' => 5, // Problem Solving
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 5 (Pembimbing Utama kelompok 3)
            [
                'peran_id' => 5,
                'kompetensi_id' => 2, // Project Management
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 5,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 6 (Co-Pembimbing kelompok 4)
            [
                'peran_id' => 6,
                'kompetensi_id' => 3, // Communication
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 7 (Pembimbing Utama kelompok 4)
            [
                'peran_id' => 7,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 7,
                'kompetensi_id' => 2, // Project Management
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 8 (Mentor Strategis)
            [
                'peran_id' => 8,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 8,
                'kompetensi_id' => 2, // Project Management
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
