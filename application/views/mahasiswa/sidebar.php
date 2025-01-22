<div id="wrapper" class="d-flex">
    <nav id="sidebar" class="bg-primary text-white vh-100 p-3" style="margin-top: 56px;">
        <!-- Foto Profil dan Nama Dosen -->
        <div class="d-flex flex-column align-items-center mb-4">
            <img src="<?= base_url('assets/img/profile.jpg'); ?>" alt="Foto Profil" class="rounded-circle mb-2" style="width: 100px; height: 100px; object-fit: cover;">
            <h5 class="text-white text-center mb-2" style="border-bottom: 2px solid white; padding-bottom: 5px;">Nama Mahasiswa</h5>
        </div>

        <!-- Daftar Navigasi -->
        <ul class="nav flex-column" style="height: calc(100% - 200px); overflow-y: auto;">
            <li class="nav-item mb-2">
                <a href="<?= base_url('index.php/admin'); ?>" class="nav-link text-white">
                    <i class="bi bi-house-door-fill"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dosen/print_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-printer-fill me-2"></i> Print Nilai Mahasiswa
                </a>
            </li>
            <div class="mt-auto" style="margin-bottom: 30px;">
            <li class="logout">
            <a href="<?= base_url('index.php/auth/login'); ?>" class="btn btn-danger w-100">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
            </li>
            </div>
        </ul>
    </nav>
</div>