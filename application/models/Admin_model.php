<?php
class Admin_model extends CI_Model {

    // Get all mahasiswa
    public function get_mahasiswa() {
        $this->db->select('mahasiswa.*, kelas.nama_kelas');
        $this->db->from('mahasiswa');
        $this->db->join('kelas', 'mahasiswa.id_kelas = kelas.id_kelas');
        return $this->db->get()->result_array();
    }

    // Get all kelas
    public function get_kelas() {
        return $this->db->get('kelas')->result_array();
    }

    // Insert mahasiswa
    public function insert_mahasiswa($data) {
        $this->db->insert('mahasiswa', $data);
    }

    // Delete mahasiswa
    public function delete_mahasiswa($id) {
        $this->db->delete('mahasiswa', ['id_mahasiswa' => $id]);
    }

    // Get all mata kuliah
    public function get_mata_kuliah() {
        return $this->db->get('mata_kuliah')->result_array();
    }

    // Get all dosen
    public function get_dosen() {
        return $this->db->get('dosen')->result_array();
    }
}
