-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 04:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nama` char(255) NOT NULL,
  `ket` char(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nama`, `ket`, `tgl`) VALUES
('Sri Nurlaela', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00'),
('Yulia Nur Safitri', 'Hadir', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `no_absen` char(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `no_absen`, `nama`, `kelas`) VALUES
(3, '01', 'A. Rifaldi', 'XI TKJ 1'),
(4, '02', 'Ade Maulana', 'XI TKJ 1'),
(5, '03', 'Adelya Puspita Sari', 'XI TKJ 1'),
(6, '04', 'Ahmad Faisal', 'XI TKJ 1'),
(7, '05', 'Amanda Natasya', 'XI TKJ 1'),
(8, '06', 'Beres Ronaldo Pangabean', 'XI TKJ 1'),
(9, '07', 'Bintang Maharani', 'XI TKJ 1'),
(10, '08', 'Devi Amalia Isthainy', 'XI TKJ 1'),
(11, '09', 'Dewi Silvianti', 'XI TKJ 1'),
(12, '10', 'Dwi Mulya Arif Fahri', 'XI TKJ 1'),
(13, '11', 'Edelweiz Ulayah Salsabilah', 'XI TKJ 1'),
(14, '12', 'Haikal Fattan', 'XI TKJ 1'),
(15, '13', 'Heru Fadilah Satya Putra', 'XI TKJ 1'),
(16, '14', 'Indah Fadilla', 'XI TKJ 1'),
(17, '15', 'Ira Widya Putri', 'XI TKJ 1'),
(18, '16', 'Irfan Dwiky Fahmi', 'XI TKJ 1'),
(19, '17', 'Kearen Septiana Dermawan', 'XI TKJ 1'),
(20, '18', 'Lusi Susilawati', 'XI TKJ 1'),
(21, '19', 'Melly Kurnia Isar D', 'XI TKJ 1'),
(22, '20', 'Muhammad Adib Fariqi', 'XI TKJ 1'),
(23, '21', 'Muhammad Fadjar S', 'XI TKJ 1'),
(24, '22', 'Muhammad Fahri Aditia Candra', 'XI TKJ 1'),
(25, '23', 'Muhammad Fadjar As Sidiq', 'XI TKJ 1'),
(26, '24', 'Muhammad Rizky Putra Suja', 'XI TKJ 1'),
(27, '25', 'Mutia Afrina Cisarella', 'XI TKJ 1'),
(28, '26', 'Nanda Febriyansah', 'XI TKJ 1'),
(29, '27', 'Neviani', 'XI TKJ 1'),
(30, '28', 'Nimat', 'XI TKJ 1'),
(31, '29', 'Novia Fadillah', 'XI TKJ 1'),
(32, '30', 'Pupus Saira', 'XI TKJ 1'),
(33, '31', 'Nurindah Jaenaturohmah', 'XI TKJ 1'),
(34, '32', 'Riska Rahmawati', 'XI TKJ 1'),
(35, '33', 'Rona Nisrina', 'XI TKJ 1'),
(36, '34', 'Saharani Nabila', 'XI TKJ 1'),
(37, '35', 'Sinta Nuriyah', 'XI TKJ 1'),
(38, '36', 'Siti Mutiara Hartati', 'XI TKJ 1'),
(39, '37', 'Sri Ludiyanti', 'XI TKJ 1'),
(40, '38', 'Sri Nurlaela', 'XI TKJ 1'),
(41, '39', 'Sri Nurlaeli', 'XI TKJ 1'),
(42, '40', 'Triyana Julianti', 'XI TKJ 1'),
(43, '41', 'Widia Rahmawati', 'XI TKJ 1'),
(44, '42', 'Yulia Nur Safitri', 'XI TKJ 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
