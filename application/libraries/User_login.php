<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login {
    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
        $this->ci->load->model('m_login');
    }

    public function login($username, $password) {
        $cek=$this->ci->m_login->akun_login($username);

        if ($cek) {
            if(password_verify($password, $cek->password)) {
                $id_user=$cek->id_user;
                $username=$cek->username;
                $nama_user=$cek->nama_user;
                $level=$cek->level;

                // Membuat session
                $this->ci->session->set_userdata('id_user', $id_user);
                $this->ci->session->set_userdata('username', $username);
                $this->ci->session->set_userdata('nama_user', $nama_user);
                $this->ci->session->set_userdata('level', $level);
                $this->ci->session->set_flashdata('login_sukses', 'Selamat Datang !<br><strong>'.$nama_user.'</strong>');
                
                redirect('admin');

            } else {
                $this->ci->session->set_flashdata('pesan', 'Password salah !');
                redirect('login');
            }

        } else {
            $this->ci->session->set_flashdata('pesan', 'Username tidak ditemukan !');
            redirect('login');
        }
    }

    public function cek_login() {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('pesan', 'Anda belum Login !');
            redirect('login');
        }
    }

    public function logout() {
        $this->ci->session->unset_userdata('id_user');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama_user');
        $this->ci->session->unset_userdata('level');
        $this->ci->session->set_flashdata('logout', 'Logout Sukses !');
            
        redirect('login');
    }

}

/* End of file User_login.php */
