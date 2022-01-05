<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_home');
    }

    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->user_login->login($username, $password);
        }

        $data = array(
            'profil' => $this->m_home->profil(),
            'medsos' => $this->m_home->medsos()
        );
        $this->load->view('page-login', $data, FALSE);
    }

    public function logout() {
        $this->user_login->logout();
    }

}

/* End of file Login.php */