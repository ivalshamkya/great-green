<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Departemen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_master_departemen');
    }

    public function index()
    {
        // $Id_Departemen=$this->m_master_kategori_produk->autoID();
        $data = array(
            // 'id'        => $Id_Departemen,
            'title'             => 'Master Kategori produk', 
            'departemen'   => $this->M_master_departemen->get_data_all(),
            'content'           => 'master/departemen/view', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        
    }

    public function add()
    {
        $this->form_validation->set_rules('Nama_Departemen', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        
        if($this->form_validation->run() == TRUE){
            
            $data = array(
                // 'Id_Departemen' => $this->input->post('id'),
                'Nama_Departemen'   => $this->input->post('Nama_Departemen'),                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                'Status'        => 1
            );
            $this->M_master_departemen->add($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('Master_Departemen');
        }

        $data = array(
            'title'     => 'Master Departemen', 
            'content'   => 'master/departemen/add', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function update( $id )
    {
        $this->form_validation->set_rules('Nama_Departemen', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        
        if($this->form_validation->run() == TRUE){
            $data = array(
                'Id_Departemen'    => $id,
                'Nama_Departemen'  => $this->input->post('Nama_Departemen'),
                'Status'        => 1
            );
            $this->M_master_departemen->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('Master_Departemen');
        }

        $data = array(
            'title'             => 'Master Departemen', 
            'content'           => 'master/departemen/update', 
            'departemen'   => $this->M_master_departemen->get_data_by_id($id),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }
 
    public function delete( $id )
    {
        $data = array(
            'Id_Departemen' => $id,
            'status'        => 0
        );
        $this->M_master_departemen->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('Master_Departemen');
    }

    public function detail($id)
    {
        $data = array(
            'title'        => 'Master Departemen', 
            'content'      => 'master/departemen/detail', 
            'departemen'   => $this->M_master_departemen->get_data_by_id($id),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

}

/* End of file Master_Kategori_Produk.php */
