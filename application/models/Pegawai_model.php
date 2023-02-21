<?php

class Pegawai_model extends CI_Model
{
    public function getAllPegawai()
    {
        try {
            $query = $this->db->where('jabatan !=', 'Admin')->get('pegawai');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return array();
            }
        } catch (Exception $e) {
            log_message('error', 'Error in getAllPegawai: ' . $e->getMessage());
            return false;
        }
    }

    public function getPegawaiById($id_pegawai)
    {
        return $this->db->get_where('pegawai', ['id_pegawai' => $id_pegawai])->row_array();
    }

    public function getdata_Pegawai()
    {
        $query = $this->db->query("SELECT * FROM pegawai ORDER BY id_pegawai ASC");
        return $query->result();
    }

    public function tambahDataPegawai()
    {
            $value= $this->input->post('nama_pegawai', true);
            $first_word = strtok($value, " ");
            $data = [
                "nama_pegawai" => $this->input->post('nama_pegawai', true),
                "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
                "jabatan" => $this->input->post('jabatan', true),
                "tgl_lahir" => $this->input->post('tgl_lahir', true),
                "tempat_lahir" => $this->input->post('tempat_lahir', true),
                "no_telp" => $this->input->post('no_telp', true)
            ];
            $this->db->insert('pegawai', $data);
            $insert_id = $this->db->insert_id();
            $getId = strval($insert_id);
            $data2 = [
                "username" => strtolower("gunas".$first_word.$getId),
                "email" => null,
                "password" => md5('password123'),
                "role_id" => 2,
                "id_pegawai " =>  $insert_id,
                "image" => 'default.jpg',
            ];
            $this->db->insert('akun', $data2);
            $insert_id = $this->db->insert_id();
            $data3 = [
                "id_akun" => $insert_id,
                "level" => 1,
                "max_point" => 50,
                "point" => 0,
                "badge" => 'Iron',
            ];
            $this->db->insert('gamifikasi', $data3);
            if ($this->input->post('jabatan') == 'Pelayan'){
                $insert_id = $this->db->insert_id();
                $misi1 = [
                    "id_gamifikasi" => $insert_id,
                    "mission" => "Melayani Pelanggan",
                    "keterangan" => "Layani pelanggan yang datang dengan membawa dan mengantarkan pelanggan menuju kamar",
                    "point" => 10,
                    "done"=> 0,
                ];
                $misi2 = [
                    "id_gamifikasi" => $insert_id,
                    "mission" => "Merapikan Kamar",
                    "keterangan" => "Merapikan kamar yang telah diisi pelanggan setelah melakukan check out",
                    "point" => 5,
                    "done"=> 0,
                ];
                $this->db->insert('mission', $misi1);
                $this->db->insert('mission', $misi2);
            } elseif ($this->input->post('jabatan') == 'Resepsionis') {
                $insert_id = $this->db->insert_id();
                $misi1 = [
                    "id_gamifikasi" => $insert_id,
                    "mission" => "Melayani Reservasi",
                    "keterangan" => "melayani pelanggan yang reservasi",
                    "point" => 10,
                    "done"=> 0,
                ];
                $misi2 = [
                    "id_gamifikasi" => $insert_id,
                    "mission" => "Merapikan Kunci",
                    "keterangan" => "Merapikan kunci kamar sesuai dengan kategori kamar",
                    "point" => 5,
                    "done"=> 0,
                ];
                $this->db->insert('mission', $misi1);
                $this->db->insert('mission', $misi2);
            } 
            
    }

    public function hapusDataPegawai($id_pegawai)
    {
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->delete('pegawai');
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->delete('akun');
    }

    public function ubahDataPegawai()
    {
        $data = [
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "nama_pegawai" => $this->input->post('nama_pegawai', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "jabatan" => $this->input->post('jabatan', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "no_telp" => $this->input->post('no_telp', true)
        ];
        $this->db->where('id_pegawai',  $this->input->post('id_pegawai'));
        $this->db->update('pegawai', $data);
    }

    public function getPegawaiByAkun()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('akun', 'pegawai.id_pegawai = akun.id_pegawai');
        $this->db->where('pegawai.id_pegawai', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result_array();
    }
}
