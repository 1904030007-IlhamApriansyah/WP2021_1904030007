-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2022 at 10:11 PM
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
(15, 'Ilham', 25, 'Islam', 'Laki-laki', '5A', 'Male.png'),
(17, 'Sherly', 24, 'Islam', 'Perempuan', '5A', 'Female.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data_Mahasiswa`
--
ALTER TABLE `Data_Mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Data_Mahasiswa`
--
ALTER TABLE `Data_Mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
