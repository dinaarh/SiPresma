<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_prestasi')->insert([
            'prestasi_juara' => 'Juara 1',
            'prestasi_surat_tugas_url' => 'https://example.com/surat.pdf',
            'prestasi_poster_url' => 'https://example.com/poster.png',
            'prestasi_foto_juara_url' => 'https://example.com/foto.jpg',
            'prestasi_proposal_url' => 'https://example.com/proposal.pdf',
            'prestasi_sertifikat_url' => 'https://example.com/sertifikat.pdf',
            'prestasi_status' => 'Disetujui',
            'prestasi_catatan' => 'Selamat!',
            'lomba_id' => 1,
            'validated_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
