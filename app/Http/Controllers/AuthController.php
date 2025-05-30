<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\AdminModel;
use App\Models\DosenPembimbingModel;
use App\Models\MahasiswaModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->validated();
            $user = $this->findUserByIdentifier($credentials['identifier']);

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Akun tidak ditemukan!',
                ]);
            }

            if (Auth::attempt(['user_id' => $user->user_id, 'password' => $credentials['password']])) {
                $request->session()->regenerate();

                return response()->json([
                    'status' => true,
                    'message' => 'Login berhasil!',
                    'redirect' => $this->getRoute($user->role),
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'NIM/NIP atau password salah!',
                ]);
            }

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Login gagal!, ' . $e->getMessage(),
            ]);
        }
    }

    private function findUserByIdentifier($identifier)
    {
        $mahasiswa = MahasiswaModel::where('nim', $identifier)->first();
        if ($mahasiswa) {
            return $mahasiswa->user;
        }

        $dosen_pembimbing = DosenPembimbingModel::where('nip', $identifier)->first();
        if ($dosen_pembimbing) {
            return $dosen_pembimbing->user;
        }
        $admin = AdminModel::where('nip', $identifier)->first();
        if ($admin) {
            return $admin->user;
        }

        return null;
    }

    private function getRoute($role)
    {
        switch ($role) {
            case 'admin':
                return route('admin.dashboard');
            case 'dosen_pembimbing':
                return route('dosen-pembimbing.dashboard');
            case 'mahasiswa':
                return route('mahasiswa.dashboard');
            default:
                return route('login');
        }
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}

