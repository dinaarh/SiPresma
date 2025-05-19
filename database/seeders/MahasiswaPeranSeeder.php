<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaPeranSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_mahasiswa_peran')->insert([
            'nim' => '2341720008',
            'kelompok_id' => 1,
            'nama_peran' => 'Ketua',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
