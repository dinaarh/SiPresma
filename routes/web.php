<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', DashboardController::class)->name(name: 'dashboard');
Route::get('/admin/dashboard', [PagesController::class, 'dashboardAdmin'])->name('admin.dashboard');
Route::get('/dosen/dashboard', [PagesController::class, 'dashboardDosenPembimbing'])->name('dosen.dashboard');
Route::get('/mahasiswa/dashboard', [PagesController::class, 'dashboardMahasiswa'])->name('mahasiswa.dashboard');
