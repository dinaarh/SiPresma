<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KompetensiSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_kompetensi')->insert([
            [
                'kompetensi_nama' => 'Python Programming',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kompetensi_nama' => 'JavaScript Programming',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kompetensi_nama' => 'React.js Framework',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kompetensi_nama' => 'Laravel Framework',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kompetensi_nama' => 'MySQL Database',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
