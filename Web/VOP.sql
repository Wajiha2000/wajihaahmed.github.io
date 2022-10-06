-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2020 at 11:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theprotec_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `VOP`
--

CREATE TABLE `VOP` (
  `ID` int(32) NOT NULL,
  `Cus_Name` text NOT NULL,
  `Cus_Email` varchar(50) NOT NULL,
  `Cus_Phone` int(11) NOT NULL,
  `Cus_City` text NOT NULL,
  `Cus_Lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `VOP`
--

INSERT INTO `VOP` (`ID`, `Cus_Name`, `Cus_Email`, `Cus_Phone`, `Cus_City`, `Cus_Lang`) VALUES
(1, 'Junaid', 'Junaid123@gmail.com', 3432434, 'London', 'English'),
(2, 'John', 'alikhan@gmail.com', 43243, 'khi', 'urdu'),
(3, 'Ali', 'alikhan@gmail.com', 43243, 'khi', 'urdu'),
(4, 'Ali', 'alikhan@gmail.com', 43243, 'khi', 'urdu'),
(5, 'Ali', 'alikhan@gmail.com', 43243, 'khi', 'urdu'),
(6, 'Ali', 'alikhan@gmail.com', 43243, 'khi', 'urdu'),
(7, 'Ali', 'alikhan@gmail.com', 43243, 'khi', 'urdu'),
(8, 'wqw', 'w@gmail.com', 3212, 'isl', 'urdu'),
(9, 'ali', 'ali43@hotmail.com', 43556476, 'isl', 'uk'),
(10, 'Khanzada', 'khan@gmail.com', 432232, 'US', 'English'),
(11, 'Sadia', 'sadia1812@gmail.com', 324343, 'Karachi', 'urdu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `VOP`
--
ALTER TABLE `VOP`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `VOP`
--
ALTER TABLE `VOP`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
