<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_mahasiswa')->insert([
            [
                'nim' => '2341760001',
                'nama' => 'Ahmad Rizki Pratama',
                'lokasi_preferensi' => 'Malang',
                'user_id' => 1,
                'prodi_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341760002',
                'nama' => 'Siti Nurhaliza',
                'lokasi_preferensi' => 'Surabaya',
                'user_id' => 2,
                'prodi_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341760003',
                'nama' => 'Budi Santoso',
                'lokasi_preferensi' => 'Jakarta',
                'user_id' => 3,
                'prodi_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341760004',
                'nama' => 'Diana Putri',
                'lokasi_preferensi' => 'Bandung',
                'user_id' => 4,
                'prodi_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341760005',
                'nama' => 'Eko Wahyudi',
                'lokasi_preferensi' => 'Yogyakarta',
                'user_id' => 5,
                'prodi_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
