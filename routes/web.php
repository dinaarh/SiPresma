<?php

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

// Halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Rute dashboard setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Routes that require authentication
// Route::middleware(['auth'])->group(function () {
    // Admin Routes
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/manage', [AdminController::class, 'manage'])->name('admin.manage');

    // Teacher Routes
    Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
    Route::get('/teacher/courses', [TeacherController::class, 'courses'])->name('teacher.courses');

    // Student Routes
    Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::get('/student/courses', [StudentController::class, 'courses'])->name('student.courses');
// });
