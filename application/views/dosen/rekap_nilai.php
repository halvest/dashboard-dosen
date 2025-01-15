<div class="container mt-5">
    <br>
    <h3 class="text-center page-title mb-4">Data Nilai Mahasiswa</h3>

    <div class="table-container">
        <?php if (!empty($rekap_nilai)) : ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM Mahasiswa</th>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Tugas</th>
                        <th>Responsi</th>
                        <th>UTS</th>
                        <th>UAS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rekap_nilai as $nilai) : ?>
                        <tr>
                            <td><?= htmlspecialchars($nilai['nama_mahasiswa'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars($nilai['NIM'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars($nilai['nama_mata_kuliah'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars($nilai['nama_kelas'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars($nilai['nilai_tugas'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars($nilai['nilai_responsi'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars($nilai['nilai_uts'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?= htmlspecialchars($nilai['nilai_uas'], ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else : ?>
        <p class="text-center text-muted">Tidak ada data rekap nilai.</p>
        <?php endif; ?>
    </div>
</div>