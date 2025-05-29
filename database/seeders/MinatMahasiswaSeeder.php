<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinatMahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_minat_mahasiswa')->insert([
            ['nim' => '2341760001', 'minat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760001', 'minat_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            ['nim' => '2341760002', 'minat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760002', 'minat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['nim' => '2341760003', 'minat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760003', 'minat_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['nim' => '2341760004', 'minat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760004', 'minat_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            ['nim' => '2341760005', 'minat_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2341760005', 'minat_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
