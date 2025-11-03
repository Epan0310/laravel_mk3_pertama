<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'AdminLTE - Dilesin')</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Beranda</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ms-auto me-3">
      <!-- Notifications -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge bg-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <span class="dropdown-header">3 Notifikasi Baru</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope me-2"></i> Pesan baru
          </a>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user me-2"></i> User baru mendaftar
          </a>
          <a href="#" class="dropdown-item">
            <i class="fas fa-database me-2"></i> Backup selesai
          </a>
        </div>
      </li>

      <!-- User dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link d-flex align-items-center" data-bs-toggle="dropdown" href="#">
          <img src="{{ asset('image/avatar.jpg') }}" class="img-circle elevation-2 me-2" alt="User Image" width="30">
          <span>Admin</span>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-circle me-2"></i> Profil
          </a>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt me-2"></i> Keluar
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      <img src="{{ asset('image/logo.jpg') }}" alt="Dilesin Logo" class="brand-image img-circle elevation-3" style="opacity:.9">
      <span class="brand-text font-weight-light">Admin Turu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.students.index') }}" class="nav-link {{ request()->is('admin/students*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Manajemen Pengguna</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.courses.index') }}" class="nav-link {{ request()->is('admin/courses*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Kursus</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.settings.index') }}" class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>Pengaturan</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper p-4">
    <section class="content">
      @yield('content')
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-center small">
    <strong>&copy; {{ date('Y') }} Dilesin Academy.</strong> All rights reserved.
  </footer>

</div>
</body>
</html>
