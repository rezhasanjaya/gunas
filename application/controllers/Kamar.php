<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">Login Terlebih Dahulu    !</div>');
            redirect('Auth');
        }
        $this->load->library('form_validation');
        $this->load->model('Kamar_model');
        $this->load->model('Penginapan_model');
    }


    public function index()
    {
        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required|max_length[4]');
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['kamar'] = $this->Kamar_model->getAllKamar();
        $data['judul'] = 'Data Kamar';
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('kamar/index', $data);
        $this->load->view('templates/footer'); 
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('kamar/index', $data);
            $this->load->view('templates/footer'); 
        }
    }

    public function tambah()
    {
        $this->Kamar_model->tambahDataKamar();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('kamar');
    }


    public function Edit($no_kamar)
    {
        $data['judul'] = 'Edit Data Kamar';
        $data['kamar'] = $this->Kamar_model->getKamarByNo($no_kamar);
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kamar/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kamar_model->ubahDataKamar($no_kamar);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kamar');
        }
    }

    public function hapus($no_kamar)
    {
        $this->Kamar_model->hapusDataKamar($no_kamar);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kamar');
    }

    public function checkout($no_kamar, $id_penginapan)
    {
        $this->Penginapan_model->checkout($no_kamar);
        $this->Penginapan_model->done($id_penginapan);
        $this->session->set_flashdata('checkout', 'Check Out');
        redirect('Gamifikasi');
    }

}