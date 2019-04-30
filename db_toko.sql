-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 03:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` text NOT NULL,
  `password_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id_baju` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama_baju` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id_baju`, `gambar`, `nama_baju`) VALUES
(4, 'Screenshot (21).png', 'yoyo'),
(9, 'Screenshot (10).png', 'Ujul');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama_baju` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`, `nama_baju`, `harga`, `id_user`) VALUES
(14, 'damn-i-love-indonesia-8051-9190781-1.jpg', 34439, 'image/jpeg', 'Baju Damn I Love Indonesia', 75000, 0),
(15, 'kaos_keren_L_death_note_logo_HD_baju_distro_youwant_store_.jpg', 206436, 'image/jpeg', 'Kaos Black Panther', 80000, 0),
(16, 'kaos_superman_logo_HD_baju_distro_joelee.jpg', 183432, 'image/jpeg', 'Kaos Superman', 80000, 0),
(17, 'little-x8_little-x8-bvf7kh2114-hd-boy-bruce-t-shirt-baju-atasan-anak-laki-laki_full03.jpg', 36283, 'image/jpeg', 'Baju Anak-anak', 50000, 0),
(18, 'kaos_thor_logo_HD_baju_distro_joelee.jpg', 208413, 'image/jpeg', 'Kaos Transformer', 80000, 0),
(19, 'c6457b5a7a5f82beb1e11137e34ec8ab.jpg', 109651, 'image/jpeg', 'Hydra', 80000, 0),
(20, 'XR4_24_MuhammadRaflyAmartharizqi_MockupTshirt.png', 716682, 'image/png', 'Baju', 50000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `size` enum('S','M','L','XL') NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `status` enum('tunggu','pengiriman','selesai') NOT NULL,
  `resi` varchar(50) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pembeli`, `alamat`, `telp`, `bukti`, `ukuran`, `size`, `tipe`, `status`, `resi`, `id`) VALUES
(17, 'Rafly', '081220169320', 'Perum MCG Blok L3, 28', 'Screenshot (10).png', 108937, '', 'image/png', 'tunggu', '123123123', 14),
(18, 'Rafly', '123', 'Perum MCG Blok L3, 28', 'damn-i-love-indonesia-8051-9190781-1.jpg', 34439, 'L', 'image/jpeg', 'pengiriman', '876543', 18),
(19, 'Rafly', '019832123123', 'Perum MCG Blok L3, 28', 'kaos_keren_L_death_note_logo_HD_baju_distro_youwant_store_.jpg', 206436, '', 'image/jpeg', 'tunggu', '123123', 15),
(20, 'Rafly', '0812229839213', 'Perum MCG Blok L3, 28', 'Bakso.png', 354374, 'L', 'image/png', 'tunggu', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`) VALUES
(6, 'RIzqi', 'rizqi', 'rizqi'),
(7, 'asd', 'a', 'a'),
(8, 'asd', '123', '123'),
(9, '', '', ''),
(10, '', '', ''),
(11, 'Rafly', 'rizqi', '123'),
(12, 'Rafly', 'rizqi', '123'),
(13, 'Rafly', 'rizqi', '123'),
(14, 'Rafly', 'rizqi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id_baju`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id_baju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gambar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
