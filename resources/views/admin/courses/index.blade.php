@extends('layouts.admin')
@section('title', 'Manajemen Kursus')
@section('content')
<div class="container">
  <h1 class="mb-4">Manajemen Kursus</h1>
  <a href="{{ route('admin.courses.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Kursus
  </a>

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Kursus</th>
        <th>Deskripsi Singkat</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($courses as $course)
        <tr>
          <td>{{ $course->id }}</td>
          <td>{{ $course->title }}</td>
          <td>{{ Str::limit($course->description, 50) }}</td>
          <td class="text-center">
            <div class="btn-group" role="group">
              <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-sm btn-warning" title="Edit">
                <i class="fas fa-pencil-alt"></i>
              </a>
              <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" class="d-inline btn-hapus-form">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-sm btn-danger btn-hapus" title="Hapus">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-center">Data kursus masih kosong.</td>
        </tr>
      @endforelse
      </tbody>
  </table>
</div>
@endsection