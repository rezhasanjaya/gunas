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
        $jabat = $this->input->post('jabatan');
        if($jabat == 'Pelayan'){
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
                "username" => strtolower($first_word.$getId),
                "email" => null,
                "password" => md5('password123'),
                "role_id" => 3,
                "id_pegawai " =>  $insert_id,
                "image" => 'default.jpg',
            ];
            $this->db->insert('akun', $data2);
            $insert_id = $this->db->insert_id();
            $data3 = [
                "id_akun" => $insert_id,
                "level" => 1,
                "point" => 0,
                "badge" => 'Iron',
            ];
            $this->db->insert('gamifikasi', $data3);

        } elseif ($jabat == 'Resepsionis') {
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
                "username" => strtolower($first_word.$getId),
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
                "point" => 0,
                "badge" => 'Iron',
            ];
            $this->db->insert('gamifikasi', $data3);

        } else {
            $data = [
                "nama_pegawai" => $this->input->post('nama_pegawai', true),
                "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
                "jabatan" => $this->input->post('jabatan', true),
                "tgl_lahir" => $this->input->post('tgl_lahir', true),
                "tempat_lahir" => $this->input->post('tempat_lahir', true),
                "no_telp" => $this->input->post('no_telp', true)
            ];
            $this->db->insert('pegawai', $data);
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
