<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mission extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '3') {
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
        $data['judul'] = 'Lakukan Misimu!';
        $this->load->view('templates/head3', $data);
        $this->load->view('gamifikasi/mission', $data);
        $this->load->view('templates/foot3');
    }

    public function assignment()
    {
        $data['gamifikasi'] = $this->Gamifikasi_model->gamifikasi();
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Selesaikan pekerjaanmu!';
        $this->load->view('templates/head3', $data);
        $this->load->view('gamifikasi/assignment', $data);
        $this->load->view('templates/foot3');
    }

}
