<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Akreditasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        
    }

    public function index()
    {
        $data = array(
            'akreditasi' => $this->m_home->akreditasi(),
            //'isi' => 'v_guru'
        );
        $this->load->view('page-akreditasi', $data, FALSE);
    }

}

/* End of file Akreditasi.php */
