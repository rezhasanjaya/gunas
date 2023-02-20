<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gamifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">Login Terlebih Dahulu    !</div>');
            redirect('Auth');
        }
        $this->load->library('form_validation');
        $this->load->model('Gamifikasi_model');
    }

    public function index()
    {
        $data['gamifikasi'] = $this->Gamifikasi_model->gamifikasi();
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Pilih Karyawan Terbaik';
        $this->load->view('templates/header', $data);
        $this->load->view('gamifikasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function pilih($id_gamifikasi)
    {
        $data['gamifikasi'] = $this->Gamifikasi_model->getDatabyId($id_gamifikasi);
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Pilih Karyawan Terbaik';
        $this->form_validation->set_rules('tambah_point', 'Point', 'required');
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('gamifikasi/pilih', $data);
        $this->load->view('templates/footer');
        }else {
            $this->Gamifikasi_model->calculate($id_gamifikasi);
            $this->session->set_flashdata('thx', 'Terimakasih');
            redirect('penginapan');
        }
    }

    public function mission(){
        
    }

}