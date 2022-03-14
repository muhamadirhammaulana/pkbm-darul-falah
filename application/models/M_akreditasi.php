<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_akreditasi extends CI_Model {

    public function lists() {
        $this->db->select('*');
        $this->db->from('tbl_akreditasi');
        $this->db->order_by('id_akreditasi', 'asc');
        return $this->db->get()->result();
    }

    public function detail($id_akreditasi) {
        $this->db->select('*');
        $this->db->from('tbl_akreditasi');
        $this->db->where('id_akreditasi', $id_akreditasi);
        return $this->db->get()->row();
    }

    public function save($data) {
        $this->db->where('id_akreditasi', $data['id_akreditasi']);
        $this->db->update('tbl_akreditasi', $data);
    }

}

/* End of file M_akreditasi.php */
