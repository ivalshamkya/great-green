<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_user');
        $this->load->model('m_master_divisi');
        $this->load->model('m_master_departemen');
    }
    

    public function index()
    {
        $data = array(
            'title'     => 'Master User', 
            'user'      => $this->m_master_user->get_data_all(),
            'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'=> $this->m_master_user->getdata_departemen_bynama(),
            'content'   => 'master/user/view', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('No_NPK', 'NPK', 'required|max_length[14]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 14 Digit !!!'));
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]', array('required' => '%s Harus Diisi !!!', 'is_unique' => '%s Sudah Terdaftar Sebelumnya !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('role', 'Role', 'required', array('required' => '%s Harus Diisi !!!'));

        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            $field_name = "foto_profil";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload' => $this->upload->display_errors(),
                    'title'     => 'Master User', 
                    'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
                    'departemen'=> $this->m_master_user->getdata_departemen_bynama(),
                    'content'   => 'master/user/add', 
                );
                $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
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
                    'role'          => $this->input->post('role'),
                    'status'        => 1
                );
                $this->m_master_user->add($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
                redirect('master_user');
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
                'role'          => $this->input->post('role'),
                'status'        => 1
            );
            $this->m_master_user->add($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('master_user');
        }

        $data = array(
            'title'     => 'Master User', 
            'content'   => 'master/user/add',
            'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'=> $this->m_master_user->getdata_departemen_bynama(), 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function update( $id )
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('No_NPK', 'No_NPK', 'required|max_length[14]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 14 Digit !!!'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('role', 'Role', 'required', array('required' => '%s Harus Diisi !!!'));

        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            $field_name = "foto_profil";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload'  => $this->upload->display_errors(),
                    'title'         => 'Master User', 
                    'content'       => 'master/user/update', 
                    'user'          => $this->m_master_user->get_data_by_id($id),
                    'divisi'        => $this->m_master_user->getdata_divisi_bynama(),
                    'departemen'    => $this->m_master_user->getdata_departemen_bynama(),
                );
                print_r($data);
                
                $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id'            => $id,
                    'nama'          => $this->input->post('nama'),
                    'Id_Divisi'     => $this->input->post('Id_Divisi'),
                    'Id_Departemen' => $this->input->post('Id_Departemen'),
                    'email'         => $this->input->post('email'),
                    'No_NPK'        => $this->input->post('No_NPK'),
                    'foto_profil'   => $upload_data['uploads']['file_name'],
                    'username'      => $this->input->post('username'),
                    'password'      => $this->input->post('password'),
                    'role'          => $this->input->post('role'),
                    'status'        => 1
                );
                $this->m_master_user->update($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
                redirect('master_user');
            }

            //tanpa ganti gambar
            $data = array(
                'id'            => $id,
                'nama'          => $this->input->post('nama'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'email'         => $this->input->post('email'),
                'No_NPK'        => $this->input->post('No_NPK'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role'          => $this->input->post('role'),
                'status'        => 1
            );
            $this->m_master_user->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('master_user');
        }

        $data = array(
            'title'     => 'Master User', 
            'content'   => 'master/user/update', 
            'user'      => $this->m_master_user->get_data_by_id($id),
            'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'=> $this->m_master_user->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }
 
    public function delete( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->m_master_user->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('master_user');
    }

    public function detail($id)
    {
        $data = array(
            'title'         => 'Master User', 
            'content'       => 'master/user/detail', 
            'user'          => $this->m_master_user->get_data_by_id($id),
            'divisi'    => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'=> $this->m_master_user->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    ///PROFIL

    //ADMIN
    public function profil_adm($id)
    {
        $data = array(
            'title'         => 'Profil', 
            'content'       => 'master/user/profil_adm', 
            'user'          => $this->m_master_user->get_data_profile($id),
            'divisi'        => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'    => $this->m_master_user->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function profil_update_adm($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('No_NPK', 'No_NPK', 'required|max_length[14]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 14 Digit !!!'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));
        
        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            $field_name = "foto_profil";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload'  => $this->upload->display_errors(),
                    'title'         => 'Profil Update', 
                    'content'       => 'master/user/profil_update_adm', 
                    'user'          => $this->m_master_user->get_data_profile($id),
                    'divisi'        => $this->m_master_user->getdata_divisi_bynama(),
                    'departemen'    => $this->m_master_user->getdata_departemen_bynama(),
                );
                $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id'            => $id,
                    'nama'          => $this->input->post('nama'),
                    'Id_Divisi'     => $this->input->post('Id_Divisi'),
                    'Id_Departemen' => $this->input->post('Id_Departemen'),
                    'email'         => $this->input->post('email'),
                    'No_NPK'        => $this->input->post('No_NPK'),
                    'foto_profil'   => $upload_data['uploads']['file_name'],
                    'username'      => $this->input->post('username'),
                    'password'      => $this->input->post('password'),
                    'role'          => 3,
                    'status'        => 1
                );
                $this->m_master_user->update($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
                redirect('master_user/profil_adm/'.$id);
            }

            //tanpa ganti gambar
            $data = array(
                'id'            => $id,
                'nama'          => $this->input->post('nama'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'email'         => $this->input->post('email'),
                'No_NPK'        => $this->input->post('No_NPK'),
                'foto_profil'   => $upload_data['uploads']['file_name'],
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role'          => 3,
                'status'        => 1
            );
            $this->m_master_user->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('master_user/profil_adm/'.$id);
        }

        $data = array(
            'title'         => 'Profil Update', 
            'content'       => 'master/user/profil_update_adm', 
            'user'          => $this->m_master_user->get_data_profile($id),
            'divisi'        => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'    => $this->m_master_user->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    //KEPALA CABANG
    public function profil_kc($id)
    {
        $data = array(
            'title'         => 'Profil', 
            'content'       => 'master/user/profil_kc', 
            'user'          => $this->m_master_user->get_data_profile($id),
        );
        $this->load->view('layout_kepala_cabang/wrapper_layout', $data, FALSE);
    }

    public function profil_update_kc($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('No_NPK', 'No_NPK', 'required', array('required' => '%s Harus Diisi !!!'));
        // $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));

        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            
            $this->upload->initialize($config);
            $field_name = "foto_profil";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload'  => $this->upload->display_errors(),
                    'title'         => 'Profil Update', 
                    'content'       => 'master/user/profil_update_kc', 
                    'user'          => $this->m_master_user->get_data_profile($id),
                );
                $this->load->view('layout_kepala_cabang/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id'            => $id,
                    'nama'          => $this->input->post('nama'),
                    'Id_Divisi'     => $this->input->post('Id_Divisi'),
                    'Id_Departemen' => $this->input->post('Id_Departemen'),
                    'email'         => $this->input->post('email'),
                    'No_NPK'        => $this->input->post('No_NPK'),
                    'foto_profil'   => $upload_data['uploads']['file_name'],
                    'username'      => $this->input->post('username'),
                    'password'      => $this->input->post('password'),
                    'role'          => 2,
                    'status'        => 1
                );
                $this->m_master_user->update($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
                redirect('master_user/profil_kc/'.$id);
            }

            //tanpa ganti gambar
            $data = array(
                'id'            => $id,
                'nama'          => $this->input->post('nama'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'email'         => $this->input->post('email'),
                'No_NPK'        => $this->input->post('No_NPK'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role'          => 2,
                'status'        => 1
            );
            $this->m_master_user->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('master_user/profil_kc/'.$id);
        }

        $data = array(
            'title'         => 'Profil Update', 
            'content'       => 'master/user/profil_update_kc', 
            'user'          => $this->m_master_user->get_data_profile($id),
        );
        $this->load->view('layout_kepala_cabang/wrapper_layout', $data, FALSE);
    }

    //DIREKSI
    public function profil_dr($id)
    {
        $data = array(
            'title'         => 'Profil', 
            'content'       => 'master/user/profil_dr', 
            'user'          => $this->m_master_user->get_data_profile($id),
        );
        $this->load->view('layout_direksi/wrapper_layout', $data, FALSE);
    }

    public function profil_update_dr($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('No_NPK', 'No_NPK', 'required', array('required' => '%s Harus Diisi !!!'));
        // $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));

        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            
            $this->upload->initialize($config);
            $field_name = "foto_profil";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload'  => $this->upload->display_errors(),
                    'title'         => 'Profil Update', 
                    'content'       => 'master/user/profil_update_dr', 
                    'user'          => $this->m_master_user->get_data_profile($id),
                );
                $this->load->view('layout_direksi/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/profile/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id'            => $id,
                    'nama'          => $this->input->post('nama'),
                    'Id_Divisi'     => $this->input->post('Id_Divisi'),
                    'Id_Departemen' => $this->input->post('Id_Departemen'),
                    'email'         => $this->input->post('email'),
                    'No_NPK'        => $this->input->post('No_NPK'),
                    'foto_profil'   => $upload_data['uploads']['file_name'],
                    'username'      => $this->input->post('username'),
                    'password'      => $this->input->post('password'),
                    'role'          => 1,
                    'status'        => 1
                );
                $this->m_master_user->update($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
                redirect('master_user/profil_dr/'.$id);
            }

            //tanpa ganti gambar
            $data = array(
                'id'            => $id,
                'nama'          => $this->input->post('nama'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'email'         => $this->input->post('email'),
                'No_NPK'        => $this->input->post('No_NPK'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role'          => 1,
                'status'        => 1
            );
            $this->m_master_user->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('master_user/profil_dr/'.$id);
        }

        $data = array(
            'title'         => 'Profil Update', 
            'content'       => 'master/user/profil_update_dr', 
            'user'          => $this->m_master_user->get_data_profile($id),
        );
        $this->load->view('layout_direksi/wrapper_layout', $data, FALSE);
    }
}

/* End of file Master_User.php */
