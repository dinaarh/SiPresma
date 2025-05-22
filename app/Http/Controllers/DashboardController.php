<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        if (auth()->user()->isAdmin()) {
            return view('admin.dashboard');
        } elseif (auth()->user()->isDosenPembimbing()) {
            return view('dosen_pembimbing.dashboard');
        } elseif (auth()->user()->isMahasiswa()) {
            return view('mahasiswa.dashboard');
        }
    }
}
