<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Konsistensi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_konsistensi');
    }
    

    public function index()
    {
        $data = array(
            'title'         => 'Master konsistensi', 
            'konsistensi'   => $this->m_master_konsistensi->get_data_all(),
            'divisi'        => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'    => $this->m_master_konsistensi->getdata_departemen_bynama(),
            'content'       => 'master/konsistensi/view', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        
    }

    public function add()
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
                    'title'             => 'Master konsistensi', 
                    'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
                    'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
                    'content'           => 'master/konsistensi/add',
                );
                $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
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
                redirect('master_konsistensi');
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
            redirect('master_konsistensi');
        }

        $data = array(
            'title'             => 'Master Konsistensi', 
            'content'           => 'master/konsistensi/add',
            'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function update( $id )
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
                    'title'             => 'Master Konsistensi', 
                    'content'           => 'master/konsistensi/add',
                    'konsistensi'       => $this->m_master_konsistensi->get_data_by_id($id),
                    'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
                    'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
                );
                $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
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
                redirect('master_konsistensi');
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
            redirect('master_konsistensi');
        }

        $data = array(
            'title'             => 'Master Konsistensi', 
            'content'           => 'master/konsistensi/update', 
            'konsistensi'       => $this->m_master_konsistensi->get_data_by_id($id),
            'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }
 
    public function delete( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->m_master_konsistensi->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('master_konsistensi');
    }

    public function detail($id)
    {
        $data = array(
            'title'             => 'Master Konsistensi', 
            'content'           => 'master/bank/detail', 
            'konsistensi'       => $this->m_master_konsistensi->get_data_by_id($id),
            'divisi'            => $this->m_master_konsistensi->getdata_divisi_bynama(),
            'departemen'        => $this->m_master_konsistensi->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

}

/* End of file Master_bank.php */
