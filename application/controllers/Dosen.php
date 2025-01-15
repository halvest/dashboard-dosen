<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'dosen') {
            redirect('auth/login');
        }
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $id_dosen = $this->session->userdata('id_dosen');
        $data = [
            'total_mahasiswa' => $this->Dosen_model->get_total_mahasiswa(),
            'total_kelas' => $this->Dosen_model->get_total_kelas(),
            'rata_rata_nilai' => $this->Dosen_model->get_rata_rata_nilai(),
            'jadwal_mengajar' => $this->Dosen_model->get_jadwal_mengajar($id_dosen),
        ];
        $this->load->view('dosen/head', ['title' => 'Dashboard Dosen']);
        $this->load->view('dosen/dashboard', $data);
        $this->load->view('dosen/navbar');
        $this->load->view('dosen/sidebar');
        $this->load->view('dosen/footer');
    }

    public function rekap_nilai() {
        $data = [
            'mahasiswa' => $this->Dosen_model->get_mahasiswa(),
            'mata_kuliah' => $this->db->get('mata_kuliah')->result_array(),
            'input_nilai' => $this->Dosen_model->get_nilai(),
        ];
        $this->load->view('dosen/head', ['title' => 'Rekap Nilai']);
        $this->load->view('dosen/navbar');
        $this->load->view('dosen/sidebar');
        $this->load->view('dosen/rekap_nilai', $data);
        $this->load->view('dosen/footer');
    }

    public function input_nilai() {
        $data = [
            'mahasiswa' => $this->Dosen_model->get_mahasiswa(),
            'mata_kuliah' => $this->db->get('mata_kuliah')->result_array(),
            'input_nilai' => $this->Dosen_model->get_nilai(),
        ];
        $this->load->view('dosen/head', ['title' => 'Input Nilai']);
        $this->load->view('dosen/navbar');
        $this->load->view('dosen/sidebar');
        $this->load->view('dosen/input_nilai', $data);
        $this->load->view('dosen/footer');
    }

    public function tambah_nilai() {
        $nim = $this->input->post('nim');
        $data = $this->Dosen_model->get_mahasiswa_by_nim($nim);

        if ($data) {
            $input = [
                'id_mahasiswa' => $data['id_mahasiswa'],
                'id_mata_kuliah' => $this->input->post('id_mata_kuliah'),
                'tugas' => $this->input->post('tugas'),
                'responsi' => $this->input->post('responsi'),
                'uts' => $this->input->post('uts'),
                'uas' => $this->input->post('uas'),
            ];
            $this->Dosen_model->insert_nilai($input);
            $this->session->set_flashdata('success', 'Nilai berhasil ditambahkan.');
        } else {
            $this->session->set_flashdata('error', 'NIM tidak ditemukan.');
        }

        redirect('dosen/input_nilai');
    }

    public function edit_nilai() {
        $id_nilai = $this->input->post('id_nilai');
        $update_data = [
            'tugas' => $this->input->post('tugas'),
            'responsi' => $this->input->post('responsi'),
            'uts' => $this->input->post('uts'),
            'uas' => $this->input->post('uas'),
        ];
        $this->Dosen_model->update_nilai($id_nilai, $update_data);
        $this->session->set_flashdata('success', 'Nilai berhasil diperbarui.');
        redirect('dosen/input_nilai');
    }

    public function hapus_nilai($id) {
        $this->Dosen_model->delete_nilai($id);
        $this->session->set_flashdata('success', 'Nilai berhasil dihapus.');
        redirect('dosen/input_nilai');
    }

    public function get_mahasiswa_by_nim($nim)
    {
        $data = $this->Dosen_model->get_mahasiswa_by_nim($nim);
        echo json_encode($data);
    }

}
