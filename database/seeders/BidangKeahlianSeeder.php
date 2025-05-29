<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangKeahlianSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_bidang_keahlian')->insert([
            [
                'bidang_keahlian_nama' => 'Machine Learning',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bidang_keahlian_nama' => 'Frontend Development',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bidang_keahlian_nama' => 'Backend Development',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bidang_keahlian_nama' => 'Database Management',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bidang_keahlian_nama' => 'Network Security',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
