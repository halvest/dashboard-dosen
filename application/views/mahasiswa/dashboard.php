<div class="container my-4">
        <h2 class="text-center mb-4">Laporan Nilai Mahasiswa</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Tugas</th>
                        <th>Responsi</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Nilai Angka</th>
                        <th>Nilai Huruf</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dashboard as $i => $nilai): 
                        $nilai_angka = ($nilai['nilai_tugas'] + $nilai['nilai_responsi'] + $nilai['nilai_uts'] + $nilai['nilai_uas']) / 4;

                        if ($nilai_angka >= 85) {
                            $nilai_huruf = 'A';
                        } elseif ($nilai_angka >= 75) {
                            $nilai_huruf = 'B';
                        } elseif ($nilai_angka >= 60) {
                            $nilai_huruf = 'C';
                        } elseif ($nilai_angka >= 50) {
                            $nilai_huruf = 'D';
                        } else {
                            $nilai_huruf = 'E';
                        }
                    ?>
                    <tr>
                        <td class="text-center"><?= $i + 1; ?></td>
                        <td><?= htmlspecialchars($nilai['nama_mahasiswa']); ?></td>
                        <td><?= htmlspecialchars($nilai['NIM']); ?></td>
                        <td><?= htmlspecialchars($nilai['mata_kuliah'] ?: '-'); ?></td>
                        <td><?= htmlspecialchars($nilai['kelas'] ?: '-'); ?></td>
                        <td class="text-center"><?= $nilai['nilai_tugas'] !== null ? $nilai['nilai_tugas'] : '-'; ?></td>
                        <td class="text-center"><?= $nilai['nilai_responsi'] !== null ? $nilai['nilai_responsi'] : '-'; ?></td>
                        <td class="text-center"><?= $nilai['nilai_uts'] !== null ? $nilai['nilai_uts'] : '-'; ?></td>
                        <td class="text-center"><?= $nilai['nilai_uas'] !== null ? $nilai['nilai_uas'] : '-'; ?></td>
                        <td class="text-center"><?= number_format($nilai_angka, 2); ?></td>
                        <td class="text-center"><?= $nilai_huruf; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>