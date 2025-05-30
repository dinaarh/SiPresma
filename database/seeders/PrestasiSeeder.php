<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_prestasi')->insert([
            [
                'prestasi_juara' => 'Juara 1',
                'prestasi_surat_tugas_url' => 'https://example.com/surat_tugas_1.pdf',
                'prestasi_poster_url' => 'https://example.com/poster_1.jpg',
                'prestasi_foto_juara_url' => 'https://example.com/foto_juara_1.jpg',
                'prestasi_proposal_url' => 'https://example.com/proposal_1.pdf',
                'prestasi_sertifikat_url' => 'https://example.com/sertifikat_1.pdf',
                'prestasi_status' => 'Disetujui',
                'prestasi_catatan' => 'Prestasi luar biasa dalam kategori programming',
                'kelompok_id' => 1,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'prestasi_juara' => 'Juara 2',
                'prestasi_surat_tugas_url' => 'https://example.com/surat_tugas_2.pdf',
                'prestasi_poster_url' => 'https://example.com/poster_2.jpg',
                'prestasi_foto_juara_url' => 'https://example.com/foto_juara_2.jpg',
                'prestasi_proposal_url' => 'https://example.com/proposal_2.pdf',
                'prestasi_sertifikat_url' => 'https://example.com/sertifikat_2.pdf',
                'prestasi_status' => 'Disetujui',
                'prestasi_catatan' => 'Inovasi AI yang sangat kreatif',
                'kelompok_id' => 2,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'prestasi_juara' => 'Juara 3',
                'prestasi_surat_tugas_url' => 'https://example.com/surat_tugas_3.pdf',
                'prestasi_poster_url' => 'https://example.com/poster_3.jpg',
                'prestasi_foto_juara_url' => 'https://example.com/foto_juara_3.jpg',
                'prestasi_proposal_url' => 'https://example.com/proposal_3.pdf',
                'prestasi_sertifikat_url' => 'https://example.com/sertifikat_3.pdf',
                'prestasi_status' => 'Pending',
                'prestasi_catatan' => 'Sedang dalam proses verifikasi',
                'kelompok_id' => 3,
                'validated_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'prestasi_juara' => 'Harapan 1',
                'prestasi_surat_tugas_url' => 'https://example.com/surat_tugas_4.pdf',
                'prestasi_poster_url' => 'https://example.com/poster_4.jpg',
                'prestasi_foto_juara_url' => 'https://example.com/foto_juara_4.jpg',
                'prestasi_proposal_url' => 'https://example.com/proposal_4.pdf',
                'prestasi_sertifikat_url' => 'https://example.com/sertifikat_4.pdf',
                'prestasi_status' => 'Disetujui',
                'prestasi_catatan' => 'Aplikasi mobile yang user-friendly',
                'kelompok_id' => 4,
                'validated_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'prestasi_juara' => 'Best Innovation',
                'prestasi_surat_tugas_url' => 'https://example.com/surat_tugas_5.pdf',
                'prestasi_poster_url' => 'https://example.com/poster_5.jpg',
                'prestasi_foto_juara_url' => 'https://example.com/foto_juara_5.jpg',
                'prestasi_proposal_url' => 'https://example.com/proposal_5.pdf',
                'prestasi_sertifikat_url' => 'https://example.com/sertifikat_5.pdf',
                'prestasi_status' => 'Ditolak',
                'prestasi_catatan' => 'Dokumen tidak lengkap, perlu dilengkapi',
                'kelompok_id' => 5,
                'validated_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
