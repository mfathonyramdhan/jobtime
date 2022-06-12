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
        $this->load->view('homepage');
    }

    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
}
