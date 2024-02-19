<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard Admin', 
            'user'      => $this->m_dashboard->get_user(),
            'dataEH'    => $this->m_dashboard->get_dataeh(),
            'blog_data' => $this->m_dashboard->get_total_cost_blog(),
            'total_blog_perdivision' => $this->m_dashboard->get_total_blog_perdivision(),
            'waste_data'=> $this->m_dashboard->get_total_berat_sampah(),
            ////////////////////////////
            'blog'        => $this->m_dashboard->get_blog(),
            'konsistensi' => $this->m_dashboard->get_konsistensi(),
            'divisi'      => $this->m_dashboard->get_divisi(),
            'departemen'  => $this->m_dashboard->get_departemen(),
            'content' => 'dashboard/dashboard_admin', 
        );
        $this->load->view('layout_admin/wrapper_layout', $data, FALSE);
        
    }

    public function get_weight() 
    {
        $month = $this->input->get('month');
        $year = $this->input->get('year');
        $data = array(
            'weight' => $this->m_dashboard->get_total_berat_sampah_by($month, $year)
        );
        // $weight = $this->m_dashboard->get_total_berat_sampah_by($month, $year);
        // header('Content-Type: application/json');
        $weight = json_encode($data);
        echo $weight;
    }

}

/* End of file Dashboard_Admin.php */
