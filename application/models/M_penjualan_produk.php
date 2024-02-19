<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjualan_produk extends CI_Model {

    //save transaksi
    public function add_transaksi($data){
        $this->db->insert('penjualan', $data);
    }

    //save detail transaksi
    public function add_detail_transaksi($data_detail){
        $this->db->insert('detail_penjualan', $data_detail);
    }

    //update stok berkurang
    public function subtract_stok($qty, $id){
        $this->db->query("update produk set stok = stok - $qty where id = '$id'");
    }

    //update stok bertambah
    public function add_stok($qty, $id){
        $this->db->query("update produk set stok = stok + $qty where id = '$id'");
    }

    //view semua pesanan berdasarkan user pelanggan yang login
    public function all_pesanan()
    {
        $where = array(
            'id_user'   => $this->session->userdata('id')
        );

        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->where($where);
        $this->db->order_by('tanggal_order', 'asc');
        return $this->db->get()->result();
    }

    //view pesanan semuanya tanpa filter data
    public function all_data_pesanan()
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->order_by('tanggal_order', 'asc');
        return $this->db->get()->result();
    }

    //penjualan berdasarkan id pesan
    public function by_id_pesanan($id)
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->where( 'id', $id);
        return $this->db->get()->row();
    }

    //detail penjualan berdasarkan id pesan
    public function by_id_detail_pesanan($id)
    {
        $this->db->select('
        p.nama as nama, 
        p.harga as harga, 
        p.berat as berat, 
        p.gambar as gambar, 
        d.qty as qty, 
        d.sub_total as sub_total
        ');
        $this->db->from('produk p');
        $this->db->join('detail_penjualan d', 'd.id_produk = p.id', 'left');
        $this->db->where('d.id', $id);
        return $this->db->get()->result();
    }

    //penjualan berdasarkan kode pesan
    public function by_kode_pesanan($kode_penjualan)
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->where( 'kode_penjualan', $kode_penjualan);
        return $this->db->get()->row();
    }

    //detail penjualan berdasarkan kode pesan
    public function by_kode_detail_pesanan($kode_penjualan)
    {
        $this->db->select('
        p.nama as nama, 
        p.harga as harga, 
        p.berat as berat, 
        p.gambar as gambar, 
        d.qty as qty, 
        d.sub_total as sub_total
        ');
        $this->db->from('produk p');
        $this->db->join('detail_penjualan d', 'd.id_produk = p.id', 'left');
        $this->db->where('d.kode_penjualan', $kode_penjualan);
        return $this->db->get()->result();
    }

    //view detail pesanan produk dari penjualan
    public function detail_produk_penjualan($kode_penjualan)
    {
        $this->db->select('*');
        $this->db->from('detail_penjualan');
        $this->db->where('kode_penjualan', $kode_penjualan);
        $this->db->order_by('id_produk', 'asc');
        return $this->db->get()->result();
    }

    //mengambil data bank
    public function all_bank()
    {
        $this->db->select('*');
        $this->db->from('bank');
        $this->db->where('status', '1');
        $this->db->order_by('nama', 'asc');
        return $this->db->get()->result();
    }

    //update status di tabel penjualan by id -> simpan pembayaran, konfirmasi pembayaran, 
    public function update_status_penjualan($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('penjualan', $data);
    }

    //update status di tabel penjualan by kode_penjualan -> simpan pembayaran, konfirmasi pembayaran, 
    public function update_status_penjualan_by_kode($data)
    {
        $this->db->where('kode_penjualan', $data['kode_penjualan']);
        $this->db->update('penjualan', $data);
    }
}

/* End of file M_penjualan_produk.php */
