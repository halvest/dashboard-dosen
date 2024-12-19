<div id="wrapper" class="d-flex">
    <nav id="sidebar" class="bg-primary text-white vh-100 d-flex flex-column p-3">
        <!-- Foto Profil dan Nama Dosen -->
        <div class="d-flex flex-column align-items-center mb-4">
            <img src="<?= base_url('assets/img/profile.jpg'); ?>" alt="Foto Profil" class="rounded-circle mb-3" 
                style="width: 100px; height: 100px; object-fit: cover;">
            <h5 class="text-white text-center mb-0" 
                style="border-bottom: 2px solid white; padding-bottom: 5px;">Nama Dosen</h5>
        </div>

        <!-- Daftar Navigasi -->
        <ul class="nav flex-column flex-grow-1 overflow-auto" style="margin-top: 20px;">
            <li class="nav-item mb-2">
                <a href="<?= base_url('index.php/dashboard'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/jadwal_mengajar'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-calendar2-week-fill me-2"></i> Jadwal Mengajar
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/tambah_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-plus-circle-fill me-2"></i> Tambah Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/hapus_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-x-circle-fill me-2"></i> Hapus Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/laporan_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-file-earmark-text-fill me-2"></i> Laporan Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/print_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-printer-fill me-2"></i> Print Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dashboard/presensi'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-clipboard-fill me-2"></i> Presensi
                </a>
            </li>
        </ul>

        <!-- Tombol Logout -->
        <div class="mt-auto">
            <a href="<?= base_url('logout'); ?>" class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </div>
    </nav>
</div>
