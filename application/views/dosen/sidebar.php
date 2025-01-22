<div id="wrapper" class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-primary text-white vh-100 d-flex flex-column p-3" style="margin-top: 56px;">
        <!-- Foto Profil dan Nama Dosen -->
        <div class="d-flex flex-column align-items-center mb-4">
            <img 
                src="<?= base_url('assets/img/profile.jpg'); ?>" 
                alt="Foto Profil" 
                class="rounded-circle mb-2" 
                style="width: 100px; height: 100px; object-fit: cover;"
            >
            <h5 class="text-white text-center mb-2 border-bottom pb-2">
                Nama Dosen
            </h5>
        </div>

        <!-- Daftar Navigasi -->
        <ul class="nav flex-column flex-grow-1 overflow-auto mt-3">
            <li class="nav-item mb-2">
                <a href="<?= base_url('dosen/index'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dosen/input_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-plus-circle-fill me-2"></i> Input Nilai Mahasiswa
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dosen/rekap_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-file-earmark-text-fill me-2"></i> Laporan Nilai
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="<?= base_url('dosen/print_nilai'); ?>" class="nav-link text-white d-flex align-items-center">
                    <i class="bi bi-printer-fill me-2"></i> Print Nilai Mahasiswa
                </a>
            </li>
        </ul>

        <!-- Tombol Logout -->
        <div class="mt-auto" style="margin-bottom: 50px;">
            <a href="<?= base_url('logout'); ?>" class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </div>
    </nav>
</div>


