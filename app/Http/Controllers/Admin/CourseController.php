<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course; // <-- [PENTING] Pastikan Anda punya model Course
use Illuminate\Http\Request;

// [FIX] Nama class diperbaiki (tanpa '\')
class CourseController extends Controller
{
    /**
     * Menampilkan daftar semua kursus.
     */
    public function index()
    {
        // Ambil semua data kursus, urutkan dari yang terbaru
        $courses = Course::latest()->get();
        
        // Kirim data ke view
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Menampilkan form untuk membuat kursus baru.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Menyimpan kursus baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // Tambahkan validasi lain jika perlu (misal: 'price' => 'required|numeric')
        ]);

        // Buat kursus baru
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            // 'price' => $request->price,
        ]);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.courses.index')
                         ->with('success', 'Kursus baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu kursus.
     * Menggunakan Route-Model Binding (Course $course)
     */
    public function show(Course $course)
    {
        // View-nya bisa dibuat jika Anda perlu halaman detail
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Menampilkan form untuk mengedit kursus.
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Memperbarui data kursus di database.
     */
    public function update(Request $request, Course $course)
    {
        // Validasi data yang masuk
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // 'price' => 'required|numeric',
        ]);

        // Update data kursus
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            // 'price' => $request->price,
        ]);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.courses.index')
                         ->with('success', 'Data kursus berhasil diperbarui.');
    }

    /**
     * Menghapus data kursus dari database.
     */
    public function destroy(Course $course)
    {
        // Hapus data
        $course->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.courses.index')
                         ->with('success', 'Data kursus berhasil dihapus.');
    }
}