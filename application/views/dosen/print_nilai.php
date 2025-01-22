<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Nilai Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Nilai Mahasiswa</h2>
    <table>
        <thead>
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
                <td><?= htmlspecialchars($nilai['nama_mahasiswa']); ?></td>
                <td><?= htmlspecialchars($nilai['NIM']); ?></td>
                <td><?= htmlspecialchars($nilai['mata_kuliah'] ?: '-'); ?></td>
                <td><?= htmlspecialchars($nilai['kelas'] ?: '-'); ?></td>
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
</body>
</html>
