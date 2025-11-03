<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// [MODIFIKASI] Hapus backslash sebelum SettingController
class SettingController extends Controller
{
    /**
     * Menampilkan halaman pengaturan.
     */
    public function index()
    {
        // Untuk saat ini, tampilkan view-nya saja
        return view('admin.settings.index');
    }
}