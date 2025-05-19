<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodeSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_periode')->insert([
            'periode_nama' => 'Semester Genap 2024/2025',
            'periode_tahun_awal' => 2024,
            'periode_tahun_akhir' => 2025,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
