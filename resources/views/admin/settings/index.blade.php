@extends('layouts.admin')

@section('title', 'Pengaturan Website')

@section('content')
<div class="container">
  <h1 class="mb-4">Pengaturan Website</h1>

  <div class="card">
    <div class="card-header">
      Pengaturan Umum
    </div>
    <div class="card-body">
      <form action="#" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama_website" class="form-label">Nama Website</label>
          <input type="text" class="form-control" id="nama_website" value="Dilesin Academy">
        </div>
        <div class="mb-3">
          <label for="email_admin" class="form-label">Email Admin</label>
          <input type="email" class="form-control" id="email_admin" value="admin@dilesin.com">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
      </form>
    </div>
  </div>
</div>
@endsection