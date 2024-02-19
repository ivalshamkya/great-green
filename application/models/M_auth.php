<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
    public function login_user($username, $password)
    { 
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'username'  => $username,
            'password'  => $password
        ));
        return $this->db->get()->row();
    }

    public function get_data_all()
    {
        $query = $this->db->query("SELECT user.*, departemen.Nama_Departemen, divisi.Nama_Divisi FROM user INNER JOIN departemen ON departemen.Id_Departemen = user.Id_Departemen INNER JOIN divisi ON divisi.Id_Divisi = user.Id_Divisi WHERE user.status = '1'");
    
        return $query->result();
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
}

/* End of file M_auth.php */
