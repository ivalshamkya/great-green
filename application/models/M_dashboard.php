<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    //ADMIN
    //USER
    public function get_user(){
        $query = $this->db->query("SELECT 
        CASE role
           WHEN '1' THEN 'Direksi'
           WHEN '2' THEN 'Kepala Cabang'
           WHEN '3' THEN 'Admin'
           WHEN '4' THEN 'Anggota'
           ELSE 'Role Tidak Ada'
        END AS rl, COUNT(id) AS id
        FROM user
        WHERE status='1' GROUP BY rl ORDER BY id;");
        return $query->result();
    }

    //////////////////////////////////

    //BLOG
    public function get_blog(){
        $this->db->where('status', '1');
        return $this->db->count_all_results('blog');
    }

    public function get_blog_data(){
        return $this->db->get('blog')->result();
    }

    public function get_total_cost_blog(){
        return $this->db->query("SELECT b.tahun, b.bulan, COALESCE(SUM(a.total_tco), 0) AS total_cost, COALESCE(SUM(a.total_reduce_tco), 0) AS total_reduce_cost FROM (SELECT DISTINCT YEAR(tanggal) AS tahun, MONTH(tanggal) AS bulan FROM blog) b LEFT JOIN blog a ON YEAR(a.tanggal) = b.tahun AND MONTH(a.tanggal) = b.bulan WHERE a.status = 1 GROUP BY b.tahun, b.bulan")->result();
    }

    public function get_total_blog_perdivision()
    {
        return $this->db->query("SELECT b.Nama_Divisi, COUNT(a.Id_Divisi) AS total FROM `blog` a LEFT JOIN divisi b ON b.Id_Divisi = a.Id_Divisi GROUP BY a.Id_Divisi;")->result();
    }

    public function get_total_blog_perdept()
    {
        return $this->db->query("SELECT b.Nama_Departemen, COUNT(a.Id_Departemen) AS total FROM `blog` a LEFT JOIN departemen b ON b.Id_Departemen = a.Id_Departemen GROUP BY a.Id_Departemen;")->result();
    }

    //SAMPAH
    public function get_total_berat_sampah(){
        return $this->db->query("SELECT DATE(sampah.tanggal) as day, SUM(sampah.weight_or) as organik, SUM(sampah.weight_non) as non, SUM(sampah.weight_b3) as b3 FROM sampah GROUP BY day")->result();
    }
    public function get_total_berat_sampah_by($month, $year){
        return $this->db->query("SELECT DATE(sampah.tanggal) as day, SUM(sampah.weight_or) as organik, SUM(sampah.weight_non) as non, SUM(sampah.weight_b3) as b3 FROM sampah WHERE MONTH(sampah.tanggal) = '$month' AND YEAR(sampah.tanggal) = '$year' GROUP BY day")->result();
    }

    //BANK
    public function get_dataeh(){
        $this->db->where('status', '1');
        return $this->db->count_all_results('blog');
    }

    //BANK
    public function get_konsistensi(){
        $this->db->where('status', '1');
        return $this->db->count_all_results('konsistensi');
    }

    //CABANG
    public function get_divisi(){
        $this->db->where('Status', '1');
        return $this->db->count_all_results('divisi');
    }

    //GUDANG PENGIRIMAN
    public function get_departemen(){
        $this->db->where('Status', '1');
        return $this->db->count_all_results('departemen');
    }

    //KEPALA CABANG
    //PEMASUKAN SEMUA SAMPAH
    public function get_sampah_all(){
        $query = $this->db->query("SELECT SUM(detail_pemasukan_sampah.jumlah) AS jumlah, SUM(detail_pemasukan_sampah.subtotal) AS subtotal FROM kategori_sampah INNER JOIN detail_pemasukan_sampah ON kategori_sampah.id = detail_pemasukan_sampah.id_kategori_sampah;");
        return $query->result();
    }

    //PEMASUKAN SEMUA PRODUK
    public function get_produk_all(){
        $query = $this->db->query("SELECT SUM(detail_penjualan.qty) AS qty, SUM(detail_penjualan.sub_total) AS total FROM detail_penjualan INNER JOIN produk ON produk.id = detail_penjualan.id_produk;");
        return $query->result();
    }
    
    //PEMASUKAN SAMPAH & PENDAPATAN
    public function get_sampah(){
        $query = $this->db->query("SELECT SUM(detail_pemasukan_sampah.jumlah) AS jumlah, SUM(detail_pemasukan_sampah.subtotal) AS subtotal, kategori_sampah.nama FROM detail_pemasukan_sampah INNER JOIN kategori_sampah ON kategori_sampah.id = detail_pemasukan_sampah.id_kategori_sampah GROUP BY detail_pemasukan_sampah.id_kategori_sampah ORDER BY jumlah ASC;");
        return $query->result();
    }

    // DIREKSI
    //TOP 3 PEMASUKAN SAMPAH
    public function get_sampah_top(){
        $query = $this->db->query("SELECT SUM(detail_pemasukan_sampah.jumlah) AS qty, kategori_sampah.nama FROM detail_pemasukan_sampah INNER JOIN kategori_sampah ON kategori_sampah.id = detail_pemasukan_sampah.id_kategori_sampah GROUP BY detail_pemasukan_sampah.id_kategori_sampah ORDER BY qty DESC LIMIT 3;");
        return $query->result();
    }

    // DIREKSI
    //TOP 3 PENDAPATAN SAMPAH
    public function get_sampah_pendapatan_top(){
        $query = $this->db->query("SELECT SUM(detail_pemasukan_sampah.subtotal) AS subtotal, kategori_sampah.nama FROM detail_pemasukan_sampah INNER JOIN kategori_sampah ON kategori_sampah.id = detail_pemasukan_sampah.id_kategori_sampah GROUP BY detail_pemasukan_sampah.id_kategori_sampah ORDER BY subtotal;");
        return $query->result();
    }

    // DIREKSI
    //TOP 3 PRODUK
    public function get_produk_top(){
        $query = $this->db->query("SELECT SUM(detail_penjualan.qty) AS qty, produk.nama FROM detail_penjualan INNER JOIN produk ON produk.id = detail_penjualan.id_produk GROUP BY detail_penjualan.id_produk ORDER BY qty DESC LIMIT 3;");
        return $query->result();
    }

    // DIREKSI
    //TOP 3 PENDAPATAN PRODUK
    public function get_produk_pendapatan_top(){
        $query = $this->db->query("SELECT SUM(detail_penjualan.sub_total) AS subtotal, produk.nama FROM detail_penjualan INNER JOIN produk ON produk.id = detail_penjualan.id_produk GROUP BY detail_penjualan.id_produk ORDER BY subtotal;");
        return $query->result();
    }
}
/* End of file M_dashboard.php */