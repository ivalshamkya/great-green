<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Divisi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_master_divisi');
    }
    

    public function index()
    {
        $data = array(
            'title'     => 'Master Divisi', 
            'divisi'    => $this->M_master_divisi->get_data_all(),
            'content'   => 'master/divisi/view', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        
    }

    public function add()
    {
        $this->form_validation->set_rules('Nama_Divisi', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        
        if($this->form_validation->run() == TRUE){
            
            $data = array(
                'Nama_Divisi'   => $this->input->post('Nama_Divisi'),                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                'status'        => 1
            );
            $this->M_master_divisi->add($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('master_divisi');
        }

        $data = array(
            'title'     => 'Master Divisi', 
            'content'   => 'master/divisi/add', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function update( $id )
    {
        $this->form_validation->set_rules('Nama_Divisi', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        
        if($this->form_validation->run() == TRUE){
            
            $data = array(
                'Id_Divisi'     => $id,
                'Nama_Divisi'   => $this->input->post('Nama_Divisi'),                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                'Status'        => 1
            );
            $this->M_master_divisi->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('master_divisi');
        }

        $data = array(
            'title'     => 'Master Divisi', 
            'content'   => 'master/divisi/update', 
            'divisi'      => $this->M_master_divisi->get_data_by_id($id),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }
 
    public function delete( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->M_master_divisi->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('master_divisi');
    }

    public function detail($id)
    {
        $data = array(
            'title'         => 'Master Divisi', 
            'content'       => 'master/divisi/detail', 
            'divisi'        => $this->M_master_divisi->get_data_by_id($id),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

}

/* End of file Master_Cabang.php */
