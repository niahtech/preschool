-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2023 at 06:05 PM
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
  `Country` varchar(255) NOT NULL,
  `presentAddress` varchar(255) NOT NULL,
  `studentId` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `studentImage` varchar(255) NOT NULL,
  `session` varchar(29) NOT NULL,
  `joiningDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `fathersName` varchar(255) NOT NULL,
  `fathersOccupation` varchar(255) NOT NULL,
  `fathersMobile` varchar(255) NOT NULL,
  `fathersEmail` varchar(255) NOT NULL,
  `permanentAddress` varchar(255) NOT NULL,
  `mothersName` varchar(255) NOT NULL,
  `mothersMobile` varchar(255) NOT NULL,
  `mothersEmail` varchar(255) NOT NULL,
  `mothersOccupation` varchar(255) NOT NULL,
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

INSERT INTO `bio` (`id`, `FirstName`, `LastName`, `Email`, `DOB`, `Religion`, `PhoneNumber`, `Gender`, `Department`, `Country`, `presentAddress`, `studentId`, `Password`, `courses`, `studentImage`, `session`, `joiningDate`, `fathersName`, `fathersOccupation`, `fathersMobile`, `fathersEmail`, `permanentAddress`, `mothersName`, `mothersMobile`, `mothersEmail`, `mothersOccupation`, `CSC101`, `CHEM101`, `CHEM103`, `BIO101`, `GNS101`, `MEE101`, `MTS101`, `PHY101`, `PHY107`) VALUES
(5, 'Bolade', 'Lois', 'bola@yahoos.com', '', '', 90946372, 'Feamale', 'Computer Science', '', '', '', '$2y$10$V0Gt2kYJ7bqmM3sE2outuuHRnTAlnE0RUDjmmXdx/V5dlZU0SMH9i', '', '', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Tyler', 'Perry', 'Tp@yahoos.com', '', '', 64672, 'Female', 'Computer Science', '', '', '', '$2y$10$/3G.fNNhPEBDkIbNbw8lmO39brrJRamJRuKPrXXP9A5iP7YJT1kpi', '', '', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Water', 'Melon', 'wmelon@yahoos.com', '12-09-2016', 'Christianity', 9057584, 'FEMALE', 'Computer Science', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', '', '$2y$10$tgW4oyceMmJGCNOkVQv0gOVFSLAQ3rvBQBvN5RpA5UgRJDxl5C/tK', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'big', 'shoe', 'bshoe@yahoos.com', '12-09-2018', 'Christianity', 647272, 'FEMALE', 'Computer Science', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', '', '$2y$10$6pBoBOdTP/O5F9h5z1zYvOeMp1u6SYeMEL96L9rDNGszUTLt.YPOS', '', '', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'kiki', 'kiki', 'kiki@gmail.com', '1998-03-21', 'Christianity', 5606949, 'female', '7', 'Nigeria', '', 'pre1234', '$2y$10$nvY5mMfd7ErhQbYJ4Pq57.JF6.lWhMnHOfJfXykEWZYJQGkAo0c6S', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '', '2021/2022', '2023-04-05 14:39:03', '', '', '081476890222', 'akela@gmail.com', 'xxxxxxxxxxxxxxxx', 'ramatu Laimy', '08168809708', 'ramatu@gmail.com', 'Trader', 79, 67, 78, 56, 66, 68, 54, 90, 45),
(18, 'Adebayo', 'Grace', 'graceadebayo@gmail.com', '', '', 0, '', '', '', '', '', '$2y$10$up88GS8YjNjc8AjDUqucO.Cjz8PpjwU/.mQftJaHMrIwSN9FCAYIC', '', '', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'kukuru', 'grace', 'gracek@yahoo.com', '', '', 0, '', '', '', '', '', '$2y$10$90bTVZ7jGbZgOVmTyOGz1e/0Y7i1gStRNYzRNzEHRaycJrjlhdBoC', '', '', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
