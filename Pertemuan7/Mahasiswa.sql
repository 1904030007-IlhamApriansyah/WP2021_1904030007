-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2022 at 04:17 PM
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
  `ID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Umur` int NOT NULL,
  `Agama` varchar(30) NOT NULL,
  `Jenis Kelamin` varchar(20) NOT NULL,
  `Kelas` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Data_Mahasiswa`
--

INSERT INTO `Data_Mahasiswa` (`ID`, `Nama`, `Umur`, `Agama`, `Jenis Kelamin`, `Kelas`, `Foto`) VALUES
('1904030006', 'Sherly', 20, 'Islam', 'Perempuan', '5B', 'Female.png'),
('1904030007', 'Ilham', 20, 'Islam', 'Laki-laki', '5B', 'Male.png'),
('1904030008', 'Muthu', 20, 'Islam', 'Perempuan', '5B', 'Female.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data_Mahasiswa`
--
ALTER TABLE `Data_Mahasiswa`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
