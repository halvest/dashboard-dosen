<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'admin') {
            redirect('auth/login');
        }
        $this->load->model('Admin_model'); // Load model admin
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('nim', 'NIM', 'required|is_unique[mahasiswa.nim]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('id_kelas', 'Kelas', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->kelola_mahasiswa();
        } else {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'id_kelas' => $this->input->post('id_kelas')
            ];
            $this->Admin_model->insert_mahasiswa($data);
            $this->session->set_flashdata('success', 'Mahasiswa berhasil ditambahkan.');
            redirect('admin/kelola_mahasiswa');
        }
    }

    public function edit_mahasiswa($id) {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('id_kelas', 'Kelas', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->kelola_mahasiswa();
        } else {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'id_kelas' => $this->input->post('id_kelas')
            ];
            $this->Admin_model->update_mahasiswa($id, $data);
            $this->session->set_flashdata('success', 'Mahasiswa berhasil diperbarui.');
            redirect('admin/kelola_mahasiswa');
        }
    }

    public function hapus_mahasiswa($id) {
        $this->Admin_model->delete_mahasiswa($id);
        $this->session->set_flashdata('success', 'Mahasiswa berhasil dihapus.');
        redirect('admin/kelola_mahasiswa');
    }
}
