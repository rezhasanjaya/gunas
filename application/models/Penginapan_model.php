<?php
class Penginapan_model extends CI_Model
{ 
    public function pesan()
    {
        $data = [
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "no_kamar" => $this->input->post('no_kamar', true),
            "nama_pelanggan" => $this->input->post('nama_pelanggan', true),
            "no_telp" => $this->input->post('no_telp', true),
            "tgl_check_in" => $this->input->post('tgl_chekin', true),
            "tgl_check_out" => $this->input->post('tgl_chekout', true),
            "hari_menginap" => $this->input->post('hari_menginap', true),
            "total_harga" => $this->input->post('total_harga', true),
            "uang_bayar" => $this->input->post('uang_bayar', true),
            "uang_kembali" => $this->input->post('uang_kembali', true),
            "done" => 0,
            "pelayanan" => 0,
        ];
        $this->db->insert('data_penginapan', $data);
    }
    

    public function changeCek(){
        $data2 = [
            "cek" => 1,
        ];
        $this->db->where('no_kamar', $this->input->post('no_kamar', true));
        $this->db->update('kamar', $data2);
    }

    public function checkout($no_kamar){
        $data2 = [
            "cek" => 0,
        ];
        $this->db->where('no_kamar', $no_kamar);
        $this->db->update('kamar', $data2);
    }

    public function done($id_penginapan){
        $data1 = [
            "done" => 1,
        ];
        $this->db->where('id_penginapan', $id_penginapan);
        $this->db->update('data_penginapan', $data1);
    }

    public function pelayanan()
    {
        $this->db->select('*');
        $this->db->from('data_penginapan');
        $this->db->join('kamar', 'data_penginapan.no_kamar = kamar.no_kamar');
        $this->db->join('pegawai', 'data_penginapan.id_pegawai = pegawai.id_pegawai');
        $this->db->where('data_penginapan.done', 0);
        $query = $this->db->get();
        return $query->result_array();
    }
}