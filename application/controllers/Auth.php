<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        if ($this->session->userdata('role_id') == '1') {
            redirect('dashboard');
        } else if ($this->session->userdata('role_id') == '2') {
            redirect('pegawaiPage');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Login';
            $this->load->view('templates/head',  $data);
            $this->load->view('login/index', $data);
            $this->load->view('templates/foot',  $data);
        } else {
            $auth = $this->Auth_model->cek_login();
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->db->get_where('akun', ['username' => $username])->row_array();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">Username atau Password Salah!</div>');
                redirect('Auth');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                $pass = md5($auth->password);
                if ($auth->role_id == '1') {
                    redirect('Dashboard');
                } else if ($auth->role_id == '3') {
                    redirect('PegawaiPage');
                }
            }
        }
    }
}