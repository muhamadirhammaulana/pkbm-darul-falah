<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_akreditasi extends CI_Model {

    public function detail() {
        $this->db->select('*');
        $this->db->from('tbl_akreditasi');
        $this->db->where('id_akreditasi', 1);
        return $this->db->get()->row();
    }

    public function save($data) {
        $this->db->where('id_akreditasi', $data['id_akreditasi']);
        $this->db->update('tbl_akreditasi', $data);
    }

}

/* End of file M_akreditasi.php */
