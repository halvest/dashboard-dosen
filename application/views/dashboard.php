<div class="flex-grow-1 ms-auto p-4" style="margin-left: 250px;">
    <!-- Welcome Message -->
    <div class="row mb-4">
        <div class="col-12">
            <h3>Selamat Datang, Dosen!</h3>
            <p class="text-muted">
                Kelola data mahasiswa, nilai, dan laporan dengan mudah melalui dashboard ini.
            </p>
        </div>
    </div>
    <!-- Recent Data Section -->
    <div class="table-container">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-hover table-bordered text-center align-middle">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Nilai Angka</th>
                        <th>Nilai Huruf</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($laporan)): ?>
                        <?php $nomor = 1; ?>
                        <?php foreach ($laporan as $data): ?>
                            <?php 
                                $nilai_angka = hitungNilaiAngka($data['tugas'], $data['responsi'], $data['uts'], $data['uas']); 
                                $nilai_huruf = konversiNilaiHuruf($nilai_angka); 
                            ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= htmlspecialchars($data['nama']); ?></td>
                                <td><?= htmlspecialchars($data['nim']); ?></td>
                                <td><?= htmlspecialchars($data['kelas']); ?></td>
                                <td><strong><?= number_format($nilai_angka, 2); ?></strong></td>
                                <td><span class="badge bg-secondary"><?= htmlspecialchars($nilai_huruf); ?></span></td>
                                <td>
                                    <a href="<?= base_url('dashboard/hapus_mahasiswa/' . htmlspecialchars($data['nim'])); ?>" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted">Tidak ada data mahasiswa.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>