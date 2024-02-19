<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_blog');
    }

    public function index()
    {
        $data = array(
            'title'             => 'Master Data Earth Hour', 
            'blog'              => $this->m_master_blog->get_data_all(),
            'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
            'content'           => 'master/blog/view', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        
    }

    public function add()
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
                    'title'             => 'Master Blog', 
                    'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
                    'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
                    'content'           => 'master/blog/add',
                );
                $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
            }
            else {
                $upload_data = array ('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/master/blog/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                if (!$this->upload->do_upload($field_name2)) {
                    $data = array(
                        'error_upload'      => $this->upload->display_errors(),
                        'title'             => 'Master Blog', 
                        'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
                        'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
                        'content'           => 'master/blog/add',
                    );
                    $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
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
                    redirect('master_blog');
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
            redirect('master_blog');
        }

        $data = array(
            'title'             => 'Master Data Earth Hour', 
            'content'           => 'master/blog/add',
            'divisi'            => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_blog->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function update_page( $id )
    {
        $data = array(
            'title'     => 'Master Data Earth Hour', 
            'content'   => 'master/blog/update', 
            'divisi'      => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'  => $this->m_master_blog->getdata_departemen_bynama(),
            'blog'      => $this->m_master_blog->get_data_by_id($id)
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function update()
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
            redirect('master_blog');
        }
    }
 
    public function delete( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->m_master_blog->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('master_blog');
    }

    public function detail($id)
    {
        $data = array(
            'title'     => 'Master Data Earth Hour', 
            'content'   => 'master/blog/detail', 
            'divisi'      => $this->m_master_blog->getdata_divisi_bynama(),
            'departemen'  => $this->m_master_blog->getdata_departemen_bynama(),
            'blog'      => $this->m_master_blog->get_data_by_id($id)
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

}

/* End of file Master_Blog.php */
