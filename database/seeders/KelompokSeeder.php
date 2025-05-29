<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelompokSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_kelompok')->insert([
            [
                'kelompok_nama' => 'Code Warriors',
                'lomba_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kelompok_nama' => 'AI Innovators',
                'lomba_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kelompok_nama' => 'Web Designers',
                'lomba_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kelompok_nama' => 'Mobile Masters',
                'lomba_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kelompok_nama' => 'Cyber Defenders',
                'lomba_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
