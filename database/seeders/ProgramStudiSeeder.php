<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramStudiSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_program_studi')->insert([
            [
                'prodi_nama' => 'D-IV Teknik Informatika',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'prodi_nama' => 'D-IV Sistem Informasi Bisnis',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'prodi_nama' => 'D-II Pengembangan Piranti Lunak Situs',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
