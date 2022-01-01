<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model {

    public function lists() {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->order_by('tbl_galeri.id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function jumlahfoto() {
        $this->db->select('tbl_galeri.*, count(tbl_foto.id_galeri) as jml_foto');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_foto', 'tbl_foto.id_galeri = tbl_galeri.id_galeri', 'left');
        $this->db->group_by('tbl_galeri.id_galeri');
        $this->db->order_by('tbl_galeri.id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function jumlahvideo() {
        $this->db->select('tbl_galeri.*, count(tbl_video.id_galeri) as jml_video');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_video', 'tbl_video.id_galeri = tbl_galeri.id_galeri', 'left');
        $this->db->group_by('tbl_galeri.id_galeri');
        $this->db->order_by('tbl_galeri.id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function lists_foto($id_galeri) {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function lists_video($id_galeri) {
        $this->db->select('*');
        $this->db->from('tbl_video');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_video', 'desc');
        return $this->db->get()->result();
    }

    public function add($data) {
        $this->db->insert('tbl_galeri', $data);
    }

    public function add_foto($data) {
        $this->db->insert('tbl_foto', $data);
    }

    public function add_video($data) {
        $this->db->insert('tbl_video', $data);
    }

    public function edit($data) {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->update('tbl_galeri', $data);
    }

    public function detail($id_galeri) {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function detail_foto($id_foto) {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_foto', $id_foto);
        return $this->db->get()->row();
    }

    public function detail_video($id_video) {
        $this->db->select('*');
        $this->db->from('tbl_video');
        $this->db->where('id_video', $id_video);
        return $this->db->get()->row();
    }

    public function detail_jumlahfoto($id_galeri) {
        $this->db->select('count(*) as jml_foto');
        $this->db->from('tbl_foto');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function detail_jumlahvideo($id_galeri) {
        $this->db->select('count(*) as jml_video');
        $this->db->from('tbl_video');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function delete($data) {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->delete('tbl_galeri', $data);
    }

    public function delete_foto_galeri($data) {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->delete('tbl_foto', $data);
        
    }

    public function delete_foto($data) {
        $this->db->where('id_foto', $data['id_foto']);
        $this->db->delete('tbl_foto', $data);
    }

    public function delete_video_galeri($data) {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->delete('tbl_video', $data);
        
    }

    public function delete_video($data) {
        $this->db->where('id_video', $data['id_video']);
        $this->db->delete('tbl_video', $data);
    }

}

/* End of file M_galeri.php */
