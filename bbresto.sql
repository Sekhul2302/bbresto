-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
-- t
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 10:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbresto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_belanja`
--

CREATE TABLE `tb_belanja` (
  `id` int(11) NOT NULL,
  `id_belanja` varchar(50) NOT NULL,
  `tgl_belanja` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_belanja`
--

INSERT INTO `tb_belanja` (`id`, `id_belanja`, `tgl_belanja`, `jumlah`) VALUES
(2, 'B001', '2019-02-18', NULL),
(3, 'b003', '2019-02-19', NULL),
(4, 'b004', '2019-02-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_belanja`
--

CREATE TABLE `tb_detail_belanja` (
  `id` int(11) NOT NULL,
  `id_detail_belanja` varchar(50) NOT NULL,
  `nama_belanjaan` varchar(200) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `id_belanja` varchar(50) DEFAULT NULL,
  `id_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_belanja`
--

INSERT INTO `tb_detail_belanja` (`id`, `id_detail_belanja`, `nama_belanjaan`, `harga`, `keterangan`, `id_belanja`, `id_kategori`) VALUES
(5, 'DB001', 'Tepung', 15000, '1 kg', 'b003', NULL),
(6, 'DB002', 'Minyak', 10000, '1 kg', 'b004', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_belanja`
--

CREATE TABLE `tb_kategori_belanja` (
  `id` int(11) NOT NULL,
  `id_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_belanja`
--
ALTER TABLE `tb_belanja`
  ADD PRIMARY KEY (`id_belanja`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tb_detail_belanja`
--
ALTER TABLE `tb_detail_belanja`
  ADD PRIMARY KEY (`id_detail_belanja`),
  ADD KEY `id` (`id`),
  ADD KEY `id_belanja` (`id_belanja`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_kategori_belanja`
--
ALTER TABLE `tb_kategori_belanja`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_belanja`
--
ALTER TABLE `tb_belanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_detail_belanja`
--
ALTER TABLE `tb_detail_belanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kategori_belanja`
--
ALTER TABLE `tb_kategori_belanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_belanja`
--
ALTER TABLE `tb_detail_belanja`
  ADD CONSTRAINT `tb_detail_belanja_ibfk_1` FOREIGN KEY (`id_belanja`) REFERENCES `tb_belanja` (`id_belanja`),
  ADD CONSTRAINT `tb_detail_belanja_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori_belanja` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
