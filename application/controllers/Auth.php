<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        $this->load->view('auth-login');
    }

    public function proses_login()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars($this->input->post('password'));

        $user = $this->M_auth->cekUser($email);
        $hash = password_hash($user['password'], PASSWORD_DEFAULT);

        if (password_verify(md5($password), $hash)) {
            $data = [
                'id_user' => $user['id_user'],
                'nama_user' => $user['nama'],
                'email' => $user['email'],
                'id_role' => $user['id_role']
            ];
            $this->session->set_userdata($data);

            if ($user['id_role'] == 1) {
                $this->session->set_flashdata('pesan', array(
                    'status_pesan' => true,
                    'isi_pesan' => 'Berhasil Login, Selamat Datang!'
                ));
                redirect('admin');
            } elseif ($user['id_role'] == 2) {
                $this->session->set_flashdata('pesan', array(
                    'status_pesan' => true,
                    'isi_pesan' => 'Berhasil Login, Selamat Datang!'
                ));
                redirect('user');
            } else {
                $this->session->set_flashdata('pesan', array(
                    'status_pesan' => false,
                    'isi_pesan' => 'Username Atau Password Salah, Silahkan Coba Lagi!'
                ));
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Username Atau Password Salah, Silahkan Coba Lagi!'
            ));
            redirect('auth');
        }
    }

    public function check_email()
    {
        $email = $this->input->post("email");
        $cekUser = $this->M_auth->cek_email($email);
        if ($cekUser > 0) {
            echo "ok";
        }
    }

    public function register()
    {
        $this->load->view('auth-register');
    }

    public function proses_register()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|matches[password]');

        $pesan = array();

        if ($this->form_validation->run() == false) {
            array_push($pesan, validation_errors());
        }

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => md5(htmlspecialchars($this->input->post('password', true))),
            'id_role' => 1,
            'foto' => "default.jpg",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if (empty($pesan)) {
            $result = $this->M_auth->tambah_user($data);
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Isi Form Dengan Valid'
            ));
            redirect('auth/register');
        }
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Akun Berhasil Didaftarkan'
            ));
            redirect('auth');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Akun Gagal Didaftarkan'
            ));
            redirect('auth/register');
        }
    }


    public function register_user()
    {
        $this->load->view('auth-register-user');
    }

    public function proses_register_user()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|matches[password]');

        $pesan = array();

        if ($this->form_validation->run() == false) {
            array_push($pesan, validation_errors());
        }

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => md5(htmlspecialchars($this->input->post('password', true))),
            'id_role' => 2,
            'foto' => "default.jpg",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if (empty($pesan)) {
            $result = $this->M_auth->tambah_user($data);
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Isi Form Dengan Valid'
            ));

            redirect('auth/register_user');

          
        }
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Akun Berhasil Didaftarkan'
            ));

            redirect('auth');

        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Akun Gagal Didaftarkan'
            ));

            redirect('auth/register_user');
        }
    }

}
