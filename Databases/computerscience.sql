-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 10:50 AM
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
-- Table structure for table `computerscience`
--

CREATE TABLE `computerscience` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(255) NOT NULL,
  `courseTitle` varchar(255) NOT NULL,
  `unit` int(1) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `classId` int(11) NOT NULL,
  `compulsory` int(11) NOT NULL DEFAULT 1,
  `createdAt` timestamp NULL DEFAULT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `STUD71` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computerscience`
--

INSERT INTO `computerscience` (`id`, `courseCode`, `courseTitle`, `unit`, `semester`, `classId`, `compulsory`, `createdAt`, `updatedAt`, `STUD71`) VALUES
(1, 'CSC101', 'Introduction to Computer Science', 3, 'First', 1, 1, '2023-03-10 23:17:43', '2023-03-19 23:09:05', 71),
(2, 'CSC102', 'Introduction to Computing', 3, 'Second', 1, 1, '2023-03-10 23:18:05', '2023-03-19 23:07:27', NULL),
(3, 'CHEM101', 'General Chemistry I', 3, 'First', 1, 1, '2023-03-10 23:19:25', '2023-03-19 23:09:05', 71),
(4, 'CHEM102', 'General Chemistry II', 3, 'Second', 1, 1, '2023-03-10 23:19:53', '2023-03-19 23:07:27', NULL),
(5, 'CHEM103', 'Experimental Chemistry I', 1, 'First', 1, 1, '2023-03-12 22:35:14', '2023-03-19 23:09:05', 71),
(6, 'BIO101', 'General Biology I', 3, 'First', 1, 1, '2023-03-12 22:36:13', '2023-03-19 23:09:05', 71),
(7, 'GNS101', 'Use of English I', 2, 'First', 1, 1, '2023-03-12 22:37:11', '2023-03-19 23:09:05', 71),
(8, 'MEE101', 'Engineering Drawing', 3, 'First', 1, 1, '2023-03-12 22:37:58', '2023-03-19 23:09:05', 71),
(9, 'MTS101', 'Introductory Mathematics I', 3, 'First', 1, 1, '2023-03-12 22:38:22', '2023-03-19 23:09:05', 71),
(10, 'PHY101', 'General Physics I', 3, 'First', 1, 1, '2023-03-12 22:38:42', '2023-03-19 23:09:05', 71),
(11, 'PHY107', 'General Physics Laboratory I', 1, 'First', 1, 1, '2023-03-12 22:39:08', '2023-03-19 23:09:05', 71),
(12, 'CHE104', 'Experimental Chemistry II', 1, 'Second', 1, 1, '2023-03-12 22:44:31', '2023-03-19 23:07:27', NULL),
(13, 'GNS102', 'Use of English II', 2, 'Second', 1, 1, '2023-03-12 22:45:39', '2023-03-19 23:07:27', NULL),
(14, 'GNS106', 'Logic and Philosophy', 2, 'Second', 1, 1, '2023-03-12 22:46:10', '2023-03-19 23:07:27', NULL),
(15, 'MEE102', 'Workshop Practice', 2, 'Second', 1, 1, '2023-03-12 22:46:40', '2023-03-19 23:07:27', NULL),
(16, 'MTS102', 'Introductory Mathematics II', 3, 'Second', 1, 1, '2023-03-12 22:48:14', '2023-03-19 23:07:27', NULL),
(17, 'PHY102', 'General Physics II', 3, 'Second', 1, 1, '2023-03-12 22:48:44', '2023-03-19 23:07:27', NULL),
(18, 'PHY108', 'General Physics Laboratory II', 1, 'Second', 1, 1, '2023-03-12 22:49:06', '2023-03-19 23:07:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computerscience`
--
ALTER TABLE `computerscience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computerscience`
--
ALTER TABLE `computerscience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
