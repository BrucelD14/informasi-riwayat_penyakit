-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 09:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riwayat_penyakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal_instansi` varchar(50) NOT NULL,
  `alamat_dokter` varchar(50) NOT NULL,
  `jenis_spesialis` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id`, `nik`, `nama`, `asal_instansi`, `alamat_dokter`, `jenis_spesialis`, `username`, `password`) VALUES
(1, '123', 'fajar', 'RS PMI', 'medan', 'jantung', 'dokter', 'd22af4180eee4bd95072eb90f94930e5'),
(2, '1818181818188', 'Pak Safwandi', 'RS APSI', 'Kota Lhokseumawe', 'Penyakit Dalam', 'finalapsia2', '82ce269399aa23a497eef228a9be6b2e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instansi`
--

CREATE TABLE `tbl_instansi` (
  `id` int(11) NOT NULL,
  `kode_instansi` varchar(50) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `alamat_instansi` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_instansi`
--

INSERT INTO `tbl_instansi` (`id`, `kode_instansi`, `nama_instansi`, `alamat_instansi`, `username`, `password`) VALUES
(1, '123', 'RS PMI', 'medan', 'instansi', '4c333efbef7f557269b10c04dc184fd6'),
(2, '0909', 'brucel', 'Blang Pulo', 'brucel', '6eea9b7ef19179a06954edd0f6c05ceb'),
(3, '881122', 'RS APSI', 'Kota Lhokseumawe', 'finalapsia2', '82ce269399aa23a497eef228a9be6b2e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `riwayat_penyakit` varchar(50) NOT NULL,
  `riwayat_pengobatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `nik`, `nama`, `alamat_pasien`, `riwayat_penyakit`, `riwayat_pengobatan`) VALUES
(3, '321', 'iyan', 'aceh', 'lambung', 'promag'),
(4, '1218888888888', 'Mulyono', 'Panggoi', 'Diabetes', 'Pengobatan Generik'),
(5, '1288221000000', 'Arianto', 'Krueng Geukuh', 'Hyper Tensi', 'Pengobatan Generik'),
(6, '1831999999999', 'Sarmini', 'Blang Panyang', 'Tuberkulosis Paru', 'Pengobatan Generik'),
(7, '162200000000000', 'Jumiati', 'Blang Pulo', 'Diabetes', 'Pengobatan Generik & Injeksi Insulin'),
(8, '189900000000', 'Nadin', 'Krueng Geukuh', 'Demam Berdarah Dengue (DBD)', 'Rawat Inap RSUD Cut Meutia selama 7 hari'),
(9, '1877777773333', 'Adam', 'Bathupat Timur', 'Scabies', 'Pengobatan Generik'),
(10, '190222222222', 'Reza', 'Blang Pulo', 'Maag', 'Pengobatan Generik'),
(11, '198888888888', 'Andre', 'Reulet', 'Insomnia', 'Pengobatan Generik'),
(12, '13999888888', 'Andriyan', 'Kota Lhokseumawe', 'Fotofobia', 'Pengobatan Generik'),
(13, '14777777777', 'Nurul', 'Bathupat Timur', 'Alergi Tikus', 'Pengobatan Generik'),
(14, '1899999999999', 'Budi', 'Blang Pulo', 'Maag', 'Pengobatan Generik'),
(15, '198888888855', 'Eko', 'Kota Lhokseumawe', 'Alzeimer', 'Pengobatan Generik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
