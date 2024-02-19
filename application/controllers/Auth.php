<?php
//BARU
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_user');
    }

    public function index()
    {
        $data = array(
            'title' => 'Authentication'
        );
        $this->load->view('dashboard/auth', $data, FALSE);
    }

    public function login()
    {
        //validasi kalau kosong
        $this->form_validation->set_rules('username', 'Username', 'required', 
            array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', 
            array('required' => '%s Harus Diisi !!!'));

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //memanggil lib login
            $this->lib_login->login($username, $password);
        } 
        $data = array(
            'title' => 'Login'
        );
        $this->load->view('dashboard/auth', $data, FALSE);
        
    }

    public function logout()
    {
        $this->lib_login->logout();
    }

    
    public function signup()
    {
        $data = array(
            'title' => 'Daftar',
            'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'=> $this->m_master_user->getdata_departemen_bynama(),
        );
        $this->load->view('dashboard/regist', $data, FALSE);
    }

    public function signup_add()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('No_NPK', 'No_NPK', 'required|max_length[14]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 14 Digit !!!'));
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]', array('required' => '%s Harus Diisi !!!', 'is_unique' => '%s Sudah Terdaftar Sebelumnya !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));

        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            //$config['max_size']  = '2000';
            
            $this->upload->initialize($config);
            $field_name = "foto_profil";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload' => $this->upload->display_errors(),
                    'title' => 'Daftar',
                    'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
                    'departemen'=> $this->m_master_user->getdata_departemen_bynama(),
                );
                $this->load->view('dashboard/regist', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'nama'          => $this->input->post('nama'),
                    'Id_Divisi'     => $this->input->post('Id_Divisi'),
                    'Id_Departemen' => $this->input->post('Id_Departemen'),
                    'email'         => $this->input->post('email'),
                    'No_NPK'        => $this->input->post('No_NPK'),
                    'foto_profil'   => $upload_data['uploads']['file_name'],
                    'username'      => $this->input->post('username'),
                    'password'      => $this->input->post('password'),
                    'role'          => 4,
                    'status'        => 1
                );
                $this->m_master_user->add($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
                redirect('Auth/Signup');
            }
            
            //tanpa ganti gambar
            $data = array(
                'nama'          => $this->input->post('nama'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'email'         => $this->input->post('email'),
                'No_NPK'        => $this->input->post('No_NPK'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role'          => 4,
                'status'        => 1
            );
            $this->m_master_user->add($data);
            $this->session->set_flashdata('pesan_success', 'Anda berhasil daftar!');
            redirect('Auth/Signup');
        }

        $data = array(
            'title' => 'Daftar',
            'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'=> $this->m_master_user->getdata_departemen_bynama(),
        );
        $this->load->view('dashboard/regist', $data, FALSE);
    }
}

/* End of file Auth.php */
