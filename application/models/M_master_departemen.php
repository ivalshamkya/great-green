<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_master_departemen extends CI_Model {

    function autoID(){
        $cd = $this->db->query("SELECT MAX(RIGHT(Id_Departemen,3)) AS kd_max FROM departemen");
        $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return $kd;
    }
    
    //get all data from database
    public function get_data_all()
    {
        $this->db->select('*');
        $this->db->from('departemen');
        $this->db->order_by('Id_Departemen', 'desc');
        $this->db->where('Status', '1');
        return $this->db->get()->result();
    }

    //get data by id from database
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('departemen');
        $this->db->where('Id_Departemen', $id);
        return $this->db->get()->row();
    }

    //add data
    public function add($data)
    {
        $this->db->insert('departemen', $data);
    }

    //update data
    public function update($data)
    {
        $this->db->where('Id_Departemen', $data['Id_Departemen']);
        $this->db->update('departemen', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db->where('Id_Departemen', $data['Id_Departemen']);
        $this->db->update('departemen', $data);
    }
}

/* End of file M_master_kategori_produk.php */
