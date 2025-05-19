<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenPembimbingSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_dosen_pembimbing')->insert([
            'nip' => '197001011234',
            'nama' => 'Moch Zawaruddin Abdullah',
            'bidang_keahlian' => 'AI',
            'kompetensi' => 'Machine Learning',
            'minat' => 'Data Science',
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
