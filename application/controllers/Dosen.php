<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'dosen') {
            redirect('auth/login');
        }
    }

    public function index() {
        $this->load->view('dosen/head', ['title' => 'Dosen']);
        $this->load->view('dosen/navbar');
        $this->load->view('dosen/sidebar');
        $this->load->view('dosen/dashboard'); 
        $this->load->view('dosen/footer');
    }
}
