<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {

    // Get jadwal mengajar berdasarkan ID dosen
    public function get_jadwal_mengajar($id_dosen) {
        $this->db->select('
            jadwal_mengajar.hari, 
            mata_kuliah.nama_mata_kuliah, 
            kelas.nama_kelas, 
            jadwal_mengajar.jam_mulai, 
            jadwal_mengajar.jam_selesai
        ');
        $this->db->from('jadwal_mengajar');
        $this->db->join('mata_kuliah', 'jadwal_mengajar.id_mata_kuliah = mata_kuliah.id_mata_kuliah');
        $this->db->join('kelas', 'jadwal_mengajar.id_kelas = kelas.id_kelas');
        $this->db->where('jadwal_mengajar.id_dosen', $id_dosen);
        return $this->db->get()->result_array();
    }

    // Get semua mahasiswa dengan nama kelas (left join untuk mencegah data kosong terabaikan)
    public function get_mahasiswa() {
        $this->db->select('mahasiswa.*, kelas.nama_kelas');
        $this->db->from('mahasiswa');
        $this->db->join('kelas', 'mahasiswa.id_kelas = kelas.id_kelas', 'left');
        return $this->db->get()->result_array();
    }

    // Get semua nilai mahasiswa
    public function get_nilai() {
        $this->db->select('
            mahasiswa.id_mahasiswa,
            mahasiswa.nama AS nama_mahasiswa,
            mahasiswa.nim AS NIM,
            mata_kuliah.nama_mata_kuliah AS mata_kuliah,
            kelas.nama_kelas AS kelas,
            nilai_mahasiswa.id_nilai,
            nilai_mahasiswa.tugas AS nilai_tugas,
            nilai_mahasiswa.responsi AS nilai_responsi,
            nilai_mahasiswa.uts AS nilai_uts,
            nilai_mahasiswa.uas AS nilai_uas
        ');
        $this->db->from('mahasiswa');
        $this->db->join('kelas', 'mahasiswa.id_kelas = kelas.id_kelas', 'left');
        $this->db->join('nilai_mahasiswa', 'mahasiswa.id_mahasiswa = nilai_mahasiswa.id_mahasiswa', 'left');
        $this->db->join('mata_kuliah', 'nilai_mahasiswa.id_mata_kuliah = mata_kuliah.id_mata_kuliah', 'left');
        return $this->db->get()->result_array();
    }
    

    // Get total mahasiswa
    public function get_total_mahasiswa() {
        return $this->db->count_all('mahasiswa');
    }

    // Get total kelas
    public function get_total_kelas() {
        return $this->db->count_all('kelas');
    }

    // Get rata-rata nilai mahasiswa
    public function get_rata_rata_nilai() {
        $this->db->select('AVG((tugas + responsi + uts + uas)/4) AS avg_nilai', FALSE);
        $result = $this->db->get('nilai_mahasiswa')->row();
        return $result ? round($result->avg_nilai, 2) : 0;
    }

    // Get mahasiswa berdasarkan NIM
    public function get_mahasiswa_by_nim($nim) {
        $this->db->select('id_mahasiswa, nama, nim, id_kelas');
        $this->db->from('mahasiswa');
        $this->db->where('nim', $nim);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Insert nilai mahasiswa
    public function insert_nilai($data) {
        $this->db->insert('nilai_mahasiswa', $data);
    }

    // Update nilai mahasiswa
    public function update_nilai($id_nilai, $data) {
        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai_mahasiswa', $data);
    }

    // Delete nilai mahasiswa
    public function delete_nilai($id) {
        $this->db->where('id_nilai', $id);
        $this->db->delete('nilai_mahasiswa');
    }
}
