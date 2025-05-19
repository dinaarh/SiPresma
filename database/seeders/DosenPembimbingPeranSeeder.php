<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenPembimbingPeranSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_dosen_pembimbing_peran')->insert([
            'nip' => '197001011234',
            'kelompok_id' => 1,
            'nama_peran' => 'Pembimbing Utama',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
