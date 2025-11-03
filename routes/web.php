<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SettingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

// Ini sudah BENAR. ->name('admin.') akan memberi prefix nama 'admin.' 
// ke semua rute di dalam grup ini.
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Ini benar -> Nama rute akan menjadi 'admin.dashboard'
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Ini benar -> Nama rute akan menjadi 'admin.students.index', 'admin.students.edit', dll.
    Route::resource('students', StudentController::class);

    
    // [MODIFIKASI DI SINI]
    // 1. Hapus `.names('admin.courses')`. Ini menyebabkan konflik dengan nama grup.
    // 2. Gunakan CourseController::class yang singkat (karena sudah di-'use' di atas).
    //
    // Ini sekarang akan OTOMATIS membuat rute 'admin.courses.index', dll.
    Route::resource('courses', CourseController::class);


    // [MODIFIKASI DI SINI]
    // 1. Hapus 'admin.' dari `.name()`.
    // 2. Gunakan SettingController::class yang singkat.
    //
    // Ini sekarang akan OTOMATIS membuat rute 'admin.settings.index'.
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
});