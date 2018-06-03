-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 05:25 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `komen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE IF NOT EXISTS `detailpenjualan` (
  `nonota` varchar(10) DEFAULT NULL,
  `kode` varchar(8) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `jumlah` int(8) DEFAULT NULL,
  `subtotal` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`nonota`, `kode`, `harga`, `jumlah`, `subtotal`) VALUES
('1', 'brg02', 55000, 1, 55000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `nik` int(30) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`nik`, `name`, `phone`, `email`, `gender`) VALUES
(1600018180, 'yoza', 2147483647, 'yoza@gmail.com', 'Male'),
(1600018186, 'BANU HARLI TRIMULYA SUANDI AS', 989636363, 'banu@gamil.com', ''),
(2147483647, 'nando', 372723737, 'nando@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE IF NOT EXISTS `jasa` (
  `nama` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`nama`, `harga`) VALUES
('Antar Jemput', 125000),
('Spa', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `idjenis` int(20) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `hargakamar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `idkamar` int(15) NOT NULL,
  `idjenis` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `kamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `nonota` varchar(8) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`nonota`, `tanggal`, `total`) VALUES
('1', '2013-01-17', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `nopesan` int(20) NOT NULL,
  `nik` int(20) DEFAULT NULL,
  `idkamar` int(20) DEFAULT NULL,
  `idjenis` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `nama` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`nama`, `harga`) VALUES
('Nasi Goreng', 12000),
('Es Teh', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cekin` date NOT NULL,
  `cekout` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `kamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`nik`, `nama`, `phone`, `email`, `cekin`, `cekout`, `durasi`, `kamar`) VALUES
(12345567, 'Fahmi', 9876, 'fahmi@gmail.com', '2018-05-15', '2018-07-10', 56, 'Deluxe'),
(16000200, 'FITRI', 8282272727, 'abdul@gmail.com', '2018-05-16', '2018-05-20', 4, 'Deluxe'),
(16000300, 'miftah habibi', 838373737737, 'miftah@gmail.com', '2018-05-16', '2018-05-20', 4, 'Junior'),
(1600018181, 'M Arif Rahmawan', 92828272722, 'mamad@gmail.com', '2018-05-21', '2018-05-25', 4, 'Executive'),
(1600018195, 'helmi', 92828272722, 'helmi@gmail.com', '2018-05-22', '2018-05-26', 4, 'Junior');

-- --------------------------------------------------------

--
-- Table structure for table `tblbarang`
--

CREATE TABLE IF NOT EXISTS `tblbarang` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hrg_beli` int(10) NOT NULL,
  `hrg_jual` int(10) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbarang`
--

INSERT INTO `tblbarang` (`kode`, `nama`, `hrg_beli`, `hrg_jual`, `stok`) VALUES
('DLX', 'Deluxe Room', 300000, 300000, 9),
('EXT', 'Executive Room', 500000, 500000, 10),
('JNR', 'Junior Suite Room', 350000, 350000, 10),
('ST', 'Suite Room', 400000, 400000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblreservasi`
--

CREATE TABLE IF NOT EXISTS `tblreservasi` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cekin` date NOT NULL,
  `cekout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreservasi`
--

INSERT INTO `tblreservasi` (`nik`, `nama`, `phone`, `email`, `cekin`, `cekout`) VALUES
('1600018181', 'Executive Room', '081902828287', 'banu@gamil.com', '2018-05-15', '2018-05-18'),
('300000191991', 'Junior Suite Room', '0292929298838', 'mamad@gmail.com', '2018-05-15', '2018-05-18'),
('1600018189', 'Executive Room', '02828288277', 'mamad@gmail.com', '2018-05-16', '2018-05-18'),
('1600018180', 'Junior Suite Room', '082274730281', 'mamad@gmail.com', '2018-05-16', '2018-05-18'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('1600018181', 'Deluxe Room', '082723663636', 'hendri@gmailcom', '2018-05-16', '2018-05-19'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('', 'Deluxe Room', '', '', '0000-00-00', '0000-00-00'),
('123456789', 'Executive Room', '3456789876', 'coba@gmail.com', '2018-05-15', '2018-05-16'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('1231170708970001', 'Fahmi', '087799880012', 'fahmi', '0000-00-00', '0000-00-00'),
('1600018179', 'Fahmi', '08997788668188', 'fahmi@gmail.com', '2018-05-15', '2018-05-17'),
('', '', '', '', '0000-00-00', '0000-00-00'),
('1700018187', 'Executive Room', '08262635353535', 'nando@gmail.com', '2018-05-23', '2018-05-26'),
('', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsementara`
--

CREATE TABLE IF NOT EXISTS `tblsementara` (
  `kode` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `jumlah` int(8) DEFAULT NULL,
  `subtotal` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Banu Harli', 'baban', '12345'),
(2, 'Ari Junanda', 'hutapea', '67890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`),
  ADD KEY `idjenis` (`idjenis`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`nonota`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`nopesan`),
  ADD KEY `idjenis` (`idjenis`),
  ADD KEY `idkamar` (`idkamar`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tblbarang`
--
ALTER TABLE `tblbarang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`idjenis`) REFERENCES `jenis` (`idjenis`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_3` FOREIGN KEY (`idkamar`) REFERENCES `kamar` (`idkamar`),
  ADD CONSTRAINT `pesan_ibfk_4` FOREIGN KEY (`nik`) REFERENCES `reservasi` (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
