<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {

    //get data setting di tentang
    public function get_setting()
    {
        $this->db->select('*');
        $this->db->from('setting');
        return $this->db->get()->result();
    }

    //get data by id from database
    public function get_data_by_kode($kode)
    {
        $this->db->select('*');
        $this->db->from('setting');
        $this->db->where('kode', $kode);
        return $this->db->get()->row();
    }

    //update data
    public function update($data)
    {
        $this->db->where('kode', $data['kode']);
        $this->db->update('setting', $data);
    }
}

/* End of file M_setting.php */
