<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Model untuk menangani operasi database terkait pengguna
        $this->load->library('form_validation'); // Library untuk validasi form
    }

    // Halaman Login
    public function login() {
        $this->load->view('templates/head');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }

    // Halaman Register
    public function register() {
        $this->load->view('templates/head');
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }

    // Proses Login
    public function login_process() {
        // Ambil Input dari Form
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi Input
        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Username dan Password harus diisi!');
            redirect('auth/login');
        }

        // Periksa User di Database
        $user = $this->User_model->login($username,  md5($password));

        if ($user) {
            // Set Session
            $session_data = array(
                'id'        => $user->id,
                'username'  => $user->username,
                'role'      => $user->role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);

            // Redirect Berdasarkan Role
            switch ($user->role) {
                case 'admin':
                    redirect('admin');
                    break;
                case 'dosen':
                    redirect('dosen');
                    break;
                case 'mahasiswa':
                    redirect('mahasiswa');
                    break;
                default:
                    $this->session->set_flashdata('error', 'Role tidak valid!');
                    redirect('auth/login');
            }
        } else {
            // Jika User Tidak Ditemukan
            $this->session->set_flashdata('error', 'Username atau Password salah!');
            redirect('auth/login');
        }
    }

    // Proses Register
    public function register_process() {
        // Validasi Input
        $this->form_validation->set_rules('username', 'Username');
        $this->form_validation->set_rules('password', 'Password');
        $this->form_validation->set_rules('role', 'Role', 'required|in_list[admin,dosen,mahasiswa]');

        if ($this->form_validation->run() == FALSE) {
            // Jika Validasi Gagal
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth/register');
        } else {
            // Jika Validasi Berhasil
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')), // Gunakan hashing yang lebih aman (misalnya bcrypt)
                'role'     => $this->input->post('role')
            );

            $this->User_model->register($data); // Simpan Data ke Database
            $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
            redirect('auth/login');
        }
    }

    // Logout
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
