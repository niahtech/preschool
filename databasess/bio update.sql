-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2023 at 10:37 AM
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
  `studentId` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `session` varchar(29) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `joiningDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `fathersName` varchar(255) NOT NULL,
  `fathersOccupation` varchar(255) NOT NULL,
  `fathersMobile` varchar(255) NOT NULL,
  `fathersEmail` varchar(255) NOT NULL,
  `mothersName` varchar(255) NOT NULL,
  `mothersOccupation` varchar(255) NOT NULL,
  `mothersMobile` varchar(255) NOT NULL,
  `mothersEmail` varchar(255) NOT NULL,
  `permanentAddress` varchar(255) NOT NULL,
  `presentAddress` varchar(255) NOT NULL,
  `CSC101` int(255) NOT NULL,
  `CHEM101` int(255) NOT NULL,
  `CHEM103` int(11) NOT NULL,
  `BIO101` int(11) NOT NULL,
  `GNS101` int(11) NOT NULL,
  `MEE101` int(11) NOT NULL,
  `MTS101` int(11) NOT NULL,
  `PHY101` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `PHY107` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`id`, `FirstName`, `LastName`, `studentId`, `Email`, `DOB`, `Religion`, `PhoneNumber`, `Gender`, `department`, `session`, `Country`, `Password`, `courses`, `joiningDate`, `fathersName`, `fathersOccupation`, `fathersMobile`, `fathersEmail`, `mothersName`, `mothersOccupation`, `mothersMobile`, `mothersEmail`, `permanentAddress`, `presentAddress`, `CSC101`, `CHEM101`, `CHEM103`, `BIO101`, `GNS101`, `MEE101`, `MTS101`, `PHY101`, `image`, `PHY107`) VALUES
(5, 'Bolade', 'Lois', '', 'bola@yahoos.com', '', '', 90946372, 'Feamale', 'Computer Science', '', '', '$2y$10$V0Gt2kYJ7bqmM3sE2outuuHRnTAlnE0RUDjmmXdx/V5dlZU0SMH9i', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(6, 'Tyler', 'Perry', '', 'Tp@yahoos.com', '', '', 64672, 'Female', 'Computer Science', '', '', '$2y$10$/3G.fNNhPEBDkIbNbw8lmO39brrJRamJRuKPrXXP9A5iP7YJT1kpi', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(7, 'Water', 'Melon', '', 'wmelon@yahoos.com', '12-09-2016', 'Christianity', 9057584, 'FEMALE', 'Computer Science', '', 'Nigeria', '$2y$10$tgW4oyceMmJGCNOkVQv0gOVFSLAQ3rvBQBvN5RpA5UgRJDxl5C/tK', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(8, 'big', 'shoe', '', 'bshoe@yahoos.com', '12-09-2018', 'Christianity', 647272, 'FEMALE', 'Computer Science', '', 'Nigeria', '$2y$10$6pBoBOdTP/O5F9h5z1zYvOeMp1u6SYeMEL96L9rDNGszUTLt.YPOS', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 45, 67, 89, 67, 77, 0, 56, 77, '', 46),
(9, 'kiki', 'kiki', 'pre1234', 'kiki@gmail.com', '1998-03-21', 'Christianity', 5606949, 'female', 'Computer Science', '2021/2022', 'Nigeria', '$2y$10$nvY5mMfd7ErhQbYJ4Pq57.JF6.lWhMnHOfJfXykEWZYJQGkAo0c6S', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-05 14:39:03', '', '', '081476890222', 'akela@gmail.com', 'ramatu Laimy', 'Trader', '08168809708', 'ramatu@gmail.com', '', '', 79, 67, 78, 56, 66, 68, 54, 90, 'Snapchat-1740345669~2.jpg', 45),
(18, 'Adebayo', 'Grace', '', 'graceadebayo@gmail.com', '', '', 0, '', '', '', '', '$2y$10$up88GS8YjNjc8AjDUqucO.Cjz8PpjwU/.mQftJaHMrIwSN9FCAYIC', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(19, 'kukuru', 'grace', '', 'gracek@yahoo.com', '', '', 0, '', '', '', '', '$2y$10$90bTVZ7jGbZgOVmTyOGz1e/0Y7i1gStRNYzRNzEHRaycJrjlhdBoC', '', '2023-04-05 14:39:03', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(20, 'lope', 'tolu', '', 'tolu@gmail.com', '', '', 0, '', '', '', '', '$2y$10$2Jp.yaTR8hEFTuTyE8ycZeHwmpNV4XlvMLmELexATC8AB/TUC6b5C', '', '2023-04-07 16:02:02', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(21, 'peace', 'kukuru', 'typo', 'peace@gmail.com', '2023-04-06', 'Christianity', 2147483647, 'female', 'Computer Science', '2021/2022', 'Nigeria', '$2y$10$WDlwkp2rVhLePL9kycGYeu0D4doVs2B3TjewjaKVOxTF.Lr3Swzxy', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-08 12:55:20', '', '', '2349063584031', 'gracekukuru@yahoo.com', 'ramatu Laimy', 'Trader', '2349063584031', 'gracekukuru@yahoo.com', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', '', 89, 67, 99, 56, 69, 78, 99, 78, '', 60),
(22, 'luuuu', 'ulll', 'pre1235', 'ulll@gmail.com', '2009-02-09', 'CHRISTIANITY', 2147483647, 'Female', 'COMPUTER SCIENCE', '2021/2022', 'Nigeria', '$2y$10$5WIS.PMy8dN.k.6pFOM0DeE8q3SGmXFhnCDw6IH3eA4cegW4qNM6K', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-08 21:04:52', 'percy', 'ironer', '2349063584031', 'gu@yahoo.com', 'naheemat', 'Trader', '23490635840', 'na@yahoo.com', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 56, 67, 78, 73, 56, 67, 77, 68, '', 79),
(24, 'Markson', 'Taye', 'SOC1111', 'tmark@gmail.com', '2022-11-02', 'Christianity', 2147483647, 'Male', '2', '2021/2022', 'Nigeria', '$2y$10$MD20ElZqfbUjLEaKXMSbVOlvCCEoBZ9yzzxy4oIDbBSAwF9PTzJQO', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-09 21:08:26', 'Stanley Markson', 'Accountant', '2349063784031', 'SMarkson@yahoo.com', 'Stephanie Markson', 'Lecturing', '2349563584031', 'IAMSTEPH@yahoo.com', 'Banana Island, Lagos', 'Banana Island,Lagos', 45, 67, 89, 67, 77, 0, 56, 77, '', 46),
(25, 'vncnvbn ', 'trtyjyj', 'ghdgjkh', 'vhgjkjk@gmail.com', '2022-02-09', 'CHRISTIANITY', 2147483647, 'Male', '7', '2021/2022', 'Nigeria', '$2y$10$dxtN4k8VjDc0y0sagSyxF.NGQnyTnyU6LrWnYQBcC8GLwa5iMBm9W', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-09 21:57:03', 'percy', 'Teacher', '2349063584031', 'gracekukuru@yahoo.com', 'Stephanie Markson', 'Trader', '+2349063584031', 'gracekukuru@yahoo.com', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'jjyjhjlth', 45, 67, 89, 67, 77, 0, 56, 77, '', 46),
(26, 'lolade', 'ojo', 'bch2222', 'lola@gmail.com', '2003-06-10', 'Christianity', 2147483647, 'Female', '2', '2021/2022', 'Nigeria', '$2y$10$BdrvJI55WJTejdW.Jj0zVur28qlgXk11VwgBjmQX50d55nKordB5y', 'BIO101,CHEM101,MTS101,MEE101,MTS101', '2023-04-10 12:49:44', 'Ojo Clement', 'Banker', '2349063584031', 'OC@yahoo.com', 'Ojo Similoluwa', 'Make-up Artist', '2349063584031', 'Simio@yahoo.com', 'ABUJA', 'ABUJA', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(27, 'kukuru', 'grace', '', 'gku@gmail.com', '', '', 0, '', '', '', '', '$2y$10$.X0knl52RPHVSre8kPD/LO9cGZWZuRQmXeHiqWzDntA0YV7.lOctK', '', '2023-04-12 06:47:09', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(28, 'kukuru', 'grace', 'pre1235', 'ku@gmail.com', '2022-03-01', 'Christianity', 2147483647, 'Female', 'COMPUTER SCIENCE', '2021/2022', 'Nigeria', '$2y$10$NBKhMbgSfFaoYFHYNR5JOer4/pIU1eZq7OHHcRBYCyyZVkwW3dkP2', 'CSC101,CHEM101,CHEM103,BIO101,GNS101,MEE101,MTS101,PHY101,PHY107', '2023-04-12 07:19:43', 'Akela  laima', 'Farmer', '2349063584031', 'gracekukuru@yahoo.com', 'Stephanie Markson', 'Make-up Artist', '2349063584031', 'gracekukuru@yahoo.com', 'no 9 barr gbenga olaniyi str, akinakingbola, alagbaka, Ondo State', 'FESTAC, NIGERIA', 0, 0, 0, 0, 0, 0, 0, 0, '', 0),
(29, 'Israel', 'Ekundayo', '', 'isekundayo700@gmail.com', '', '', 0, '', '', '', '', '$2y$10$TxDckvCYxZ59So6rgYbQPeK0wy0VTcN/GNMoEhfevHCwRRRDhVLr2', '', '2023-04-12 08:04:49', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
