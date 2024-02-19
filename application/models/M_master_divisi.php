<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_master_divisi extends CI_Model {

    //get all data from database
    public function get_data_all()
    {
        $this->db->select('*');
        $this->db->from('divisi');
        $this->db->order_by('Id_Divisi', 'desc');
        $this->db->where('Status', '1');
        return $this->db->get()->result();
    }

    //get data by id from database
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('divisi');
        $this->db->where('Id_Divisi', $id);
        return $this->db->get()->row();
    }

    //add data
    public function add($data)
    {
        $this->db->insert('divisi', $data);
    }

    //update data
    public function update($data)
    {
        $this->db->where('Id_Divisi', $data['Id_Divisi']);
        $this->db->update('divisi', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db->where('Id_Divisi', $data['Id_Divisi']);
        $this->db->update('divisi', $data);
    }
}

/* End of file M_master_cabang.php */
