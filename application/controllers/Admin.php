<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'admin') {
            redirect('auth/login');
        }
        $this->load->model('Admin_model'); // Load model admin
    }

    public function index() {
        $this->load->view('admin/head', ['title' => 'Dashboard Admin']);
        $this->load->view('admin/navbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard'); 
        $this->load->view('admin/footer');
    }

    public function kelola_mahasiswa() {
        $data['mahasiswa'] = $this->Admin_model->get_mahasiswa();
        $data['kelas'] = $this->Admin_model->get_kelas(); // Dropdown untuk kelas
        $this->load->view('admin/head', ['title' => 'Kelola Mahasiswa']);
        $this->load->view('admin/navbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kelola_mahasiswa', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_mahasiswa() {
        // Validasi input
        $this->form_validation->set_rules('nim', 'NIM', 'required|is_unique[mahasiswa.nim]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('id_kelas', 'ID Kelas', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->kelola_mahasiswa(); // Gagal validasi, kembali ke halaman kelola mahasiswa
        } else {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'id_kelas' => $this->input->post('id_kelas')
            ];
            $this->Admin_model->insert_mahasiswa($data);
            redirect('admin/kelola_mahasiswa');
        }
    }

    public function edit_mahasiswa($id) {
        // Validasi input
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('id_kelas', 'ID Kelas', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->kelola_mahasiswa(); // Gagal validasi, kembali ke halaman kelola mahasiswa
        } else {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'id_kelas' => $this->input->post('id_kelas')
            ];
            $this->Admin_model->update_mahasiswa($id, $data);
            redirect('admin/kelola_mahasiswa');
        }
    }

    public function hapus_mahasiswa($id) {
        $this->Admin_model->delete_mahasiswa($id);
        redirect('admin/kelola_mahasiswa');
    }

    public function input_nilai() {
        $data['mahasiswa'] = $this->Admin_model->get_mahasiswa();
        $data['mata_kuliah'] = $this->Admin_model->get_mata_kuliah(); // Dropdown untuk mata kuliah
        $this->load->view('admin/head', ['title' => 'Input Nilai']);
        $this->load->view('admin/navbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/input_nilai', $data);
        $this->load->view('admin/footer');
    }

    public function kelola_jadwal() {
        $data['dosen'] = $this->Admin_model->get_dosen();
        $data['kelas'] = $this->Admin_model->get_kelas();
        $data['mata_kuliah'] = $this->Admin_model->get_mata_kuliah();
        $this->load->view('admin/head', ['title' => 'Kelola Jadwal']);
        $this->load->view('admin/navbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kelola_jadwal', $data);
        $this->load->view('admin/footer');
    }
}
