<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {

    public function detail() {
        $this->db->select('*');
        $this->db->from('tbl_profil');
        $this->db->where('id_profil', 1);
        return $this->db->get()->row(); 
    }

    public function list_medsos() {
        $this->db->select('*');
        $this->db->from('tbl_medsos');
        $this->db->order_by('id_medsos', 'asc');
        return $this->db->get()->result();
    }

    public function save($data) {
        $this->db->where('id_profil', $data['id_profil']);
        $this->db->update('tbl_profil', $data);
    }

    public function update_medsos($data) {
        $this->db->where('id_medsos', $data['id_medsos']);
        $this->db->update('tbl_medsos', $data);
    }

}

/* End of file M_profil.php */
