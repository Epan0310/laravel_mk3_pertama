@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="container">
  <h1 class="mb-4">Data Siswa</h1>
  <a href="{{ route('admin.students.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Siswa
  </a>

  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th class="text-center">Jenis Kelamin</th>
        <th>NISN</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->nis }}</td>
        <td>{{ $student->nama_lengkap }}</td>
        
        <td class="text-center">
            @if($student->jenis_kelamin == 'L')
                <span class="badge bg-primary">Laki-laki</span>
            @elseif($student->jenis_kelamin == 'P')
                <span class="badge bg-info">Perempuan</span>
            @else
                <span class="badge bg-secondary">{{ $student->jenis_kelamin }}</span>
            @endif
        </td>

        <td>{{ $student->nisn }}</td>

        <td class="text-center">
            <div class="btn-group" role="group">
                <a href="{{ route('admin.students.show', $student->id) }}" class="btn btn-info btn-sm" title="Detail">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-warning btn-sm" title="Edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                
                <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn btn-danger btn-sm btn-hapus" title="Hapus">
                      <i class="fas fa-trash"></i>
                  </button>
                </form>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
  // Pastikan script berjalan setelah halaman selesai dimuat
  document.addEventListener('DOMContentLoaded', function () {
      
      // Ambil semua tombol dengan class 'btn-hapus'
      const tombolHapus = document.querySelectorAll('.btn-hapus');
      
      tombolHapus.forEach(tombol => {
          tombol.addEventListener('click', function(e) {
              e.preventDefault();
              
              // Ambil form terdekat dari tombol yang diklik
              const form = this.closest('form');
              
              Swal.fire({
                  title: 'Anda yakin?',
                  text: "Data siswa ini akan dihapus secara permanen!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#d33', // Warna tombol hapus (merah)
                  cancelButtonColor: '#3085d6', // Warna tombol batal (biru)
                  confirmButtonText: 'Ya, hapus!',
                  cancelButtonText: 'Batal'
              }).then((result) => {
                  if (result.isConfirmed) {
                      // Jika pengguna klik 'Ya, hapus!', submit form-nya
                      form.submit();
                  }
              });
          });
      });
  
  });
</script>
@endsection