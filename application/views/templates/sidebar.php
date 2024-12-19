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