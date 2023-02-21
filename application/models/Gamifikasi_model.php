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
        if($calculate >= 50 &&  $calculate < 100) {
            $level = 2;
        }else if ($calculate >= 100 &&  $calculate < 150){
            $level = 3;
        } else if ($calculate >= 150 &&  $calculate < 200){
            $level = 4; 
        }else if ($calculate >= 200 &&  $calculate < 250){
            $level = 5;
        }else if ($calculate >= 250 &&  $calculate < 300){
            $level = 6;
        }else if ($calculate >= 300 &&  $calculate < 350){
            $level = 7;
        }else if ($calculate >= 350 &&  $calculate < 400){
            $level = 8;
        }else if ($calculate >= 400 &&  $calculate < 500){
            $level = 9;
        }else if ($calculate >= 500 &&  $calculate < 600){
            $level = 10;
        }else if ($calculate >= 600 &&  $calculate < 700){
            $level = 11;
        }else if ($calculate >= 700){
            $level = 12;
        }

        $data = [
            "point" =>  $calculate,
            "level" =>  $level,
        ];

        if($level >=3 && $level < 5){
            $badge = 'Bronze';
        } else if($level >=5  && $level < 8) {
            $badge = 'Silver';
        } else if($level >=8  && $level < 11) {
            $badge = 'Gold';
        } else if($level >=11) {
            $badge = 'Platinum';
        } else {
            $badge = 'Iron';
        }

        $data = [
            "badge" =>  $badge,
        ];
        
        $this->db->where('id_gamifikasi', $id_gamifikasi);
        $this->db->update('gamifikasi', $data);
    }


}