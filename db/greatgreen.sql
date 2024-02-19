-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2022 pada 17.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

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
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `gambar` text DEFAULT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `nama`, `rekening`, `gambar`, `status`) VALUES
(1, 'Bank Permata', '123456789', 'permata.png', 1),
(2, 'Bank Mandiri', '98798713', 'mandiri.png', 1),
(3, 'Bank BCA', '6900923892', 'bca.png', 1),
(4, 'Bank BRI', '2628190289', 'bri.png', 1),
(5, 'Bank BNI', '0921490239', 'bni.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text DEFAULT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `gambar`, `status`) VALUES
(1, 'Membuat Vas Bunga dari Botol Plastik, Mudah Dibuat di Rumah', '<p>Botol plastik merupakan salah satu sampah yang sulit terurai. Karena itulah, sebisa mungkin kita mendaur ulang atau mengkreasikan botol plastik ini menjadi barang yang bermanfaat.</p>\r\n\r\n<p>Nah, Kalian bisa mengkreasikan botol plastik menjadi berbagai macam barang lho, seperti vas bunga. Vas dari botol plastik ini bisa bermanfaat untuk Bunda yang hobi mengoleksi bunga potong.</p>\r\n\r\n<p>Alat yang diperlukan:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Botol plastik berukuran sedang atau besar</p>\r\n	</li>\r\n	<li>\r\n	<p>Penggaris</p>\r\n	</li>\r\n	<li>\r\n	<p>Pulpen atau spidol</p>\r\n	</li>\r\n	<li>\r\n	<p>Gunting</p>\r\n	</li>\r\n	<li>\r\n	<p>Cutter</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Cara membuat:</p>\r\n\r\n<p>1. Potong botol plastik menjadi dua bagian. Bagian bawah botol nantinya akan kita gunakan untuk membuat vas bunga.</p>\r\n\r\n<p>2. Buat garis vertikal dengan jarak dan panjang yang sama di sekeliling botol. Gunting rapi garis tersebut.</p>\r\n\r\n<p>3. Setelah selesai membuat potongan, letakkan botol terbalik. Tekan kuat sehingga potongan tadi melebar.</p>\r\n\r\n<p>4. Tekuk potongan ke arah samping secara perlahan. Selipkan ujung potongan ke sisi dalam bagian di sebelahnya.</p>\r\n\r\n<p>5. Lakukan pada seluruh potongan di sekeliling botol plastik.</p>\r\n\r\n<p>Vas bunga yang cantik dari botol plastik sudah bisa digunakan deh.</p>\r\n', 'vas bunga.jpg', 1),
(2, 'Cara Membuat Tas kecil Dari Bungkus kopi', '<p><small>Sebelum ke cara membuat tas dari bungkus kopi, siapkan alat dan bahan yang diperlukan terlebih dulu ya. Bahan utamanya yang merupakan bungkus kopi juga tergantung dari bentuk tas yang kamu inginkan. Kalau ukurannya makin besar, berarti butuh lebih banyak bungkus kopi.</small></p>\r\n\r\n<p><small>Alat dan Bahan:</small></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><small>Bungkus kopi instan, kalau kamu ingin membuat tas yang ukurannya kecil, seenggaknya siapkan 100 bungkus.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Kain furing yang bisa juga diganti kain polos. Nantinya dipakai untuk alas bagian dalam tas.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Gunting untuk memotong beberapa bagian, benang dan sebagainya.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Benang dan jarum untuk menyatukan bungkus kopi.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Penggaris untuk mengukur seberapa besar sih tas yang mau kamu buat. Selain itu, penggaris juga bisa jadi alat bantumu memotong bungkus kopi agar sama rata.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Risleting ukuran standar untuk pengait tas bungkus kopi kalau sudah siap pakai.</small></p>\r\n	</li>\r\n</ol>\r\n\r\n<p><small>Jika semua alat dan bahan sudah tersedia, sekarang saatnya kamu beraksi membuat tas yang ramah lingkungan ini.</small></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><small>Pertama, siapkan bungkus kopi instan merek apa saja lalu bersihkan bungkus kopi dari sisa bubuk dengan air lalu dikeringkan. Kamu bisa menjemur atau lap pakai kain bersih.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Gunting bagian bawah bungkus kopi. Oh iya, kamu bisa mengkombinasikan bungkus kopi atau ingin pakai satu merk saja, sesuai selera.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Gunting bungkus kopi menjadi dua sama rata sehingga jadi dua bagian.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Langkah selanjutnya pada cara membuat tas dari bungkus kopi adalah melipat bungkus 1 cm ke dalam di ujung atas dan bawahnya. Jadi lebar lipatan sebesar 2 cm.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Kemudian, anyam bungkus kopi tadi sehingga berbentuk baling-baling. Kalau kamu menyediakan 100 bungkus untuk tas ukuran kecil, nanti jadi 200 lipayan bungkus kopi. Oh iya, kamu bisa pakai bagian dalam atau luar bungkus kopi loh! Sesuai selera.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Nah, kerangka tas dari anyaman sudah jadi. Saatnya kamu merapikan dengan menjahit bagian atas tasnya supaya anyaman nggak gampang lepas.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Terus, tambahkan kain furing atau kain polos di dalam tas yang tidak terlalu tipis.</small></p>\r\n	</li>\r\n	<li>\r\n	<p><small>Sentuhan terakhir, tambahin risleting untuk perekat tas yang sudah siap kamu pakai.</small></p>\r\n	</li>\r\n</ul>\r\n', 'tas kecil.jpg', 1),
(6, 'Membuat Vas Bunga dari botol Bekas', '<p>Botol plastik merupakan salah satu sampah yang sulit terurai. Karena itulah, sebisa mungkin kita mendaur ulang atau mengkreasikan botol plastik ini menjadi barang yang bermanfaat.</p>\r\n\r\n<p>Nah, Kalian bisa mengkreasikan botol plastik menjadi berbagai macam barang lho, seperti vas bunga. Vas dari botol plastik ini bisa bermanfaat untuk Bunda yang hobi mengoleksi bunga potong.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Alat dan Bahan</p>\r\n\r\n<p>Berikut adalah alat dan bahan yang harus disiapkan sebelum membuat vas bunga dari botol bekas:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Botol air mineral 1,5 liter.</p>\r\n	</li>\r\n	<li>\r\n	<p>Spidol biasa dan spidol permanen.</p>\r\n	</li>\r\n	<li>\r\n	<p><em>Cutter.</em></p>\r\n	</li>\r\n	<li>\r\n	<p>Gunting.</p>\r\n	</li>\r\n	<li>\r\n	<p>Cat akrilik.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kuas.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tanah.</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"https://berita.99.co/tanaman-merambat-tren-2021/\" target=\"_blank\">Tanaman hias favorit</a>&nbsp;kamu.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>2. Cara Membuat Pot</p>\r\n\r\n<p>Perhatikanlah langkah berikut untuk membuat kerajinan pot bunga dari botol bekas.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Buanglah label merek pada botol air mineral dan bersihkan botol.</p>\r\n	</li>\r\n	<li>\r\n	<p>Potong bagian atas botol agar tanah bisa dimasukkan ke dalam botol.</p>\r\n	</li>\r\n	<li>\r\n	<p>Menggunakan spidol, gambarlah bentuk wajah, bunga, atau apa pun sesuai keinginan kamu.</p>\r\n	</li>\r\n	<li>\r\n	<p>Potonglah botol menggunakan gunting, sesuai dengan pola yang telah digambar.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika ada bagian yang agak sulit dipotong, kamu bisa menggunakan&nbsp;<em>cutter</em>&nbsp;agar potongan lebih rapi.</p>\r\n	</li>\r\n	<li>\r\n	<p>Setelah pola dibuat secara rapi, hapuslah tanda yang kamu buat dengan spidol tadi.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jangan lupa membuat tempat resapan air dengan cara melubangi bagian bawah botol.</p>\r\n	</li>\r\n	<li>\r\n	<p>Warnailah botol dengan cat akrilik.</p>\r\n	</li>\r\n	<li>\r\n	<p>Agar warna botol rapi dan terlihat impresif, lebih baik mewarnai botol dengan warna dasar terlebih dulu, semisal putih atau kuning.</p>\r\n	</li>\r\n	<li>\r\n	<p>Setelah mewarnai botol dengan warna dasar, kamu bisa menimpanya dengan berbagai warna sesuai dengan kreativitas kamu.</p>\r\n	</li>\r\n	<li>\r\n	<p>Biarkanlah botol hingga mengering.</p>\r\n	</li>\r\n	<li>\r\n	<p>Setelah mengering, kamu bisa menambah hiasan atau gambar pada botol menggunakan spidol.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kemudian, tunggulah botol hingga mengering seutuhnya.</p>\r\n	</li>\r\n	<li>\r\n	<p>Terakhir, setelah kering, masukkanlah tanah ke dalam pot.</p>\r\n	</li>\r\n</ul>\r\n', 'vas bunga botol.jpg', 1),
(7, 'Mainan Pesawat dari Kardus', '<p>Cara membuat mainan anak dari barang bekas kardus nampaknya penting diketahui oleh orang tua masa kini. Pasalnya, kehidupan anak zaman sekarang hampir tak pernah lepas dari gadget, tiada hari tanpa main game atau nonton Youtube. Kebiasaan seperti itu bukan tidak mungkin akan membuat anak jadi anti sosial dan mempengaruhi penglihatan anak.</p>\r\n\r\n<p>Bahan-bahan:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1 kotak kardus ukuran sedang</p>\r\n	</li>\r\n	<li>\r\n	<p>Selotip</p>\r\n	</li>\r\n	<li>\r\n	<p>Gunting atau cutter</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Cara membuat:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Potong satu sisi penutup kardus penuh dan setengah dari kedua penutup dan rekatkan sisi yang tersisa.</p>\r\n	</li>\r\n	<li>\r\n	<p>Balikkan kotak dan potong keempat tutupnya. Bagian tutup ini akan digunakan untuk membuat sayap, baling-baling, dan ekor pesawat.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lalu, potong lubang lengan dari kotak. Gambar setengah lingkaran di dekat sisi yang direkatkan dan potong. Ulangi pada sisi yang lain.</p>\r\n	</li>\r\n	<li>\r\n	<p>Selanjutnya buat celah di kedua sisi kotak untuk&nbsp;<a href=\"https://www.orami.co.id/magazine/resep-sayap-ayam-bumbu-thai-gurih-yang-cocok-untuk-makan-malam\">bagian sayap</a>.</p>\r\n	</li>\r\n	<li>\r\n	<p>Gambar dan gunting bentuk sayap dari tutupnya dan masukkan ke dalam celah. Balik dan rekatkan agar tidak jatuh.</p>\r\n	</li>\r\n	<li>\r\n	<p>Untuk membuat ekor, ambil selembar kardus berukuran besar dan buat celah di tengahnya. Masukkan kardus berukuran kecil ke dalam celah.</p>\r\n	</li>\r\n	<li>\r\n	<p>Untuk membuat baling-baling, ambil kardus berbentuk&nbsp;<a href=\"https://www.orami.co.id/magazine/rumus-luas-persegi-panjang\">persegi panjang</a>, rapikan ujung bawahnya dan rekatkan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Buat dua lingkaran dengan ukuran berbeda. Tempatkan baling-baling pada lingkaran yang lebih besar dan rekatkan dengan lem.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lalu tempelkan lingkaran yang lebih kecil di atas lingkaran yang lebih besar.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tempelkan baling-baling ke kotak. Pesawat dari kardus sudah siap.</p>\r\n	</li>\r\n</ol>\r\n', 'mainan pesawat.jpg', 1),
(8, 'Membuat Mainan dari Kardus', '<p>Cara membuat mainan anak dari kardus barang bekas&nbsp;nampaknya penting diketahui oleh orang tua masa kini. Pasalnya, kehidupan anak zaman sekarang hampir tak pernah lepas dari gadget, tiada hari tanpa main game atau nonton Youtube. Kebiasaan seperti itu bukan tidak mungkin akan membuat anak jadi anti sosial dan mempengaruhi penglihatan anak.</p>\r\n\r\n<p>Bahan-bahan:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1 kotak kardus ukuran sedang</p>\r\n	</li>\r\n	<li>\r\n	<p>Selotip</p>\r\n	</li>\r\n	<li>\r\n	<p>Gunting atau cutter</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Cara membuat:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Potong satu sisi penutup kardus penuh dan setengah dari kedua penutup dan rekatkan sisi yang tersisa.</p>\r\n	</li>\r\n	<li>\r\n	<p>Balikkan kotak dan potong keempat tutupnya. Bagian tutup ini akan digunakan untuk membuat sayap, baling-baling, dan ekor pesawat.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lalu, potong lubang lengan dari kotak. Gambar setengah lingkaran di dekat sisi yang direkatkan dan potong. Ulangi pada sisi yang lain.</p>\r\n	</li>\r\n	<li>\r\n	<p>Selanjutnya buat celah di kedua sisi kotak untuk&nbsp;<a href=\"https://www.orami.co.id/magazine/resep-sayap-ayam-bumbu-thai-gurih-yang-cocok-untuk-makan-malam\">bagian sayap</a>.</p>\r\n	</li>\r\n	<li>\r\n	<p>Gambar dan gunting bentuk sayap dari tutupnya dan masukkan ke dalam celah. Balik dan rekatkan agar tidak jatuh.</p>\r\n	</li>\r\n	<li>\r\n	<p>Untuk membuat ekor, ambil selembar kardus berukuran besar dan buat celah di tengahnya. Masukkan kardus berukuran kecil ke dalam celah.</p>\r\n	</li>\r\n	<li>\r\n	<p>Untuk membuat baling-baling, ambil kardus berbentuk&nbsp;<a href=\"https://www.orami.co.id/magazine/rumus-luas-persegi-panjang\">persegi panjang</a>, rapikan ujung bawahnya dan rekatkan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Buat dua lingkaran dengan ukuran berbeda. Tempatkan baling-baling pada lingkaran yang lebih besar dan rekatkan dengan lem.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lalu tempelkan lingkaran yang lebih kecil di atas lingkaran yang lebih besar.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tempelkan baling-baling ke kotak. Pesawat dari kardus sudah siap.</p>\r\n	</li>\r\n</ol>\r\n', 'mainan.jpg', 1),
(9, 'Lampu Hias dari Toples Kaca', '<p>Cara membuat hiasan dari kaca yang satu ini sangat mudah. Pertama-tama kamu hanya perlu menyiapkan toples kaca yang agak tinggi (jangan yang ceper seperti toples kue), kawat, tali rami, gelas kaca trasparan ukuran tanggung, dan manik-manik kaca warna.</p>\r\n\r\n<p>Kamu bisa menggunakan warna apapun yang kamu suka. Ukuran manik-manik pun bisa kamu sesuaikan dengan seleramu.</p>\r\n\r\n<p>Kalau semua bahan sudah siap, mulailah dengan memasukkan gelas kaca ke dalam toples. Letakkan gelasnya di tengah-tengah, lalu gunakan manik-manik kaca warna untuk mengisi ruang antara gelas dan toples.</p>\r\n\r\n<p>Posisikan manik-manik sampai menutupi gelas.</p>\r\n\r\n<p>Terakhir, gunakan tali rami untuk menutupi kawat di bagian leher toples kaca.</p>\r\n\r\n<p>Jika ingin menggunakannya, kamu hanya perlu menaruh lilin di dalamnya saat malam hari dan lampu romantis dari toples kaca pun sudah jadi. Kamu bisa memajang kerajinan kaca ini &nbsp;di ruang keluarga, teras, ataupun balkon dekat taman rumahmu.</p>\r\n', 'lampu hias.jpg', 1),
(10, 'Botol Kaca Decoupage', '<p>Decoupage adalah seni menghias benda-benda seperti piring keramik, gelas kaca, bahkan tas jinjing dengan menggunakan potongan kertas atau kain yang bermotif-motif. Di artikel ini, kita akan membuat hiasan kaca decoupage menggunakan botol.</p>\r\n\r\n<p>Bahan yang perlu disiapkan adalah botol kaca, cat, serta kertas kado dengan berbagai motif.</p>\r\n\r\n<p>Pertama-tama cat botol kosong sampai rata. Cat ini akan digunakan sebagai background untuk motifnya nanti, jadi lebih baik dicat polos saja. Kamu bisa memilih warna sesukamu. Cat permukaan luarnya dengan rata.</p>\r\n\r\n<p>Sambil mengeringkan cat pada botol, mulailah memotong motif-motif dari kertas kado yang sudah kamu siapkan. Kamu bisa menggunakan motif apapun yang tersedia. Bisa motif bunga, pita, atau motif-motif lainnya.</p>\r\n\r\n<p>Setelah kamu memastikan cat di botol sudah kering sempurna, sekarang saatnya berkreasi. Tempelkan motif-motif yang sudah kamu potong tadi ke badan botol.</p>\r\n\r\n<p>Lem yang paling bagus untuk decoupage adalah merk Mod Podge (seperti pada gambar), tapi sayangnya lem ini masih sulit dicari di Indonesia. Sebagai gantinya kamu bisa kok menggunakan lem FOX atau lem PVAC.</p>\r\n\r\n<p>Setelah kamu puas menata motif-motifnya kamu juga bisa menambahkan vernis khusus decoupage jika ingin hasil karyamu tahan lama.</p>\r\n\r\n<p>Oleskan cairan vernis setelah karya decoupage-mu selesai. Dijamin botol kaca tersebut akan tetap terlihat bagus walaupun sudah bertahun-tahun.</p>\r\n', 'decoupage.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
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
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id`, `nama`, `latitude`, `longitude`, `alamat`, `pic`, `kontak`, `status`) VALUES
(1, 'GG Jakarta', '-6.154664749756271', '106.88605704118461', 'Jl. Jaksa No 40, Kel. Sunter Agung, Jakarta Utara 21312', 'Marfuah Yasir', '08123812334', 1),
(2, 'GG Bekasi', '-6.2355404086839785', '106.99672567267197', 'Jl Raya Bekasi Km 20 No 19, Kota Bekasi, Jawa Barat 12213', 'Anto Nursalim', '08213122314', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemasukan_sampah`
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
-- Dumping data untuk tabel `detail_pemasukan_sampah`
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
(22, '251120221PYRBYNC', 5, 3000, 28, 84000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
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
-- Dumping data untuk tabel `detail_penjualan`
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
(15, '20221125RY98LMQ3KXID', 2, 1, 100000, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `titik_lokasi` int(15) DEFAULT NULL,
  `telepon` varchar(13) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id`, `nama`, `alamat`, `titik_lokasi`, `telepon`, `status`) VALUES
(1, 'GreatGreen Bekasi', 'Jalan Raya Bekasi Km. 18, Bekasi, Jawa Barat', 115, '081234567890', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`, `deskripsi`, `status`) VALUES
(1, 'Tas', 'Tas merupakan alat untuk menyimpan barang bawaan', 1),
(2, 'Dompet', 'Dompet adalah alat untuk menyimpan uang', 1),
(3, 'Storage', 'Tempat penyimpanan barang', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_sampah`
--

CREATE TABLE `kategori_sampah` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(16) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_sampah`
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
-- Struktur dari tabel `pelatihan`
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
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `nama`, `tema`, `deskripsi`, `tanggal`, `jam`, `tempat`, `gambar`, `mentor`, `buka_tutup`, `status`) VALUES
(1, 'Merangkai Bunga Sampah', 'Bersama menjadikan sampah wangi seperti bunga', 'Pelatihan membuat bunga yang terbuat dari sampah plastik, dengan mendaur ulang sampah plastik kita dapat membuat bumi semakin nyaman untuk ditinggali', '2022-11-30', '11:20', 'Jakarta', 'pelatihan bunga sampah.jpg', 'Haji Shodiq', 1, 1),
(2, 'Membuat Dompet Dari Sedotan', 'Dari Sedotan Jadi Kebanggaan', 'Membuat dompet dari sedotan bukanlah hal yang sulit, jika diajarkan oleh orang yang kompeten. Mari bergabung dipelatihan ini dan dapatkan ilmu yang bermanfaat', '2022-11-25', '13:30', 'Jakarta', 'pelatihan dompet sampah.JPG', 'Agus Syamsuddin', 1, 1),
(3, 'Membuat kerajinan dari berbagai kertas', 'Memanfaatkan kertas  bekas', 'Perlu mempersiapkan barang yang harus dibawa', '2022-12-08', '08:30', 'Gedung A, Jakarta', 'kerajinan kertas.jpg', 'Hari Kusuma', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan_sampah`
--

CREATE TABLE `pemasukan_sampah` (
  `id_pemasukan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan_sampah`
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
(12, 2, '251120221PYRBYNC', '2022-11-25 03:59:20', 252000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
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
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `kode_penjualan`, `id_user`, `nama_penerima`, `telepon`, `email`, `alamat`, `kota`, `provinsi`, `kode_pos`, `kode_provinsi`, `kode_kota`, `expedisi`, `paket`, `berat`, `ongkir`, `resi`, `catatan`, `sub_total_harga`, `total_bayar`, `tanggal_order`, `estimasi_tiba`, `tanggal_tiba`, `bukti_bayar`, `nama_rek_cust`, `no_rek_cust`, `metode_bayar`, `total_dibayar`, `status`, `keterangan`) VALUES
(4, '20221021SM7RXNUFAG2L', 4, 'Panjul Sari', '081262637272', 'anggota@gmail.com', 'Jl Ruwanda No 8', 'Badung', 'Bali', '13930', 1, 17, 'jne', 'OKE', '2500', 81000, '123ADKFJDF123', NULL, 35000, 116000, '2022-10-21', '2-3 Hari', '2022-11-01', 'Tf1.jpg', 'Madara', '123123123', 2, 1231234324, 5, NULL),
(5, '2022102112ATFYGPJWNU', 4, 'Hanafi', '081262637272', 'hanafi@gmail.com', 'Jl Jatinegara Jakarta Timur No 20', 'Jakarta Timur', 'DKI Jakarta', '13930', 6, 154, 'jne', 'REG', '5500', 54000, NULL, 'Mohon segera diproses', 2055000, 2109000, '2022-10-21', '2-3 Hari', NULL, 'Tf4.jpg', 'Agus', '123123123123', 3, 2109000, 2, NULL),
(6, '20221101BZCWFORRSKJH', 4, 'Majnun', '0827123123', 'majnun@gmail.com', 'Jl Majene No 18', 'Bantul', 'DI Yogyakarta', '13930', 5, 39, 'tiki', 'ECO', '4000', 76000, NULL, 'Tak ada catatan', 50000, 126000, '2022-11-01', '4 Hari', NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL),
(7, '20221104HTUGRQ20KNTK', 4, 'Anggota', '081262637272', 'anggota@gmail.com', 'Jl Ruwanda No 8', 'Kutai Timur', 'Kalimantan Timur', '75611', 15, 216, 'pos', 'Pos Ekonomi', '2500', 184500, NULL, '', 35000, 219500, '2022-11-04', '7-14 HARI Hari', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(8, '20221118JRUISDN294IL', 14, 'Rifqih Syahrial', '081256789012', 'qihsyahrial@gmail.com', 'Jakarta Timur', 'Jakarta Timur', 'DKI Jakarta', '13930', 6, 154, 'pos', 'Pos Ekonomi', '7000', 45500, NULL, 'gapakelama', 58000, 103500, '2022-11-18', '7-14 HARI Hari', NULL, 'Tf2.jpg', 'Agus', '687687686', 2, 103500, 2, NULL),
(9, '20221118GHTYRSYEQMBI', 14, 'Rifqih Syahrial', '081256789012', 'qihsyahrial@gmail.com', 'Jakarta Timur', 'Jakarta Timur', 'DKI Jakarta', '13930', 6, 154, 'jne', 'OKE', '2500', 24000, NULL, 'oke', 35000, 59000, '2022-11-18', '2-3 Hari', NULL, 'Tf3.jpg', 'Abil', '21312312312', 1, 60000, 3, NULL),
(10, '20221125RY98LMQ3KXID', 15, 'Aurelia Agatha', '082139233822', 'aureliaagatha11@gmail.com', 'Jln stm walang jaya, Bendungan melayu utara\r\nGg Dahlia, Rt10/01 No.60', 'Jakarta Utara', 'DKI Jakarta', '14260', 6, 155, 'jne', 'OKE', '2300', 16000, '9823SIREWU32948', '', 140000, 156000, '2022-11-25', '2-3 Hari', NULL, 'Tf11.jpg', 'Aurelia Agatha', '6900527959', 3, 156000, 4, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pelatihan`
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
-- Dumping data untuk tabel `peserta_pelatihan`
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
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori_produk`, `nama`, `stok`, `harga`, `berat`, `deskripsi`, `gambar`, `status`) VALUES
(1, 1, 'Tas Mantap', 50, 14000, '2000', 'Tas yang mantap untuk penyimpanan', 'tas-1.jpeg', 1),
(2, 2, 'Dompet Menawan', 51, 100000, '1000', 'Dompet yang sangat menawan dari sisi bentuk', 'dompet-1.png', 1),
(3, 1, 'Tas Gokil', 54, 20000, '1000', 'Tas yang gokil sekali untuk digunakan', 'tas-2.jpg', 1),
(4, 2, 'Dompet Keren', 53, 15000, '1500', 'Dompet keren yang diproduksi dari daur ulang limbah dan sampah', 'dompet-2.jpg', 1),
(5, 1, 'Tas Sip', 49, 40000, '1300', 'Dompet yang sangat sip jika digunakan', 'tas-3.jpg', 1),
(6, 2, 'Dompet Hebat', 50, 35000, '1400', 'Dompet yang sangat hebat dari sisi kekuatan', 'dompet-3.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `konten` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `kode`, `konten`) VALUES
(1, 'logo', 'logo_1.svg'),
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
(13, 'slider_2', 'slider_2.jpg'),
(14, 'slider_3', 'slider_3.jpg'),
(15, 'deskripsi', 'Great Green adalah sebuah UMKM yang berfokus pada lingkungan. Bekerjasama dengan para anggota dan cabang untuk melakukan kegiatan usaha daur ulang, dan kemudian hasilnya akan dijual secara bebas kepada masyarakat.'),
(16, 'telepon', '021 1111 2222 3333'),
(17, 'email', 'greatgreen@gmail.com'),
(18, 'alamat_laporan', 'Jl. Haji Nawi No 293<br>\r\nKelurahan Rawa Jati, Kecamatan Rawa Bunga<br>\r\nKota Administrasi Jakarta Selatan<br>\r\nDKI Jakarta 13923');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `foto_profil` text DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `email`, `alamat`, `telepon`, `foto_profil`, `username`, `password`, `role`, `status`) VALUES
(1, 'Dira', 'P', '2022-09-01', 'direksi@gmail.com', 'Jl Kenangan Direksi No 9 Kota Bekasi', '081212121212', 'user-1.jpg', 'direksi', 'direksi', 1, 1),
(2, 'Keenala', 'P', '2022-09-09', 'kepalacabang@gmail.com', 'Jl Kemakmuran Cabang No 17 Cikarang', '081233334444', 'user-2.jpg', 'kepalacabang', 'kepalacabang', 2, 1),
(3, 'Adminudin', 'L', '2022-09-16', 'admin@gmail.com', 'Jl Damar Admin No 16 Jakarta', '082323748239', 'user-3.jpg', 'admin', 'admin', 3, 1),
(4, 'Anggita', 'P', '2022-09-12', 'anggota@gmail.com', 'Jl Ruwanda No. 8, Kelurahan Rawa Bayem, Kecamatan Semper, Jakarta Utara', '081262637272', 'user-4.jpg', 'anggota', 'anggota', 4, 1),
(7, 'Marfuah A', 'P', '2022-10-04', 'marf@polman.astra.ac.id', 'Medan Jaya', '081256781111', NULL, 'admin1', 'admin1', 3, 1),
(12, 'Marzuki A', 'L', '2022-09-28', 'juki@gmail.com', 'Cakung Timur No.14, Jakarta Timur', '08123123123', NULL, 'anggota1', 'anggota1', 4, 1),
(14, 'Rifqih Syahrial', 'L', '2018-10-16', 'qihsyahrial@gmail.com', 'Jakarta Timur', '081256789012', NULL, 'rifqihsyahrial', '123', 4, 1),
(15, 'Aurelia Agatha', 'P', '2002-05-11', 'aureliaagatha11@gmail.com', 'Jln stm walang jaya, Bendungan melayu utara\r\nGg Dahlia, Rt10/01 No.60', '082139233822', 'aurel.jpg', 'aurel', 'aurel', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_pemasukan_sampah`
--
ALTER TABLE `detail_pemasukan_sampah`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_sampah`
--
ALTER TABLE `kategori_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemasukan_sampah`
--
ALTER TABLE `pemasukan_sampah`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori_produk` (`id_kategori_produk`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_pemasukan_sampah`
--
ALTER TABLE `detail_pemasukan_sampah`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_sampah`
--
ALTER TABLE `kategori_sampah`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemasukan_sampah`
--
ALTER TABLE `pemasukan_sampah`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori_produk`) REFERENCES `kategori_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
