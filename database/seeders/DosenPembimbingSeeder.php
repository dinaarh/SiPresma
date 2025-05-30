<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenPembimbingSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_dosen_pembimbing')->insert([
            [
                'nip' => '198501012010121001',
                'nama' => 'Dr. Agus Harjoko, M.Kom',
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '198502022011122002',
                'nama' => 'Dr. Budi Raharjo, M.T',
                'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '198503032012123003',
                'nama' => 'Dr. Citra Dewi, M.Kom',
                'user_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '198504042013124004',
                'nama' => 'Dr. Dedi Setiawan, M.Sc',
                'user_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '198505052014125005',
                'nama' => 'Dr. Eka Pratiwi, M.T',
                'user_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
