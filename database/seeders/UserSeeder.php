<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_users')->insert([
            // 5 Users untuk Mahasiswa
            [
                'email' => 'mahasiswa1@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=M1',
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'mahasiswa2@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=M2',
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'mahasiswa3@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=M3',
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'mahasiswa4@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=M4',
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'mahasiswa5@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=M5',
                'role' => 'mahasiswa',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 5 Users untuk Dosen
            [
                'email' => 'dosen1@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=D1',
                'role' => 'dosen_pembimbing',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'dosen2@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=D2',
                'role' => 'dosen_pembimbing',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'dosen3@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=D3',
                'role' => 'dosen_pembimbing',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'dosen4@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=D4',
                'role' => 'dosen_pembimbing',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'dosen5@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=D5',
                'role' => 'dosen_pembimbing',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 5 Users untuk Admin
            [
                'email' => 'admin1@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=A1',
                'role' => 'admin',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'admin2@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=A2',
                'role' => 'admin',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'admin3@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=A3',
                'role' => 'admin',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'admin4@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=A4',
                'role' => 'admin',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'admin5@polinema.ac.id',
                'password' => Hash::make('password123'),
                'foto_profil_url' => 'https://via.placeholder.com/150?text=A5',
                'role' => 'admin',
                'status_akun' => 'aktif',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
