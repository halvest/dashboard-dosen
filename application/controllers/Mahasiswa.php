<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'mahasiswa') {
            redirect('auth/login');
        }
    }

    public function index() {
        $this->load->view('mahasiswa/head', ['title' => 'Mahasiswa']);
        $this->load->view('mahasiswa/navbar');
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('mahasiswa/dashboard'); 
        $this->load->view('mahasiswa/footer');
    }
}
