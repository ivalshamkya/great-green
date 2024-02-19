<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_setting');
    }

    //Setting Slider
    public function slider()
    {
        $data = array(
            'title'     => 'Setting Slider', 
            'content'   => 'setting/slider/view', 
            'setting'   => $this->m_setting->get_setting()
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);   
    }
    
    //Setting Tentang
    public function tentang()
    {
        $data = array(
            'title'     => 'Setting Tentang', 
            'content'   => 'setting/tentang/view', 
            'setting'   => $this->m_setting->get_setting()
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);   
    }

    //Setting Footer
    public function footer()
    {
        $data = array(
            'title'     => 'Setting Footer', 
            'content'   => 'setting/footer/view', 
            'setting'   => $this->m_setting->get_setting()
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);   
    }

    //update data setting tentang
    public function update_tentang( $kode )
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|max_length[500]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 500 Karakter !!!'));

        if($this->form_validation->run() == TRUE){
            $data = array(
                'kode'          => $kode,
                'konten'        => $this->input->post('konten'),
            );
            $this->m_setting->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('Setting/Tentang');
        }

        $data = array(
            'title'         => 'Setting', 
            'content'       => 'setting/tentang/update', 
            'setting'       => $this->m_setting->get_data_by_kode($kode),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    //update data setting footer
    public function update_footer( $kode )
    {
        $this->form_validation->set_rules('konten', 'Konten', 'required|max_length[500]', array('required' => '%s Harus Diisi !!!', 'max_length' => '%s Maksimal 500 Karakter !!!'));

        if($this->form_validation->run() == TRUE){
            $data = array(
                'kode'          => $kode,
                'konten'        => $this->input->post('konten'),
            );
            $this->m_setting->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('Setting/Footer');
        }

        $data = array(
            'title'         => 'Setting', 
            'content'       => 'setting/footer/update', 
            'setting'       => $this->m_setting->get_data_by_kode($kode),
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
    }

    //update data setting -> logo
    public function update_logo($kode)
    {
        $data = array(
            'title'         => 'Setting', 
            'content'       => 'setting/tentang/update_logo', 
            'setting'       => $this->m_setting->get_data_by_kode($kode),  
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);

        $config['upload_path'] = './assets/image/master/all/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size']  = '2000';
        
        $this->upload->initialize($config);
        $field_name = "konten";

        if (!$this->upload->do_upload($field_name)) {
            $data = array(
                'error_upload'  => $this->upload->display_errors(),
                'title'         => 'Setting', 
                'content'       => 'setting/tentang/update_logo', 
                'setting'       => $this->m_setting->get_data_by_kode($kode),
            );
            $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        }
        else {
            $upload_data = array ('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/master/all/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
            $data = array(
                'kode'          => $kode,
                'konten'        => $upload_data['uploads']['file_name'],
            );
            $this->m_setting->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('Setting/Tentang');
        }
    }

    //update data setting -> slider
    public function update_slider($kode)
    {
        $data = array(
            'title'         => 'Setting', 
            'content'       => 'setting/slider/update_slider', 
            'setting'       => $this->m_setting->get_data_by_kode($kode),  
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);

        $config['upload_path'] = './assets/image/slider/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size']  = '2000';
        
        $this->upload->initialize($config);
        $field_name = "konten";

        if (!$this->upload->do_upload($field_name)) {
            $data = array(
                'error_upload'  => $this->upload->display_errors(),
                'title'         => 'Setting', 
                'content'       => 'setting/slider/update_slider', 
                'setting'       => $this->m_setting->get_data_by_kode($kode),
            );
            $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        }
        else {
            $upload_data = array ('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/slider/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
            $data = array(
                'kode'          => $kode,
                'konten'        => $upload_data['uploads']['file_name'],
            );
            $this->m_setting->update($data);
            $this->session->set_flashdata('pesan_success', 'Data berhasil diperbarui');
            redirect('Setting/Slider');
        }
    }
}

/* End of file Setting.php */
