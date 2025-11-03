<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController; // <-- [MODIFIKASI] Ditambahkan

// [MODIFIKASI] Rute lama ke landing page kita non-aktifkan (comment)
// Route::get('/', [LandingController::class, 'index'])->name('landing');

// [MODIFIKASI BARU] Rute root '/' sekarang akan redirect ke halaman 'login'
Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

// [MODIFIKASI] Rute /home ini penting untuk redirect default
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Grup rute admin Anda (tidak perlu diubah)
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Ini benar -> Nama rute akan menjadi 'admin.dashboard'
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Ini benar -> Nama rute akan menjadi 'admin.students.index', 'admin.students.edit', dll.
    Route::resource('students', StudentController::class);
    
    // Ini sudah benar
    Route::resource('courses', CourseController::class);

    // Ini sudah benar
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
});

