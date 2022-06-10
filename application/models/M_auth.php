<?php

class M_auth extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function data_user($id_user)
    {
        $this->db->select('*');
        $this->db->from('tb_user u');
        $this->db->where('u.id_user', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }

    function cekUser($email)
    {
        return $this->db->get_where('tb_user', ['email' => $email])->row_array();
    }

    function cek_email($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('tb_user');
        return $query->num_rows();
    }

    function tambah_user($data)
    {
        return $this->db->insert('tb_user', $data);
    }
}
