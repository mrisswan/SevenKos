-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2022 pada 08.43
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sheptian_sikos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kos`
--

CREATE TABLE `tbl_kos` (
  `id_kos` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tipe` enum('Putri','Putra','Campur') NOT NULL,
  `fasilitas` varchar(200) NOT NULL,
  `image_header` varchar(200) NOT NULL,
  `sisa_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kos`
--

INSERT INTO `tbl_kos` (`id_kos`, `id_user`, `deskripsi`, `alamat`, `slug`, `date`, `time`, `status`, `kota`, `harga`, `nama`, `tipe`, `fasilitas`, `image_header`, `sisa_kamar`) VALUES
(1, 3, 'Batas kunjungan jam 10 malam. 1 kamar 1 penghuni tidak bisa berdua. Tidak terima pasutri. Kunci gerbang diberikan masing - masing. Tamu dilarang menginap. Pembayaran kost paling telat tanggal 5 setiap bulannya. Cuci baju sendiri / laundry. Dilarang berisik / gaduh. Tidak boleh bawa binatang peliharaan.', 'Jl.Raya Paledang Bandung No.33', 'Kost-BR-46-Pasteur-Bandung', '2022-09-05', '12:49:47', 1, 'Bandung', 500000, 'Kost BR 46 Pasteur Jawa Barat', 'Putra', '[\"Kasur\",\"Lemari Baju\",\"Kursi\",\"Bantal\"]', 'kos13.jpg', 2),
(2, 3, 'Sekamar berdua 1.325.000/bulan. Harga sewa kamar lainnya 1.175.000/ bulan (Ada air panas) atau bila sekamar berdua menjadi 1.575.000/bulan.', 'Jl. Permai No.17 Cigadung Cibeunying Kaler Kota Bandung ', 'Kost-Cibeunying-Permai', '2022-09-05', '11:29:57', 1, 'Bandung', 700000, 'Kost Cibeunying Permai', 'Putra', '[\"Kasur\",\"Kursi\",\"Kipas Angin\"]', 'kos2.jpg', 2),
(3, 3, 'Wifi 24 jam unlimited, termasuk listrik (bawa dispenser tambah 50rb/bulan) , tersedia cuci setrika', 'Jl.Anjani Sukasari Bandung No.90', 'guest-house-anjani-sukasari-bandung', '2022-09-05', '13:33:59', 1, 'Bandung', 600000, 'Guest House Anjani Sukasari', 'Putra', '[\"Guling\",\"Cermin\",\"Kamar Mandi\"]', 'kos12.jpg', 0),
(4, 6, '10 menit Ber jalan kaki ke UNPAR ,TV Cable, Wifi 24 Jam, Fasilitas Kost Bersih, Satpam 24 Jam, CCTV 24 Jam, Cleaning Service Terlatih,', 'Jl.Cidadap No.1', 'kost-platinum-cidadap-bandung', '2022-09-05', '13:39:59', 1, 'Bandung', 900000, 'Kost Platinum Cidadap', 'Putra', '[\"Kasur\",\"Lemari Baju\",\"Kursi\"]', 'kos14.jpg', 3),
(5, 7, 'fasilitas kamar standar: wifi, kasur, lemari, gantungan baju, cermin, ember, gayung, dllrequest tambahan fasilitas seperti : tv, saluran tv cable, ac, air panas (harga berbeda)listrik token\r\nup grade untuk penambahan fasilitas ac, air panas, tv cable disesuaikan dengan request fasilitas yabgbdiinginkan penyewa', 'Jl. Cibiru No.900', 'kost-bowie-cibiru-bandung', '2022-09-05', '13:34:09', 1, 'Surabaya', 1000000, 'Kost Bowie Cibiru', 'Putra', '[\"Jendela\",\"Meja\",\"Ventilasi\"]', '2.jpg', 5),
(6, 8, 'Bayar 2 bulan di awal. Untuk selanjutnya bisa bayar bulanan sebelum tgl 5 di awal bulan.Bisa berdua dalam 1 kamar. Biaya kos masing2 rp 750 ribu per bulan.Batas kunjungan jam 9 malam.Batas pergi jam 11 malam, sekali2 bisa lebih malam dengan perjanjian dahulu dengan pengelola', 'Jl. Sukaluyu No.222', 'kost-sapujagad-2-sukaluyu-bandung', '2022-09-05', '13:34:19', 1, 'Surabaya', 850000, 'Kost Sapujagad 2 Sukaluyu', 'Putra', '[\"Kasur\",\"Lemari Baju\",\"Kursi\"]', '3.jpg', 1),
(7, 9, 'Dekat dengan telkom university. Depan Lapangan Bola (luas)AmanBebas BanjirDekat Kampus Telkom University', 'Jl. Wisma No.88', 'kost-wisma-lentera-bandung', '2022-09-05', '13:34:29', 1, 'Bandung', 1100000, 'Kost Wisma Lentera', 'Putra', '[\"Lemari Baju\",\"Kursi\"]', '4.jpg', 2),
(8, 10, 'Dilarang melakukan tindakan yg melanggar norma-norma kesusilaan. Harga kosan sudah termasuk biaya laundry 20 Kg/bulan, 5 Kg/minggu.Jam check out maksimal 13.00 , akan dikenakan extra time 25rbu/6 jam. Harga sewa tergantung kamar yg dipilih, dan fasilitas yg di ambil', 'Jl. Rancasari No.88', 'kost-pondok-mars-barat-iii-no-8-tipe-b-rancasari-bandung', '2022-09-05', '13:34:37', 1, 'Yogyakarta', 1500000, 'Kost Pondok Mars Barat III No. 8 Tipe B Rancasari', 'Putra', '[\"Kipas Angin\",\"Guling\",\"Cermin\"]', '6.JPG', 2),
(9, 11, 'biaya tambahan internet Rp. 50.000', 'Jl. Subur Coblong No.21', 'kost-sadang-subur-i-coblong-bandung', '2022-09-05', '13:34:45', 1, 'Yogyakarta', 550000, 'Kost Sadang Subur I Coblong', 'Putra', '[\"Ventilasi\",\"Kipas Angin\",\"Guling\",\"Cermin\"]', '7.jpg', 4),
(10, 12, 'Nyaman,,aman,,cocok untuk mahasiswa dan pekerja. sebagian besar bangunan baru jadi. byr kosan 1 thn cash byr hanya 11 bulan saja.dan kost ini dekat dengan kampus UPI,UIN, STIKES BAKTI KENCANA, bisa ditempuh dengan berjalan kaki tidak perlu naik ojek bagi yang tdk membawa kendaraan, karena jaraknya yg sangat dekat dengan jalan raya. Pemilik kos rumahnya di depan kosan yang ada gambar burung dan rusa di temboknya', 'Jl. Cibiru No.21', 'kost-pondok-jati-cibiru-bandung', '2022-09-05', '13:34:52', 1, 'Surabaya', 750000, 'Kost Pondok Jati Cibiru ', 'Putra', '[\"Lemari Baju\",\"Kursi\",\"Bantal\"]', '8.jpg', 0),
(11, 13, 'Angkutan umum .Dkt jalan Besar,sirkulasi udara bagus', 'Jl. Sukasari No.121', 'kost-niji-house-sukasari-bandung', '2022-09-05', '13:35:03', 1, 'Jakarta', 500000, 'Kost Niji House Sukasari', 'Putra', '[\"Lemari Baju\",\"Kursi\",\"Bantal\"]', '9.JPG', 3),
(12, 14, 'Fasilitas:-Kamar mandi di dalam-Listrik token masing-masing kamar-Tidak ada tagihan sampah dan air tiap bulan nya-Antena TV masing-masing kamar-Tersedia warung kebutuhan sehari-hari (sembako, pulsa, tiken listrik, galon, dll)-Dekat warung nasi dan tempat makan -Dekat dengan minimarket-Dekat dengan jalan raya-Ke kampus UIN tinggal jalan.', 'Jl. Cibeurem No.812', 'kost-nyaman-cibeurem-bandung', '2022-09-05', '13:36:14', 1, 'Jakarta', 650000, 'Kost Nyaman Cibeurem', 'Putra', '[\"Cermin\",\"Kamar Mandi\"]', '10.jpg', 1),
(13, 15, 'Design Kamar Tidur Minimalis, Perlengkapan Kamar Mandi sudah Tersedia kasur Springbed,Meja belajar, Kursi, Lemari baju, Kamar Mandi di dalam, Lengkap dengan air Panas, kloset duduk dan wastafelJaringan Internet khusus Penghuni 24 JamJaringan TV kabel,Cleaning service khusus kamar di bersihkan seminggu 2 kali,Cuci Baju dan Setrika 8 potong /2 hari sekali , Tersedia ruang belajar yang luas dan nyaman, Tersedia parkir mobil dan motor', 'Jl. Peta 90', 'kost-amara-residence-bandung', '2022-09-05', '13:36:26', 1, 'Jakarta', 450000, 'Kost Amara Residence', 'Putra', '[\"Ventilasi\",\"Kipas Angin\"]', '11.jpg', 0),
(14, 16, 'Harga sudah termasuk listrik. Bila sekamar berdua dikenai tambahan 500ribu. Tersedia harga 1,6juta (ukuran kamar lebih kecil).', 'Jl. Tubagus Ismanil No.90', 'kost-tipe-a-tubagus-ismail-depan-no-90-bandung', '2022-09-05', '13:36:48', 1, 'Surabaya', 950000, 'Kost Tipe A Tubagus Ismail Depan No. 90', 'Putra', '[\"Bantal\",\"Jendela\",\"Meja\"]', '12.jpg', 1),
(15, 17, 'Batas jam berkunjung sampai jam 10. Harga sudah termasuk listrik', 'Jl. Kosambi No.18', 'kost-wartawan-18-bandung', '2022-09-05', '13:37:01', 1, 'Jakarta', 1600000, 'Kost wartawan 18', 'Putra', '[\"Jendela\",\"Meja\",\"Ventilasi\",\"Kipas Angin\"]', '13.jpg', 1),
(16, 18, 'Harga sudah termasuk listrik dan air. Free Nasi putih malam saja. Sekamar berdua tambah 300.000/bulan.', 'Jl. Ciheulang No.235', 'kost-terusan-ciheulang-no-235-b-type-a-coblong-bandung', '2022-09-05', '13:37:12', 1, 'Jakarta', 1700000, 'Kost Terusan Ciheulang No. 235 B Type A Coblong', 'Putra', '[\"Meja\",\"Ventilasi\",\"Kipas Angin\",\"Guling\"]', '14.jpg', 2),
(17, 19, 'Jam berkunjung sampai jam 10 malam. Tamu lawan jenis tidak boleh menginap,jika berkunjung seperlunya saja. Harga sudah termasuk listrik. Biaya tambahan 50rb jika bawa tv & dispenser. Sekamar berdua biaya jadi 600rb/bulan.', 'Jl. Antanan 1', 'kost-antanan-1-bandung', '2022-09-05', '13:37:21', 1, 'Yogyakarta', 1300000, 'Kost Antanan 1', 'Putra', '[\"Jendela\",\"Meja\",\"Ventilasi\"]', '15.jpg', 1),
(18, 20, 'Semua kamar kost dan paviliun baru selesai direnovasi dan di cat ulang. Tersedia 4 kamar kost dan 3 Paviliun. Kamar kost berada di lantai atas dg fasilitas 2 (dua) kamar mandi luar dan 1 (satu) pantry utk dipakai bersama. Untuk paviliun berada di lantai bawah, masing-masing memiliki dua ruangan/kamar, kamar mandi dalam dan pantry.', 'Jl. Dago No.87', 'kost-dan-paviliun-dago-cintawangi-bandung', '2022-09-05', '13:37:30', 1, 'Yogyakarta', 1050000, 'Kost dan Paviliun Dago Cintawangi', 'Putra', '[\"Lemari Baju\",\"Kursi\",\"Bantal\",\"Jendela\"]', '16.jpg', 4),
(19, 21, 'Jam malam sampai pukul 22.00. Harga sudah termasuk listrik dan air. Free air minum. Free Laundry 4 potong. Parkir mobil 150.000/bulan (Free cuci mobil 2-3x)', 'Jl. Coblong No.6', 'kost-yayu-no16-type-b-coblong-bandung', '2022-09-05', '13:37:42', 1, 'Yogyakarta', 1400000, 'Kost Yayu No.16 Type B Coblong', 'Putra', '[\"Kursi\",\"Bantal\",\"Jendela\",\"Meja\",\"Kamar Mandi\"]', '18.jpg', 4),
(20, 22, 'Harga sudah termasuk listrik, Wifi-Internet, pembayaran bisa perbulan, Laundri 20kg/bulan, batas bertamu jam 22.00 WIB', 'Jl. Sukajadi No.23', 'kost-light-home-sukajadi-bandung', '2022-09-05', '13:37:52', 1, 'Jakarta', 2000000, 'Kost Light Home Sukajadi', 'Putra', '[\"Kursi\",\"Bantal\",\"Jendela\",\"Meja\",\"Ventilasi\",\"Kipas Angin\"]', '20.jpg', 4),
(21, 23, '. Batasan Kunjungan Tamu : -*. Harga Termasuk listrik : belum*. Biaya tambahan untuk parkir mobil : Tidak ada biaya tambahan*. Ada Cleaning Room ? : -*. Ada Fasilitas laundry? : -*. Akses kunci 24 jam? : Ya, penghuni diberikan kunci gerbang*. WIFI memakai sistem voucer? : ada Wifi*. Fasilitas dapur, gas harus iuran ? : ada Dapur', 'Jl. Dipatiukur No.17', 'kost-nur-house-bandung', '2022-09-05', '13:38:42', 1, 'Yogyakarta', 1150000, 'Kost Nur House', 'Putra', '[\"Kasur\",\"Lemari Baju\",\"Kursi\",\"Bantal\",\"Jendela\",\"Ventilasi\"]', '17.jpg', 3),
(22, 24, 'Harga sudah termasuk listrik dan air tapi belum termasuk Laundry. Sekamar berdua ada tambahan biaya.- Terdapat teras pribadi di kamar, beserta kursi dan meja - Memiliki pemandangan indah dari kamar dan teras- Terdapat bath up pribadi & kamar mandi luas', 'Jl. Pagarsih No.78', 'kost-tian-jalan-pagarsih-no78', '2022-09-05', '13:38:32', 1, 'Jakarta', 2700000, 'Kost Tian Jalan Pagarsih No.78', 'Putra', '[\"Kasur\",\"Lemari Baju\",\"Kursi\",\"Meja\",\"Ventilasi\",\"Kipas Angin\"]', '19.jpg', 3),
(55, 26, 'kosku', 'kosku', 'kosku', '2022-09-05', '13:38:05', 1, 'Banda Aceh', 1000, 'kosku', 'Putra', '[\"Bantal\",\"Jendela\",\"Meja\",\"Kipas Angin\"]', 'Seven_inc5.jpeg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sewa`
--

CREATE TABLE `tbl_sewa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `date` date NOT NULL,
  `tagihan` int(11) NOT NULL,
  `buktipem` varchar(32) NOT NULL,
  `status` enum('Lunas','Belum Lunas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_request`
--

CREATE TABLE `tb_request` (
  `id_request` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `info_hub` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama_properti` varchar(100) NOT NULL,
  `url_properti` varchar(100) NOT NULL,
  `tipe_kos` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten_kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jumlah_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_request`
--

INSERT INTO `tb_request` (`id_request`, `nama_depan`, `nama_belakang`, `info_hub`, `no_hp`, `nama_properti`, `url_properti`, `tipe_kos`, `harga`, `provinsi`, `kabupaten_kota`, `kecamatan`, `kelurahan`, `alamat`, `jumlah_kamar`) VALUES
(4, 'Arkan', 'Altair', 'Whatsapp', '081234578979', 'Wisma Arya 3', 'https://drive.google.com/drive/u/1/folders/1G44ZC66cpKFYPLkOnJJVDerWx3i9W4ty', 'Kost Putra', '1.000.000/bulan', 'Riau', 'Pekanbaru', 'Rumbai', 'Argowisata', 'Jalan Rumbai', '4'),
(5, 'Glocha', 'Rakabumi', 'No Handphone', '081234578965', 'Kost Broklyn ', 'https://drive.google.com/drive/u/1/folders/1G44ZC66cpKFYPLkOnJJVDerWx3i9W4ty', 'Kost Putra', '1.500.000/bulan', 'Riau', 'Pekanbaru', 'Rumbai', 'Argowisata', 'Jalan Rumbai', '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Customer'),
(3, 'Owner'),
(4, 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `fullname`, `foto`, `jk`, `email`, `no_hp`, `alamat`, `id_role`) VALUES
(1, 'sheptian', '6bc96d4888c477d534703c5c9de9a49b', 'sheptian bagja utama', '', 'Pria', 'sheptian96@gmail.com', '087824392239', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 1),
(3, 'alvian', 'e10adc3949ba59abbe56e057f20f883e', 'alvian ahja wijaya', '', 'Pria', 'alvian@gmail.com', '085222549953', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 2),
(5, 'bla', 'e10adc3949ba59abbe56e057f20f883e', 'bla bla bla', '', 'Wanita', 'bla@gmail.com', '789456142', 'Jl.Cibiru', 2),
(6, 'kurniawan', 'e10adc3949ba59abbe56e057f20f883e', 'Kurniawan Aditya', '', 'Pria', 'kurniawan@gmail.com', '08752563663', 'Jl.Raya Cibeurem No.19', 2),
(7, 'nawan', 'e10adc3949ba59abbe56e057f20f883e', 'Nawan Tutu Syah Lampah', '', 'Pria', 'nawan@gmail.com', '085322145896', 'Jl. Raya Cimahi No.90', 2),
(8, 'rudy', 'e10adc3949ba59abbe56e057f20f883e', 'Rudy Setiawan', '', 'Pria', 'rudy@gmail.com', '085369985555', 'Jl.Pasir Impun No.90', 2),
(9, 'firman', 'e10adc3949ba59abbe56e057f20f883e', 'Firman Alhadiansyah', '', 'Pria', 'firman@gmail.com', '085244215511', 'Jl. Ir.Hj Juanda No.11', 2),
(10, 'tantan', 'e10adc3949ba59abbe56e057f20f883e', 'Tantan Faturahman', '', 'Pria', 'tantan@gmail.com', '08125648974', 'Jl. Gede Bangkong No.12', 2),
(11, 'azzi', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Azzi Alfurqon', '', 'Pria', 'azzi@gmail.com', '082133669988', 'Jl. Dipatiukur No.67', 2),
(12, 'reza', 'e10adc3949ba59abbe56e057f20f883e', 'Reza Yogi Andria', '', 'Pria', 'reza@gmail.com', '0228956938', 'Jl. Soekarno Hatta No.90', 2),
(13, 'angga', 'e10adc3949ba59abbe56e057f20f883e', 'Rangga Jaya Utama', '', 'Pria', 'rangga@gmail.com', '08526335214', 'Jl. Pasirkoja No.90', 2),
(14, 'yuliani', 'e10adc3949ba59abbe56e057f20f883e', 'Yuliani Putri Utama', '', 'Wanita', 'yuliani@gmail.com', '087758521245', 'Jl.Holis No.87', 2),
(15, 'rahma', 'e10adc3949ba59abbe56e057f20f883e', 'Rahma Aulia', '', 'Wanita', 'rahma@gmail.com', '085245696963', 'Jl. Peta No.88', 2),
(16, 'anie', '14e1b600b1fd579f47433b88e8d85291', 'Ani Yani', '', 'Wanita', 'ani@gmail.com', '085254698988', 'Jl.Sereh No.78', 2),
(17, 'rani', '14e1b600b1fd579f47433b88e8d85291', 'Rani Maharani', '', 'Wanita', 'rani@gmail.com', '0852633562312', 'Jl. Jamika No.4', 2),
(18, 'Andika', '14e1b600b1fd579f47433b88e8d85291', 'Andika Ramdani', '', 'Pria', 'Dika@gmail.com', '085245658878', 'Jl. Sukamulya No.2', 2),
(19, 'Kartika', 'e10adc3949ba59abbe56e057f20f883e', 'Kartika Sari', '', 'Wanita', 'kartika@gmail.com', '089563652145', 'Jl. Sunda No.22', 2),
(20, 'ariska', 'e10adc3949ba59abbe56e057f20f883e', 'Sri Ariska', '', 'Wanita', 'ariska@gmail.com', '085622325645', 'Jl. Ciroyom', 2),
(21, 'yayu', 'e10adc3949ba59abbe56e057f20f883e', 'Yayu', '', 'Wanita', 'yayu@gmail.com', '085698974563', 'Jl. Burangrang No.82', 2),
(22, 'kezia', '14e1b600b1fd579f47433b88e8d85291', 'Kezia Andria', '', 'Wanita', 'kezia@gmail.com', '08545689758', 'Jl. Buah Batu No.34', 2),
(23, 'Nurhikmah', 'e10adc3949ba59abbe56e057f20f883e', 'Nurhikmah', '', 'Wanita', 'nur@gmail.com', '0856478945', 'Jl. Dipatiukur No.56', 2),
(24, 'tian', '25d55ad283aa400af464c76d713c07ad', 'Tian Bagja ', '', 'Pria', 'tian@gmail.com', '087854446958', 'Jl. Pagarsih', 4),
(25, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'testest', '', 'Pria', 'test@gmail.com', '087857846', 'Jl.Pagarsih', 3),
(26, 'claire', '25d55ad283aa400af464c76d713c07ad', 'claire', '', 'Wanita', 'claire@gmail.com', '089786567899', 'Malang', 1),
(28, 'keshi', 'e10adc3949ba59abbe56e057f20f883e', 'keshi', '', 'Pria', 'keshi@gmail.com', '089987654555', 'Surabaya', 2),
(29, 'keshi', 'e10adc3949ba59abbe56e057f20f883e', 'keshi', '', 'Pria', 'keshi@gmail.com', '089987654555', 'Surabaya', 2),
(30, 'keshi', '14e1b600b1fd579f47433b88e8d85291', 'keshi', '', 'Pria', 'keshi@gmail.com', '089987654555', 'Surabaya', 3),
(32, 'ashley', '14e1b600b1fd579f47433b88e8d85291', 'ashley choi', '', 'Wanita', 'ashley@gmail.com', '089763345234', 'Yogyakarta', 2),
(36, 'max', 'e10adc3949ba59abbe56e057f20f883e', 'max', '', 'Wanita', 'max@gmail.com', '089786567899', 'Arcadia Bay', 2),
(37, 'chloe', 'e10adc3949ba59abbe56e057f20f883e', 'chloe', '', 'Wanita', 'chloe@gmail.com', '089767546345', 'Arcadia Bay', 2),
(38, 'rachel', 'e10adc3949ba59abbe56e057f20f883e', 'rachel', '', 'Wanita', 'rachel@gmail.com', '089786567899', 'Arcadia Bay', 3),
(39, 'bea', 'e10adc3949ba59abbe56e057f20f883e', 'beabadobee', '', 'Wanita', 'bea@gmail.com', '089786567899', 'Surabaya', 2),
(40, 'conan', 'e10adc3949ba59abbe56e057f20f883e', 'conan', '', 'Pria', 'conan@gmail.com', '089786567444', 'Jakarta', 2),
(41, 'ash', 'e10adc3949ba59abbe56e057f20f883e', 'ash island', '', 'Pria', 'ash@gmail.com', '08975456777', 'Chicago', 2),
(42, 'jeff', 'e10adc3949ba59abbe56e057f20f883e', 'jeff benard', '', 'Pria', 'jeff@gmail.com', '089765678756', 'Jakarta', 3),
(43, 'lucas', 'e10adc3949ba59abbe56e057f20f883e', 'lucas', '', 'Pria', 'lucas@gmail.com', '089765456777', 'Atlanta', 2),
(44, 'lana', 'e10adc3949ba59abbe56e057f20f883e', 'lana del rey', '', 'Wanita', 'lana@gmail.com', '089765435234', 'California', 2),
(45, 'monica', 'e10adc3949ba59abbe56e057f20f883e', 'monica', '', 'Wanita', 'monica@gmail.com', '089765453676', 'Surabaya', 4),
(46, 'blacksweet@gmail.com', 'b0e268aa058c057523f931943e981b23', 'andika', '', 'Pria', 'blacksweet@gmail.com', '082278476347', 'jln nangka', 2),
(47, 'cobap', 'feb5b4b10c7eb056d241967bd3b12864', 'cobap', 'kopisusu.jpg', 'Pria', 'cobap@gmail.com', '08123456789', 'Malang', 2),
(49, 'enone', '95e36f1e7a3f876952a8b95f3d309d55', 'enone', '', 'Pria', 'enone@gmail.com', '0987654321', 'Malang', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_booking` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_kos` int(20) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `harga` int(20) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(20) NOT NULL,
  `status_sewa` varchar(20) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_booking`, `id_user`, `id_kos`, `tgl_sewa`, `tanggal_selesai`, `harga`, `tgl_pengembalian`, `status_pengembalian`, `status_sewa`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(77, 44, 13, '2022-07-04', '2022-08-04', 700000, '0000-00-00', 'belum_kembali', 'belum_selesai', '', 0),
(78, 40, 43, '2022-07-05', '2022-08-05', 950000, '0000-00-00', 'belum_kembali', 'belum_selesai', '', 0),
(79, 46, 35, '2022-07-25', '2022-08-25', 850000, '0000-00-00', 'belum_kembali', 'belum_selesai', 'X_RPL_5_12_Clarissa_Wemona_(1).jpg', 1),
(80, 46, 40, '2022-07-15', '2022-08-29', 500000, '0000-00-00', 'belum_kembali', 'belum_selesai', 'X_RPL_5_12_Clarissa_Wemona_(1)1.jpg', 0),
(81, 44, 34, '2022-07-12', '2022-08-12', 1000000, '0000-00-00', 'belum_kembali', 'belum_selesai', 'sevenkos.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kos`
--
ALTER TABLE `tbl_kos`
  ADD PRIMARY KEY (`id_kos`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kos` (`id_kos`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_booking`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kos`
--
ALTER TABLE `tbl_kos`
  MODIFY `id_kos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `tb_request`
--
ALTER TABLE `tb_request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_booking` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_kos`
--
ALTER TABLE `tbl_kos`
  ADD CONSTRAINT `tbl_kos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  ADD CONSTRAINT `tbl_sewa_ibfk_1` FOREIGN KEY (`id_kos`) REFERENCES `tbl_kos` (`id_kos`),
  ADD CONSTRAINT `tbl_sewa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
