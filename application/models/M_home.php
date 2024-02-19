<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    //get all data from database
    public function get_data_all()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('id', 'desc');
        $this->db->where('status', '1');
        return $this->db->get()->result();
    }

    //get all data from table
    public function get_data_all_table($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'desc');
        $this->db->where('status', '1');
        return $this->db->get()->result();
    }

    //get data profile by id from database
    public function get_data_profile($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    //get data by id from database
    public function get_data_by_id($id)
    {
        $this->db->select('
            p.id as id, 
            p.id_kategori_produk as id_kategori_produk, 
            p.nama as nama, 
            p.stok as stok, 
            p.harga as harga, 
            p.berat as berat, 
            p.deskripsi as deskripsi, 
            p.gambar as gambar, 
            p.status as status, 
            k.nama as kategori
        ');
        $this->db->from('produk p');
        $this->db->join('kategori_produk k', 'k.id = p.id_kategori_produk', 'left');
        $this->db->where('p.id', $id);
        return $this->db->get()->row();
    }

    //get data by kategori from database
    public function get_data_by_kategori($id)
    {
        $where = array(
            'status' => '1', 
            'id_kategori_produk' => $id
        );

        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('id', 'desc');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    //get all pelatihan from database
    public function get_pelatihan_all()
    {
        $where = array(
            'status' => '1', 
            'buka_tutup' => '1'
        );

        $this->db->select('*');
        $this->db->from('pelatihan');
        $this->db->order_by('id', 'desc');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    //add data peserta pelatihan
    public function add($data)
    {
        $this->db->insert('peserta_pelatihan', $data);
    }

    //kode pendaftaran
    function kode_pendaftaran($kode_pendaftaran)
    {
        $this->db->select('peserta_pelatihan.*,pelatihan.nama');
        $this->db->from('peserta_pelatihan');
        $this->db->join('pelatihan', 'pelatihan.id = peserta_pelatihan.id_pelatihan', 'on');
        $this->db->where('kode_pendaftaran', $kode_pendaftaran);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    // get all blog from database
    public function get_blog_all()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by('id', 'desc');
        $this->db->where('status', '1');
        return $this->db->get()->result();
    }

    //get data blog detail from database
    public function get_data_blog_id($id)
    {
        $where = array(
            'status'    => '1', 
            'id'        => $id
        );

        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by('id', 'desc');
        $this->db->where($where);
        return $this->db->get()->row();
    }

    //get data cabang untuk maps di tentang
    public function get_all_data_cabang()
    {
        $this->db->select('*');
        $this->db->from('cabang');
        $this->db->order_by('nama', 'asc');
        $this->db->where('status', '1');
        return $this->db->get()->result();
    }
}

/* End of file M_home.php */
