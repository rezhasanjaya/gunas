<?php

class Kamar_model extends CI_Model
{
    public function getAllKamar()
    {
        return $this->db->get('kamar')->result_array(); 
    }

    public function getKamarByNo($no_kamar)
    {
        return $this->db->get_where('kamar', ['no_kamar' => $no_kamar])->row_array();
    }

    public function getdata_Kamar()
    {
        $query = $this->db->query("SELECT * FROM kamar ORDER BY no_kamar ASC");
        return $query->result();
    }

    public function tambahDataKamar()
    {
        $tipe_kamar = $this->input->post('tipe_kamar', true);

        if ($tipe_kamar == 'Standar'){
            $harga = 200000;
            $kapasistas = 2;
        } elseif($tipe_kamar == 'Deluxe') {
            $harga = 300000;
            $kapasistas = 3;
        } elseif($tipe_kamar == 'VIP'){
            $harga = 450000;
            $kapasistas = 4;
        };

        $data = [
            "no_kamar" => $this->input->post('no_kamar', true),
            "tipe_kamar" => $this->input->post('tipe_kamar', true),
            "harga" => $harga,
            "kapasitas" => $kapasistas
        ];
        $this->db->insert('kamar', $data);
    }

    public function ubahDataKamar()
    {
        $tipe_kamar = $this->input->post('tipe_kamar', true);

        if ($tipe_kamar == 'Standar'){
            $harga = 200000;
            $kapasistas = 2;
        } elseif($tipe_kamar == 'Deluxe') {
            $harga = 300000;
            $kapasistas = 3;
        } elseif($tipe_kamar == 'VIP'){
            $harga = 450000;
            $kapasistas = 4;
        };
        $data = [
            "no_kamar" => $this->input->post('no_kamar', true),
            "tipe_kamar" => $this->input->post('tipe_kamar', true),
            "harga" => $harga,
            "kapasitas" => $kapasistas
        ];
        $this->db->where('no_kamar',  $this->input->post('no_kamar'));
        $this->db->update('kamar', $data);
    }

    public function hapusDataKamar($no_kamar)
    {
        $this->db->where('no_kamar', $no_kamar);
        $this->db->delete('kamar');
    }

    public function standar()
    {
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->where('kamar.tipe_kamar', 'Standar');
        $this->db->where('kamar.cek', 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function standarTerisi()
    {
        $this->db->select('*');
        $this->db->from('data_penginapan');
        $this->db->join('kamar', 'data_penginapan.no_kamar = kamar.no_kamar');
        $this->db->join('pegawai', 'data_penginapan.id_pegawai = pegawai.id_pegawai');
        $this->db->where('kamar.tipe_kamar', 'Standar');
        $this->db->where('kamar.cek', 1);
        $this->db->where('data_penginapan.done', 0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deluxe()
    {
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->where('kamar.tipe_kamar', 'Deluxe');
        $this->db->where('kamar.cek', 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function deluxeTerisi()
    {
        $this->db->select('*');
        $this->db->from('data_penginapan');
        $this->db->join('kamar', 'data_penginapan.no_kamar = kamar.no_kamar');
        $this->db->join('pegawai', 'data_penginapan.id_pegawai = pegawai.id_pegawai');
        $this->db->where('kamar.tipe_kamar', 'Deluxe');
        $this->db->where('kamar.cek', 1);
        $this->db->where('data_penginapan.done', 0);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function vip()
    {
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->where('kamar.tipe_kamar', 'VIP');
        $this->db->where('kamar.cek', 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function vipTerisi()
    {
        $this->db->select('*');
        $this->db->from('data_penginapan');
        $this->db->join('kamar', 'data_penginapan.no_kamar = kamar.no_kamar');
        $this->db->join('pegawai', 'data_penginapan.id_pegawai = pegawai.id_pegawai');
        $this->db->where('kamar.tipe_kamar', 'VIP');
        $this->db->where('kamar.cek', 1);
        $this->db->where('data_penginapan.done', 0);
        $query = $this->db->get();
        return $query->result_array();
    }
}
