<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaPeranSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_mahasiswa_peran')->insert([
            // Kelompok 1
            [
                'nim' => '2341760001',
                'kelompok_id' => 1,
                'nama_peran' => 'Ketua Tim',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '2341760002',
                'kelompok_id' => 1,
                'nama_peran' => 'Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kelompok 2
            [
                'nim' => '2341760002',
                'kelompok_id' => 2,
                'nama_peran' => 'Business Analyst',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '2341760003',
                'kelompok_id' => 2,
                'nama_peran' => 'Marketing Lead',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kelompok 3
            [
                'nim' => '2341760003',
                'kelompok_id' => 3,
                'nama_peran' => 'AI Researcher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '2341760004',
                'kelompok_id' => 3,
                'nama_peran' => 'Data Scientist',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kelompok 4
            [
                'nim' => '2341760004',
                'kelompok_id' => 4,
                'nama_peran' => 'System Architect',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '2341760005',
                'kelompok_id' => 4,
                'nama_peran' => 'UI/UX Designer',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kelompok 5
            [
                'nim' => '2341760005',
                'kelompok_id' => 5,
                'nama_peran' => 'Security Expert',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '2341760001',
                'kelompok_id' => 5,
                'nama_peran' => 'Penetration Tester',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
