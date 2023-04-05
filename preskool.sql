-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2023 at 01:22 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '4e9c067566b62d455cd5449d900b94ca', '2020-01-24 16:21:18', '16-03-2023 08:15:34 PM');

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `CSC101` int(255) NOT NULL,
  `CHEM101` int(255) NOT NULL,
  `CHEM103` int(11) NOT NULL,
  `BIO101` int(11) NOT NULL,
  `GNS101` int(11) NOT NULL,
  `MEE101` int(11) NOT NULL,
  `MTS101` int(11) NOT NULL,
  `PHY101` int(11) NOT NULL,
  `PHY107` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`id`, `FirstName`, `LastName`, `Email`, `DOB`, `Religion`, `PhoneNumber`, `Gender`, `Department`, `State`, `Country`, `Address`, `UserName`, `Password`, `courses`, `CSC101`, `CHEM101`, `CHEM103`, `BIO101`, `GNS101`, `MEE101`, `MTS101`, `PHY101`, `PHY107`) VALUES
(5, 'Bolade', 'Lois', 'bola@yahoos.com', '', '', 90946372, 'Feamale', 'Computer Science', 'taraba', '', '', '', '$2y$10$V0Gt2kYJ7bqmM3sE2outuuHRnTAlnE0RUDjmmXdx/V5dlZU0SMH9i', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Tyler', 'Perry', 'Tp@yahoos.com', '', '', 64672, 'Female', 'Computer Science', 'Oyo', '', '', '', '$2y$10$/3G.fNNhPEBDkIbNbw8lmO39brrJRamJRuKPrXXP9A5iP7YJT1kpi', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Water', 'Melon', 'wmelon@yahoos.com', '12-09-2016', 'Christianity', 9057584, 'FEMALE', 'Computer Science', 'ondo', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', '', '$2y$10$tgW4oyceMmJGCNOkVQv0gOVFSLAQ3rvBQBvN5RpA5UgRJDxl5C/tK', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'big', 'shoe', 'bshoe@yahoos.com', '12-09-2018', 'Christianity', 647272, 'FEMALE', 'Computer Science', 'ondo', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', '', '$2y$10$6pBoBOdTP/O5F9h5z1zYvOeMp1u6SYeMEL96L9rDNGszUTLt.YPOS', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'kiki', 'kiki', 'kiki@gmail.com', '12-08-1942', 'Christianity', 5606949, 'female', 'Computer Science', 'ondo', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', '', '$2y$10$nvY5mMfd7ErhQbYJ4Pq57.JF6.lWhMnHOfJfXykEWZYJQGkAo0c6S', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', 79, 67, 78, 56, 66, 68, 54, 90, 45),
(18, 'Adebayo', 'Grace', 'graceadebayo@gmail.com', '', '', 0, '', '', '', '', '', '', '$2y$10$up88GS8YjNjc8AjDUqucO.Cjz8PpjwU/.mQftJaHMrIwSN9FCAYIC', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'kukuru', 'grace', 'gracek@yahoo.com', '', '', 0, '', '', '', '', '', '', '$2y$10$90bTVZ7jGbZgOVmTyOGz1e/0Y7i1gStRNYzRNzEHRaycJrjlhdBoC', '', 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computerscience`
--

INSERT INTO `computerscience` (`id`, `courseCode`, `courseTitle`, `unit`, `semester`, `classId`, `compulsory`, `createdAt`, `updatedAt`) VALUES
(1, 'CSC101', 'Introduction to Computer Science', 3, 'First', 1, 1, '2023-03-10 23:17:43', '2023-03-22 22:40:42'),
(2, 'CSC102', 'Introduction to Computing', 3, 'Second', 1, 1, '2023-03-10 23:18:05', '2023-03-19 23:07:27'),
(3, 'CHEM101', 'General Chemistry I', 3, 'First', 1, 1, '2023-03-10 23:19:25', '2023-03-19 23:09:05'),
(4, 'CHEM102', 'General Chemistry II', 3, 'Second', 1, 1, '2023-03-10 23:19:53', '2023-03-19 23:07:27'),
(5, 'CHEM103', 'Experimental Chemistry I', 1, 'First', 1, 1, '2023-03-12 22:35:14', '2023-03-19 23:09:05'),
(6, 'BIO101', 'General Biology I', 3, 'First', 1, 1, '2023-03-12 22:36:13', '2023-03-19 23:09:05'),
(7, 'GNS101', 'Use of English I', 2, 'First', 1, 1, '2023-03-12 22:37:11', '2023-03-19 23:09:05'),
(8, 'MEE101', 'Engineering Drawing', 3, 'First', 1, 1, '2023-03-12 22:37:58', '2023-03-19 23:09:05'),
(9, 'MTS101', 'Introductory Mathematics I', 3, 'First', 1, 1, '2023-03-12 22:38:22', '2023-03-19 23:09:05'),
(10, 'PHY101', 'General Physics I', 3, 'First', 1, 1, '2023-03-12 22:38:42', '2023-03-19 23:09:05'),
(11, 'PHY107', 'General Physics Laboratory I', 1, 'First', 1, 1, '2023-03-12 22:39:08', '2023-03-19 23:09:05'),
(12, 'CHE104', 'Experimental Chemistry II', 1, 'Second', 1, 1, '2023-03-12 22:44:31', '2023-03-19 23:07:27'),
(13, 'GNS102', 'Use of English II', 2, 'Second', 1, 1, '2023-03-12 22:45:39', '2023-03-19 23:07:27'),
(14, 'GNS106', 'Logic and Philosophy', 2, 'Second', 1, 1, '2023-03-12 22:46:10', '2023-03-19 23:07:27'),
(15, 'MEE102', 'Workshop Practice', 2, 'Second', 1, 1, '2023-03-12 22:46:40', '2023-03-19 23:07:27'),
(16, 'MTS102', 'Introductory Mathematics II', 3, 'Second', 1, 1, '2023-03-12 22:48:14', '2023-03-19 23:07:27'),
(17, 'PHY102', 'General Physics II', 3, 'Second', 1, 1, '2023-03-12 22:48:44', '2023-03-19 23:07:27'),
(18, 'PHY108', 'General Physics Laboratory II', 1, 'Second', 1, 1, '2023-03-12 22:49:06', '2023-03-19 23:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `head_of_department` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `head_of_department`) VALUES
(1, 'computer science', 'Miss Grace ');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `creationDate`) VALUES
(1, 'Level 1', '2020-06-03 14:03:20'),
(2, 'Level 2', '2020-06-03 14:03:20'),
(3, 'Level 3', '2020-06-03 14:03:32'),
(4, 'Level 4', '2020-06-03 14:03:32'),
(5, 'Level 5', '2020-06-03 14:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`, `creationDate`, `updationDate`) VALUES
(1, 'First', '2023-03-18 14:16:25', ''),
(2, 'Second ', '2023-03-22 10:27:27', '');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computerscience`
--
ALTER TABLE `computerscience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `computerscience`
--
ALTER TABLE `computerscience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
