<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahasa_pemrograman_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_daftar_bahasa_pemrograman()
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->order_by('nama', 'ASC');

        return $this->db->get()->result();
    }

    public function get_daftar_bahasa_pemrograman_like($searchTerm)
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->like('nama', $searchTerm);
        $this->db->order_by('nama', 'ASC');

        return $this->db->get()->result();
    }
}
