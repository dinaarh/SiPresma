<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodeSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_periode')->insert([
            [
                'periode_nama' => 'Genap 2023/2024',
                'periode_tahun_awal' => 2023,
                'periode_tahun_akhir' => 2024,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'periode_nama' => 'Ganjil 2024/2025',
                'periode_tahun_awal' => 2024,
                'periode_tahun_akhir' => 2025,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'periode_nama' => 'Genap 2024/2025',
                'periode_tahun_awal' => 2024,
                'periode_tahun_akhir' => 2025,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'periode_nama' => 'Ganjil 2025/2026',
                'periode_tahun_awal' => 2025,
                'periode_tahun_akhir' => 2026,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'periode_nama' => 'Genap 2025/2026',
                'periode_tahun_awal' => 2025,
                'periode_tahun_akhir' => 2026,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
