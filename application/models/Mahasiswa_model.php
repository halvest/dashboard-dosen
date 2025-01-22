<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {


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
    
}
