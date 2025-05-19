<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_admin')->insert([
            'nip' => '1987654321',
            'nama' => 'Admin Satu',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
