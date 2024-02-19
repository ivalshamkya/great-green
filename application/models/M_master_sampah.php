<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_master_sampah extends CI_Model {

    //get all data from database
    public function get_data_all()
    {
        $query = $this->db->query("SELECT sampah.*, departemen.Nama_Departemen, divisi.Nama_Divisi FROM sampah INNER JOIN departemen ON departemen.Id_Departemen = sampah.Id_Departemen INNER JOIN divisi ON divisi.Id_Divisi = sampah.Id_Divisi WHERE sampah.status = '1'");
    
        return $query->result();
    }

    //get data by id from database
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('sampah');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    //get data select id 1 from database
    public function get_data_select()
    {
        $this->db->select('*');
        $this->db->from('sampah');
        $this->db->where('id', 1);
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
        $this->db->insert('sampah', $data);
    }

    //update data
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('sampah', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('sampah', $data);
    }
}

/* End of file M_master_gudang.php */
