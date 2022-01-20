-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2022 at 01:24 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `Data_Dosen`
--

CREATE TABLE `Data_Dosen` (
  `id` int NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `NIDN` int NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Alamat_Rumah` varchar(50) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `S1` varchar(50) NOT NULL,
  `S2` varchar(50) NOT NULL,
  `S3` varchar(50) NOT NULL,
  `Foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Data_Dosen`
--

INSERT INTO `Data_Dosen` (`id`, `Nama`, `NIDN`, `Email`, `Jenis_Kelamin`, `Alamat_Rumah`, `Agama`, `S1`, `S2`, `S3`, `Foto`) VALUES
(1, 'IMAM HALIM MURSYIDIN', 821333221, '', 'Laki-laki', 'Tangerang', 'Islam', '', '', '', 'Male.png'),
(3, 'SITI MURYANAH', 821333224, '', 'Perempuan', 'Tangerang', 'Islam', '', '', '', 'Female.png'),
(5, 'TAUFIK HIDAYAT', 821333228, '', 'Laki-laki', 'Tangerang', 'Islam', '', '', '', 'Male.png'),
(6, 'ASEP HARDIYANTO NUGROHO', 821333229, '', 'Laki-laki', 'Tangerang', 'Islam', '', '', '', 'Male.png');

-- --------------------------------------------------------

--
-- Table structure for table `Data_Mahasiswa`
--

CREATE TABLE `Data_Mahasiswa` (
  `id` int NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Umur` int NOT NULL,
  `Agama` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Kelas` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Data_Mahasiswa`
--

INSERT INTO `Data_Mahasiswa` (`id`, `Nama`, `Umur`, `Agama`, `Jenis_Kelamin`, `Kelas`, `Foto`) VALUES
(17, 'Sherly A.', 30, 'Islam', 'Perempuan', '5B', 'Female.png'),
(18, 'Muthu', 25, 'Islam', 'Perempuan', '5A', 'Female.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data_Dosen`
--
ALTER TABLE `Data_Dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Data_Mahasiswa`
--
ALTER TABLE `Data_Mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Data_Dosen`
--
ALTER TABLE `Data_Dosen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Data_Mahasiswa`
--
ALTER TABLE `Data_Mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
