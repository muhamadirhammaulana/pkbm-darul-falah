<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

    public function save($data) {
        $this->db->insert('tbl_user', $data);
    }

    function check_user_exist($username){
        $this->db->where('username',$username);
        $this->db->from('tbl_user');
        
        $query= $this->db->get();
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

}

/* End of file M_register.php */
