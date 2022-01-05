<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembelajaran extends CI_Model {

    public function lists() {
        $this->db->select('*');
        $this->db->from('tbl_program');
        $this->db->order_by('id_program', 'asc');
        return $this->db->get()->result();
    }

    public function detail($id_program) {
        $this->db->select('*');
        $this->db->from('tbl_program');
        $this->db->where('id_program', $id_program);
        return $this->db->get()->row();
    }

    public function add($data) {
        $this->db->insert('tbl_program', $data);
    }

    public function edit($data) {
        $this->db->where('id_program', $data['id_program']);
        $this->db->update('tbl_program', $data);
    }

    public function delete($data) {
        $this->db->where('id_program', $data['id_program']);
        $this->db->delete('tbl_program', $data);
    }

}

/* End of file M_pembelajaran.php */
