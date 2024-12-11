<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/head', ['title' => 'Dashboard']);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }

    public function tambah_mahasiswa()
    {
        $this->load->view('templates/head', ['title' => 'Tambah Mahasiswa']);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/tambah_mahasiswa');
        $this->load->view('templates/footer');
    }

    public function hapus_mahasiswa()
    {
        $this->load->view('templates/head', ['title' => 'Hapus Mahasiswa']);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/hapus_mahasiswa');
        $this->load->view('templates/footer');
    }

    public function tambah_nilai()
    {
        $this->load->view('templates/head', ['title' => 'Tambah Nilai']);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/tambah_nilai');
        $this->load->view('templates/footer');
    }

    public function hapus_nilai()
    {
        $this->load->view('templates/head', ['title' => 'Hapus Nilai']);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/hapus_nilai');
        $this->load->view('templates/footer');
    }

    public function laporan_nilai()
    {
        $this->load->view('templates/head', ['title' => 'Laporan Nilai']);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/laporan_nilai');
        $this->load->view('templates/footer');
    }
}