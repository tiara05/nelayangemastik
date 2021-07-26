-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 04:11 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nelayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `namabarang` varchar(22) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `fotoikan` varchar(22) NOT NULL,
  `id_nelayan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `filter` enum('Paling Laku','Diskon') NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `namabarang`, `stok`, `id_kategori`, `fotoikan`, `id_nelayan`, `harga`, `filter`, `Deskripsi`) VALUES
(1, 'Ikan Gurami', 10, 2, 'gurami.jpg', 1, 15000, 'Paling Laku', 'Ikan gurami segar langsung ambil dari nelayan. 1 ekor gurami berat 7 - 8 ons. '),
(2, 'Ikan Mujair', 0, 2, 'mujair.png', 2, 5000, 'Diskon', 'Ikan Mujair segar langsung ambil dari nelayan. 1 kg Mujair isi 10-15 ekor. '),
(3, 'Ikan Kakap', 4, 1, 'kakap.jpg', 1, 50000, 'Paling Laku', 'Ikan Kakap segar langsung ambil dari nelayan. 1 kg Kakap isi 1 ekor. '),
(4, 'Ikan Lele', 2, 2, 'teri.jpeg', 2, 10500, 'Paling Laku', 'Ikan Lele segar langsung ambil dari nelayan. 1 kg Lele isi 10-15 ekor. '),
(9, 'Ikan Kembung', 3, 1, 'kembung.jpg', 2, 35000, 'Paling Laku', 'Ikan Mujair segar langsung ambil dari nelayan. 1 kg Mujair isi 10-15 ekor. '),
(10, 'Kerang Darah', 6, 2, 'kerangdarah.jpg', 1, 34000, 'Diskon', 'Kerang darah segar langsung ambil dari nelayan. 1 kg kerang darah isi 10-15 biji. '),
(11, 'Kerupuk Kemplang', 15, 4, 'kerupukkemplang.jpg', 1, 13500, 'Diskon', 'Kerupuk kemplang renyah dan nikmat dari ikan tengiri yang super segar. Kemasan 1 kg '),
(12, 'Keripik Teri', 4, 4, 'keripikteri.jpg', 2, 34000, 'Diskon', 'Kerupuk kemplang renyah dan nikmat dari ikan teri asli yang super segar. Kemasan 1 kg '),
(13, 'Ikan Layur', 50, 1, 'a4.png', 1, 7800, 'Paling Laku', 'ikan ini di pancing dari laut selatan');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detil_transaksi`
--

CREATE TABLE `detil_transaksi` (
  `id_detil_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_transaksi`
--

INSERT INTO `detil_transaksi` (`id_detil_transaksi`, `id_transaksi`, `id_barang`, `jumlah`) VALUES
(17, 14, 2, 3),
(18, 15, 2, 2),
(19, 16, 2, 0),
(20, 16, 3, 3),
(21, 17, 2, 0),
(22, 17, 3, 3),
(23, 18, 2, 0),
(24, 18, 3, 3),
(25, 19, 2, 2),
(26, 19, 3, 0),
(27, 20, 2, 0),
(28, 20, 3, 2),
(29, 21, 2, 0),
(30, 21, 3, 2),
(31, 22, 2, 1),
(32, 22, 3, 0),
(33, 23, 2, 1),
(34, 23, 3, 2),
(35, 24, 2, 0),
(36, 24, 3, 4),
(37, 25, 2, 0),
(38, 25, 3, 0),
(39, 25, 4, 2),
(40, 26, 2, 0),
(41, 26, 3, 0),
(42, 26, 4, 2),
(43, 27, 2, 0),
(44, 27, 3, 0),
(45, 27, 4, 2),
(46, 28, 9, 2),
(47, 29, 3, 2),
(48, 30, 3, 5),
(49, 31, 3, 2),
(50, 32, 1, 3),
(51, 33, 1, 3),
(52, 33, 4, 3),
(53, 34, 1, 3),
(54, 34, 4, 3),
(55, 35, 1, 1),
(56, 35, 4, 2),
(57, 36, 11, 2),
(58, 37, 11, 2),
(59, 38, 11, 2),
(60, 39, 11, 2),
(61, 40, 11, 3),
(62, 41, 11, 1),
(63, 42, 11, 3),
(64, 43, 11, 1),
(65, 44, 11, 1),
(66, 45, 11, 1),
(67, 45, 12, 1),
(68, 46, 11, 1),
(69, 46, 12, 2),
(70, 47, 11, 1),
(71, 47, 12, 2),
(72, 48, 11, 1),
(73, 48, 12, 2),
(74, 49, 11, 1),
(75, 49, 12, 0),
(76, 50, 11, 1),
(77, 50, 12, 0),
(78, 51, 11, 1),
(79, 51, 12, 1),
(80, 52, 11, 1),
(81, 52, 12, 1),
(82, 53, 9, 2),
(83, 54, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id_favorit` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id_favorit`, `id_barang`) VALUES
(1, 1),
(2, 4),
(3, 9),
(4, 9),
(0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id_filter` int(11) NOT NULL,
  `namafilter` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id_filter`, `namafilter`) VALUES
(1, 'Paling Laku'),
(2, 'Diskon');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `namakategori` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `namakategori`) VALUES
(1, 'Ikan Air Laut'),
(2, 'Ikan Air Tawar'),
(3, 'Olahan Kaleng'),
(4, 'Olahan Kerupuk');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `foto_bukti` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pencariikan`
--

CREATE TABLE `pencariikan` (
  `id_nelayan` int(11) NOT NULL,
  `namanelayan` varchar(22) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencariikan`
