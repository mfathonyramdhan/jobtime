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

    public function update_myprofile()
    {
        $data['title'] = 'Update MyProfile | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));

        $this->load->view('template/meta', $data);
        $this->load->view('user-update-myprofile');
    }

    public function update_profile()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');

        $pesan = array();

        if ($this->form_validation->run() == false) {
            array_push($pesan, validation_errors());
        }

        $config['upload_path']          = 'assets/images/foto_profil';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
        $config['max_size']             = 8000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image') && $_FILES['image']['size'] != 0) //sesuai dengan name pada form 
        {
            array_push($pesan, $this->upload->display_errors());
        }

        $file = $this->upload->data();
        $image = $_FILES['image']['size'] != 0 ? $file['file_name'] : $this->input->post('image1');

        $update = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'provinsi' => htmlspecialchars($this->input->post('provinsi', true)),
            'kota' => htmlspecialchars($this->input->post('kota', true)),
            'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
            'desa' => htmlspecialchars($this->input->post('desa', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'updated_at' => date('Y-m-d H:i:s'),
            'foto' => $image,
        ];

        $where = array(
            'id_user' => htmlspecialchars($this->input->post('id_user', true))
        );

        if (empty($pesan)) {
            $result = $this->M_admin->update_akun($where, $update);
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Isi Form Dengan Valid'
            ));
            redirect('user/update_myprofile');
        }
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Update Akun Berhasil'
            ));
            redirect('user/update_myprofile');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Update Akun Gagal'
            ));
            redirect('user/update_myprofile');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
}
