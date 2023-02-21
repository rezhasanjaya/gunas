<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">Login Terlebih Dahulu    !</div>');
            redirect('Auth');
        }
        $this->load->library('form_validation');
        $this->load->model('Pegawai_model');
        $this->load->model('Gamifikasi_model');
    }

    public function index()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $this->Pegawai_model->getAllPegawai();
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Data Pegawai';
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['judul'] = 'Tambah Data Pegawai';
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|max_length[50]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|max_length[13]|min_length[11]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->tambahDataPegawai();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pegawai/index');
        }
    }

    public function Edit($id_pegawai)
    {
        $data['judul'] = 'Edit Data Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id_pegawai);
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['jabatan'] = ['Pelayan', 'Resepsionis', 'Cleaning Service', 'Keamanan', 'Juru Masak'];
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|max_length[50]');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->ubahDataPegawai();
            $this->session->set_flashdata('flash', 'DiUbah');
            redirect('pegawai/index');
        }
    }

    public function hapus($id_pegawai)
    {
        $this->Pegawai_model->hapusDataPegawai($id_pegawai);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pegawai');
    }

    public function reset_mPoint()
    {
        $this->Gamifikasi_model->reset_mPoint();
        $this->session->set_flashdata('flash', 'Direset');
        redirect('pegawai');
    }


}