<?php
class Gamifikasi_model extends CI_Model
{
    public function gamifikasi()
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('pegawai', 'akun.id_pegawai = pegawai.id_pegawai');
        $this->db->join('gamifikasi', 'akun.id = gamifikasi.id_akun');
        $this->db->where('akun.username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->row_array();
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
        $calculate = $this->input->post('point', true) +  $this->input->post('point_misi', true);
        $month_point = $this->input->post('month_point', true) +  $this->input->post('point_misi', true);
        if($calculate >= 0 &&  $calculate < 50) {
            $min_point = 0;
            $max_point = 50;
            $level = 1;
            $badge = 'Iron';
        }elseif($calculate >= 50 &&  $calculate < 100) {
            $level = 2;
            $min_point = 50;
            $max_point = 100;
            $badge = 'Iron';
        }else if ($calculate >= 100 &&  $calculate < 150){
            $level = 3;
            $min_point = 100;
            $max_point = 150;
            $badge = 'Bronze';
        } else if ($calculate >= 150 &&  $calculate < 200){
            $level = 4; 
            $min_point = 150;
            $max_point = 200;
            $badge = 'Bronze';
        }else if ($calculate >= 200 &&  $calculate < 250){
            $level = 5;
            $min_point = 200;
            $max_point = 250;
            $badge = 'Silver';
        }else if ($calculate >= 250 &&  $calculate < 300){
            $level = 6;
            $min_point = 250;
            $max_point = 300;
            $badge = 'Silver';
        }else if ($calculate >= 300 &&  $calculate < 350){
            $level = 7;
            $min_point = 300;
            $max_point = 350;
            $badge = 'Silver';
        }else if ($calculate >= 350 &&  $calculate < 400){
            $level = 8;
            $min_point = 350;
            $max_point = 400;
            $badge = 'Gold';
        }else if ($calculate >= 400 &&  $calculate < 500){
            $level = 9;
            $min_point = 400;
            $max_point = 500;
            $badge = 'Gold';
        }else if ($calculate >= 500 &&  $calculate < 600){
            $level = 10;
            $min_point = 500;
            $max_point = 600;
            $badge = 'Gold';
        }else if ($calculate >= 600 &&  $calculate < 700){
            $level = 11;
            $min_point = 600;
            $max_point = 700;
            $badge = 'Platinum';
        }else if ($calculate >= 700){
            $level = 12;
            $min_point = 700;
            $max_point = 800;
            $badge = 'Platinum';
        }

        $data = [
            "month_point" => $month_point,
            "max_point" => $max_point,
            "min_point" => $min_point,
            "point" =>  $calculate,
            "level" =>  $level,
            "badge" =>  $badge,
            "misi_selesai" =>  $this->input->post('misi_selesai', true) + 1,
        ];

        $this->db->where('id_gamifikasi', $id_gamifikasi);
        $this->db->update('gamifikasi', $data);
    }
    public function changeDone(){
        if($this->input->post('type') == 'Melayani Pelanggan'){
            $data2 = [
                "pelayanan" => 1,
            ];
        } elseif($this->input->post('type') == 'Merapikan Kamar'){
            $data2 = [
                "dirapikan" => 1,
            ];
        }  elseif($this->input->post('type') == 'Melayani Reservasi'){
            $data2 = [
                "id_pegawai" => $this->input->post('id_pegawai'),
            ];
        }  elseif($this->input->post('type') == 'Merapikan Kunci'){
            $data2 = [
                "complete" => 1,
            ];
        }

        $this->db->where('id_penginapan', $this->input->post('pelanggan'));
        $this->db->update('data_penginapan', $data2);
    }

    public function getMission()
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('pegawai', 'akun.id_pegawai = pegawai.id_pegawai');
        $this->db->join('gamifikasi', 'akun.id = gamifikasi.id_akun');
        $this->db->join('mission', 'gamifikasi.id_gamifikasi = mission.id_gamifikasi');
        $this->db->where('akun.username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result_array();
    }

    
    public function getMisiById($id_mission)
    {
        return $this->db->get_where('mission', ['id_mission' => $id_mission])->row_array();
    }

    public function done_mission($id_mission){
        $data2 = [
            "done" => 1,
            "utility" => $this->input->post('pelanggan', true)
        ];

        $this->db->where('id_mission', $id_mission);
        $this->db->update('mission', $data2);
    }

    public function reset_mPoint(){
        $data2 = [
            "month_point" => 0,
        ];
        $this->db->update('gamifikasi', $data2);
    }

    public function reset_mission(){
        $data2 = [
            "done" => 0,
            "utility" => NULL,
        ];
        $this->db->update('mission', $data2);
    }
}