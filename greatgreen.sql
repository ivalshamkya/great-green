-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 05:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greatgreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Id_Divisi` int(25) NOT NULL,
  `Id_Departemen` int(25) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Nama_Shop` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `NPK` int(10) NOT NULL,
  `gambar_before` text DEFAULT NULL,
  `gambar_after` text DEFAULT NULL,
  `time_before` time NOT NULL,
  `time_after` time NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `energi_before` int(100) NOT NULL,
  `energi_after` int(100) NOT NULL,
  `total_tco` int(100) NOT NULL,
  `total_reduce_tco` int(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `Id_Divisi`, `Id_Departemen`, `Nama`, `Nama_Shop`, `Area`, `NPK`, `gambar_before`, `gambar_after`, `time_before`, `time_after`, `tanggal`, `energi_before`, `energi_after`, `total_tco`, `total_reduce_tco`, `status`) VALUES
(11, 1, 2, 'Ghina', 'Welding', 'Welding', 16232, 'WhatsApp_Image_2023-02-02_at_22_49_52.jpeg', 'fishbone-diagram-removebg-preview.png', '10:21:00', '00:22:00', '2023-02-19 17:00:00', 5000, 3200, 18792, 1336, 1),
(12, 2, 1, 'Ghina', 'Welding', 'Welding', 87362, 'sdgslogo1.png', 'download.png', '08:11:00', '00:11:00', '2023-02-19 17:00:00', 1600, 1000, 6013, 418, 1),
(14, 2, 1, 'test', 'ooo', 'test', 12121, 'Screenshot_(184)7.png', 'Screenshot_(184)8.png', '21:48:00', '23:42:00', '2023-03-13 04:42:22', 5000, 3200, 9, 6, 0),
(15, 2, 1, 'tester', 'qwerty', 'test', 2121222, 'Screenshot_(180).png', 'Screenshot_(184)6.png', '12:05:00', '13:05:00', '2023-03-13 04:34:38', 3200, 5000, 3, 4, 0),
(16, 2, 1, 'tester', 'qwerty', 'test', 121212, 'Screenshot_(173).png', 'Screenshot_(179).png', '12:32:00', '13:32:00', '2023-03-13 04:34:35', 5000, 3200, 4, 3, 0),
(17, 2, 1, 'tester', 'qwerty', 'test', 1222222222, 'Screenshot_(153)1.png', 'Screenshot_(153)2.png', '12:33:00', '13:33:00', '2023-03-13 04:34:33', 5000, 3200, 4, 3, 0),
(18, 2, 1, 'tester', 'qwerty', 'test', 1111, 'Screenshot_(160)3.png', 'Screenshot_(162)3.png', '12:40:00', '13:40:00', '2023-03-13 04:42:02', 5000, 3200, 4, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id`, `nama`, `latitude`, `longitude`, `alamat`, `pic`, `kontak`, `status`) VALUES
(1, 'GG Jakarta', '-6.154664749756271', '106.88605704118461', 'Jl. Jaksa No 40, Kel. Sunter Agung, Jakarta Utara 21312', 'Marfuah Yasir', '08123812334', 1),
(2, 'GG Bekasi', '-6.2355404086839785', '106.99672567267197', 'Jl Raya Bekasi Km 20 No 19, Kota Bekasi, Jawa Barat 12213', 'Anto Nursalim', '08213122314', 1),
(3, 'GG Cikarang', '-6.350325998824623', '107.14811386054907', 'Jl.Cibatu', 'Arga', '02143253434', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `Id_Departemen` int(25) NOT NULL,
  `Nama_Departemen` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`Id_Departemen`, `Nama_Departemen`, `Status`) VALUES
(1, 'Quality', 1),
(2, 'Body', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemasukan_sampah`
--

CREATE TABLE `detail_pemasukan_sampah` (
  `id_detail` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `id_kategori_sampah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pemasukan_sampah`
--

INSERT INTO `detail_pemasukan_sampah` (`id_detail`, `kode`, `id_kategori_sampah`, `harga`, `jumlah`, `subtotal`) VALUES
(1, '21022022ERAH6DRW', 1, 3000, 5, 15000),
(2, '21022022ERAH6DRW', 2, 1500, 5, 7500),
(3, '04102022HGEGANB5', 3, 3200, 10, 32000),
(4, '04102022HGEGANB5', 2, 1500, 4, 6000),
(5, '04102022FE7KRJGT', 1, 3000, 5, 15000),
(6, '04102022BKMIJOGQ', 1, 3000, 32, 96000),
(7, '06102022SPTZWPFH', 2, 1500, 4, 6000),
(8, '06102022SPTZWPFH', 1, 3000, 5, 15000),
(9, '06102022SPTZWPFH', 3, 3200, 5, 16000),
(10, '25112022IFM7VT1R', 3, 3200, 10, 32000),
(11, '25112022IFM7VT1R', 1, 3000, 30, 90000),
(12, '25112022IFM7VT1R', 2, 1500, 20, 30000),
(13, '25112022FJVR7CNU', 3, 3200, 20, 64000),
(14, '25112022NMK3WPGB', 1, 3000, 50, 150000),
(15, '25112022UF6XOR3B', 2, 1500, 40, 60000),
(16, '25112022UF6XOR3B', 3, 3200, 30, 96000),
(17, '25112022T13CVREZ', 6, 5500, 24, 132000),
(18, '25112022T13CVREZ', 5, 3000, 32, 96000),
(19, '25112022T13CVREZ', 4, 7000, 10, 70000),
(20, '25112022YBXIVPIA', 6, 5500, 25, 137500),
(21, '251120221PYRBYNC', 4, 7000, 24, 168000),
(22, '251120221PYRBYNC', 5, 3000, 28, 84000),
(23, '28112022E5LEP1BU', 4, 7000, 10, 70000),
(24, '28112022E5LEP1BU', 5, 3000, 2, 6000),
(25, '28112022E5LEP1BU', 3, 3200, 3, 9600),
(26, '28112022E5LEP1BU', 2, 1500, 5, 7500),
(27, '28112022OSGCZ1DL', 4, 7000, 10, 70000),
(28, '28112022QUDDYHCB', 1, 3000, 5, 15000),
(29, '28112022QUDDYHCB', 4, 7000, 9, 63000),
(30, '28112022QUDDYHCB', 6, 5500, 2, 11000),
(31, '28112022QUDDYHCB', 2, 1500, 4, 6000),
(32, '281120221HADFO8D', 2, 1500, 10, 15000),
(33, '28112022E6LANRXQ', 4, 7000, 6, 42000),
(34, '28112022E6LANRXQ', 2, 1500, 7, 10500),
(35, '29112022W2HAZ5LI', 1, 3000, 10, 30000),
(36, '01122022LLWPMUIE', 3, 3200, 2, 6400),
(37, '01122022LLWPMUIE', 5, 3000, 5, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` int(16) NOT NULL,
  `kode_penjualan` varchar(50) NOT NULL,
  `id_produk` int(16) NOT NULL,
  `qty` int(16) NOT NULL,
  `harga` int(16) NOT NULL,
  `sub_total` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id`, `kode_penjualan`, `id_produk`, `qty`, `harga`, `sub_total`) VALUES
(1, '20221021SM7RXNUFAG2L', 4, 1, 15000, 15000),
(2, '20221021SM7RXNUFAG2L', 3, 1, 20000, 20000),
(3, '2022102112ATFYGPJWNU', 4, 1, 15000, 15000),
(4, '2022102112ATFYGPJWNU', 3, 2, 20000, 40000),
(5, '2022102112ATFYGPJWNU', 2, 2, 1000000, 2000000),
(6, '20221101BZCWFORRSKJH', 4, 2, 15000, 30000),
(7, '20221101BZCWFORRSKJH', 3, 1, 20000, 20000),
(8, '20221104HTUGRQ20KNTK', 4, 1, 15000, 15000),
(9, '20221104HTUGRQ20KNTK', 3, 1, 20000, 20000),
(10, '20221118JRUISDN294IL', 4, 2, 15000, 30000),
(11, '20221118JRUISDN294IL', 1, 2, 14000, 28000),
(12, '20221118GHTYRSYEQMBI', 4, 1, 15000, 15000),
(13, '20221118GHTYRSYEQMBI', 3, 1, 20000, 20000),
(14, '20221125RY98LMQ3KXID', 5, 1, 40000, 40000),
(15, '20221125RY98LMQ3KXID', 2, 1, 100000, 100000),
(16, '20221129PJVZNEY9WDJT', 4, 2, 15000, 30000),
(17, '20221129PJVZNEY9WDJT', 3, 2, 20000, 40000),
(18, '20221129UTD4HMGNQ7AN', 1, 5, 14000, 70000),
(19, '20221220C52FFOBBV4JG', 5, 3, 3000, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `Id_Divisi` int(25) NOT NULL,
  `Nama_Divisi` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`Id_Divisi`, `Nama_Divisi`, `Status`) VALUES
(1, 'Safety', 1),
(2, 'PPL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`, `deskripsi`, `status`) VALUES
(1, 'Tas', 'Tas merupakan alat untuk menyimpan barang bawaan', 1),
(2, 'Dompet', 'Dompet adalah alat untuk menyimpan uang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sampah`
--

CREATE TABLE `kategori_sampah` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(16) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_sampah`
--

INSERT INTO `kategori_sampah` (`id`, `nama`, `deskripsi`, `harga`, `status`) VALUES
(1, 'Plastik', 'Ini adalah deskripsi plastik', 3000, 1),
(2, 'Kardus', 'Ini adalah deskripsi kardus', 1500, 1),
(3, 'Kaca Beling', 'Ini adalah deskripsi kaca ya', 3200, 1),
(4, 'Besi', 'ini besi', 7000, 1),
(5, 'Kertas', 'kertas apa saja', 3000, 1),
(6, 'Logam', 'logam sampah makanan minuman', 5500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `konsistensi`
--

CREATE TABLE `konsistensi` (
  `id` int(16) NOT NULL,
  `Id_Divisi` int(25) NOT NULL,
  `Id_Departemen` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `Nama_Atasan` varchar(50) NOT NULL,
  `No_NPK` varchar(10) NOT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsistensi`
--

INSERT INTO `konsistensi` (`id`, `Id_Divisi`, `Id_Departemen`, `nama`, `Nama_Atasan`, `No_NPK`, `gambar`, `tanggal`, `status`) VALUES
(6, 1, 1, 'Amanda ', 'Wahyu', '09839', 'Activity_Plan_SDGs.pdf', '2023-02-19 11:35:45', 1),
(7, 2, 2, 'Alwi Hanan', 'Wahyu', '72934', 'LAPORAN_PK_KEL08_FINAL.pdf', '2023-02-15 19:34:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tema` varchar(150) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `gambar` text DEFAULT NULL,
  `mentor` varchar(200) NOT NULL,
  `buka_tutup` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `nama`, `tema`, `deskripsi`, `tanggal`, `jam`, `tempat`, `gambar`, `mentor`, `buka_tutup`, `status`) VALUES
(1, 'Merangkai Bunga Sampah', 'Bersama menjadikan sampah wangi seperti bunga', 'Pelatihan membuat bunga yang terbuat dari sampah plastik, dengan mendaur ulang sampah plastik kita dapat membuat bumi semakin nyaman untuk ditinggali', '2022-11-30', '11:20', 'Jakarta', 'pelatihan bunga sampah.jpg', 'Haji Shodiq', 1, 1),
(2, 'Membuat Dompet Dari Sedotan', 'Dari Sedotan Jadi Kebanggaan', 'Membuat dompet dari sedotan bukanlah hal yang sulit, jika diajarkan oleh orang yang kompeten. Mari bergabung dipelatihan ini dan dapatkan ilmu yang bermanfaat', '2022-11-25', '13:30', 'Jakarta', 'pelatihan dompet sampah.JPG', 'Agus Syamsuddin', 1, 1),
(3, 'Membuat kerajinan dari berbagai kertas', 'Memanfaatkan kertas  bekas', 'Perlu mempersiapkan barang yang harus dibawa', '2022-12-21', '08:30', 'Gedung A, Jakarta', 'kerajinan kertas.jpg', 'Hari Kusuma', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan_sampah`
--

CREATE TABLE `pemasukan_sampah` (
  `id_pemasukan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan_sampah`
--

INSERT INTO `pemasukan_sampah` (`id_pemasukan`, `id_user`, `kode`, `tanggal`, `total`) VALUES
(1, 2, '21022022ERAH6DRW', '2022-09-30 00:42:03', 22500),
(2, 2, '04102022HGEGANB5', '2022-10-04 02:46:34', 38000),
(3, 2, '04102022FE7KRJGT', '2022-10-04 02:53:17', 15000),
(4, 2, '04102022BKMIJOGQ', '2022-10-04 04:09:25', 96000),
(5, 2, '06102022SPTZWPFH', '2022-10-06 10:35:09', 37000),
(6, 2, '25112022IFM7VT1R', '2022-11-25 02:31:01', 152000),
(7, 2, '25112022FJVR7CNU', '2022-11-25 02:31:13', 64000),
(8, 2, '25112022NMK3WPGB', '2022-11-25 02:31:26', 150000),
(9, 2, '25112022UF6XOR3B', '2022-11-25 02:33:16', 156000),
(10, 2, '25112022T13CVREZ', '2022-11-25 03:58:41', 298000),
(11, 2, '25112022YBXIVPIA', '2022-11-25 03:58:54', 137500),
(12, 2, '251120221PYRBYNC', '2022-11-25 03:59:20', 252000),
(13, 2, '28112022E5LEP1BU', '2022-11-28 09:41:11', 93100),
(14, 2, '28112022OSGCZ1DL', '2022-11-28 09:43:05', 70000),
(15, 2, '28112022QUDDYHCB', '2022-11-28 14:31:19', 95000),
(16, 2, '281120221HADFO8D', '2022-11-28 14:32:30', 15000),
(17, 2, '28112022E6LANRXQ', '2022-11-28 14:34:14', 52500),
(18, 2, '29112022W2HAZ5LI', '2022-11-29 05:10:09', 30000),
(19, 2, '01122022LLWPMUIE', '2022-12-01 04:57:51', 21400);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(16) NOT NULL,
  `kode_penjualan` varchar(50) NOT NULL,
  `id_user` int(16) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `kode_provinsi` int(10) NOT NULL,
  `kode_kota` int(10) NOT NULL,
  `expedisi` varchar(50) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `ongkir` int(16) DEFAULT NULL,
  `resi` varchar(100) DEFAULT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `sub_total_harga` int(16) DEFAULT NULL,
  `total_bayar` int(16) DEFAULT NULL,
  `tanggal_order` date NOT NULL,
  `estimasi_tiba` varchar(50) DEFAULT NULL,
  `tanggal_tiba` date DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `nama_rek_cust` varchar(100) DEFAULT NULL,
  `no_rek_cust` varchar(100) DEFAULT NULL,
  `metode_bayar` int(16) DEFAULT NULL,
  `total_dibayar` int(16) DEFAULT NULL,
  `status` int(5) NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `kode_penjualan`, `id_user`, `nama_penerima`, `telepon`, `email`, `alamat`, `kota`, `provinsi`, `kode_pos`, `kode_provinsi`, `kode_kota`, `expedisi`, `paket`, `berat`, `ongkir`, `resi`, `catatan`, `sub_total_harga`, `total_bayar`, `tanggal_order`, `estimasi_tiba`, `tanggal_tiba`, `bukti_bayar`, `nama_rek_cust`, `no_rek_cust`, `metode_bayar`, `total_dibayar`, `status`, `keterangan`) VALUES
(4, '20221021SM7RXNUFAG2L', 4, 'Panjul Sari', '081262637272', 'anggota@gmail.com', 'Jl Ruwanda No 8', 'Badung', 'Bali', '13930', 1, 17, 'jne', 'OKE', '2500', 81000, '123ADKFJDF123', NULL, 35000, 116000, '2022-10-21', '2-3 Hari', '2022-11-01', 'Tf1.jpg', 'Madara', '123123123', 2, 1231234324, 5, NULL),
(5, '2022102112ATFYGPJWNU', 4, 'Hanafi', '081262637272', 'hanafi@gmail.com', 'Jl Jatinegara Jakarta Timur No 20', 'Jakarta Timur', 'DKI Jakarta', '13930', 6, 154, 'jne', 'REG', '5500', 54000, NULL, 'Mohon segera diproses', 2055000, 2109000, '2022-10-21', '2-3 Hari', NULL, 'Tf4.jpg', 'Zul', '453443', 2, 3000000, 2, NULL),
(6, '20221101BZCWFORRSKJH', 4, 'Majnun', '0827123123', 'majnun@gmail.com', 'Jl Majene No 18', 'Bantul', 'DI Yogyakarta', '13930', 5, 39, 'tiki', 'ECO', '4000', 76000, NULL, 'Tak ada catatan', 50000, 126000, '2022-11-01', '4 Hari', NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL),
(7, '20221104HTUGRQ20KNTK', 4, 'Anggota', '081262637272', 'anggota@gmail.com', 'Jl Ruwanda No 8', 'Kutai Timur', 'Kalimantan Timur', '75611', 15, 216, 'pos', 'Pos Ekonomi', '2500', 184500, NULL, '', 35000, 219500, '2022-11-04', '7-14 HARI Hari', NULL, 'IMG_52891.JPG', 'Aurelia Agatha', '6900527959', 3, 219500, 2, NULL),
(8, '20221118JRUISDN294IL', 14, 'Rifqih Syahrial', '081256789012', 'qihsyahrial@gmail.com', 'Jakarta Timur', 'Jakarta Timur', 'DKI Jakarta', '13930', 6, 154, 'pos', 'Pos Ekonomi', '7000', 45500, NULL, 'gapakelama', 58000, 103500, '2022-11-18', '7-14 HARI Hari', NULL, 'Tf2.jpg', 'Agus', '687687686', 2, 103500, 2, 'gatau'),
(9, '20221118GHTYRSYEQMBI', 14, 'Rifqih Syahrial', '081256789012', 'qihsyahrial@gmail.com', 'Jakarta Timur', 'Jakarta Timur', 'DKI Jakarta', '13930', 6, 154, 'jne', 'OKE', '2500', 24000, 'YEQMBI20221118', 'oke', 35000, 59000, '2022-11-18', '2-3 Hari', NULL, 'Tf3.jpg', 'Abil', '21312312312', 1, 60000, 4, NULL),
(10, '20221125RY98LMQ3KXID', 15, 'Aurelia Agatha', '082139233822', 'aureliaagatha11@gmail.com', 'Jln stm walang jaya, Bendungan melayu utara\r\nGg Dahlia, Rt10/01 No.60', 'Jakarta Utara', 'DKI Jakarta', '14260', 6, 155, 'jne', 'OKE', '2300', 16000, '9823SIREWU32948', '', 140000, 156000, '2022-11-25', '2-3 Hari', NULL, 'Tf11.jpg', 'Aurelia Agatha', '6900527959', 3, 156000, 4, NULL),
(11, '20221129PJVZNEY9WDJT', 4, 'Anggita', '081262637271', 'anggota@gmail.com', 'Jl Ruwanda No. 8, Kelurahan Rawa Bayem, Kecamatan Semper, Jakarta Utara', 'Jakarta Utara', 'DKI Jakarta', '14260', 6, 155, 'jne', 'OKE', '5000', 40000, 'SAJDJ329839KJA', '', 70000, 110000, '2022-11-29', '2-3 Hari', '2022-11-30', NULL, NULL, NULL, NULL, NULL, 4, 'struk tidak sesuai'),
(12, '20221129UTD4HMGNQ7AN', 4, 'Anggita', '081262637271', 'anggota@gmail.com', 'Jl Ruwanda No. 8, Kelurahan Rawa Bayem, Kecamatan Semper, Jakarta Utara', 'Jakarta Utara', 'DKI Jakarta', '14260', 6, 155, 'tiki', 'REG', '10000', 80000, NULL, '', 70000, 150000, '2022-11-29', '2 Hari', NULL, NULL, NULL, NULL, NULL, NULL, 6, 'gatau'),
(13, '20221220C52FFOBBV4JG', 4, 'Anggita', '081262637271', 'anggota@gmail.com', 'Jl Ruwanda No. 8, Kelurahan Rawa Bayem, Kecamatan Semper, Jakarta Utara', 'Boyolali', 'Jawa Tengah', '15342', 10, 91, 'tiki', 'ECO', '3900', 72000, NULL, '', 9000, 81000, '2022-12-20', '5 Hari', NULL, 'IMG_5289.JPG', 'Aurelia Agatha', '6900527959', 3, 81000, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peserta_pelatihan`
--

CREATE TABLE `peserta_pelatihan` (
  `id` int(16) NOT NULL,
  `kode_pendaftaran` varchar(100) NOT NULL,
  `id_user` int(16) NOT NULL,
  `id_pelatihan` int(16) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta_pelatihan`
--

INSERT INTO `peserta_pelatihan` (`id`, `kode_pendaftaran`, `id_user`, `id_pelatihan`, `tanggal`, `status`) VALUES
(1, '202211131LO8THMR5GE', 4, 1, '2022-11-13', 1),
(4, '20221125287HF6FDXWJ', 4, 2, '2022-11-25', 1),
(5, '202211251KUKO0ENXS1', 14, 1, '2022-11-25', 1),
(6, '2022112539YMXLNHIYV', 14, 3, '2022-11-25', 1),
(7, '202211252XXL9TIZFMK', 15, 2, '2022-11-25', 1),
(8, '202211251TKXDG01BNH', 15, 1, '2022-11-25', 1),
(9, '2022112532K0VAVF7J6', 15, 3, '2022-11-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(16) NOT NULL,
  `id_kategori_produk` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(16) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_kategori_produk`, `nama`, `stok`, `harga`, `berat`, `deskripsi`, `gambar`, `status`) VALUES
(1, 1, 'Tas Mantap', 57, 14000, '2000', 'Tas yang mantap untuk penyimpanan', 'tas-1.jpeg', 1),
(2, 2, 'Dompet Menawan', 49, 100000, '1000', 'Dompet yang sangat menawan dari sisi bentuk', 'dompet-1.png', 1),
(3, 1, 'Tas Gokil', 52, 20000, '1000', 'Tas yang gokil sekali untuk digunakan', 'tas-2.jpg', 1),
(4, 2, 'Dompet Keren', 54, 15000, '1500', 'Dompet keren yang diproduksi dari daur ulang limbah dan sampah', 'dompet-2.jpg', 1),
(5, 1, 'Tas Sip', 46, 40000, '1300', 'Dompet yang sangat sip jika digunakan', 'tas-3.jpg', 1),
(6, 2, 'Dompet Hebat', 50, 35000, '1400', 'Dompet yang sangat hebat dari sisi kekuatan', 'dompet-3.jpg', 1),
(7, 1, 'album', 20, 200000, '350', 'apa yaa', 'Form_Permintaan_Tenaga_Magang_Jan-_2023_DnA_Body_P4.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id` int(16) NOT NULL,
  `Id_Divisi` int(25) NOT NULL,
  `Id_Departemen` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `seksi` varchar(100) NOT NULL,
  `NPK` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `weight_or` int(100) NOT NULL,
  `weight_non` int(100) NOT NULL,
  `weight_b3` int(100) NOT NULL,
  `total_berat` int(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id`, `Id_Divisi`, `Id_Departemen`, `nama`, `area`, `seksi`, `NPK`, `tanggal`, `weight_or`, `weight_non`, `weight_b3`, `total_berat`, `status`) VALUES
(3, 1, 2, 'Amanda Rifat', 'welding', '5s', 24371, '2023-02-20 17:00:00', 35, 20, 30, 80, 1),
(4, 2, 2, 'Alwi Hanan', 'welding', '5s', 81273, '2023-02-20 17:00:00', 25, 35, 30, 90, 1),
(5, 2, 1, 'Wendy', 'welding', '5s', 12635, '2023-02-20 17:00:00', 30, 35, 45, 110, 1),
(6, 2, 2, 'Yohan', 'welding', '5s', 25372, '2023-02-21 17:00:00', 20, 35, 30, 85, 1),
(7, 1, 1, 'Cindy', 'welding', '5s', 25372, '2023-02-22 05:29:45', 30, 30, 30, 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `konten` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `kode`, `konten`) VALUES
(1, 'logo', 'logosdg-dark.png'),
(2, 'tentang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'icon_1', 'mdi mdi-account-outline'),
(4, 'icon_2', 'mdi mdi-google-maps'),
(5, 'icon_3', 'mdi mdi-account-group-outline'),
(6, 'judul_1', 'Kenapa Harus Kami?'),
(7, 'judul_2', 'Ada Dimana Saja?'),
(8, 'judul_3', 'Bagaimana Cara Bergabung?'),
(9, 'isi_1', 'Kami berusaha senantiasa menjaga lingkungan yang berkelanjutan dengan masyarakat sekitar dan bernilai tambah.'),
(10, 'isi_2', 'Kami hadir menjangkau berbagai daerah dengan cabang yang banyak tersebar, kunjungi letak cabang kami sekarang juga.'),
(11, 'isi_3', 'Bergabunglah bersama kami dengan membuat akun di website kami, dan bersama kita kembangkan komunitas sekitar.'),
(12, 'slider_1', 'slider_1.jpg'),
(13, 'slider_2', 'slider_21.jpg'),
(14, 'slider_3', 'slider_3.jpg'),
(15, 'deskripsi', 'Sustainable Development Goals (SDGs) adalah pembangunan yang menjaga peningkatan kesejahteraan ekonomi masyarakat secara berkesinambungan, pembangunan yang menjaga keberlanjutan kehidupan sosial masyarakat, pembangunan yang menjaga kualitas lingkungan hidup serta pembangunan yang menjamin keadilan dan terlaksananya tata kelola yang mampu menjaga peningkatan kualitas hidup dari satu generasi ke generasi berikutnya.'),
(16, 'telepon', '021 1111 2222 3333'),
(17, 'email', 'sdgs@gmail.com'),
(18, 'alamat_laporan', 'Jl. Haji Nawi No 293<br>\r\nKelurahan Rawa Jati, Kecamatan Rawa Bunga<br>\r\nKota Administrasi Jakarta Selatan<br>\r\nDKI Jakarta 13923');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `Id_Departemen` int(25) NOT NULL,
  `Id_Divisi` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `No_NPK` varchar(14) NOT NULL,
  `foto_profil` text DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `Id_Departemen`, `Id_Divisi`, `email`, `No_NPK`, `foto_profil`, `username`, `password`, `role`, `status`) VALUES
(1, 'Adminudin', 1, 2, 'admin@gmail.com', '12345', NULL, 'admin', 'admin', 3, 1),
(2, 'Anggota', 2, 1, 'anggota@gmail.com', '12346', 'user-4.jpg', 'anggota', 'anggota', 4, 1),
(18, 'aryobimo', 2, 1, 'bimo@gmail.com', '10927', NULL, 'bimo', 'bimo', 4, 1),
(19, 'ghina', 1, 2, 'ghina@gmail.com', '89753', NULL, 'ghina', 'ghina', 3, 1),
(20, 'Salwa Amalia', 2, 2, 'salwa@gmail.com', '98745', 'user-11.jpg', 'salwa', 'salwa', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_Divisi` (`Id_Divisi`),
  ADD KEY `Id_Departemen` (`Id_Departemen`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`Id_Departemen`);

--
-- Indexes for table `detail_pemasukan_sampah`
--
ALTER TABLE `detail_pemasukan_sampah`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`Id_Divisi`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_sampah`
--
ALTER TABLE `kategori_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsistensi`
--
ALTER TABLE `konsistensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_Divisi` (`Id_Divisi`),
  ADD KEY `Id_Departemen` (`Id_Departemen`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `Id_Departemen` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `Id_Divisi` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
