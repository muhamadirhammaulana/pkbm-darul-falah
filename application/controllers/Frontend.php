<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

	public function index()
	{
		$page = $this->input->get("page");

		$data = array(
			'akreditasi' => $this->m_home->akreditasi(),
            'visimisi' => $this->m_home->visimisi(),
            'struktur' => $this->m_home->struktur(),
			'galeri' => $this->m_home->galeri(),
            'legalitas' => $this->m_home->legalitas(),
        );

		if (! empty($page)) {

			$this->load->view("page-$page", $data, FALSE);
			
		} else {

			$this->load->view("page-home");
		}
	}
}
