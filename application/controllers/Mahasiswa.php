<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'mahasiswa') {
            redirect('auth/login');
        }
        $this->load->model('Mahasiswa_model');
    }

    public function index() {
        $data = [
            'mahasiswa' => $this->Mahasiswa_model->get_mahasiswa(),
            'mata_kuliah' => $this->db->get('mata_kuliah')->result_array(),
            'dashboard' => $this->Mahasiswa_model->get_nilai(),
        ];
        $this->load->view('mahasiswa/head', ['title' => 'Nilai Mahasiswa']);
        $this->load->view('mahasiswa/navbar');
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('mahasiswa/dashboard', $data); 
        $this->load->view('mahasiswa/footer');
    }
}
