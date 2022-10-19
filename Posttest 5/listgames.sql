-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 05:05 PM
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
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `listgames`
--

CREATE TABLE `listgames` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listgames`
--

INSERT INTO `listgames` (`id`, `nama`, `genre`, `deskripsi`) VALUES
(1, 'Uncharted 3: Drakes Deception', 'Action', 'Game ini menceritakan petualangan Drake dalam mencari harta karun. Di sekuel ketiganya ini, ia akan berada di sebuah padang pasir yang gersang untuk menemukan artefak dari abad ke-16.'),
(2, 'Far Cry 3', 'First Person Shooter', 'Far Cry 3 mengusung mode first person shooter (FPS) dan memadukannya dengan konsep game survival. Jalan cerita game yang satu ini berfokus kepada karakter yang bernama Jason.'),
(3, 'The Evil Within', 'Survival', 'Cerita The Evil Within mengisahkan Sebastian Castellanos yang terjebak dalam dunia misterius. Hal itu terjadi selepas dirinya menyelidiki kasus pembunuhan masal. Kini ia harus berusaha mencari jalan keluar dari dunia lain.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listgames`
--
ALTER TABLE `listgames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listgames`
--
ALTER TABLE `listgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
