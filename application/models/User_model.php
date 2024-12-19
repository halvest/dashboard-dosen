<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Fungsi Login
    public function login($username, $password) {
        // Cari pengguna berdasarkan username
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        $user = $query->row();

        // Periksa apakah user ditemukan dan verifikasi password menggunakan MD5
        if ($user && $user->password == md5($password)) {
            return $user; // Return data user jika login berhasil
        } else {
            return false; // Return false jika login gagal
        }
    }

    // Fungsi Register
    public function register($data) {
        // Hash password sebelum menyimpan ke database dengan MD5
        $data['password'] = md5($data['password']);
        return $this->db->insert('user', $data);
    }
}
