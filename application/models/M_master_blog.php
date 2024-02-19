<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_master_blog extends CI_Model {

    //get all data from database
    public function get_data_all()
    {
        $query = $this->db->query("SELECT blog.*, departemen.Nama_Departemen, divisi.Nama_Divisi FROM blog INNER JOIN departemen ON departemen.Id_Departemen = blog.Id_Departemen INNER JOIN divisi ON divisi.Id_Divisi = blog.Id_Divisi WHERE blog.status = '1'");
    
        return $query->result();
    }

    //get data by id from database
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('blog');
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

    public function getdata_time()
    {
        $query = $this->db->query("SELECT TIMEDIFF (time_after,time_before) As selisih FROM blog");

        return $query->result();
    }

    //add data
    public function add($data)
    {
        $this->db->insert('blog', $data);
    }

    //update data
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('blog', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('blog', $data);
    }
}

/* End of file M_master_blog.php */
