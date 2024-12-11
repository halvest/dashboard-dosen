
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
    <!-- Tabel Data Terbaru -->
    <div class="table-container mb-5">
        <div class="table-responsive">
            <h5 class="mb-3">Data Mahasiswa Terbaru</h5>
            <table class="table table-striped table-hover table-bordered text-center align-middle">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Nilai Angka</th>
                        <th>Nilai Huruf</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($recent_mahasiswa)): ?>
                        <?php $nomor = 1; ?>
                        <?php foreach ($recent_mahasiswa as $mahasiswa): ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= htmlspecialchars($mahasiswa['nama']); ?></td>
                                <td><?= htmlspecialchars($mahasiswa['nim']); ?></td>
                                <td><?= htmlspecialchars($mahasiswa['kelas']); ?></td>
                                <td><?= number_format($mahasiswa['nilai_angka'], 2); ?></td>
                                <td><?= htmlspecialchars($mahasiswa['nilai_huruf']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-muted">Belum ada data terbaru.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Grafik -->
    <div class="chart-container">
        <h5 class="mb-4">Grafik Rata-Rata Nilai Mahasiswa</h5>
        <canvas id="nilaiChart" style="max-height: 400px;"></canvas>
    </div>
</div>
<!-- Tambahkan script untuk grafik -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('nilaiChart').getContext('2d');
        const chartData = {
            labels: <?= json_encode($chart_labels ?? []); ?>, // Array label (misal: nama mahasiswa)
            datasets: [{
                label: 'Rata-Rata Nilai',
                data: <?= json_encode($chart_data ?? []); ?>, // Array nilai
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };
        const config = {
            type: 'bar',
            data: chartData,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        new Chart(ctx, config);
    });
</script>
