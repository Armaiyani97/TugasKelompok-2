-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 03:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daganganku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE `buah` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`id_barang`, `nama_barang`, `harga_barang`, `id_kategori`, `image`) VALUES
(1, 'melon', 20000, 1, 'b12');

-- --------------------------------------------------------

--
-- Table structure for table `bumbu`
--

CREATE TABLE `bumbu` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bumbu`
--

INSERT INTO `bumbu` (`id_barang`, `nama_barang`, `harga_barang`, `id_kategori`, `image`) VALUES
(28, 'cabai', 15000, 28, 'c1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `subtotal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_pesanan`
--

CREATE TABLE `detil_pesanan` (
  `id_pesanan` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `id_barang` int(8) NOT NULL,
  `harga_barang` int(10) NOT NULL DEFAULT '0',
  `jumlah_pesanan` int(100) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `lauk`
--

CREATE TABLE `lauk` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga_barang` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lauk`
--

INSERT INTO `lauk` (`id_barang`, `nama_barang`, `harga_barang`, `id_kategori`, `image`) VALUES
(19, 'ikan tongkol', 20000, 19, 'l12');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `melon` varchar(15) NOT NULL,
  `mangga` varchar(15) NOT NULL,
  `jeruk` varchar(15) NOT NULL,
  `pepaya` varchar(15) NOT NULL,
  `strawberry` varchar(15) NOT NULL,
  `sawo` varchar(15) NOT NULL,
  `manggis` varchar(15) NOT NULL,
  `durian` varchar(15) NOT NULL,
  `salak` varchar(15) NOT NULL,
  `terong` varchar(15) NOT NULL,
  `kacangp` varchar(15) NOT NULL,
  `kentang` varchar(15) NOT NULL,
  `jagung` varchar(15) NOT NULL,
  `tomat` varchar(15) NOT NULL,
  `wortel` varchar(15) NOT NULL,
  `asparagus` varchar(15) NOT NULL,
  `brokoli` varchar(15) NOT NULL,
  `lobak` varchar(15) NOT NULL,
  `tongkol` varchar(15) NOT NULL,
  `telur` varchar(15) NOT NULL,
  `sapi` varchar(15) NOT NULL,
  `kambing` varchar(15) NOT NULL,
  `tempe` varchar(15) NOT NULL,
  `mujahir` varchar(15) NOT NULL,
  `bandang` varchar(15) NOT NULL,
  `kerbau` varchar(15) NOT NULL,
  `ayam` varchar(15) NOT NULL,
  `cabem` varchar(15) NOT NULL,
  `garam` varchar(15) NOT NULL,
  `penyedap` varchar(15) NOT NULL,
  `jahe` varchar(15) NOT NULL,
  `kunyit` varchar(15) NOT NULL,
  `kapulaga` varchar(15) NOT NULL,
  `lada` varchar(15) NOT NULL,
  `cabaih` varchar(15) NOT NULL,
  `serai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(10) UNSIGNED NOT NULL,
  `nama` varchar(40) NOT NULL DEFAULT '',
  `alamat` varchar(40) NOT NULL DEFAULT '',
  `nomor_hp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) UNSIGNED NOT NULL,
  `id_pembeli` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `jumlah` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga_lama` int(10) NOT NULL,
  `harga_baru` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_barang`, `nama_barang`, `harga_lama`, `harga_baru`) VALUES
(1, 'Melon', 20000, '-'),
(2, 'Mangga', 15000, '-'),
(3, 'Jeruk', 10000, '-'),
(4, 'Pepaya', 7000, '-'),
(5, 'Strawberry', 10000, '-'),
(6, 'Sawo', 10000, '-'),
(7, 'Manggis', 25000, '-'),
(8, 'Durian', 40000, '-'),
(9, 'Salak', 10000, '-'),
(10, 'Terong', 5000, '-'),
(11, 'Kacang Panjang', 7000, '-'),
(12, 'Kentang', 6000, '-'),
(13, 'Jagung', 10000, '-'),
(14, 'Tomat', 4000, '-'),
(15, 'Wortel', 8000, '-'),
(16, 'Asparagus', 15000, '-'),
(17, 'Brokoli', 5000, '-'),
(18, 'Lobak', 7000, '-'),
(19, 'Ikan Tongkol', 20000, '-'),
(20, 'Telur', 5000, '-'),
(21, 'Daging Sapi', 50000, '-'),
(22, 'Daging Kambing', 40000, '-'),
(23, 'Tempe', 5000, '-'),
(24, 'Ikan Mujair', 15000, '-'),
(25, 'Bandang', 17000, '-'),
(26, 'Daging Kerbau', 70000, '-'),
(27, 'Daging Ayam', 40000, '-'),
(28, 'Cabe Merah', 15000, '-'),
(29, 'Garam', 3000, '-'),
(30, 'Penyedap', 2000, '-'),
(31, 'Jahe', 7000, '-'),
(32, 'Kunyit', 8000, '-'),
(33, 'Kapulaga', 3000, '-'),
(34, 'Lada Hitam', 4000, '-'),
(35, 'Cabai Hijau', 10000, '-'),
(36, 'Serai', 3000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `sayur`
--

CREATE TABLE `sayur` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sayur`
--

INSERT INTO `sayur` (`id_barang`, `nama_barang`, `harga_barang`, `id_kategori`, `image`) VALUES
(10, 'terong', 5000, 10, 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'zuhra', 'zuhra', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(3, 'Salsabila', 'salsa', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(6, 'nurina', 'nurina_salsabila@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(7, 'jura', 'jura@yahoo.com', 'a01610228fe998f515a72dd730294d87', 'user'),
(9, 'ica', 'ica@gmail.com', '38f629170ac3ab74b9d6d2cc411c2f3c', 'user'),
(10, 'loliloli', 'loli@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(13, 'kiki', 'kiki@gmailcom', '6add84506c86a658bc85038f91e35ce7', 'user'),
(14, 'emi', 'emi@gmail.com', '12b41c761b41698d39ef68fdd9429578', 'user'),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `bumbu`
--
ALTER TABLE `bumbu`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detil_pesanan`
--
ALTER TABLE `detil_pesanan`
  ADD PRIMARY KEY (`id_pesanan`,`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lauk`
--
ALTER TABLE `lauk`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `sayur`
--
ALTER TABLE `sayur`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
