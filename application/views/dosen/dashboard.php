<div id="wrapper" class="d-flex">
    <!-- Content -->
    <div id="content-admin" class="w-100">
        <div class="container my-5">
            <!-- Heading -->
            <br>
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Dashboard Dosen</h2>
                <p class="text-muted">Kelola data akademik Anda dengan mudah dan efisien.</p>
            </div>

            <div class="container mt-5">
    <div class="row g-4 mb-5">
        <!-- Total Mahasiswa -->
        <div class="col-md-4">
            <div class="p-4 bg-primary text-white rounded shadow-sm text-center">
                <h5 class="fw-bold">Total Mahasiswa</h5>
                <p class="display-5 fw-bold"><?= isset($total_mahasiswa) ? $total_mahasiswa : 0; ?></p>
                <p class="mb-0">Mahasiswa terdaftar dalam sistem Anda.</p>
            </div>
        </div>
        <!-- Total Kelas -->
        <div class="col-md-4">
            <div class="p-4 bg-success text-white rounded shadow-sm text-center">
                <h5 class="fw-bold">Total Kelas</h5>
                <p class="display-5 fw-bold"><?= isset($total_kelas) ? $total_kelas : 0; ?></p>
                <p class="mb-0">Kelas aktif yang sedang berjalan.</p>
            </div>
        </div>
        <!-- Rata-rata Nilai -->
        <div class="col-md-4">
            <div class="p-4 bg-info text-white rounded shadow-sm text-center">
                <h5 class="fw-bold">Rata-Rata Nilai</h5>
                <p class="display-5 fw-bold"><?= isset($rata_rata_nilai) ? $rata_rata_nilai : 0; ?></p>
                <p class="mb-0">Rata-rata nilai akademik saat ini.</p>
            </div>
        </div>
    </div>
</div>



            <!-- Menu Utama -->
            <div class="row g-4">
                <!-- Rekap Nilai Mahasiswa -->
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded shadow-sm h-100 d-flex flex-column">
                        <h5 class="mb-3 text-secondary fw-bold">Rekap Nilai</h5>
                        <p class="text-muted">Lihat rekap nilai mahasiswa.</p>
                        <a href="<?= base_url('dosen/rekap_nilai'); ?>" class="btn btn-primary mt-auto">
                            <i class="bi bi-table"></i> Lihat Rekap
                        </a>
                    </div>
                </div>
                <!-- Tambah Nilai -->
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded shadow-sm h-100 d-flex flex-column">
                        <h5 class="mb-3 text-secondary fw-bold">Input Nilai</h5>
                        <p class="text-muted">Input nilai mahasiswa.</p>
                        <a href="<?= base_url('dosen/input_nilai'); ?>" class="btn btn-success mt-auto">
                            <i class="bi bi-pencil-fill"></i> Input Nilai
                        </a>
                    </div>
                </div>
                <!-- Laporan Nilai -->
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded shadow-sm h-100 d-flex flex-column">
                        <h5 class="mb-3 text-secondary fw-bold">Laporan Nilai</h5>
                        <p class="text-muted">Laporan nilai mahasiswa.</p>
                        <a href="<?= base_url('dosen/print_nilai'); ?>" class="btn btn-info mt-auto">
                            <i class="bi bi-file-earmark-text"></i> Unduh PDF
                        </a>
                    </div>
                </div>
            </div>

            <!-- Jadwal Mengajar -->
            <div class="card mt-5 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Jadwal Mengajar</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Hari</th>
                                <th>Mata Kuliah</th>
                                <th>Kelas</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($jadwal_mengajar)) : ?>
                                <?php foreach ($jadwal_mengajar as $jadwal) : ?>
                                    <tr>
                                        <td><?= htmlspecialchars($jadwal['hari']); ?></td>
                                        <td><?= htmlspecialchars($jadwal['nama_mata_kuliah']); ?></td>
                                        <td><?= htmlspecialchars($jadwal['nama_kelas']); ?></td>
                                        <td><?= htmlspecialchars($jadwal['jam_mulai']); ?></td>
                                        <td><?= htmlspecialchars($jadwal['jam_selesai']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada jadwal mengajar.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
