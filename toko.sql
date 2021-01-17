-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 05:04 PM
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
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar`, `judul`, `link`) VALUES
(61, 'images/berita 1.jpg', 'Beda dari Yang Lain, Intip Fashion Item Custom Milik Para Artis Ini!', 'https://www.popbela.com/fashion/style-trends/hafidhza-putri-andiza/custom-fashion-item-milik-artis'),
(62, 'images/berita 2.jpg', 'Ini Dia Tren Fashion yang Paling Populer di Dekade Ini', 'https://www.harpersbazaar.co.id/articles/read/12/2019/9025/Ini-Dia-Tren-Fashion-yang-Paling-Populer-di-Dekade-Ini'),
(63, 'images/berita 3.jpg', '10 Fashion and Beauty Trends to Watch For in 2019', 'https://www.goodmorningamerica.com/style/story/10-fashion-beauty-trends-watch-2020-67898977'),
(64, 'images/berita 4.jpg', '5 Ways to Style Old Favourites For the New Season', 'https://www.vogue.co.uk/fashion/article/5-ways-to-style-old-favourites-inspiration-resort-collections'),
(65, 'images/berita 5.jpg', 'Fifteen of The Most Talked About Fashion Moments of 2019', 'https://www.dazeddigital.com/fashion/article/47153/1/most-talked-about-fashion-moments-of-2019-bella-hadid-cardi-b-karl-lagerfeld'),
(70, 'images/berita 6.jpg', 'Fashion lookahead: Seven major looks for 2020', 'https://www.bbc.com/news/entertainment-arts-50087110');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(100) NOT NULL,
  `id_produk` int(100) NOT NULL,
  `id_promo` int(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `totalharga` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_produk`, `id_promo`, `jumlah`, `totalharga`, `nama`, `alamat`, `kota`, `email`) VALUES
(1, 2, 1, 2, '560000', 'Kinanti Ayudya Putri Rahardiani', 'Akpol', 'Semarang', 'kinantiayudyaputri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'wanita'),
(2, 'pria'),
(3, 'sport'),
(4, 'hijab'),
(5, 'aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `gambar`, `nama`, `harga`, `stok`, `id_kategori`) VALUES
(1, 'images/black mini dresss.jpg', 'Black Mini Dress', '350000', '99', 1),
(2, 'images/navy mini dress.png', 'Navy Mini Dress', '400000', '99', 1),
(3, 'images/maroon mini dress.png', 'Maroon Mini Dress', '350000', '99', 1),
(4, 'images/white mini dress.png', 'White Mini Dress', '400000', '99', 1),
(5, 'images/blue long dress.png', 'Blue Long Dress', '500000', '99', 1),
(6, 'images/maroon long dress.png', 'Maroon Long Dress', '500000', '99', 1),
(7, 'images/black suit.jpg', 'Black Suit', '650000', '99', 2),
(8, 'images/grey suit.png', 'Grey Suit', '600000', '99', 2),
(9, 'images/dark denim jacket.png', 'Dark Denim Jacket', '500000', '99', 2),
(10, 'images/white jeans jacket.jpg', 'White Jeans Jacket', '550000', '99', 2),
(11, 'images/acid jeans jacket.jpg', 'Acid Jeans Jacket', '600000', '99', 2),
(12, 'images/grey turtle neck sweater.png', 'Grey Turtle Neck Sweater', '550000', '99', 2),
(13, 'images/sport suit.jpg', 'Sport Suit', '450000', '99', 3),
(14, 'images/sport crop top suit.jpg', 'Sport Crop Top Suit', '500000', '99', 3),
(15, 'images/crop top tosca.jpg', 'Tosca Crop Top', '300000', '99', 3),
(16, 'images/long sleeve shirt.jpg', 'Long Sleeve Shirt', '450000', '99', 3),
(17, 'images/grey sport jacket.jpg', 'Grey Sport Jacket', '500000', '99', 3),
(18, 'images/triangle sport jacket.jpg', 'Triangle Sport Jacket', '600000', '99', 3),
(19, 'images/pashmina  dusty pink.jpg', 'Dusty Pink Pashmina', '200000', '99', 4),
(20, 'images/sport hijab.jpg', 'Sport Hijab', '350000', '99', 4),
(21, 'images/instant purple hijab.jpg', 'Instant Purple Hijab', '150000', '99', 4),
(22, 'images/tribal hijab.jpg', 'Tribal Hijab', '200000', '99', 4),
(23, 'images/instant black pashmina.jpg', 'Instant Black Pashmina', '250000', '99', 4),
(24, 'images/double diamond ring.jpg', 'Double Diamond Ring', '500000', '99', 5),
(25, 'images/planet earring.jpg', 'Planet Earring', '350000', '99', 5),
(26, 'images/men black watch.jpg', 'Men Black Watch', '600.000', '99', 5),
(27, 'images/women black watch.jpg', 'Women Black Watch', '550.000', '99', 5),
(28, 'images/men silver watch.jpg', 'Men Silver Watch', '650.000', '99', 5),
(29, 'images/women floral pink watch.jpg', 'Women Floral Pink Watch', '550.000', '99', 5);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(100) NOT NULL,
  `promo` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `promo`, `nama`) VALUES
(1, '30', 'PROMO30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_id`, `passwd`) VALUES
(1, '1', '1'),
(2, 'kinan', 'kinan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `link`) VALUES
(71, 'How to Put Together an Outfit 101', 'https://www.youtube.com/embed/bWCCIp5pHXk'),
(72, '11 Looks Mix & Match Outer Hijab OOTD Ideas ', 'https://www.youtube.com/embed/Yw_xrY404pc'),
(73, '10 Fashion Hacks Under 1 Minute', 'https://www.youtube.com/embed/7bDxPjdPhdI'),
(74, 'Mix and Match Outfit Hijab', 'https://www.youtube.com/embed/bo2XblJL0m4'),
(76, '20 FashionTrendsFor 2020', 'https://www.youtube.com/embed/ryLKJXHwKQ0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
