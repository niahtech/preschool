-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 10:45 AM
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
-- Database: `new_life_school`
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
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `STUD62` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agriculturalandresourceeconomics`
--

INSERT INTO `agriculturalandresourceeconomics` (`id`, `courseCode`, `courseTitle`, `unit`, `semester`, `classId`, `compulsory`, `createdAt`, `updatedAt`, `STUD62`) VALUES
(1, 'BIO101', 'General Biology I', 3, 'First', 1, 1, '2023-03-08 23:11:54', '2023-03-13 22:55:41', 62),
(2, 'CHEM101', 'Basic General Chemistry I', 3, 'First', 1, 1, '2023-03-10 21:59:51', '2023-03-13 22:55:41', 62),
(3, 'MTS101', 'Introductory Mathematics I', 3, 'First', 1, 1, '2023-03-22 10:17:47', '2023-03-22 10:45:51', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
