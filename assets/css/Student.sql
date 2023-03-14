-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 08:07 PM
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
-- Database: `reg-std`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
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
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`id`, `FirstName`, `MiddleName`, `LastName`, `Email`, `DOB`, `Religion`, `PhoneNumber`, `Gender`, `Department`, `State`, `Country`, `Address`, `UserName`, `Password`) VALUES
(40, 'kukuru', 'Miyenbira', 'Grace', 'gracekukuru@yahoo.com', '12-09-2016', 'Christianity', 9065784, 'female', 'Computer Science', 'ondo', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'Kukurug', 'sopeotilo'),
(41, 'tayo', 'sola', 'Eniola', 'gracekukuru@yahoo.com', '12-09-2018', 'Christianity', 7598208, 'female', 'Computer Science', 'ondo', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'ENNY12', 'qhrgwg'),
(42, 'Balogun', 'sola', 'Emmanuel', 'gracekukuru@yahoo.com', '12-05-2012', 'Christianity', 96860467, 'female', 'Computer Science', 'ondo', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'So_emmy', 'safzgf'),
(43, 'SOLA', 'REECE', 'TOYE', 'solatr@yahoo.com', '12 JAN 2001', 'CHRISTIANITY ', 2147483647, 'FEMALE', 'Computer Science', 'ONDO', 'NIGERIA', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'baby-boy', 'bby12'),
(44, 'Kennedy', 'cole', 'kehinde', 'bolu@yahoo.com', '12-08-1942', 'Christianity', 2147483647, 'Male', '', 'Kwara', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'bcole', 'iamhere'),
(45, 'Tayo', 'Kenneth', 'Awolowo', 'Tayoa@yahoo.com', '12-09-1999', 'Christianity', 2147483647, 'Male', 'Computer Science ', 'Ogun', 'Nigeria', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'tayo_aw', 'rock');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
