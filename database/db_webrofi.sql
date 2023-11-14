-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 08:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webrofi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengeluh`
--

CREATE TABLE `pengeluh` (
  `no_tamu` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengeluh`
--

INSERT INTO `pengeluh` (`no_tamu`, `nama`, `email`, `pesan`) VALUES
(1, '$nama', '$email', '$pesan'),
(2, 'Asrofi', 'Aikho250@gmail.com', 'Belajar database web'),
(26, 'Asrofi', 'rofi@gmail.com', 'Aku suka lemon'),
(27, 'Nanda', 'nandalemon@gmail.com', 'Aku suka melon'),
(28, 'Mukgot', 'mukgot@gmail.com', 'Aku pemilik mumu cosrent'),
(29, 'Raffi', 'raffi@gmail.com', 'Mabar mlbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengeluh`
--
ALTER TABLE `pengeluh`
  ADD PRIMARY KEY (`no_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengeluh`
--
ALTER TABLE `pengeluh`
  MODIFY `no_tamu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
