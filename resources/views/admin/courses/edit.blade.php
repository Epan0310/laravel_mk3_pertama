@extends('layouts.admin')
@section('title', 'Edit Kursus')
@section('content')
<div class="container">
  <h1 class="mb-4">Edit Kursus: {{ $course->title }}</h1>

  <div class="card">
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Error!</strong> Terdapat masalah dengan input Anda.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT') <div class="mb-3">
          <label for="title" class="form-label">Judul Kursus</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $course->title) }}" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $course->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>
@endsection