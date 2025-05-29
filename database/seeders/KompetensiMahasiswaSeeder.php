<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KompetensiMahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_kompetensi_mahasiswa')->insert([
            // Mahasiswa dengan NIM 2341760001
            ['nim' => '2341760001', 'kompetensi_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760001', 'kompetensi_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760002
            ['nim' => '2341760002', 'kompetensi_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760002', 'kompetensi_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760003
            ['nim' => '2341760003', 'kompetensi_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760003', 'kompetensi_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760004
            ['nim' => '2341760004', 'kompetensi_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760004', 'kompetensi_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760005
            ['nim' => '2341760005', 'kompetensi_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760005', 'kompetensi_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
