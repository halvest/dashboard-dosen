<?php
class Dosen_model extends CI_Model {

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

    public function get_nilai() {
        $this->db->select('
            nilai_mahasiswa.id_nilai,
            nilai_mahasiswa.tugas AS nilai_tugas,
            nilai_mahasiswa.responsi AS nilai_responsi,
            nilai_mahasiswa.uts AS nilai_uts,
            nilai_mahasiswa.uas AS nilai_uas,
            mahasiswa.nama AS nama_mahasiswa,
            mahasiswa.nim AS NIM,
            mata_kuliah.nama_mata_kuliah AS mata_kuliah,
            kelas.nama_kelas AS kelas
        ');
        $this->db->from('nilai_mahasiswa');
        $this->db->join('mahasiswa', 'nilai_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa');
        $this->db->join('mata_kuliah', 'nilai_mahasiswa.id_mata_kuliah = mata_kuliah.id_mata_kuliah');
        $this->db->join('kelas', 'mahasiswa.id_kelas = kelas.id_kelas');
        return $this->db->get()->result_array();
    }

    public function get_mahasiswa() {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function get_total_mahasiswa() {
        return $this->db->count_all('mahasiswa');
    }

    public function get_total_kelas() {
        return $this->db->count_all('kelas');
    }

    public function get_rata_rata_nilai() {
        $this->db->select_avg('(tugas + responsi + uts + uas)/4', 'avg_nilai');
        $result = $this->db->get('nilai_mahasiswa')->row();
        return round($result->avg_nilai, 2);
    }

    public function get_mahasiswa_by_nim($nim) {
    $this->db->select('id_mahasiswa, nama, nim, id_kelas');
    $this->db->from('mahasiswa');
    $this->db->where('nim', $nim);
    $query = $this->db->get();
    return $query->row_array();
}


    public function insert_nilai($data){
        $this->db->insert('nilai_mahasiswa', $data);
    }

    public function update_nilai($id_nilai, $data){
        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai_mahasiswa', $data);
    }

    public function delete_nilai($id){
        $this->db->where('id_nilai', $id);
        $this->db->delete('nilai_mahasiswa');
    }
}
