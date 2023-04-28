-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 10:58 AM
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
-- Table structure for table `payment200`
--

CREATE TABLE `payment200` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `schoolFees` int(255) NOT NULL,
  `fieldTrip` int(11) NOT NULL,
  `accomodation` int(11) NOT NULL,
  `currentPaymentType` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `paymentId` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment200`
--

INSERT INTO `payment200` (`id`, `studentId`, `schoolFees`, `fieldTrip`, `accomodation`, `currentPaymentType`, `level`, `semester`, `amount`, `session`, `paymentId`, `created_at`, `updated_at`) VALUES
(1, 30, 1, 0, 0, 'schoolFees', '200 level', '3', 18000, '2022/2023', 'wfuhqy5zl9', '2023-04-28 07:45:39', '2023-04-28 07:46:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment200`
--
ALTER TABLE `payment200`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment200`
--
ALTER TABLE `payment200`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
