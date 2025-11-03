<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dilesin Admin | Log in</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>Website</b>Gue</a>
  </div>
  
  <div class="card shadow-sm">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan login untuk memulai sesi Anda</p>

      <!-- [MODIFIKASI 1] Menampilkan pesan sukses dari halaman registrasi -->
      @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
      @endif
      <!-- Akhir Modifikasi 1 -->

      <!-- [MODIFIKASI 2] Mengarahkan form action ke route('login') -->
      <form action="{{ route('login') }}" method="post">
        @csrf
        
        
        @error('email')
            <div class="alert alert-danger py-2" role="alert">
                Email atau password salah.
            </div>
        @enderror
        <!-- Akhir Modifikasi 3 -->

        <div class="input-group mb-3">
          <!-- Tambahkan 'name="email"' -->
          <input type="email" class="form-control" name="email" placeholder="Email" required value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <!-- Tambahkan 'name="password"' -->
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Ingat Saya
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>

      <!-- [MODIFIKASI 4] Memperbaiki link Lupa Password -->
      <p class="mb-1 mt-3">
        <a href="{{ route('password.request') }}">Lupa password?</a>
      </p>
      <!-- Akhir Modifikasi 4 -->

      <!-- [MODIFIKASI 5] Menambahkan link ke halaman Register -->
      <p class="mb-0 mt-2 text-center">
        <a href="{{ route('register') }}" class="text-center">Belum punya akun? Daftar</a>
      </p>
      <!-- Akhir Modifikasi 5 -->
    </div>
  </div>
</div>

</body>
</html>
