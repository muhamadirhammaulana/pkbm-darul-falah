<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_home');
    }
    
    public function index() {
        $data = array(
            'profil' => $this->m_home->profil(),
            'medsos' => $this->m_home->medsos(),
            'program' => $this->m_home->program(),
            'latest_berita' => $this->m_home->latest_berita(),
        );
        $this->load->view('page-home', $data, FALSE);
    }

    public function akreditasi() {
        $data = array(
            'profil' => $this->m_home->profil(),
            'akreditasi' => $this->m_home->akreditasi(),
        );
        $this->load->view('page-akreditasi', $data, FALSE);
    }

    public function visi_misi() {
        $data = array(
            'profil' => $this->m_home->profil(),
            'visimisi' => $this->m_home->visimisi()
        );
        $this->load->view('page-visi-misi', $data, FALSE);
    }

    public function profil() {
        $data = array(
            'profil' => $this->m_home->profil()
        );
        $this->load->view('page-profil', $data, FALSE);
    }

    public function struktur() {
        $data = array(
            'profil' => $this->m_home->profil(),
            'struktur' => $this->m_home->struktur()
        );
        $this->load->view('page-struktur', $data, FALSE);
    }

    public function pembelajaran() {
        $data = array(
            'profil' => $this->m_home->profil(),
            'program' => $this->m_home->program()
        );
        $this->load->view('page-pembelajaran', $data, FALSE);
    }

    public function galeri() {
        $this->load->library('pagination');

        $config['base_url'] = base_url('galeri');
        $config['total_rows'] = count($this->m_home->total_galeri());
        $config['per_page'] = 6;
        //$config['uri_segment'] = 2;

        $limit = $config['per_page'];
        $start = ($this->uri->segment(2)) ? ($this->uri->segment(2)) : 0;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        

        $this->pagination->initialize($config);

        $data = array(
            'profil' => $this->m_home->profil(),
            'paginasi' => $this->pagination->create_links(),
            'galeri' => $this->m_home->galeri($limit, $start),
        );
        $this->load->view('page-galeri', $data, FALSE);
    }

    public function detail_galeri($id_galeri) {
        $data = array(
            'profil' => $this->m_home->profil(),
            'detail_foto' => $this->m_home->detail_foto($id_galeri),
            'detail_video' => $this->m_home->detail_video($id_galeri),
            'nama_galeri' => $this->m_home->nama_galeri($id_galeri),
            'jml_foto' => $this->m_home->detail_jumlahfoto($id_galeri),
            'jml_video' => $this->m_home->detail_jumlahvideo($id_galeri),
            'isi' => 'v_detail_galeri'
        );
        $this->load->view('page-detail-galeri', $data, FALSE);
    }

    public function alumni() {
        $data = array(
            'profil' => $this->m_home->profil(),
            //'pembelajaran' => $this->m_home->pembelajaran()
        );
        $this->load->view('page-alumni', $data, FALSE);
    }

    public function informasi_berita() {
        $this->load->library('pagination');

        $config['base_url'] = base_url('informasi-berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 6;
        //$config['uri_segment'] = 2;

        $limit = $config['per_page'];
        $start = ($this->uri->segment(2)) ? ($this->uri->segment(2)) : 0;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        
        $this->pagination->initialize($config);

        $data = array(
            'profil' => $this->m_home->profil(),
            'paginasi' => $this->pagination->create_links(),
            'berita' => $this->m_home->berita($limit, $start),
        );
        $this->load->view('page-informasi-berita', $data, FALSE);
    }

    public function detail_informasi_berita($slug_berita) {
        $data = array(
            'profil' => $this->m_home->profil(),
            'detail_berita' => $this->m_home->detail_berita($slug_berita),
            'latest_berita' => $this->m_home->latest_berita()
        );
        $this->load->view('page-detail-informasi-berita', $data, FALSE);
    }

    public function legalitas() {
        $data = array(
            'profil' => $this->m_home->profil(),
            'legalitas' => $this->m_home->legalitas()
        );
        $this->load->view('page-legalitas', $data, FALSE);
    }

}

/* End of file Home.php */
