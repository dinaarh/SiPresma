<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaPeranKompetensiSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_mahasiswa_peran_kompetensi')->insert([
            // Peran ID 1 (Leader/Ketua kelompok 1) - butuh leadership & communication
            [
                'peran_id' => 1,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 1,
                'kompetensi_id' => 3, // Communication
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 2 (Anggota/Developer kelompok 1) - butuh technical skills
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

            // Peran ID 3 (Leader kelompok 2)
            [
                'peran_id' => 3,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 3,
                'kompetensi_id' => 2, // Project Management
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 4 (Anggota kelompok 2)
            [
                'peran_id' => 4,
                'kompetensi_id' => 4, // Technical Skills
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 5 (Leader kelompok 3)
            [
                'peran_id' => 5,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 5,
                'kompetensi_id' => 3, // Communication
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 6 (Anggota kelompok 3)
            [
                'peran_id' => 6,
                'kompetensi_id' => 5, // Problem Solving
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 7 (Leader kelompok 4)
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

            // Peran ID 8 (Anggota kelompok 4)
            [
                'peran_id' => 8,
                'kompetensi_id' => 4, // Technical Skills
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 9 (Leader kelompok 5)
            [
                'peran_id' => 9,
                'kompetensi_id' => 1, // Leadership
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 9,
                'kompetensi_id' => 3, // Communication
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Peran ID 10 (Anggota kelompok 5)
            [
                'peran_id' => 10,
                'kompetensi_id' => 4, // Technical Skills
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peran_id' => 10,
                'kompetensi_id' => 5, // Problem Solving
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
