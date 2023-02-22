<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mission extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">Login Terlebih Dahulu    !</div>');
            redirect('Auth');
        }
        $this->load->library('form_validation');
        $this->load->model('Gamifikasi_model');
        $this->load->model('Penginapan_model');
    }
    public function index()
    {
        $data['mission'] = $this->Gamifikasi_model->getMission();
        $data['gamifikasi'] = $this->Gamifikasi_model->gamifikasi();
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Lakukan Misimu!';
        $this->load->view('templates/head3', $data);
        $this->load->view('gamifikasi/mission', $data);
        $this->load->view('templates/foot3');
    }

    public function assignment($id_mission, $id_gamifikasi)
    {
        $data['gamifikasi'] = $this->Gamifikasi_model->getDatabyId($id_gamifikasi);
        $data['misi'] = $this->Gamifikasi_model->getMisiById($id_mission);
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Selesaikan pekerjaanmu!';
        $data['pelanggan'] = $this->Penginapan_model->pelayanan();
        $data['merapikan'] = $this->Penginapan_model->merapikan();
        $data['reservasi'] = $this->Penginapan_model->reservasi();
        $data['kunci'] = $this->Penginapan_model->keyManage();
        $this->form_validation->set_rules('point', 'Point', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/head3', $data);
            $this->load->view('gamifikasi/assignment', $data);
            $this->load->view('templates/foot3');
        } else {
            $this->Gamifikasi_model->done_mission($id_mission);
            $this->Gamifikasi_model->calculate($id_gamifikasi);
            $this->Gamifikasi_model->changeDone();
            $this->session->set_flashdata('flash', 'Selesaikan Misi');
            redirect('mission');
        }    
    }

    public function reset_mission()
    {
        $this->Gamifikasi_model->reset_mission();
        $this->session->set_flashdata('mission', 'Direset');
        redirect('mission');
    }
}
