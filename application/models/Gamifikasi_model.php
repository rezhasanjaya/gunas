<?php
class Gamifikasi_model extends CI_Model
{
    public function gamifikasi()
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('pegawai', 'akun.id_pegawai = pegawai.id_pegawai');
        $this->db->join('gamifikasi', 'akun.id = gamifikasi.id_akun');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('pegawai', 'akun.id_pegawai = pegawai.id_pegawai');
        $this->db->join('gamifikasi', 'akun.id = gamifikasi.id_akun');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataPegawai()
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('pegawai', 'akun.id_pegawai = pegawai.id_pegawai');
        $this->db->join('gamifikasi', 'akun.id = gamifikasi.id_akun');
        $this->db->where('akun.username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getRank()
{
    $this->db->select('*');
    $this->db->from('akun');
    $this->db->join('pegawai', 'akun.id_pegawai = pegawai.id_pegawai');
    $this->db->join('gamifikasi', 'akun.id = gamifikasi.id_akun');
    $this->db->order_by('gamifikasi.point', 'desc'); // Order by point in descending order
    $query = $this->db->get();
    return $query->result_array();
}

    public function getDatabyId($id_gamifikasi)
    {
        return $this->db->get_where('gamifikasi', ['id_gamifikasi' => $id_gamifikasi])->row_array();
    }

    public function calculate($id_gamifikasi)
    {
        $calculate = $this->input->post('point', true) +  $this->input->post('tambah_point', true);
        if($calculate >= 50) {
            $level = 2;
        }else if ($calculate >= 100){
            $level = 3;
        } else if ($calculate >= 150){
            $level = 4; 
        }else if ($calculate >= 200){
            $level = 5;
        }else if ($calculate >= 250){
            $level = 6;
        }else if ($calculate >= 300){
            $level = 7;
        }else if ($calculate >= 350){
            $level = 8;
        }else if ($calculate >= 400){
            $level = 9;
        }else if ($calculate >= 500){
            $level = 10;
        }

        if($level >=5){
            $badge = 'Bronze';
        } else if($level >=10) {
            $badge = 'Silver';
        } else if($level >=15) {
            $badge = 'Gold';
        } else {
            $badge = 'Iron';
        }

        $data = [
            "point" =>  $calculate,
            "level" =>  $level,
            "badge" => $badge,
        ];
        $this->db->where('id_gamifikasi', $id_gamifikasi);
        $this->db->update('gamifikasi', $data);
    }


}