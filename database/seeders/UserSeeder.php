<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_users')->insert([
            // Admin (NIP: 1987654321)
            [
                'email' => '1987654321@polinema.ac.id',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status_akun' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Dosen (NIP: 197001011234)
            [
                'email' => '197001011234@polinema.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'status_akun' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Mahasiswa (NIM-based emails)
            [
                'email' => '2341720050@polinema.ac.id', // Dina Rahmawati
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => '2341720128@polinema.ac.id', // Fawwaz Alifio Farsa
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => '2341720008@polinema.ac.id', // Haikal Muhammad Rafli
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => '2341720213@polinema.ac.id', // Ghaisan Rafa Pradipta
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => '2341720017@polinema.ac.id', // Kevin Adika Saputra
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
