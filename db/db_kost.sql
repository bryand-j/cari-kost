-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 01:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id_user` varchar(15) NOT NULL,
  `id_kost` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id_user`, `id_kost`) VALUES
('1', '1'),
('1', '2'),
('2', '1'),
('2', '2'),
('2', '3'),
('3', '2'),
('6', '6'),
('6', '7');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_kost` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_kost`, `foto`) VALUES
('3', '11.jpg'),
('3', '12.jpg'),
('3', '13.jpg'),
('2', '10.jpg'),
('2', '12.jpg'),
('5', '1.jpg'),
('5', '6.jpg'),
('5', '7.jpg'),
('1', '10.jpg'),
('7', 'aaaa.PNG'),
('7', 'Capture.PNG'),
('6', 'img-12.jpg'),
('6', 'img-15.jpg'),
('6', 'img-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(15) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`) VALUES
(1, 'Umum'),
(2, 'Pria'),
(3, 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `id` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_pemilik` int(15) DEFAULT NULL,
  `jumlah_kamar` varchar(5) NOT NULL,
  `terisi` varchar(5) NOT NULL DEFAULT '0',
  `fasilitas` varchar(500) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `kordinat` varchar(100) NOT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id`, `nama`, `id_pemilik`, `jumlah_kamar`, `terisi`, `fasilitas`, `harga`, `jenis`, `alamat`, `kordinat`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 'Kost Gazela', 2, '10', '4', '-Wifi 24 Jam\r\n-Tv\r\n-Ac', '200000', 'Umum', 'Jl. Lasian KM 10 Kota Kupang NTT', '1010,10100', NULL, NULL, NULL),
(2, 'Kost EFG', 2, '6', '0', '-Wifi 24 Jam\r\n-Tv\r\n-Ac', '400000', 'Umum', 'Jl. Lasian KM 10 Kota Kupang NTT', '1010,10100', NULL, NULL, NULL),
(3, 'Kost Pyra', 3, '100', '10', 'kdkc', '400000', 'Pria', 'kdkckd', '', '2021-12-07 23:48:31', '2021-12-08 00:05:40', NULL),
(4, 'Kost kkd', 3, '20', '10', 'fgggo', '500000', 'Wanita', 'llgl', '', '2021-12-08 00:09:52', '2021-12-08 00:10:07', '2021-12-08 00:10:07'),
(5, 'Kost Lumiana', 2, '20', '12', 'jodfjof\r\nfgfhgfh\r\nfghg\r\ngghgjh\r\nghjhjh', '10000000', 'Umum', 'lasiana kupang ntt', '', '2021-12-09 07:14:35', '2021-12-09 07:14:35', NULL),
(6, 'Kost ABC', 6, '20', '10', 'Lengkap z', '700000', 'Umum', 'Jl. Adisucipto no 20 Ambon', '', '2021-12-18 07:21:27', '2021-12-20 06:34:59', NULL),
(7, 'Kost Leter U', 6, '30', '11', 'jnieonoifv\r\ngtrthy\r\nyjyuj', '400000', 'Umum', 'jdjd', '', '2021-12-20 05:21:13', '2021-12-20 06:51:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pemilik` varchar(10) NOT NULL DEFAULT 'Tidak',
  `telepon` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_at` varchar(20) DEFAULT NULL,
  `update_at` varchar(20) DEFAULT NULL,
  `delete_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `pemilik`, `telepon`, `password`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 'bryand j', 'bry@gmail.com', 'Tidak', '0821847576', '123456', NULL, NULL, NULL),
(2, 'Anton L', 'anton@gmail.com', 'Ya', '0821847576', '123456', NULL, NULL, NULL),
(3, 'Bonaventura', 'bona@gmail.com', 'Ya', '08223456789', '@1q2W3e4r5t5t$', '2021-12-07 21:08:40', '2021-12-07 21:27:05', NULL),
(6, 'Hisyam Ailatat', 'HisyamAilatat@gmail.com', 'Ya', '081247690795', '1Q2w3e4r5t$', '2021-12-18 05:09:21', '2021-12-18 05:17:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'Admin',
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `level`, `username`, `password`) VALUES
(10, 'Admin', 'admin', '123456'),
(13, 'Admin', 'Hisyam', '1q2w3e4r5t'),
(16, 'Admin', 'bry', '1q2w3e4r5t');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemilik` (`id_pemilik`);
ALTER TABLE `kost` ADD FULLTEXT KEY `fulltext` (`nama`,`harga`,`jenis`,`alamat`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
