-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 08:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-rek-hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(5, 'admin', '$2y$10$dsXm7.sZPZlcMeF71lQxkuqPMRYwqeLXCxpZn1VRFavgk3a8Yu87e');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `gambar`, `alamat`, `latitude`, `longitude`) VALUES
(588, 'Bahagia I', 'a6c03ec194c2ded6e7b6f1583f18b296.jpg', 'TTS', '-9.864652598582628', '124.28111599277563'),
(589, 'Hotel Bahagia II', '1ae252d2dcb1f62255fa5b416155d33c.jpg', '-', '-9.858849685686504', '124.2618702602656'),
(590, 'Hotel Gajah Mada', 'dc8190d09539de6abb66f08443002fca.png', '-', '-9.86016041683498', '124.27057857786842'),
(591, 'Timor Megah Hotel', 'af1c25e18af5627b9094e848679f0184.png', '-', '-9.85911125255043', '124.26912857718449'),
(592, 'Dena Hotel', '0ecde6303f8e08ab3fb87c7107e2a75c.png', '-', '-9.858248974771422', '124.28576365045953'),
(593, 'Blessing Hotel', '11daf84a5464549e71466ea9b14207fd.png', '-', '-9.865149346683376', '124.41281113776452'),
(594, 'A7', '719b01e2f607166d875f754e9c69ba0d.png', '-', '-', '-'),
(595, 'A8', 'adbbb0b636c0c2be1a0407baea021583.jpg', '-', '-', '-'),
(596, 'A9', 'cb96c3a47fc66c51a086145e17705796.png', '-', '-', '-'),
(597, 'A10', 'a992832199d7d2399b46d6c64ade6c30.jpg', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kec_alt_kriteria`
--

CREATE TABLE `kec_alt_kriteria` (
  `id_alt_kriteria` int(11) NOT NULL,
  `f_id_alternatif` int(11) NOT NULL,
  `f_id_kriteria` char(3) NOT NULL,
  `f_id_sub_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kec_alt_kriteria`
--

INSERT INTO `kec_alt_kriteria` (`id_alt_kriteria`, `f_id_alternatif`, `f_id_kriteria`, `f_id_sub_kriteria`) VALUES
(13659, 588, 'C1', 57),
(13660, 588, 'C2', 64),
(13661, 588, 'C3', 69),
(13662, 588, 'C4', 70),
(13663, 588, 'C5', 76),
(13664, 589, 'C1', 58),
(13665, 589, 'C2', 62),
(13666, 589, 'C3', 67),
(13667, 589, 'C4', 70),
(13668, 589, 'C5', 75),
(13669, 590, 'C1', 57),
(13670, 590, 'C2', 64),
(13671, 590, 'C3', 68),
(13672, 590, 'C4', 70),
(13673, 590, 'C5', 75),
(13674, 591, 'C1', 58),
(13675, 591, 'C2', 64),
(13676, 591, 'C3', 68),
(13677, 591, 'C4', 70),
(13678, 591, 'C5', 76),
(13679, 592, 'C1', 57),
(13680, 592, 'C2', 64),
(13681, 592, 'C3', 68),
(13682, 592, 'C4', 70),
(13683, 592, 'C5', 75),
(13684, 593, 'C1', 58),
(13685, 593, 'C2', 62),
(13686, 593, 'C3', 68),
(13687, 593, 'C4', 70),
(13688, 593, 'C5', 75),
(13689, 594, 'C1', 57),
(13690, 594, 'C2', 66),
(13691, 594, 'C3', 69),
(13692, 594, 'C4', 70),
(13693, 594, 'C5', 76),
(13694, 595, 'C1', 57),
(13695, 595, 'C2', 66),
(13696, 595, 'C3', 69),
(13697, 595, 'C4', 70),
(13698, 595, 'C5', 75),
(13699, 596, 'C1', 57),
(13700, 596, 'C2', 64),
(13701, 596, 'C3', 69),
(13702, 596, 'C4', 70),
(13703, 596, 'C5', 75),
(13704, 597, 'C1', 57),
(13705, 597, 'C2', 66),
(13706, 597, 'C3', 68),
(13707, 597, 'C4', 70),
(13708, 597, 'C5', 76);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `tanggal_kirim` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` char(3) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis_kriteria` enum('Cost','Benefit') NOT NULL,
  `bobot` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot`) VALUES
