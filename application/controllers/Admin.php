<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index()
    {
        $data['title'] = 'Dashboard | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));

        $this->load->view('template/meta', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('index', $data);
        $this->load->view('template/js');
    }

    public function daftar_admin()
    {
        $data['title'] = 'Daftar Admin | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['data_admin'] = $this->M_admin->data_admin();

        $this->load->view('template/meta', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('data-akun-admin', $data);
    }

    public function daftar_user()
    {
        $data['title'] = 'Daftar User | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['daftar_user'] = $this->M_admin->daftar_user();

        $this->load->view('template/meta', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('data-akun-user', $data);
    }

    public function edit_akun($id_user)
    {
        $data['title'] = 'Edit Akun | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['akun'] = $this->M_admin->getDataAkun($id_user);

        $this->load->view('template/meta', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('form-edit-admin', $data);
    }

    public function update_akun()
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
            redirect('admin/edit_akun/' . $this->input->post('id_user'));
        }
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Update Akun Berhasil'
            ));
            if ($this->input->post('id_role') == 1) {
                redirect('admin/daftar_admin');
            } else {
                redirect('admin/daftar_user');
            }
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Update Akun Gagal'
            ));
            redirect('admin/edit_akun/' . $this->input->post('id_user'));
        }
    }

    public function hapus_admin($id_user)
    {
        $where = array('id_user' => $id_user);
        $result = $this->M_admin->hapus_akun($where, 'tb_user');
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Akun Berhasil Dihapus'
            ));
            redirect('admin/daftar_admin');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Akun Berhasil Dihapus'
            ));
            redirect('admin/daftar_admin');
        }
    }

    public function hapus_user($id_user)
    {
        $where = array('id_user' => $id_user);
        $result = $this->M_admin->hapus_akun($where, 'tb_user');
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Akun Berhasil Dihapus'
            ));
            redirect('admin/daftar_user');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Akun Berhasil Dihapus'
            ));
            redirect('admin/daftar_user');
        }
    }

    public function daftar_loker()
    {
        $data['title'] = 'Daftar Loker | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['daftar_loker'] = $this->M_admin->daftar_loker();

        $this->load->view('template/meta', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('data-loker', $data);
    }

    public function edit_loker()
    {
        $data['title'] = 'Edit Loker | JobTime';
        // $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        // $data['daftar_loker'] = $this->M_admin->daftar_loker();

        $this->load->view('template/meta', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('form-edit-loker', $data);
    }

    public function form_create_loker()
    {
        $data['title'] = 'Buat Loker | JobTime';
        // $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        // $data['daftar_loker'] = $this->M_admin->daftar_loker();


        $this->load->view('template/meta', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('form-create-loker', $data);
    }

    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
}

// testing pull request n branch
