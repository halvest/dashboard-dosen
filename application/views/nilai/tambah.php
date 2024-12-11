<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/head'); ?>
<body>
<?php $this->load->view('templates/navbar'); ?>
<div class="d-flex" id="wrapper">
    <?php $this->load->view('templates/sidebar'); ?>
    <div id="page-content-wrapper">
        <div class="container-fluid mt-4">
            <h1 class="mt-4">Tambah Nilai Mahasiswa</h1>
            <form action="<?= base_url('nilai/tambah') ?>" method="post">
                <div class="form-group">
                    <label for="mahasiswa_id">Pilih Mahasiswa</label>
                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                        <?php foreach ($mahasiswa as $m): ?>
                            <option value="<?= $m->id ?>"><?= $m->nim ?> - <?= $m->nama ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nilai_tugas">Nilai Tugas</label>
                    <input type="number" name="nilai_tugas" class="form-control" id="nilai_tugas" required>
                </div>
                <div class="form-group">
                    <label for="nilai_keaktifan">Nilai Keaktifan</label>
                    <input type="number" name="nilai_keaktifan" class="form-control" id="nilai_keaktifan" required>
                </div>
                <div class="form-group">
                    <label for="nilai_responsi">Nilai Responsi</label>
                    <input type="number" name="nilai_responsi" class="form-control" id="nilai_responsi" required>
                </div>
                <div class="form-group">
                    <label for="nilai_uts">Nilai UTS</label>
                    <input type="number" name="nilai_uts" class="form-control" id="nilai_uts" required>
                </div>
                <div class="form-group">
                    <label for="nilai_uas">Nilai UAS</label>
                    <input type="number" name="nilai_uas" class="form-control" id="nilai_uas" required>
                </div>
                <button type="submit" class="btn btn-success">Tambah Nilai</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>
</body>
</html>