('C1', 'Harga sewa', 'Benefit', '0.30'),
('C2', 'Fasilitas Hotel', 'Benefit', '0.25'),
('C3', 'Rating Hotel', 'Benefit', '0.10'),
('C4', 'Jarak Hotel', 'Benefit', '0.20'),
('C5', 'Lokasi Hotel', 'Benefit', '0.15');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `nama_sub_kriteria` varchar(255) NOT NULL,
  `bobot_sub_kriteria` int(11) NOT NULL,
  `f_id_kriteria` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `nama_sub_kriteria`, `bobot_sub_kriteria`, `f_id_kriteria`) VALUES
(57, 'Rp. ≤250.000', 5, 'C1'),
(58, 'Rp.>250.000 – 500.000', 4, 'C1'),
(59, 'Rp. >500.000 – 750.000', 3, 'C1'),
(60, 'Rp. >750.000 – 1.000.000', 2, 'C1'),
(61, 'Rp.>1.000.000', 1, 'C1'),
(62, 'Jika memenuhi 7 item dari fasillitas berikut ini: free wi-fi, area parkir, AC, TV, layanan resepsionis 24 jam,  sarapan, keamanan 24 jam', 5, 'C2'),
(63, 'Jika memenuhi 6 item dari fasillitas berikut ini: free wi-fi, area parkir, AC, TV, layanan resepsionis 24 jam, House Keeping harian, sarapan, kolam renang', 4, 'C2'),
(64, 'Jika memenuhi 5 item dari fasillitas berikut ini: free wi-fi, kaarea parkir, AC, TV, layanan resepsionis 24 jam,  sarapan, keamanan 24 jam', 3, 'C2'),
(65, 'Jika memenuhi 4 item dari fasillitas berikut ini: free wi-fi, area parkir, AC, TV, layanan resepsionis 24 jam,  sarapan, keamanan 24 jam', 2, 'C2'),
(66, 'Jika memenuhi ≤ 3 item dari fasillitas berikut ini: free wi-fi, area parkir, AC, TV, layanan resepsionis 24 jam,  sarapan, keamanan 24 jam', 1, 'C2'),
(67, 'Hotel Bintang 2', 5, 'C3'),
(68, 'Hotel Bintang 1', 3, 'C3'),
(69, 'Hotel Melati', 1, 'C3'),
(70, '≤5 KM', 5, 'C4'),
(71, '>5-10 KM', 4, 'C4'),
(72, '>10-15 KM', 3, 'C4'),
(73, '>15-20 KM', 2, 'C4'),
(74, '>20 KM', 1, 'C4'),
(75, 'Berada di dekat rumah makan', 5, 'C5'),
(76, 'Berada di dekat supermarket', 3, 'C5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kec_alt_kriteria`
--
ALTER TABLE `kec_alt_kriteria`
  ADD PRIMARY KEY (`id_alt_kriteria`),
  ADD KEY `f_id_alternatif` (`f_id_alternatif`),
  ADD KEY `f_id_sub_kriteria` (`f_id_sub_kriteria`),
  ADD KEY `f_id_kriteria` (`f_id_kriteria`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `f_id_kriteria` (`f_id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=598;

--
-- AUTO_INCREMENT for table `kec_alt_kriteria`
--
ALTER TABLE `kec_alt_kriteria`
  MODIFY `id_alt_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13709;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kec_alt_kriteria`
--
ALTER TABLE `kec_alt_kriteria`
  ADD CONSTRAINT `kec_alt_kriteria_ibfk_3` FOREIGN KEY (`f_id_sub_kriteria`) REFERENCES `sub_kriteria` (`id_sub_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kec_alt_kriteria_ibfk_4` FOREIGN KEY (`f_id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kec_alt_kriteria_ibfk_5` FOREIGN KEY (`f_id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`f_id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
