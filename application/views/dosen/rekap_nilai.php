<div class="container mt-4">
    <br>
    <br>
    <table class="table table-hover table-striped align-middle">
        <thead class="table-dark">
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
    <?php foreach ($input_nilai as $i => $nilai): 
        // Perhitungan nilai angka sebagai rata-rata dari tugas, responsi, UTS, dan UAS
        $nilai_angka = ($nilai['nilai_tugas'] + $nilai['nilai_responsi'] + $nilai['nilai_uts'] + $nilai['nilai_uas']) / 4;

        // Penentuan nilai huruf berdasarkan nilai angka
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
            <td><?= $i + 1; ?></td>
            <td><?= $nilai['nama_mahasiswa']; ?></td>
            <td><?= $nilai['NIM']; ?></td>
            <td><?= $nilai['mata_kuliah'] ?: '-'; ?></td>
            <td><?= $nilai['kelas'] ?: '-'; ?></td>
            <td><?= $nilai['nilai_tugas'] !== null ? $nilai['nilai_tugas'] : '-'; ?></td>
            <td><?= $nilai['nilai_responsi'] !== null ? $nilai['nilai_responsi'] : '-'; ?></td>
            <td><?= $nilai['nilai_uts'] !== null ? $nilai['nilai_uts'] : '-'; ?></td>
            <td><?= $nilai['nilai_uas'] !== null ? $nilai['nilai_uas'] : '-'; ?></td>
            <td><?= number_format($nilai_angka, 2); ?></td>
            <td><?= $nilai_huruf; ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
    </table>
</div>
