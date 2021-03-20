-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 01:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nelayanku`
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
(12, 'Keripik Teri', 4, 4, 'keripikteri.jpg', 2, 34000, 'Diskon', 'Kerupuk kemplang renyah dan nikmat dari ikan teri asli yang super segar. Kemasan 1 kg ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `namabarang` (`namabarang`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_nelayan` (`id_nelayan`),
  ADD KEY `id_kategori_2` (`id_kategori`),
  ADD KEY `id_nelayan_2` (`id_nelayan`),
  ADD KEY `id_filter` (`filter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_nelayan`) REFERENCES `pencariikan` (`id_nelayan`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
