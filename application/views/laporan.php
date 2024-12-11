<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/head'); ?>
<body>
<?php $this->load->view('templates/navbar'); ?>
<div class="d-flex" id="wrapper">
    <?php $this->load->view('templates/sidebar'); ?>
    <div id="page-content-wrapper">
        <div class="container-fluid mt-4">
            <h1 class="mt-4">Laporan Nilai Mahasiswa</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai Keaktifan</th>
                        <th>Nilai Responsi</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Total Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($nilai as $n): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $n->nim ?></td>
                        <td><?= $n->nama ?></td>
                        <td><?= $n->nilai_tugas ?></td>
                        <td><?= $n->nilai_keaktifan ?></td>
                        <td><?= $n->nilai_responsi ?></td>
                        <td><?= $n->nilai_uts ?></td>
                        <td><?= $n->nilai_uas ?></td>
                        <td><?= $n->nilai_tugas + $n->nilai_keaktifan + $n->nilai_responsi + $n->nilai_uts + $n->nilai_uas ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>
</body>
</html>
