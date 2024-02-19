<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Master_sampah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_master_sampah');
    }

    public function index()
    {
        $data = array(
            'title'             => 'Master Sampah', 
            'sampah'            => $this->M_master_sampah->get_data_all(),
            'divisi'            => $this->M_master_sampah->getdata_divisi_bynama(),
            'departemen'        => $this->M_master_sampah->getdata_departemen_bynama(),
            'content'           => 'master/sampah/view', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        
    }

    public function add()
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
                'tanggal'       => date('Y-m-d h:i:s'),
                'status'        => 1
            );
            $this->M_master_sampah->add($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil ditambahkan');
            redirect('Master_sampah');
        }

        $data = array(
            'title'     => 'Master Sampah', 
            'content'   => 'master/sampah/add', 
            'divisi'    => $this->M_master_sampah->getdata_divisi_bynama(),
            'departemen'=> $this->M_master_sampah->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    public function update( $id )
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
            $this->M_master_sampah->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('Master_sampah');
        }

        $data = array(
            'title'             => 'Master Sampah', 
            'content'           => 'master/sampah/update', 
            'sampah'            => $this->M_master_sampah->get_data_by_id($id),
            'divisi'            => $this->M_master_sampah->getdata_divisi_bynama(),
            'departemen'        => $this->M_master_sampah->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }
 
    public function delete( $id )
    {
        $data = array(
            'id'            => $id,
            'status'        => 0
        );
        $this->M_master_sampah->delete($data);
        $this->session->set_flashdata('pesan_success', 'Data berhasil dihapus');
        redirect('Master_sampah');
    }

    public function detail($id)
    {
        $data = array(
            'title'             => 'Master Sampah', 
            'content'           => 'master/sampah/detail', 
            'sampah'            => $this->M_master_sampah->get_data_by_id($id),
            'divisi'            => $this->M_master_sampah->getdata_divisi_bynama(),
            'departemen'        => $this->M_master_sampah->getdata_departemen_bynama(),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

}

/* End of file Master_gudang.php */
