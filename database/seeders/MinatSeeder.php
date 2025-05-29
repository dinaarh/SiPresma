<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinatSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_minat')->insert([
            [
                'minat_nama' => 'Artificial Intelligence',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'minat_nama' => 'Web Development',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'minat_nama' => 'Mobile Development',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'minat_nama' => 'Data Science',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'minat_nama' => 'Cyber Security',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
