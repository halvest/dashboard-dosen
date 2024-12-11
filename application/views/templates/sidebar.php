<div class="d-flex">
<nav id="sidebar" class="bg-primary text-white vh-100 p-3">
    <h5 class="text-center mb-4">Dosen Dashboard</h5>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="<?= base_url('dashboard'); ?>" class="nav-link text-white">
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
</div>
