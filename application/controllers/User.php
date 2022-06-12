<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index()
    {
        $data['title'] = 'Homepage';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['daftar_loker'] = $this->M_admin->loker_tersedia();

        $this->load->view('template/meta', $data);
        // $this->load->view('template/sidebar');
        $this->load->view('homepage', $data);
        $this->load->view('template/js');
    }

    public function loker_detail($id_jobs)
    {
        $data['title'] = 'Detail Loker | JobTime';
        $data['loker'] = $this->M_admin->data_loker($id_jobs);

        $this->load->view('template/meta', $data);
        $this->load->view('loker-detail');
    }

    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
}
