<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_struktur extends CI_Model {

    public function detail() {
        $this->db->select('*');
        $this->db->from('tbl_struktur');
        $this->db->where('id_struktur', 1);
        return $this->db->get()->row();
    }

    public function save($data) {
        $this->db->where('id_struktur', $data['id_struktur']);
        $this->db->update('tbl_struktur', $data);
    }

}

/* End of file M_struktur.php */
