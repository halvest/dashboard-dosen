<div class="container mt-4">
    <br>
    <br>

    <!-- Flash Messages -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

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
                <th class="text-center">Aksi</th>
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
            <td class="text-center">
                <?php if ($nilai['id_nilai']): ?>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editNilaiModal" onclick="setEditForm(<?= htmlspecialchars(json_encode($nilai)); ?>)">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete('<?= base_url('dosen/hapus_nilai/' . $nilai['id_nilai']); ?>', '<?= $nilai['nama_mahasiswa']; ?>')">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                <?php else: ?>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahNilaiModal">
                        Tambah Nilai
                    </button>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
    </table>
</div>


<!-- Modal Tambah Nilai -->
<div class="modal fade" id="tambahNilaiModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="post" action="<?= base_url('dosen/tambah_nilai'); ?>" class="needs-validation" novalidate>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Nilai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="nim" placeholder="NIM" class="form-control mb-2" required>
                    <select name="id_mata_kuliah" class="form-control mb-2" required>
                        <option value="" disabled selected>Pilih Mata Kuliah</option>
                        <?php foreach ($mata_kuliah as $mk): ?>
                            <option value="<?= $mk['id_mata_kuliah']; ?>"><?= $mk['nama_mata_kuliah']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="number" name="tugas" placeholder="Nilai Tugas (0-100)" class="form-control mb-2" min="0" max="100" required>
                    <input type="number" name="responsi" placeholder="Nilai Responsi (0-100)" class="form-control mb-2" min="0" max="100" required>
                    <input type="number" name="uts" placeholder="Nilai UTS (0-100)" class="form-control mb-2" min="0" max="100" required>
                    <input type="number" name="uas" placeholder="Nilai UAS (0-100)" class="form-control mb-2" min="0" max="100" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Nilai -->
<div class="modal fade" id="editNilaiModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="post" action="<?= base_url('dosen/edit_nilai'); ?>" class="needs-validation" novalidate>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Nilai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-id-nilai" name="id_nilai">
                    <input type="number" id="edit-tugas" name="tugas" placeholder="Nilai Tugas (0-100)" class="form-control mb-2" min="0" max="100" required>
                    <input type="number" id="edit-responsi" name="responsi" placeholder="Nilai Responsi (0-100)" class="form-control mb-2" min="0" max="100" required>
                    <input type="number" id="edit-uts" name="uts" placeholder="Nilai UTS (0-100)" class="form-control mb-2" min="0" max="100" required>
                    <input type="number" id="edit-uas" name="uas" placeholder="Nilai UAS (0-100)" class="form-control mb-2" min="0" max="100" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus nilai milik <strong id="delete-confirm-name"></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="#" id="delete-confirm-btn" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(deleteUrl, namaMahasiswa) {
        document.getElementById('delete-confirm-btn').setAttribute('href', deleteUrl);
        document.getElementById('delete-confirm-name').innerText = namaMahasiswa;
        const modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
        modal.show();
    }

    function setEditForm(data) {
        document.getElementById('edit-id-nilai').value = data.id_nilai;
        document.getElementById('edit-tugas').value = data.nilai_tugas;
        document.getElementById('edit-responsi').value = data.nilai_responsi;
        document.getElementById('edit-uts').value = data.nilai_uts;
        document.getElementById('edit-uas').value = data.nilai_uas;
    }

    (() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
