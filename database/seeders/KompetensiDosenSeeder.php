<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KompetensiDosenSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_kompetensi_dosen')->insert([
            // Dosen dengan NIP 198501012010121001
            ['nip' => '198501012010121001', 'kompetensi_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nip' => '198501012010121001', 'kompetensi_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Dosen dengan NIP 198502022011122002
            ['nip' => '198502022011122002', 'kompetensi_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nip' => '198502022011122002', 'kompetensi_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Dosen dengan NIP 198503032012123003
            ['nip' => '198503032012123003', 'kompetensi_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nip' => '198503032012123003', 'kompetensi_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Dosen dengan NIP 198504042013124004
            ['nip' => '198504042013124004', 'kompetensi_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nip' => '198504042013124004', 'kompetensi_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Dosen dengan NIP 198505052014125005
            ['nip' => '198505052014125005', 'kompetensi_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nip' => '198505052014125005', 'kompetensi_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
