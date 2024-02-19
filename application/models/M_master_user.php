<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_master_user extends CI_Model {

    //get all data from database
    public function get_data_all()
    {
        $query = $this->db->query("SELECT user.*, departemen.Nama_Departemen, divisi.Nama_Divisi FROM user INNER JOIN departemen ON departemen.Id_Departemen = user.Id_Departemen INNER JOIN divisi ON divisi.Id_Divisi = user.Id_Divisi WHERE user.status = '1'");
    
        return $query->result();
    }

    //get data by id from database
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function getdata_departemen_bynama()
    {
        $query = $this->db->query("SELECT * FROM departemen WHERE Status = '1' ORDER BY Nama_Departemen ASC");

        return $query->result();
    }

    public function getdata_divisi_bynama()
    {
        $query = $this->db->query("SELECT * FROM divisi WHERE Status = '1' ORDER BY Nama_Divisi ASC");

        return $query->result();
    }

    //add data
    public function add($data)
    {
        $this->db->insert('user', $data);
    }

    //update data
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);
    }

    //get data profile by id from database
    public function get_data_profile($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
}

/* End of file M_master_user.php */
