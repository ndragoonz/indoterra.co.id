<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    // public function index() {
    //     if ($this->session->userdata('login') == true) {
    //         if ($this->session->userdata('role') == "superadmin") {
    //             redirect('admin/manage_member/listMember');
    //         }else if($this->session->userdata('role') == "admin" {
    //             redirect('admin/manage_news/listNews');
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger fade in"><strong>Login Tidak Valid</strong></div>');
    //             redirect('admin/login_user/login');
    //         }
    //
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger fade in"><strong>Harap Login Dulu !</strong></div>');
    //         redirect('login/login_user/login');
    //     }
    // }

    public function login()
    {
        $this->load->view('back/login');
    }

    public function proses_login() {

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == true) {
            $cek = $this->m_login->cek_login();
            if ($cek == true) {
                redirect('login/login_user/index');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger fade in"><strong>Username dan Password Salah !!</strong></div>');
                redirect('login/login_user/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade in"><strong>Username dan Password Harus Diisi !!</strong></div>');
            redirect('login/login_user/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success fade in"><strong>Anda Berhasil Logout</strong></div>');
        redirect('login/login_user/login', 'refresh');
    }





}

?>
