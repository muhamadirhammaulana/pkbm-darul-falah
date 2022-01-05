<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function akreditasi() {
        $this->db->select('*');
        $this->db->from('tbl_akreditasi');
        $this->db->where('id_akreditasi', 1);
        return $this->db->get()->row();
    }

    public function visimisi() {
        $this->db->select('*');
        $this->db->from('tbl_visimisi');
        $this->db->where('id_visimisi', 1);
        return $this->db->get()->row();
    }

    public function profil() {
        $this->db->select('*');
        $this->db->from('tbl_profil');
        $this->db->where('id_profil', 1);
        return $this->db->get()->row();
    }

    public function medsos() {
        $this->db->select('*');
        $this->db->from('tbl_medsos');
        $this->db->order_by('id_medsos', 'asc');
        return $this->db->get()->result();
    }

    public function struktur() {
        $this->db->select('*');
        $this->db->from('tbl_struktur');
        $this->db->where('id_struktur', 1);
        return $this->db->get()->row();
    }

    public function program() {
        $this->db->select('*');
        $this->db->from('tbl_program');
        $this->db->order_by('id_program', 'asc');
        return $this->db->get()->result();
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

    public function legalitas() {
        $this->db->select('*');
        $this->db->from('tbl_legalitas');
        $this->db->where('id_legalitas', 1);
        return $this->db->get()->row();
    }

    public function berita($limit, $start) {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function total_berita() {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita) {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function latest_berita() {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(6);
        return $this->db->get()->result();
    }

    public function galeri($limit, $start) {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->order_by('id_galeri', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function total_galeri() {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->order_by('id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function detail_foto($id_galeri) {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function detail_video($id_galeri) {
        $this->db->select('*');
        $this->db->from('tbl_video');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_video', 'desc');
        return $this->db->get()->result();
    }

    public function nama_galeri($id_galeri) {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

}

/* End of file M_home.php */
