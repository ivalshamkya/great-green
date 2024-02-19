<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan_penjualan extends CI_Model
{
	//menampilkan semua data penjualan yang ada
    public function get_data($bulan, $tahun){
        $this->db->distinct();
        $this->db->select('penjualan.tanggal_order, penjualan.kode_penjualan, user.nama, penjualan.total_bayar, penjualan.status');
        $this->db->from('penjualan');
        $this->db->join('user', 'penjualan.id_user = user.id', 'on');
        $this->db->where('MONTH(tanggal_order)', $bulan);
        $this->db->where('YEAR(tanggal_order)', $tahun);
        $this->db->where('penjualan.status', '5');
        return $this->db->get()->result();
    }
}

/* End of file M_laporan_penjualans.php */