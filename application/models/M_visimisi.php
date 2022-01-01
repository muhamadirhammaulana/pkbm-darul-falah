<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_visimisi extends CI_Model {

    public function detail() {
        $this->db->select('*');
        $this->db->from('tbl_visimisi');
        $this->db->where('id_visimisi', 1);
        return $this->db->get()->row();
        
    }

    public function save($data) {
        $this->db->where('id_visimisi', $data['id_visimisi']);
        $this->db->update('tbl_visimisi', $data);
        
    }

}

/* End of file M_visimisi.php */
