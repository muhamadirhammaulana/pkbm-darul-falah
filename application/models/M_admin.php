<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function lists() {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('level', 1);
        $this->db->order_by('id_user', 'asc');
        return $this->db->get()->result();
    }

    public function check_user_exist($username) {
        $this->db->where('username', $username);
        $this->db->from('tbl_user');

        $query= $this->db->get();
        if($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function detail($id_user) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id_user', $id_user);
        return $this->db->get()->row();
    }

    public function add($data) {
        $this->db->insert('tbl_user', $data);
    }

    public function edit($data) {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('tbl_user', $data);
    }

    public function delete($data) {
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('tbl_user', $data);
        
    }

}

/* End of file M_admin.php */
