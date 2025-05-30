<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_admin')->insert([
            [
                'nip' => '199001012015011001',
                'nama' => 'Fajar Suryanto',
                'user_id' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '199002022015022002',
                'nama' => 'Gita Maharani',
                'user_id' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '199003032015033003',
                'nama' => 'Hendra Kusuma',
                'user_id' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '199004042015044004',
                'nama' => 'Indira Sari',
                'user_id' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nip' => '199005052015055005',
                'nama' => 'Joko Widodo',
                'user_id' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