--

INSERT INTO `pencariikan` (`id_nelayan`, `namanelayan`, `foto`) VALUES
(1, 'Supardi', 'Supardi.jpg'),
(2, 'Susanto', 'Susanto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, 'tiara', 'tiara', 'tiara', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `preeorder`
--

CREATE TABLE `preeorder` (
  `id_preeorder` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `alamat` text DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kirim` date DEFAULT NULL,
  `telepon` varchar(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preeorder`
--

INSERT INTO `preeorder` (`id_preeorder`, `id_barang`, `nama`, `alamat`, `jumlah`, `kirim`, `telepon`, `status`) VALUES
(1, 3, 'tiararahmani', 'sidoarjo', 2, '2021-07-01', '08133249622', 'Pending'),
(2, 4, 'tiararahmani', 'bandung', 3, '2021-07-28', '93283', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `namapromo` varchar(15) NOT NULL,
  `detailpromo` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `namapromo`, `detailpromo`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(1, 'Gratis Ongkir', 'Setiap pembelanjaan 5 item ikan gratis ongkir seluruh indonesia', '2021-03-17', '2021-03-31'),
(2, 'Beli 1 Gratis 1', 'Pembelajaan Ikan Laut Tawar akan gratis produk kaleng', '2021-04-01', '2021-04-07'),
(3, 'Raja Diskon', 'Pembelian minimal Rp 100.000; diskon 10%', '2021-03-01', '2021-04-30'),
(4, 'Promo Gila', 'Setiap pembelian ikan laut 1 kg gratis kerupuk kemplang 1 pack', '2021-05-20', '2021-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kendala` varchar(20) NOT NULL,
  `tinggal` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `alasan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `nama`, `kendala`, `tinggal`, `jenis`, `harga`, `alasan`) VALUES
(1, 'Susi', 'Tidak', '52', '', '51.000-100.000', 'Membuka usaha'),
(2, 'TIARA RAHMANIA HADIN', 'Ya', '35', '', '51.000-100.000', 'Menambah kecerdasan'),
(3, 'harya bima rahaditya', 'Ya', '33', 'Makanan Laut Segar', '51.000-100.000', 'Membuka usaha');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tgl_beli` datetime NOT NULL DEFAULT current_timestamp(),
  `nama_pembeli` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tgl_beli`, `nama_pembeli`) VALUES
(7, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(8, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(9, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(10, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(11, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(12, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(13, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(14, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(15, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(16, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(17, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(18, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(19, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(20, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(21, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(22, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(23, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(24, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(25, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(26, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(27, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(28, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(29, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(30, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(31, NULL, '0000-00-00 00:00:00', 'tiararahmani'),
(32, NULL, '0000-00-00 00:00:00', ''),
(33, NULL, '0000-00-00 00:00:00', ''),
(34, NULL, '0000-00-00 00:00:00', ''),
(35, NULL, '0000-00-00 00:00:00', ''),
(36, NULL, '0000-00-00 00:00:00', ''),
(37, NULL, '0000-00-00 00:00:00', ''),
(38, NULL, '0000-00-00 00:00:00', ''),
(39, NULL, '0000-00-00 00:00:00', ''),
(40, NULL, '0000-00-00 00:00:00', 'harya'),
(41, NULL, '0000-00-00 00:00:00', 'harya'),
(42, NULL, '0000-00-00 00:00:00', 'harya'),
(43, NULL, '0000-00-00 00:00:00', 'harya'),
(44, NULL, '0000-00-00 00:00:00', 'harya'),
(45, NULL, '2021-03-20 15:23:37', 'harya'),
(46, NULL, '2021-03-20 15:24:47', 'harya'),
(47, NULL, '2021-03-20 15:24:50', 'harya'),
(48, NULL, '2021-03-20 15:25:56', 'harya'),
(49, NULL, '2021-03-20 15:28:54', 'harya'),
(50, NULL, '2021-03-20 15:28:57', 'harya'),
(51, NULL, '2021-03-20 15:31:33', 'harya'),
(52, NULL, '2021-03-20 15:31:58', 'harya'),
(53, NULL, '2021-03-20 18:47:38', ''),
(54, NULL, '2021-03-20 18:47:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namauser` varchar(50) NOT NULL,
  `nomertelpon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `namauser`, `nomertelpon`, `email`, `alamat`, `username`, `password`) VALUES
(1, 'Tiara Rahmania Hadiningrum', '081332496225', 'tiararahmania05@gmail.com', 'Villa Jasmine 1 blok i no.33', 'tiararahmani', 'tiara2001'),
(2, 'harya bima rahadityawan', '837912381', 'harya.biem07@gmail.com', 'vj1', 'harya', 'bima');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_provinsi`
--

CREATE TABLE `wilayah_provinsi` (
  `id` varchar(2) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah_provinsi`
--

INSERT INTO `wilayah_provinsi` (`id`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'Dki Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'Di Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('94', 'Papua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `preeorder`
--
ALTER TABLE `preeorder`
  ADD PRIMARY KEY (`id_preeorder`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preeorder`
--
ALTER TABLE `preeorder`
  MODIFY `id_preeorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
