<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dilesin Admin | Registrasi</title>

  <!-- Muat CSS yang sama dengan admin panel Anda -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- [PENTING] Class 'register-page' -->
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{ url('/') }}"><b>Dilesin</b>Admin</a>
  </div>

  <div class="card shadow-sm">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Daftar sebagai pengguna baru</p>

      <!-- Form ini akan mengirim data ke RegisterController -->
      <form action="{{ route('register') }}" method="post">
        @csrf

        <!-- Nama Lengkap -->
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" 
                 name="name" value="{{ old('name') }}" 
                 placeholder="Nama Lengkap" required autocomplete="name" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        
        <!-- Email -->
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" 
                 name="email" value="{{ old('email') }}" 
                 placeholder="Email" required autocomplete="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" 
                 name="password" 
                 placeholder="Password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <!-- Konfirmasi Password -->
        <div class="input-group mb-3">
          <input type="password" class="form-control" 
                 name="password_confirmation" 
                 placeholder="Konfirmasi password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <!-- Link untuk kembali ke Login -->
            <a href="{{ route('login') }}" class="text-center">Saya sudah punya akun</a>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
