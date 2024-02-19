<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_setting');
        $this->load->model('m_master_user');
        $this->load->model('m_master_konsistensi');
        $this->load->model('m_master_blog');
        $this->load->model('m_master_sampah');
        $this->load->helper('url', 'form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('string');
    }
    
    //home index
    public function index()
    {
        $data = array(
            'title'     => 'Home', 
            'content'   => 'home/home', 
            'produk'    => $this->m_home->get_data_all(),
            'setting'   => $this->m_setting->get_setting()
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    //produk
    public function konsistensi()
    {
        $data = array(
            'title'         => 'konsistensi', 
            'konsistensi'   => $this->m_master_konsistensi->get_data_all(),
            'divisi'        => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'    => $this->m_master_konsistensi->getdata_departemen_bynama(),
            'content'       => 'home/konsistensi/view', 
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    public function add_konsistensi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('Nama_Atasan', 'Nama_Atasan', 'required|max_length[100]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 100 Digit !!!'));

        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/master/bank/';
            $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            $field_name = "gambar";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload'      => $this->upload->display_errors(),
                    'title'             => 'Konsistensi', 
                    'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
                    'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
                    'content'           => 'home/konsistensi/add',
                );
                $this->load->view('layout_home/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/master/bank/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'Id_Divisi'             => $this->input->post('Id_Divisi'),
                    'Id_Departemen'         => $this->input->post('Id_Departemen'),
                    'nama'                  => $this->input->post('nama'),
                    'Nama_Atasan'           => $this->input->post('Nama_Atasan'),
                    'No_NPK'                => $this->input->post('No_NPK'),
                    'gambar'                => $upload_data['uploads']['file_name'],
                    'tanggal'               => date("Y-m-d H:i:s"),
                    'status'                => 1
                );
                $this->m_master_konsistensi->add($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
                redirect('home/konsistensi');
            }

            //tanpa tambah gambar
            $data = array(
                'Id_Divisi'             => $this->input->post('Id_Divisi'),
                'Id_Departemen'         => $this->input->post('Id_Departemen'),
                'nama'                  => $this->input->post('nama'),
                'Nama_Atasan'           => $this->input->post('Nama_Atasan'),
                'No_NPK'                => $this->input->post('No_NPK'),
                'tanggal'               => date("Y-m-d H:i:s"),
                'status'                => 1
            );
            $this->m_master_konsistensi->add($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('home/konsistensi');
        }

        $data = array(
            'title'             => 'Konsistensi', 
            'content'           => 'home/konsistensi/add',
            'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    public function update_konsistensi( $id )
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('Nama_Atasan', 'Nama_Atasan', 'required|max_length[100]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 100 Digit !!!'));

        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/master/bank/';
            $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            $field_name = "gambar";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload'      => $this->upload->display_errors(),
                    'title'             => 'Konsistensi', 
                    'content'           => 'home/konsistensi/add',
                    'konsistensi'       => $this->m_master_konsistensi->get_data_by_id($id),
                    'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
                    'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
                );
                $this->load->view('layout_home/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/master/bank/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id'                    => $id,
                    'Id_Divisi'             => $this->input->post('Id_Divisi'),
                    'Id_Departemen'         => $this->input->post('Id_Departemen'),
                    'nama'                  => $this->input->post('nama'),
                    'Nama_Atasan'           => $this->input->post('Nama_Atasan'),
                    'No_NPK'                => $this->input->post('No_NPK'),
                    'gambar'                => $upload_data['uploads']['file_name'],
                    'tanggal'               => date("Y-m-d H:i:s"),
                    'status'                => 1
                );
                $this->m_master_konsistensi->update($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
                redirect('home/konsistensi');
            }

            //tanpa ganti gambar
            $data = array(
                'id'                    => $id,
                'Id_Divisi'             => $this->input->post('Id_Divisi'),
                'Id_Departemen'         => $this->input->post('Id_Departemen'),
                'nama'                  => $this->input->post('nama'),
                'Nama_Atasan'           => $this->input->post('Nama_Atasan'),
                'No_NPK'                => $this->input->post('No_NPK'),
                'tanggal'               => date("Y-m-d H:i:s"),
                'status'                => 1
            );
            $this->m_master_konsistensi->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('home/konsistensi');
        }

        $data = array(
            'title'             => 'Konsistensi', 
            'content'           => 'home/konsistensi/update', 
            'konsistensi'       => $this->m_master_konsistensi->get_data_by_id($id),
            'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }
 
    public function delete_konsistensi( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->m_master_konsistensi->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('home/konsistensi');
    }

    public function detail_konsistensi($id)
    {
        $data = array(
            'title'             => 'Konsistensi', 
            'content'           => 'home/bank/detail', 
            'konsistensi'       => $this->m_master_konsistensi->get_data_by_id($id),
            'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    //=============================================

    public function data_eh()
    {
        $data = array(
            'title'             => 'Blog', 
            'blog'              => $this->m_master_blog->get_data_all(),
            'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
            'content'           => 'home/blog/view', 
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
        
    }

    public function add_data_eh()
    {
        $this->form_validation->set_rules('Nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('Nama_Shop', 'Nama_Shop', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('Area', 'Area', 'required', array('required' => '%s Harus Diisi !!!'));

         if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/image/master/blog/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            $config2['upload_path'] = './assets/image/master/blog/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size']  = '2000';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->initialize($config2);
            $field_name = "gambar_before";
            $field_name2 = "gambar_after";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload'      => $this->upload->display_errors(),
                    'title'             => 'Blog', 
                    'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
                    'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
                    'content'           => 'home/blog/add',
                );
                $this->load->view('layout_home/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/master/blog/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                if (!$this->upload->do_upload($field_name2)) {
                    $data = array(
                        'error_upload'      => $this->upload->display_errors(),
                        'title'             => 'Blog', 
                        'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
                        'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
                        'content'           => 'home/blog/add',
                    );
                    $this->load->view('layout_home/wrapper_layout', $data, FALSE);
                }
                else{
                    $upload_data2 = array ('uploads2' => $this->upload->data());
                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = './assets/image/master/blog/'.$upload_data2['uploads2']['file_name'];
                    $this->load->library('image_lib', $config2);

                    $data = array(
                        'Nama'          => $this->input->post('Nama'),
                        'Nama_Shop'     => $this->input->post('Nama_Shop'),
                        'Area'          => $this->input->post('Area'),
                        'Id_Divisi'     => $this->input->post('Id_Divisi'),
                        'Id_Departemen' => $this->input->post('Id_Departemen'),
                        'NPK'           => $this->input->post('NPK'),
                        'time_before'   => $this->input->post('timeb'),
                        'gambar_before' => $upload_data['uploads']['file_name'],
                        'gambar_after'  => $upload_data2['uploads2']['file_name'],
                        'time_after'    => $this->input->post('timea'),
                        'energi_before' => $this->input->post('energi_before'),
                        'energi_after'  => $this->input->post('energi_after'),
                        'total_tco' => $this->input->post('total_tco'),
                        'total_reduce_tco'  => $this->input->post('total_reduce_tco'),
                        'tanggal'       => date("Y-m-d"),
                        'status'        => 1
                    );

                    $this->m_master_blog->add($data);
                    $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
                    redirect('home/data_eh');
                }
            }

            //tanpa tambah gambar
            $data = array(
                'Nama'          => $this->input->post('Nama'),
                'Nama_Shop'     => $this->input->post('Nama_Shop'),
                'Area'          => $this->input->post('Area'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'NPK'           => $this->input->post('NPK'),
                'time_before'   => $this->input->post('timeb'),
                'time_after'    => $this->input->post('timea'),
                'energi_before' => $this->input->post('energi_before'),
                'energi_after'  => $this->input->post('energi_after'),
                'total_tco' => $this->input->post('total_tco'),
                'total_reduce_tco'  => $this->input->post('total_reduce_tco'),
                'tanggal'       => date("Y-m-d"),
                'status'        => 1
            );
            $this->m_master_blog->add($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('home/data_eh');
        }

        $data = array(
            'title'             => 'Blog', 
            'content'           => 'home/blog/add',
            'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    public function update_data_eh_page( $id )
    {
        $data = array(
            'title'     => 'Blog', 
            'content'   => 'home/blog/update', 
            'divisi'      => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'  => $this->m_master_blog->getdata_departemen_bynama(),
            'blog'      => $this->m_master_blog->get_data_by_id($id)
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    public function update_data_eh()
    {
        $this->form_validation->set_rules('Nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('Nama_Shop', 'Nama_Shop', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('Area', 'Area', 'required', array('required' => '%s Harus Diisi !!!'));

        if($this->form_validation->run() == TRUE){

            $config['upload_path'] = './assets/image/master/blog/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2000';
            $config2['upload_path'] = './assets/image/master/blog/';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size']  = '2000';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->initialize($config2);
            $field_name = "gambar_before";
            $field_name2 = "gambar_after";

            $data = array(
                'id'            => $this->input->post('id'),
                'Nama'          => $this->input->post('Nama'),
                'Nama_Shop'     => $this->input->post('Nama_Shop'),
                'Area'          => $this->input->post('Area'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'NPK'           => $this->input->post('NPK'),
                'time_before'   => $this->input->post('timeb'),
                'time_after'    => $this->input->post('timea'),
                'energi_before' => $this->input->post('energi_before'),
                'energi_after'  => $this->input->post('energi_after'),
                'total_tco' => $this->input->post('total_tco'),
                'total_reduce_tco'  => $this->input->post('total_reduce_tco'),
                'tanggal'       => date("Y-m-d"),
                'status'        => 1
            );

            if ($this->upload->do_upload($field_name)) {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/master/blog/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data['gambar_before'] = $upload_data['uploads']['file_name'];
            }

            if ($this->upload->do_upload($field_name2)) {
                $upload_data2 = array ('uploads2' => $this->upload->data());
                $config2['image_library'] = 'gd2';
                $config2['source_image'] = './assets/image/master/blog/'.$upload_data2['uploads2']['file_name'];
                $this->load->library('image_lib', $config2);
                $data['gambar_after'] = $upload_data2['uploads2']['file_name'];
            }

            $this->m_master_blog->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diupdate');
            redirect('home/data_eh');

        }
    }
 
    public function delete_data_eh( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->m_master_blog->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('home/data_eh');
    }

    public function detail_data_eh($id)
    {
        $data = array(
            'title'     => 'Blog', 
            'content'   => 'home/blog/detail', 
            'divisi'      => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'  => $this->m_master_blog->getdata_departemen_bynama(),
            'blog'      => $this->m_master_blog->get_data_by_id($id)
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    public function sampah()
    {
        $data = array(
            'title'             => 'Master Sampah', 
            'sampah'            => $this->m_master_sampah->get_data_all(),
            'divisi'            => $this->m_master_sampah->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_sampah->getdata_departemen_bynama(),
            'content'           => 'home/sampah/view', 
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
        
    }

    public function add_sampah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('area', 'area', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('seksi', 'seksi', 'required', array('required' => '%s Harus Diisi !!!'));
        
        if($this->form_validation->run() == TRUE){
            
            $data = array(
                'nama'          => $this->input->post('nama'),                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                'area'          => $this->input->post('area'),
                'seksi'         => $this->input->post('seksi'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'NPK'           => $this->input->post('NPK'),
                'weight_or'     => $this->input->post('weight_or'),                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                'weight_non'    => $this->input->post('weight_non'),
                'weight_b3'     => $this->input->post('weight_b3'),
                'total_berat'   => $this->input->post('total_berat'),
                'tanggal'       => date('Y-m-d H:i:s'),
                'status'        => 1
            );
            $this->m_master_sampah->add($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('home/sampah');
        }

        $data = array(
            'title'     => 'Master Sampah', 
            'content'   => 'home/sampah/add', 
            'divisi'    => $this->m_master_sampah->getdata_divisi_bynama(),
            'departemen'=> $this->m_master_sampah->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    public function update_sampah( $id )
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('area', 'area', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('seksi', 'seksi', 'required', array('required' => '%s Harus Diisi !!!'));
        
        if($this->form_validation->run() == TRUE){
            $data = array(
                'id'            => $id,
                'nama'          => $this->input->post('nama'),                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                'area'          => $this->input->post('area'),
                'seksi'         => $this->input->post('seksi'),
                'Id_Divisi'     => $this->input->post('Id_Divisi'),
                'Id_Departemen' => $this->input->post('Id_Departemen'),
                'NPK'           => $this->input->post('NPK'),
                'weight_or'     => $this->input->post('weight_or'),                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                'weight_non'    => $this->input->post('weight_non'),
                'weight_b3'     => $this->input->post('weight_b3'),
                'total_berat'   => $this->input->post('total_berat'),
                'tanggal'       => date('Y-m-d H:i:s'),
                'status'        => 1
            );
            $this->m_master_sampah->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('home/sampah');
        }

        $data = array(
            'title'             => 'Master Sampah', 
            'content'           => 'home/sampah/update', 
            'sampah'            => $this->m_master_sampah->get_data_by_id($id),
            'divisi'            => $this->m_master_sampah->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_sampah->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }
 
    public function delete_sampah( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->m_master_sampah->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('home/sampah');
    }

    //=============================================

    //profile
    public function profil($id)
    {
        $data = array(
            'title'         => 'Profil', 
            'content'       => 'home/profil', 
            'user'          => $this->m_home->get_data_profile($id),
            'divisi'        => $this->m_master_sampah->getdata_divisi_bynama(),
            'departemen'    => $this->m_master_sampah->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    //profile update
    public function profil_update($id)
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
                    'content'       => 'home/profil_update', 
                    'user'          => $this->m_home->get_data_profile($id),
                    'divisi'        => $this->m_master_user->getdata_divisi_bynama(),
                    'departemen'    => $this->m_master_user->getdata_departemen_bynama(),
                );
                $this->load->view('layout_home/wrapper_layout', $data, FALSE);
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
                    'role'          => 4,
                    'status'        => 1
                );
                $this->m_master_user->update($data);
                $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
                redirect('home/profil/'.$id);
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
                'role'          => 4,
                'status'        => 1
            );
            $this->m_master_user->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('home/profil/'.$id);
        }

        $data = array(
            'title'         => 'Profil Update', 
            'content'       => 'home/profil_update', 
            'user'          => $this->m_home->get_data_profile($id),
            'divisi'        => $this->m_master_user->getdata_divisi_bynama(),
            'departemen'    => $this->m_master_user->getdata_departemen_bynama(),
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    //blog
    public function blog()
    {
        $data = array(
            'title'     => 'Blog', 
            'content'   => 'home/blog', 
            'blog'      => $this->m_home->get_blog_all()
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);
    }

    //detail blog
    public function detailblog($id)
    {
        $data = array(
            'title'     => 'Home', 
            'content'   => 'home/blog_detail', 
            'blog'      => $this->m_home->get_data_blog_id($id)
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);   
    }

    //Tentang
    public function tentang()
    {
        $data = array(
            'title'           => 'Tentang Kami', 
            'content'         => 'home/tentang', 
            'cab'             => $this->m_home->get_all_data_cabang(),
            'setting'         => $this->m_setting->get_setting()
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);   
    }

    //Cabang
    public function cabang()
    {
        $data = array(
            'title'           => 'Cabang Kami', 
            'content'         => 'home/cabang', 
            'cab'             => $this->m_home->get_all_data_cabang()
        );
        $this->load->view('layout_home/wrapper_layout', $data, FALSE);   
    }
}

/* End of file Home.php */
