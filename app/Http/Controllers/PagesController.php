<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function dashboardDosenPembimbing()
    {
        return view('dosen_pembimbing.dashboard');
    }

    public function dashboardMahasiswa()
    {
        return view('mahasiswa.dashboard');
    }
}
