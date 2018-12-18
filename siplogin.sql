-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 12:16 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(14, 'dsfghgjetr', '<p>swdefrgthjyukudfgrg</p>\r\n', 'af3fa9ac615b81687b7115f442b2c34b.png', '2018-12-15 10:10:36'),
(15, 'dsfghgjetrdsff', '<p>swdefrgthjyukufegdfgrg</p>\r\n', '16540f4e913ec9dd419dab7acf192753.PNG', '2018-12-15 10:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tim`
--

CREATE TABLE `tb_tim` (
  `id_relawan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `specialis` varchar(50) NOT NULL,
  `tim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tim`
--

INSERT INTO `tb_tim` (`id_relawan`, `nama`, `specialis`, `tim`) VALUES
(1, 'Harry Potter', 'Otak', 'Xampp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `goldarah` varchar(20) NOT NULL,
  `rt_rw` varchar(100) NOT NULL,
  `warganegara` varchar(40) NOT NULL,
  `kel_desa` varchar(100) NOT NULL,
  `negara` varchar(40) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `tugas` enum('user','admin') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `goldarah`, `rt_rw`, `warganegara`, `kel_desa`, `negara`, `agama`, `status_perkawinan`, `pendidikan`, `pekerjaan`, `email`, `password`, `no_hp`, `tugas`, `status`) VALUES
(1, 'admin', '', '', '', '', '', '', '', '', '', '', '', 'admin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 0, 'admin', 'aktif'),
(2, 'Welldan', '17 april 1999', 'laki', '', '21/21', '', 'kel/des', '', 'islam', 'belum kawin', 'SMA', 'Belum ada', 'wew@gmail.com', '7f4f0209f4d29c3adc1a0296cabb7c18', 0, 'user', 'aktif'),
(3, 'Harry Potter', '2018-12-06', 'Pria', 'O', '123231', 'WNI', 'w', 'w', 'www', 'sudah_kawin', 'wew', 'wew', 'taru@tarumail.com', '3847820138564525205299f1f444c5ec', 1234567890, 'user', 'aktif'),
(4, 'Rabbid', '2018-11-28', 'Perempuan', 'O', 'e', 'WNA', 'e', 'e', 'e', 'sudah_kawin', 'e', 'e', 'taru@email.com', '81f4ad03b62421561eab7f9295601aa6', 2147483647, 'user', 'aktif'),
(5, 'f', '2018-12-07', 'Perempuan', 'AB', '123231', 'WNA', 'w', 'e', 'wew', 'belum_kawin', 'wew', 'f', 'f@mail.com', '343d9040a671c45832ee5381860e2996', 2, 'user', 'aktif'),
(6, 'g', '2018-05-30', 'Pria', 'B', '123231', 'WNI', 'g', 'g', 'g', 'belum_kawin', 'g', 'g', 'g@mail.com', 'b2f5ff47436671b6e533d8dc3614845d', 2147483647, 'user', 'aktif'),
(7, 'n', '2019-01-02', 'Perempuan', 'AB', '123231', 'WNI', 'n', 'n', 'n', 'belum_kawin', 'n', 'n', 'n@gmail.com', '7b8b965ad4bca0e41ab51de7b31363a1', 435, 'user', 'aktif'),
(8, 'g', '2018-12-18', 'Perempuan', 'B', '123231', 'WNA', 'g', 'n', 'g', 'belum_kawin', 'n', 'wew', 'g@gmail.com', 'd9215174d890de09724ab4a220378c35', 1234567890, 'user', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tb_tim`
--
ALTER TABLE `tb_tim`
  ADD PRIMARY KEY (`id_relawan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_tim`
--
ALTER TABLE `tb_tim`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
