<div class="container mt-4">
    <h1 class="mb-4 text-center"><?= $title; ?></h1>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Mahasiswa</button>
    <table class="table table-hover table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $i => $mhs): ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nama_kelas']; ?></td>
                    <td class="text-center">
                        <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $mhs['id_mahasiswa']; ?>">Edit</button>
                        <a href="<?= base_url('models/Admin_model' . $mhs['id_mahasiswa']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="modalEdit<?= $mhs['id_mahasiswa']; ?>" tabindex="-1" aria-labelledby="modalEditLabel<?= $mhs['id_mahasiswa']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?= base_url('models/Admin_model' . $mhs['id_mahasiswa']); ?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditLabel<?= $mhs['id_mahasiswa']; ?>">Edit Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nim<?= $mhs['id_mahasiswa']; ?>" class="form-label">NIM</label>
                                        <input type="text" name="nim" id="nim<?= $mhs['id_mahasiswa']; ?>" class="form-control" value="<?= $mhs['nim']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama<?= $mhs['id_mahasiswa']; ?>" class="form-label">Nama</label>
                                        <input type="text" name="nama" id="nama<?= $mhs['id_mahasiswa']; ?>" class="form-control" value="<?= $mhs['nama']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_kelas<?= $mhs['id_mahasiswa']; ?>" class="form-label">Kelas</label>
                                        <select name="id_kelas" id="id_kelas<?= $mhs['id_mahasiswa']; ?>" class="form-select" required>
                                            <option value="" disabled>Pilih Kelas</option>
                                            <?php foreach ($this->db->get('kelas')->result_array() as $kelas): ?>
                                                <option value="<?= $kelas['id_kelas']; ?>" <?= $kelas['id_kelas'] == $mhs['id_kelas'] ? 'selected' : ''; ?>>
                                                    <?= $kelas['nama_kelas']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url(''); ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_kelas" class="form-label">Kelas</label>
                        <select name="id_kelas" id="id_kelas" class="form-select" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <?php foreach ($this->db->get('kelas')->result_array() as $kelas): ?>
                                <option value="<?= $kelas['id_kelas']; ?>"><?= $kelas['nama_kelas']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
