<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeahlianMahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_keahlian_mahasiswa')->insert([
            // Mahasiswa dengan NIM 2341760001
            ['nim' => '2341760001', 'bidang_keahlian_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760001', 'bidang_keahlian_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760002
            ['nim' => '2341760002', 'bidang_keahlian_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760002', 'bidang_keahlian_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760003
            ['nim' => '2341760003', 'bidang_keahlian_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760003', 'bidang_keahlian_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760004
            ['nim' => '2341760004', 'bidang_keahlian_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760004', 'bidang_keahlian_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Mahasiswa dengan NIM 2341760005
            ['nim' => '2341760005', 'bidang_keahlian_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760005', 'bidang_keahlian_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
