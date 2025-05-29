<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LombaSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_lomba')->insert([
            [
                'lomba_nama' => 'Hackathon Indonesia 2025',
                'lomba_kategori' => 'Programming',
                'lomba_penyelenggara' => 'Kementerian Komunikasi dan Informatika',
                'lomba_lokasi_preferensi' => 'Jakarta',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, memiliki kemampuan programming, membentuk tim 3-5 orang',
                'lomba_mulai_pendaftaran' => '2025-06-01',
                'lomba_akhir_pendaftaran' => '2025-06-30',
                'lomba_link_registrasi' => 'https://hackathon.kominfo.go.id',
                'lomba_mulai_pelaksanaan' => '2025-07-15',
                'lomba_selesai_pelaksanaan' => '2025-07-17',
                'lomba_ukuran_kelompok' => 5,
                'periode_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'AI Innovation Challenge',
                'lomba_kategori' => 'Artificial Intelligence',
                'lomba_penyelenggara' => 'Google Indonesia',
                'lomba_lokasi_preferensi' => 'Surabaya',
                'lomba_tingkat' => 'Internasional',
                'lomba_persyaratan' => 'Mahasiswa S1/D4, memiliki project AI, presentasi dalam bahasa Inggris',
                'lomba_mulai_pendaftaran' => '2025-05-15',
                'lomba_akhir_pendaftaran' => '2025-06-15',
                'lomba_link_registrasi' => 'https://ai-challenge.google.com',
                'lomba_mulai_pelaksanaan' => '2025-07-01',
                'lomba_selesai_pelaksanaan' => '2025-07-03',
                'lomba_ukuran_kelompok' => 3,
                'periode_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Web Design Contest 2025',
                'lomba_kategori' => 'Web Design',
                'lomba_penyelenggara' => 'Asosiasi Web Developer Indonesia',
                'lomba_lokasi_preferensi' => 'Bandung',
                'lomba_tingkat' => 'Regional',
                'lomba_persyaratan' => 'Mahasiswa aktif, portfolio web design, menggunakan teknologi modern',
                'lomba_mulai_pendaftaran' => '2025-06-10',
                'lomba_akhir_pendaftaran' => '2025-07-10',
                'lomba_link_registrasi' => 'https://webdesign-contest.id',
                'lomba_mulai_pelaksanaan' => '2025-08-05',
                'lomba_selesai_pelaksanaan' => '2025-08-07',
                'lomba_ukuran_kelompok' => 2,
                'periode_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Mobile App Development Challenge',
                'lomba_kategori' => 'Mobile Development',
                'lomba_penyelenggara' => 'Samsung Developer Program',
                'lomba_lokasi_preferensi' => 'Yogyakarta',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, pengalaman mobile development, aplikasi untuk Android/iOS',
                'lomba_mulai_pendaftaran' => '2025-07-01',
                'lomba_akhir_pendaftaran' => '2025-07-31',
                'lomba_link_registrasi' => 'https://developer.samsung.com/contest',
                'lomba_mulai_pelaksanaan' => '2025-08-20',
                'lomba_selesai_pelaksanaan' => '2025-08-22',
                'lomba_ukuran_kelompok' => 4,
                'periode_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'lomba_nama' => 'Cyber Security CTF 2025',
                'lomba_kategori' => 'Cyber Security',
                'lomba_penyelenggara' => 'Indonesia Security Forum',
                'lomba_lokasi_preferensi' => 'Malang',
                'lomba_tingkat' => 'Nasional',
                'lomba_persyaratan' => 'Mahasiswa aktif, pemahaman cyber security, pengalaman CTF sebelumnya',
                'lomba_mulai_pendaftaran' => '2025-08-01',
                'lomba_akhir_pendaftaran' => '2025-08-31',
                'lomba_link_registrasi' => 'https://ctf.security-forum.id',
                'lomba_mulai_pelaksanaan' => '2025-09-15',
                'lomba_selesai_pelaksanaan' => '2025-09-17',
                'lomba_ukuran_kelompok' => 3,
                'periode_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
