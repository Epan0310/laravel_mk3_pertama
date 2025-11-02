@extends('layouts.admin')

@section('title', 'Edit Data Student')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Edit Data Student</h2>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Validasi error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nis">NIS</label>
            <input type="text" id="nis" name="nis" value="{{ old('nis', $student->nis) }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $student->nama_lengkap) }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                <option value="L" {{ old('jenis_kelamin', $student->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin', $student->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="nisn">NISN</label>
            <input type="text" id="nisn" name="nisn" value="{{ old('nisn', $student->nisn) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
