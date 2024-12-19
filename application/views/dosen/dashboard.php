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