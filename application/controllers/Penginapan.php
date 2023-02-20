<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penginapan extends CI_Controller
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
        $this->load->model('Pegawai_model');
        $this->load->model('Akun_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Penginapan';
        $this->load->view('templates/header', $data);
        $this->load->view('penginapan/index', $data);
        $this->load->view('templates/footer');
    }

    public function pesan()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Pegawai_model->getPegawaiByAkun();
        $data['standar'] = $this->Kamar_model->standar();
        $data['deluxe'] = $this->Kamar_model->deluxe();
        $data['vip'] = $this->Kamar_model->vip();
        $data['judul'] = 'Pesan Kamar Standar';
        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required');
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('tgl_chekin', 'Tanggal Check-in', 'required');
        $this->form_validation->set_rules('tgl_chekout', 'Tanggal Check-out', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|max_length[13]|min_length[11]');
        $this->form_validation->set_rules('uang_bayar', 'Uang Bayar', 'required');
        $this->form_validation->set_rules('uang_kembali', 'Uang Kembali', 'numeric|required|greater_than[-1]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penginapan/pesan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penginapan_model->Pesan();
            $this->Penginapan_model->changeCek();
            $this->session->set_flashdata('flash', 'Memesan Kamar');
            redirect('penginapan');
        }
    }

    public function stdout()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Pegawai_model->getPegawaiByAkun();
        $data['kamar'] = $this->Kamar_model->standarTerisi();
        $data['judul'] = 'Kamar Terisi Standar';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penginapan/stdout', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penginapan_model->checkout();
            $this->Penginapan_model->done();
            $this->session->set_flashdata('checkout', 'Check Out');
            redirect('gamifikasi');
        }
    }

    public function deluxe()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Pegawai_model->getPegawaiByAkun();
        $data['deluxe'] = $this->Kamar_model->deluxe();
        $data['judul'] = 'Pesan Kamar Deluxe';
        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required');
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('tgl_chekin', 'Tanggal Check-in', 'required');
        $this->form_validation->set_rules('tgl_chekout', 'Tanggal Check-out', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|max_length[13]|min_length[11]');
        $this->form_validation->set_rules('uang_bayar', 'Uang Bayar', 'required');
        $this->form_validation->set_rules('uang_kembali', 'Uang Kembali', 'numeric|required|greater_than[-1]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penginapan/deluxe', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penginapan_model->Pesan();
            $this->Penginapan_model->changeCek();
            $this->session->set_flashdata('flash', 'Memesan Kamar');
            redirect('penginapan');
        }
    }

    public function delout()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Pegawai_model->getPegawaiByAkun();
        $data['kamar'] = $this->Kamar_model->deluxeTerisi();
        $data['deluxe'] = $this->Kamar_model->deluxe();
        $data['vip'] = $this->Kamar_model->vip();
        $data['judul'] = 'Pesan Kamar Standar';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penginapan/delout', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penginapan_model->checkout();
            $this->Penginapan_model->done();
            $this->session->set_flashdata('checkout', 'Check Out');
            redirect('gamifikasi');
        }
    }

    public function vip()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Pegawai_model->getPegawaiByAkun();
        $data['vip'] = $this->Kamar_model->vip();
        $data['judul'] = 'Pesan Kamar Vip';
        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required');
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('tgl_chekin', 'Tanggal Check-in', 'required');
        $this->form_validation->set_rules('tgl_chekout', 'Tanggal Check-out', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|max_length[13]|min_length[11]');
        $this->form_validation->set_rules('uang_bayar', 'Uang Bayar', 'required');
        $this->form_validation->set_rules('uang_kembali', 'Uang Kembali', 'numeric|required|greater_than[-1]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penginapan/vip', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penginapan_model->Pesan();
            $this->Penginapan_model->changeCek();
            $this->session->set_flashdata('flash', 'Memesan Kamar');
            redirect('penginapan');
        }
    }

    public function vipout()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->Pegawai_model->getPegawaiByAkun();
        $data['kamar'] = $this->Kamar_model->vipTerisi();
        $data['deluxe'] = $this->Kamar_model->deluxe();
        $data['vip'] = $this->Kamar_model->vip();
        $data['judul'] = 'Pesan Kamar Standar';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penginapan/vipout', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penginapan_model->checkout();
            $this->Penginapan_model->done();
            $this->session->set_flashdata('checkout', 'Check Out');
            redirect('gamifikasi');
        }
    }
}