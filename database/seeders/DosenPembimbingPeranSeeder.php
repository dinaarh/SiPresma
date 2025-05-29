<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenPembimbingPeranSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_dosen_pembimbing_peran')->insert([
            [
                'nip' => '198501012010121001',
                'kelompok_id' => 1,
                'nama_peran' => 'Pembimbing Utama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198502022011122002',
                'kelompok_id' => 1,
                'nama_peran' => 'Co-Pembimbing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198503032012123003',
                'kelompok_id' => 2,
                'nama_peran' => 'Pembimbing Utama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198504042013124004',
                'kelompok_id' => 2,
                'nama_peran' => 'Mentor Teknis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198505052014125005',
                'kelompok_id' => 3,
                'nama_peran' => 'Pembimbing Utama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198501012010121001',
                'kelompok_id' => 4,
                'nama_peran' => 'Co-Pembimbing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198502022011122002',
                'kelompok_id' => 4,
                'nama_peran' => 'Pembimbing Utama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198503032012123003',
                'kelompok_id' => 5,
                'nama_peran' => 'Mentor Strategis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198504042013124004',
                'kelompok_id' => 3,
                'nama_peran' => 'Co-Pembimbing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198505052014125005',
                'kelompok_id' => 5,
                'nama_peran' => 'Pembimbing Utama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
