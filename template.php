<!-- head.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= isset($title) ? $title : 'Dashboard Dosen'; ?></title>

    <!-- Local Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">

    <!-- CDN Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container-fluid">
        <button class="btn btn-primary" id="toggleSidebar">
            <i class="bi bi-list"></i> Menu
        </button>
        <span class="navbar-brand ms-3"> <?= isset($title) ? $title : 'Dashboard'; ?></span>
    </div>
</nav>

<!-- sidebar.php -->
<div id="wrapper" class="d-flex">
    <nav id="sidebar" class="bg-primary text-white vh-100 p-3" style="margin-top: 56px;">
        <!-- Foto Profil dan Nama Dosen -->
        <div class="d-flex flex-column align-items-center mb-4">
            <img src="<?= base_url('assets/img/profile.jpg'); ?>" alt="Foto Profil" class="rounded-circle mb-2" style="width: 100px; height: 100px; object-fit: cover;">
            <h5 class="text-white text-center mb-2" style="border-bottom: 2px solid white; padding-bottom: 5px;">Nama Dosen</h5>
        </div>

        <!-- Daftar Navigasi -->
        <ul class="nav flex-column" style="height: calc(100% - 200px); overflow-y: auto;">
            <li class="nav-item mb-2">
                <a href="<?= base_url('index.php/dashboard'); ?>" class="nav-link text-white">
                    <i class="bi bi-house-door-fill"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/jadwal_mengajar'); ?>" class="nav-link text-white">
                    <i class="bi bi-calendar-check-fill"></i> Jadwal Mengajar
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/tambah_nilai'); ?>" class="nav-link text-white">
                    <i class="bi bi-plus-circle-fill"></i> Tambah Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/laporan_nilai'); ?>" class="nav-link text-white">
                    <i class="bi bi-file-earmark-text-fill"></i> Laporan Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/print_nilai'); ?>" class="nav-link text-white">
                    <i class="bi bi-printer-fill"></i> Print Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/presensi'); ?>" class="nav-link text-white">
                    <i class="bi bi-check-circle-fill"></i> Presensi
                </a>
            </li>
        </ul>

        <!-- Tombol Logout -->
        <div class="mt-3">
            <a href="<?= base_url('logout'); ?>" class="btn btn-danger w-100">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </nav>
</div>

<!-- dashboard.php -->
<div id="content-admin" class="w-100 layer-bottom">
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Selamat Datang di Dashboard Admin</h1>
        <div class="row g-4">
            <!-- Card: Manajemen Mahasiswa -->
            <div class="col-md-4">
                <div class="card shadow-sm text-white bg-primary h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Manajemen Mahasiswa</h5>
                        <p class="card-text">Tambah, hapus, dan edit data mahasiswa.</p>
                        <a href="<?= base_url('admin/kelola_mahasiswa'); ?>" class="btn btn-light mt-auto">
                            <i class="bi bi-people-fill"></i> Kelola Mahasiswa
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card: Input Nilai Mahasiswa -->
            <div class="col-md-4">
                <div class="card shadow-sm text-white bg-success h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Input Nilai Mahasiswa</h5>
                        <p class="card-text">Masukkan nilai mahasiswa berdasarkan laporan dosen.</p>
                        <a href="<?= base_url('admin/input_nilai'); ?>" class="btn btn-light mt-auto">
                            <i class="bi bi-pencil-square"></i> Input Nilai
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card: Jadwal Mengajar -->
            <div class="col-md-4">
                <div class="card shadow-sm text-white bg-info h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Jadwal Mengajar</h5>
                        <p class="card-text">Atur jadwal mengajar dosen untuk setiap kelas.</p>
                        <a href="<?= base_url('admin/kelola_jadwal'); ?>" class="btn btn-light mt-auto">
                            <i class="bi bi-calendar-check"></i> Kelola Jadwal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer.php -->
<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content-admin');

        if (toggleButton) {
            toggleButton.addEventListener('click', function () {
                sidebar.classList.toggle('collapsed');
                content.classList.toggle('fullwidth');
            });
        }
    });
</script>
</body>
</html>
