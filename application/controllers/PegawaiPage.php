<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PegawaiPage extends CI_Controller
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
        $data['gamifikasi'] = $this->Gamifikasi_model->getDataPegawai();
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Dashboard';
        $this->load->view('templates/head3', $data);
        $this->load->view('dashboard/pegawai', $data);
        $this->load->view('templates/foot3');
    }

    public function rank()
    {
        $data['gamifikasi'] = $this->Gamifikasi_model->getRank();
        $data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Dashboard';
        $this->load->view('templates/head3', $data);
        $this->load->view('dashboard/rank', $data);
        $this->load->view('templates/foot3');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }
}
?>

<script>
    (function(global) {

        if (typeof(global) === "undefined") {
            throw new Error("window is undefined");
        }

        var _hash = "!";
        var noBackPlease = function() {
            global.location.href += "#";

            // making sure we have the fruit available for juice (^__^)
            global.setTimeout(function() {
                global.location.href += "!";
            }, 50);
        };

        global.onhashchange = function() {
            if (global.location.hash !== _hash) {
                global.location.hash = _hash;
            }
        };

        global.onload = function() {
            noBackPlease();

            // disables backspace on page except on input fields and textarea..
            document.body.onkeydown = function(e) {
                var elm = e.target.nodeName.toLowerCase();
                if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
                    e.preventDefault();
                }
                // stopping event bubbling up the DOM tree..
                e.stopPropagation();
            };
        }

    })(window);
</script>