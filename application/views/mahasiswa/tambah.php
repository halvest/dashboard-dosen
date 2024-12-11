<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/head'); ?>
<body>
<?php $this->load->view('templates/navbar'); ?>
<div class="d-flex" id="wrapper">
    <?php $this->load->view('templates/sidebar'); ?>
    <div id="page-content-wrapper">
        <div class="container-fluid mt-4">
            <h1 class="mt-4">Tambah Data Mahasiswa</h1>
            <form action="<?= base_url('mahasiswa/tambah') ?>" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" required>
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>
</body>
</html>
