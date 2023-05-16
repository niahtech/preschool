-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 12:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preskool`
--

-- --------------------------------------------------------

--
-- Table structure for table `readnoti`
--

CREATE TABLE `readnoti` (
  `id` int(11) NOT NULL,
  `notificationId` int(11) NOT NULL,
  `recipientId` int(11) NOT NULL,
  `recipient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `readnoti`
--

INSERT INTO `readnoti` (`id`, `notificationId`, `recipientId`, `recipient`) VALUES
(1, 2, 3, 'lecturer'),
(2, 5, 3, 'lecturer'),
(3, 7, 3, 'lecturer'),
(4, 8, 3, 'lecturer'),
(5, 9, 3, 'lecturer'),
(6, 10, 3, 'lecturer'),
(7, 11, 3, 'lecturer'),
(8, 12, 3, 'lecturer'),
(9, 13, 3, 'lecturer'),
(10, 2, 4, 'lecturer'),
(11, 5, 4, 'lecturer'),
(12, 7, 4, 'lecturer'),
(13, 8, 4, 'lecturer'),
(14, 13, 4, 'lecturer'),
(15, 14, 3, 'lecturer'),
(16, 14, 4, 'lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `readnoti`
--
ALTER TABLE `readnoti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `readnoti`
--
ALTER TABLE `readnoti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
