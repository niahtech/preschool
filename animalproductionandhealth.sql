-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 10:49 AM
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
-- Table structure for table `animalproductionandhealth`
--

CREATE TABLE `animalproductionandhealth` (
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
-- Dumping data for table `animalproductionandhealth`
--

INSERT INTO `animalproductionandhealth` (`id`, `courseCode`, `courseTitle`, `unit`, `semester`, `classId`, `compulsory`, `createdAt`, `updatedAt`) VALUES
(1, 'BIO101', 'General Biology I', 3, 'First', 1, 1, '2023-03-08 23:17:22', '2023-03-10 19:20:05'),
(2, 'CHEM101', 'General Chemistry I', 3, 'First', 1, 1, '2023-03-08 23:18:26', '2023-03-10 19:20:20'),
(3, 'APH 303', 'Animal Behaviour and Handling Technique', 3, 'First', 3, 1, '2023-03-10 21:15:22', '2023-03-10 21:15:22'),
(4, 'APH 201', 'Introduction to Animal Production and Health', 3, 'First', 2, 1, '2023-03-10 21:18:11', '2023-03-10 21:18:11'),
(5, 'BCH 201', 'General Biochemistry I', 2, 'First', 2, 1, '2023-03-10 21:25:22', '2023-03-10 21:25:22'),
(6, 'MTS101', 'Introductory Mathematics I', 3, 'First', 1, 1, '2023-03-19 21:17:42', '2023-03-22 10:59:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animalproductionandhealth`
--
ALTER TABLE `animalproductionandhealth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animalproductionandhealth`
--
ALTER TABLE `animalproductionandhealth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
