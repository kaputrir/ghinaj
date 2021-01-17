-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 08:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `kelola_berita` (
  `id_berita` int(5) UNSIGNED NOT NULL,
  `id_kategori` int(3) UNSIGNED NOT NULL DEFAULT 0,
  `judul` varchar(100) NOT NULL DEFAULT '',
  `headline` text NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(15) NOT NULL DEFAULT '',
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `kelola_berita` (`id_berita`, `id_kategori`, `judul`, `headline`, `isi`, `pengirim`, `tanggal`) VALUES
(3, 3, 'Jokowi 2 Tahun', 'jokowi digadang2 2 periode', 'jkw vs ww', 'admin', '2017-12-13 09:34:15'),
(4, 1, 'Emas Ghiyatsi', 'Emas Taekwondo Ghiyatsi', 'Emas Taekwondo Ghiyatsi Ngudi Waluyo Cup 2017', 'admin', '2017-12-13 09:37:47'),
(5, 1, 'Liga Italia', 'Inter Capolista', 'Inter capolista', 'admin', '2017-12-13 09:38:48'),
(6, 0, 'Liga Inggris', 'City Vs MU 2-1', 'City Vs MU 2-1', 'paijo', '2017-12-13 09:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `situs` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `situs`, `pesan`, `waktu`) VALUES
(2, 'najwa aulia', 'najwa@gmail.com', 'najwa.com', 'haiiii', '2017-12-08 10:49:45'),
(3, 'paijo', 'paijo@gmail.com', 'http://paijo.com', 'holllaaaaa', '2017-12-08 11:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) UNSIGNED NOT NULL,
  `nm_kategori` varchar(30) NOT NULL DEFAULT '',
  `deskripsi` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(4, 'Accesories', 'accesories'),
(5, 'Dresses', 'dresses'),
(6, 'Bags', 'bags'),
(7, 'Shoes', 'shoes');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(100) NOT NULL,
  `nm_prdk` varchar(200) NOT NULL,
  `hrg_prdk` varchar(300) NOT NULL,
  `jml_prdk` int(200) NOT NULL,
  `total` varchar(300) NOT NULL,
  `id_promo` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(100) NOT NULL,
  `nm_prdk` varchar(200) NOT NULL,
  `hrg_prdk` varchar(300) NOT NULL,
  `stok` int(200) NOT NULL,
  `gmbr` varchar(200) NOT NULL,
  `id_ktgri` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nm_prdk`, `hrg_prdk`, `stok`, `gmbr`, `id_ktgri`) VALUES
(3, 'Laura Dress', '350000', 7, 'img/d1.jpg', 5),
(4, 'Naomi Dress', '370000', 8, 'img/d2.jpg', 5),
(5, 'Duma Dress', '280000', 10, 'img/d3.jpg', 5),
(6, 'Sinta Dress', '380000', 18, 'img/d4.jpg', 5),
(7, 'White Shoes', '530000', 5, 'img/s2.jpg', 7),
(8, 'Dark Shoes', '390000', 3, 'img/s1.jpg', 7),
(9, 'Ellegant Bando', '100000', 22, 'img/a1.jpg', 4),
(10, 'Kalung Flower', '250000', 4, 'img/a3.jpg', 4),
(11, 'Anting Circle', '200000', 35, 'img/a4.jpg', 4),
(12, 'Bandana Simple', '100000', 20, 'img/a5.jpg', 4),
(13, 'Luna Cincin', '350000', 9, 'img/a6.jpg', 4),
(14, 'White Slinbag', '370000', 3, 'img/b2.jpg', 6),
(16, 'Black Bag', '210000', 8, 'img/b3.jpg', 6),
(17, 'Kotak Bag', '320000', 10, 'img/b5.jpg', 6),
(18, 'Blue Backpack', '340000', 17, 'img/b6.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(100) NOT NULL,
  `promo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `passwd` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `passwd`) VALUES
(2, '1', '1'),
(3, 'nendy', 'nendy123');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `kelola_video` (
  `id_video` int(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `headline` varchar(300) NOT NULL,
  `url` varchar(200) NOT NULL,
  `isi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `kelola_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `kelola_berita`
  MODIFY `id_berita` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
