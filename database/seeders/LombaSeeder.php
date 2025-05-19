<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LombaSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_lomba')->insert([
            'lomba_nama' => 'Lomba Inovasi Digital',
            'lomba_kategori' => 'Teknologi',
            'lomba_penyelenggara' => 'Kemendikbud',
            'lomba_lokasi' => 'Jakarta',
            'lomba_tingkat' => 'Nasional',
            'lomba_persyaratan' => 'Proposal Inovatif',
            'lomba_mulai_pendaftaran' => '2025-06-01',
            'lomba_akhir_pendaftaran' => '2025-06-30',
            'lomba_link_registrasi' => 'https://lomba.digital/register',
            'lomba_mulai_pelaksanaan' => '2025-07-10',
            'lomba_selesai_pelaksanaan' => '2025-07-12',
            'periode_id' => 1,
            'lomba_bidang_keahlian' => 'Teknologi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
