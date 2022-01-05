<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function detail($id_user) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id_user', $id_user);
        return $this->db->get()->row();
    }

    public function save($data) {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('tbl_user', $data);
    }

}

/* End of file M_user.php */
