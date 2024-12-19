<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= isset($title) ? $title : 'Dashboard Dosen'; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container-fluid">
            <button class="btn btn-primary" id="toggleSidebar">
                <i class="bi bi-list"></i> Menu
            </button>
            <span class="navbar-brand ms-3"><?= $title ?? 'Dashboard'; ?></span>
        </div>
    </nav>

    <div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-primary text-white vh-100 p-3" style="width: 250px; position: fixed;">
        <h5 class="text-center mb-4">Dosen Dashboard</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="<?= base_url('index.php/dashboard'); ?>" class="nav-link text-white">
                    <i class="bi bi-house-door-fill"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/tambah_mahasiswa'); ?>" class="nav-link text-white">
                    <i class="bi bi-person-plus-fill"></i> Tambah Mahasiswa
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
                <a href="<?= base_url('dashboard/hapus_mahasiswa'); ?>" class="nav-link text-white">
                    <i class="bi bi-person-dash-fill"></i> Hapus Mahasiswa
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/hapus_nilai'); ?>" class="nav-link text-white">
                    <i class="bi bi-x-circle-fill"></i> Hapus Nilai
                </a>
            </li>
            <li class="nav-item mt-3">
                <a href="<?= base_url('logout'); ?>" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>
    </nav>

    <script src="<?= base_url('assets/js/custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('toggleSidebar');
        if (toggleButton) {
            toggleButton.addEventListener('click', function () {
                const sidebar = document.getElementById('sidebar');
                if (sidebar) {
                    sidebar.classList.toggle('d-none');
                }
            });
        }
    });
</script>
</body>
</html>
