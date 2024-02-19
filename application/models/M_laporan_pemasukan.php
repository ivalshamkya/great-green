<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan_pemasukan extends CI_Model
{
	//menampilkan semua data pemasukan yang ada
    public function get_data($bulan, $tahun){
		$this->db->distinct();
		$this->db->select('tanggal, pemasukan_sampah.kode, user.nama, total');
        $this->db->from('pemasukan_sampah');
		$this->db->join('detail_pemasukan_sampah', 'detail_pemasukan_sampah.kode = pemasukan_sampah.kode', 'left');
		$this->db->join('user', 'user.id = pemasukan_sampah.id_user', 'left');
        $this->db->where('MONTH(tanggal)', $bulan);
        $this->db->where('YEAR(tanggal)', $tahun);
        return $this->db->get()->result();
    }
}

/* End of file M_laporan_pemasukan.php */