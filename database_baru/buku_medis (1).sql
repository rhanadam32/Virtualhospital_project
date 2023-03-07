-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 11:50 AM
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
-- Database: `buku_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_medis`
--

CREATE TABLE `tb_buku_medis` (
  `id_report` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `usia` int(5) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `keluhan_sakit` text NOT NULL,
  `upload_foto` text NOT NULL,
  `alamat` text NOT NULL,
  `contact` varchar(200) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `status` varchar(200) NOT NULL,
  `tgl_post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku_medis`
--

INSERT INTO `tb_buku_medis` (`id_report`, `nama`, `usia`, `gender`, `pekerjaan`, `riwayat_penyakit`, `keluhan_sakit`, `upload_foto`, `alamat`, `contact`, `id_user`, `status`, `tgl_post`) VALUES
(10, 'REYHANNN', 22, 'Pria', 'Swasta', 'Tidak ada', 'sakit panu', '20221124210040.jpg', 'test', '089', '6', 'direview', '2022-12-01 16:44:37'),
(11, 'Adam', 22, 'Pria', 'Swasta', 'ada tapi gak tau', 'test', '2022101214624.jpg', 'test', '082', '9', 'terkirim', '2022-12-01 17:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `tgl_post` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `email`, `level`, `nama_lengkap`, `contact`, `tgl_post`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@demo.com', 'admin', 'Admin Medis', '', ''),
(5, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'admin@demo', 'admin', 'admin2', '', ''),
(6, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@demo.com', 'user', 'REYHANNN', '082', '2022-11-21 14:54:21'),
(7, 'agus', '0cc175b9c0f1b6a831c399e269772661', 'deflyharfrian@gmail.com', 'user', 'defly harfrian', '082301514887', '2022-11-30 04:21:14'),
(9, 'Adam', '1d7c2923c1684726dc23d2901c4d8157', 'raihanadam321@gmail.com', 'user', 'Adam', '082', '2022-12-01 16:49:00'),
(25, 'adam', '81dc9bdb52d04dc20036dbd8313ed055', 'ima3@gmail.com', 'user', 'adam', '082', '2022-12-01 17:16:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku_medis`
--
ALTER TABLE `tb_buku_medis`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku_medis`
--
ALTER TABLE `tb_buku_medis`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
