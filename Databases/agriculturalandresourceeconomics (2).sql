-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 10:59 AM
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
-- Table structure for table `agriculturalandresourceeconomics`
--

CREATE TABLE `agriculturalandresourceeconomics` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(255) NOT NULL,
  `courseTitle` varchar(255) NOT NULL,
  `unit` int(1) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `classId` int(11) NOT NULL,
  `compulsory` int(11) NOT NULL DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agriculturalandresourceeconomics`
--

INSERT INTO `agriculturalandresourceeconomics` (`id`, `courseCode`, `courseTitle`, `unit`, `semester`, `classId`, `compulsory`, `createdAt`, `updatedAt`) VALUES
(1, 'BIO101', 'General Biology I', 3, 'First', 1, 1, '2023-04-26 12:01:57', '2023-04-26 12:01:57'),
(2, 'CSC101', 'Basic General Chemistry I', 3, 'First', 1, 1, '2023-04-26 12:04:53', '2023-04-26 12:04:53'),
(3, 'GNS101', 'Use of English I', 3, 'First', 1, 1, '2023-04-26 12:05:19', '2023-04-26 12:05:19'),
(4, 'MEE101', 'Engineering Drawing I', 3, 'First', 1, 1, '2023-04-26 12:05:45', '2023-04-26 12:05:45'),
(5, 'PHY101', 'General Physics I(Mechanics)', 3, 'First', 1, 1, '2023-04-26 12:06:25', '2023-04-26 12:06:25'),
(6, 'PHY103', 'General Physics III', 2, 'First', 1, 1, '2023-04-26 12:07:09', '2023-04-26 12:07:09'),
(7, 'PHY107', 'Experimental Physics', 1, 'First', 1, 1, '2023-04-26 12:07:49', '2023-04-26 12:07:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agriculturalandresourceeconomics`
--
ALTER TABLE `agriculturalandresourceeconomics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agriculturalandresourceeconomics`
--
ALTER TABLE `agriculturalandresourceeconomics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
