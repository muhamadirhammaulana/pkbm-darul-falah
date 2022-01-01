<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function jumlah_program()
    {
        return $this->db->count_all('tbl_program');
    }

    public function jumlah_galeri()
    {
        return $this->db->count_all('tbl_galeri');
    }

    public function jumlah_berita()
    {
        return $this->db->count_all('tbl_berita');
    }

}

/* End of file M_dashboard.php */
