<?php

use App\Http\Controllers\BidangKeahlianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MahasiswaController;

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

Route::prefix('profile')->name('profile.')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::put('/', [ProfileController::class, 'update'])->name('update');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', DashboardController::class)->name(name: 'dashboard');
Route::get('/admin/dashboard', [PagesController::class, 'dashboardAdmin'])->name('admin.dashboard');
Route::get('/dosen-pembimbing/dashboard', [PagesController::class, 'dashboardDosenPembimbing'])->name('dosen.dashboard');
Route::get('/mahasiswa/dashboard', [PagesController::class, 'dashboardMahasiswa'])->name('mahasiswa.dashboard');

Route::prefix('admin')->name('admin.')->group(function () {

    // Master Data Routes
    route::prefix('master')->name('master.')->group(function () {
        Route::prefix('bidang-keahlian')->name('bidang-keahlian.')->group(function () {
            Route::get('/', [BidangKeahlianController::class, 'index'])->name('index');
            Route::post('/list', [BidangKeahlianController::class, 'list'])->name('list');
            Route::get('/create', [BidangKeahlianController::class, 'create'])->name('create');
            Route::post('/', [BidangKeahlianController::class, 'store'])->name('store');
            Route::get('/{id}', [BidangKeahlianController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [BidangKeahlianController::class, 'edit'])->name('edit');
            Route::put('/{id}', [BidangKeahlianController::class, 'update'])->name('update');
            Route::get('/{id}/delete', [BidangKeahlianController::class, 'delete'])->name('delete');
            Route::delete('/{id}', [BidangKeahlianController::class, 'destroy'])->name('destroy');
        });
    });
});
