<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenPembimbingController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);

Route::post('/admin', [AdminController::class, 'store']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/{nip}', [AdminController::class, 'show']);
Route::put('/admin/{nip}', [AdminController::class, 'update']);
Route::delete('/admin/{nip}', [AdminController::class, 'destroy']);

Route::post('/dosen-pembimbing', [DosenPembimbingController::class, 'store']);
Route::get('/dosen-pembimbing', [DosenPembimbingController::class, 'index']);
Route::get('/dosen-pembimbing/{nip}', [DosenPembimbingController::class, 'show']);
Route::put('/dosen-pembimbing/{nip}', [DosenPembimbingController::class, 'update']);
Route::delete('/dosen-pembimbing/{nip}', [DosenPembimbingController::class, 'destroy']);
