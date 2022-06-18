<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        if (empty($data['data_user'])) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = 'Homepage';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['daftar_loker'] = $this->M_admin->loker_tersedia();
        $data['loker_user'] = $this->M_admin->loker_user($this->session->userdata('id_user'));

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


    public function form_create_loker_user()
    {
        $data['title'] = 'Buat Loker | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $this->load->view('template/meta', $data);
        $this->load->view('form-create-loker-user', $data);
    }

    public function create_loker()
    {
        $pesan = array();

        $config['upload_path']          = 'assets/images/logo_perusahaan/';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
        $config['overwrite']            = TRUE;
        $config['max_size']             = 8000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) //sesuai dengan name pada form 
        {
            array_push($pesan, $this->upload->display_errors());
        }
        $file = $this->upload->data();
        $logo = $file['file_name'];

        $date = strtotime(htmlspecialchars($this->input->post('deadline')));

        $data = [
            'id_user' => htmlspecialchars($this->input->post('id_user', true)),
            'id_jobs_status' => 1,
            'logo' => $logo,
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'perusahaan_nama' => htmlspecialchars($this->input->post('perusahaan_nama', true)),
            'perusahaan_lokasi' => htmlspecialchars($this->input->post('perusahaan_lokasi', true)),
            'gaji' => htmlspecialchars($this->input->post('gaji', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'syarat' => htmlspecialchars($this->input->post('syarat', true)),
            'jobs_created_at' => date('Y-m-d H:i:s'),
            'jobs_updated_at' => date('Y-m-d H:i:s'),
            'deadline' => date('Y-m-d H:i:s', $date),
            'link' => htmlspecialchars($this->input->post('link', true)),

        ];

        // var_dump($data); 
        // die;

        if (empty($pesan)) {
            $result = $this->M_admin->tambah_loker($data);
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Isi Form Dengan Valid'
            ));
            redirect('user/form_create_loker_user');
        }
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Tambah Loker Berhasil'
            ));
            redirect('user');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Update Loker Gagal'
            ));
            redirect('user/form_create_loker_user');
        }
    }

    public function favorit()
    {
        $data['title'] = 'Loker Saya | JobTime';
        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['daftar_loker'] = $this->M_admin->loker_tersedia();
        $data['loker_user'] = $this->M_admin->loker_user($this->session->userdata('id_user'));

        $this->load->view('template/meta', $data);
        // $this->load->view('template/sidebar');

        $this->load->view('template/js');
        $this->load->view('favorit', $data);
    }

    public function hapus_loker($id_jobs)
    {
        $where = array('id_jobs' => $id_jobs);
        $result = $this->M_admin->hapus_loker($where, 'tb_jobs');
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Loker Berhasil Dihapus'
            ));
            redirect('user');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Loker Berhasil Dihapus'
            ));
            redirect('user');
        }
    }

    public function update_loker()
    {
        $pesan = array();

        $config['upload_path']          = 'assets/images/logo_perusahaan';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
        $config['overwrite']            = TRUE;
        $config['max_size']             = 8000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image') && $_FILES['image']['size'] != 0) //sesuai dengan name pada form 
        {
            array_push($pesan, $this->upload->display_errors());
        }

        $file = $this->upload->data();
        $image = $_FILES['image']['size'] != 0 ? $file['file_name'] : $this->input->post('image1');

        $date = strtotime(htmlspecialchars($this->input->post('deadline')));

        $data = [

            'logo' => $image,
            'perusahaan_nama' => htmlspecialchars($this->input->post('perusahaan_nama')),
            'perusahaan_lokasi' => htmlspecialchars($this->input->post('perusahaan_lokasi')),
            'judul' => htmlspecialchars($this->input->post('judul')),
            'gaji' => (int)htmlspecialchars($this->input->post('gaji')),
            'deadline' => date('Y-m-d H:i:s', $date),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
            'syarat' => htmlspecialchars($this->input->post('syarat')),
            'id_jobs_status' => 1,
            'link' => htmlspecialchars($this->input->post('link')),
            'jobs_updated_at' => date('Y-m-d H:i:s')
        ];

        $where = array(
            'id_jobs' => htmlspecialchars($this->input->post('id_jobs'))
        );

        if (empty($pesan)) {
            $result = $this->M_admin->update_loker($where, $data);
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Isi Form Dengan Valid'
            ));
            redirect('user/edit_loker/' . $this->input->post('id_jobs'));
        }
        if ($result == true) {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => true,
                'isi_pesan' => 'Update Loker Berhasil'
            ));
            redirect('user');
        } else {
            $this->session->set_flashdata('pesan', array(
                'status_pesan' => false,
                'isi_pesan' => 'Update Loker Gagal'
            ));
            redirect('user/edit_loker/' . $this->input->post('id_jobs'));
        }
    }

    public function edit_loker($id_loker)
    {
        $data['title'] = 'Edit Loker | JobTime';

        $data['data_user'] = $this->M_admin->data_user($this->session->userdata('id_user'));
        $data['loker'] = $this->M_admin->data_loker($id_loker);


        $this->load->view('template/meta', $data);
        $this->load->view('form-edit-loker-user', $data);
    }

    public function logout()
    {
        session_destroy();
        redirect('auth');
    }
}
