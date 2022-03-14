<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_legalitas extends CI_Model {

    public function lists() {
        $this->db->select('*');
        $this->db->from('tbl_legalitas');
        $this->db->order_by('id_legalitas', 'asc');
        return $this->db->get()->result();
    }

    public function detail($id_legalitas) {
        $this->db->select('*');
        $this->db->from('tbl_legalitas');
        $this->db->where('id_legalitas', $id_legalitas);
        return $this->db->get()->row();
    }

    public function save($data) {
        $this->db->where('id_legalitas', $data['id_legalitas']);
        $this->db->update('tbl_legalitas', $data);
    }

}

/* End of file M_legalitas.php */
