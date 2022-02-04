-- phpMyAdmin SQL Dump
-- version 5.0.4deb2ubuntu5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2022 at 04:41 PM
-- Server version: 8.0.28-0ubuntu0.21.10.3
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `Table_Anggota`
--

CREATE TABLE `Table_Anggota` (
  `id` int NOT NULL,
  `No_Anggota` int NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Umur` int NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Table_Anggota`
--

INSERT INTO `Table_Anggota` (`id`, `No_Anggota`, `Nama`, `Umur`, `Jabatan`, `Foto`) VALUES
(1, 55003321, 'Aziz Yuda', 20, 'Staff', 'Male.png'),
(2, 55003322, 'Syifa Aulia', 19, 'Staff', 'Female.png'),
(3, 55003323, 'Imam Setya Wardana', 20, 'IT Support', 'Male.png'),
(4, 55003324, 'Ilham Apriansyah', 20, 'Programmer', 'Male.png');

-- --------------------------------------------------------

--
-- Table structure for table `Table_Buku`
--

CREATE TABLE `Table_Buku` (
  `id` int NOT NULL,
  `No_Buku` int NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `ISBN` int NOT NULL,
  `Foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Table_Buku`
--

INSERT INTO `Table_Buku` (`id`, `No_Buku`, `Judul`, `ISBN`, `Foto`) VALUES
(1, 14050059, 'Buku Ekonomi', 978623213, 'Ekonomi.png'),
(2, 14050056, 'Buku Agama', 978623210, 'Agama.png'),
(3, 14050055, 'Buku Sejarah', 978623209, 'Sejarah.png'),
(4, 14050057, 'Buku Matematika', 978623211, 'Matematika.png'),
(5, 14050058, 'Buku Teknologi', 978623212, 'Teknologi.png'),
(6, 14050060, 'Buku B. Inggris', 978623214, 'Inggris.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Table_Anggota`
--
ALTER TABLE `Table_Anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Table_Buku`
--
ALTER TABLE `Table_Buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Table_Anggota`
--
ALTER TABLE `Table_Anggota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Table_Buku`
--
ALTER TABLE `Table_Buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
