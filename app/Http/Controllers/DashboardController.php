<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function dosenPembimbing()
    {
        return view('dosen_pembimbing.dashboard');
    }

    public function mahasiswa()
    {
        return view('mahasiswa.dashboard');
    }
}
