<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelompokSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_kelompok')->insert([
            'nama_kelompok' => 'Kelompok A',
            'lomba_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
