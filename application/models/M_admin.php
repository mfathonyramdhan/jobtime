<?php

class M_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //  tampilkan chart
    public function chart_database()
    {
        $query = $this->db->query("SELECT jobs_created_at,COUNT(id_jobs) AS jobs FROM tb_jobs GROUP BY jobs_created_at");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function data_user($id_user)
    {
        $this->db->select('*');
        $this->db->from('tb_user u');
        $this->db->where('u.id_user', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }

    function data_admin()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('id_role', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    function daftar_user()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('id_role', 2);
        $query = $this->db->get();
        return $query->result_array();
    }

    #-------------------------------------

    function daftar_loker()
    {
        $this->db->select('*');
        $this->db->from('tb_jobs');
        $this->db->join('tb_jobs_status', 'tb_jobs_status.id_jobs_status = tb_jobs.id_jobs_status');
        $this->db->join('tb_user', 'tb_jobs.id_user = tb_user.id_user');

        $query = $this->db->get();
        return $query->result_array();
    }

    function loker_user($id_user)
    {
        $this->db->select('*');
        $this->db->from('tb_jobs');
        $this->db->join('tb_jobs_status', 'tb_jobs_status.id_jobs_status = tb_jobs.id_jobs_status');
        $this->db->join('tb_user', 'tb_jobs.id_user = tb_user.id_user');
        $this->db->where('tb_jobs.id_user', $id_user);
        $query = $this->db->get();
        return $query->result_array();
    }

    function loker_favorit($id_user)
    {
        $this->db->select('*');
        $this->db->from('tb_jobs');
        $this->db->join('tb_jobs_fav', 'tb_jobs_fav.id_jobs = tb_jobs.id_jobs');
        $this->db->join('tb_user', 'tb_jobs_fav.id_user = tb_user.id_user');
        $this->db->where('tb_jobs_fav.id_user', $id_user);
        $query = $this->db->get();
        return $query->result_array();
    }

    #-------------------------------------

    function data_loker($id_loker)
    {
        $this->db->select('*');
        $this->db->from('tb_jobs');
        $this->db->join('tb_jobs_status', 'tb_jobs_status.id_jobs_status = tb_jobs.id_jobs_status');
        $this->db->join('tb_user', 'tb_jobs.id_user = tb_user.id_user');
        $this->db->where('id_jobs', $id_loker);
        $query = $this->db->get();
        return $query->row_array();
    }

    function getDataAkun($id_user)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->join('tb_user_role', 'tb_user.id_role = tb_user_role.id_role');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }

    function update_akun($where, $data)
    {
        return $this->db->update('tb_user', $data, $where);
    }

    function update_loker($where, $data)
    {
        return $this->db->update('tb_jobs', $data, $where);
    }

    function hapus_akun($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    function jumlah_user()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function jumlah_loker()
    {
        $this->db->select('*');
        $this->db->from('tb_jobs');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function jumlah_loker_status1()
    {
        $this->db->select('*');
        $this->db->from('tb_jobs');
        $this->db->where('id_jobs_status', 1);
        $query = $this->db->get();
        return $query->num_rows();
    }


    function tambah_loker($data)
    {
        return $this->db->insert('tb_jobs', $data);
    }

    function tambah_favorit($data)
    {
        return $this->db->insert('tb_jobs_fav', $data);
    }

    function loker_tersedia()
    {
        $this->db->select('*');
        $this->db->from('tb_jobs');
        $this->db->join('tb_jobs_status', 'tb_jobs_status.id_jobs_status = tb_jobs.id_jobs_status');
        $this->db->join('tb_user', 'tb_jobs.id_user = tb_user.id_user');

        $this->db->where('tb_jobs.id_jobs_status', 2);
        $query = $this->db->get();
        return $query->result_array();
    }


    function hapus_loker($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    function hapus_favorit($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
