-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 03:24 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(64) NOT NULL,
  `nama_barang` varchar(128) DEFAULT NULL,
  `satuan` varchar(64) DEFAULT NULL,
  `jumlah_stok` varchar(64) DEFAULT NULL,
  `tanggal_barang_didaftarkan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `satuan`, `jumlah_stok`, `tanggal_barang_didaftarkan`) VALUES
(15555, 'Heatsink 775 Intel', 'PCS', '58', '2021 - 05 - 25'),
(100001, 'Power Supply Simbada 500w Seri X', 'PCS', '29', '2021-05-25'),
(100002, 'RAM DDR3 4GB', 'PCS', '46', '2021-05-25'),
(100003, 'RAM DDR3 2GB', 'PCS', '17', '2021-05-25'),
(100005, 'HDD SEAGATE 500GB', 'PCS', '65', '2021-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan_barang`
--

CREATE TABLE `tbl_laporan_barang` (
  `id_laporan` int(64) NOT NULL,
  `id_barang` int(64) DEFAULT NULL,
  `jenis_aksi` text,
  `jumlah` varchar(64) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `waktu_aksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan_barang`
--

INSERT INTO `tbl_laporan_barang` (`id_laporan`, `id_barang`, `jenis_aksi`, `jumlah`, `keterangan`, `waktu_aksi`) VALUES
(4, 100002, 'BARANG MASUK', '16', 'Karna Pembelian Barang', '2021 - 05 - 25 18:02:20'),
(5, 100002, 'BARANG MASUK', '16', 'Karna Pembelian Barang', '2021 - 05 - 25 18:03:06'),
(6, 100001, 'BARANG KELUAR', '5', 'Karna Ada yang butuh', '2021 - 05 - 25 18:13:00'),
(7, 15555, 'BARANG MASUK', '23', 'Oke', '2021 - 05 - 25 20:19:17'),
(8, 15555, 'BARANG KELUAR', '10', 'Oke', '2021 - 05 - 25 20:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(32) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(21) DEFAULT NULL,
  `nama_depan` text,
  `nama_belakang` text,
  `jenis_kelamin` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_depan`, `nama_belakang`, `jenis_kelamin`) VALUES
(1, 'earlangga', '123321123', 'Muhammad', 'Erlangga', 'Pria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_laporan_barang`
--
ALTER TABLE `tbl_laporan_barang`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100006;

--
-- AUTO_INCREMENT for table `tbl_laporan_barang`
--
ALTER TABLE `tbl_laporan_barang`
  MODIFY `id_laporan` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
