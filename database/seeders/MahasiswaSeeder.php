<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_mahasiswa')->insert([
            [
                'nim' => '2341720050',
                'nama' => 'Dina Rahmawati',
                'bidang_keahlian' => 'Teknik Informatika',
                'kompetensi' => 'Backend Development',
                'minat' => 'Web Development',
                'lokasi_preferensi' => 'Malang',
                'foto_profil_url' => 'https://example.com/photos/dina.jpg',
                'user_id' => 3,
                'prodi_id' => 1,
                'periode_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341720128',
                'nama' => 'Fawwaz Alifio Farsa',
                'bidang_keahlian' => 'Teknik Informatika',
                'kompetensi' => 'Frontend Development',
                'minat' => 'UI/UX',
                'lokasi_preferensi' => 'Malang',
                'foto_profil_url' => 'https://example.com/photos/fawwaz.jpg',
                'user_id' => 4,
                'prodi_id' => 1,
                'periode_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341720008',
                'nama' => 'Haikal Muhammad Rafli',
                'bidang_keahlian' => 'Teknik Informatika',
                'kompetensi' => 'Mobile Development',
                'minat' => 'Flutter',
                'lokasi_preferensi' => 'Surabaya',
                'foto_profil_url' => 'https://example.com/photos/haikal.jpg',
                'user_id' => 5,
                'prodi_id' => 1,
                'periode_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341720213',
                'nama' => 'Ghaisan Rafa Pradipta',
                'bidang_keahlian' => 'Teknik Informatika',
                'kompetensi' => 'Data Engineering',
                'minat' => 'Big Data',
                'lokasi_preferensi' => 'Bandung',
                'foto_profil_url' => 'https://example.com/photos/ghaisan.jpg',
                'user_id' => 6,
                'prodi_id' => 1,
                'periode_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '2341720017',
                'nama' => 'Kevin Adika Saputra',
                'bidang_keahlian' => 'Teknik Informatika',
                'kompetensi' => 'Cybersecurity',
                'minat' => 'Network Security',
                'lokasi_preferensi' => 'Yogyakarta',
                'foto_profil_url' => 'https://example.com/photos/kevin.jpg',
                'user_id' => 7,
                'prodi_id' => 1,
                'periode_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
