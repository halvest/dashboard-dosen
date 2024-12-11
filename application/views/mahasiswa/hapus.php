<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/head'); ?>
<body>
<?php $this->load->view('templates/navbar'); ?>
<div class="d-flex" id="wrapper">
    <?php $this->load->view('templates/sidebar'); ?>
    <div id="page-content-wrapper">
        <div class="container-fluid mt-4">
            <h1 class="mt-4">Hapus Data Mahasiswa</h1>
            <p>Apakah Anda yakin ingin menghapus mahasiswa ini?</p>
            <form action="<?= base_url('mahasiswa/hapus/' . $mahasiswa->id) ?>" method="post">
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>
</body>
</html>
