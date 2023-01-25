-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 09:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocerydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `giveaway`
--

CREATE TABLE `giveaway` (
  `givID` int(20) NOT NULL,
  `givDate` date DEFAULT current_timestamp(),
  `givSide` varchar(100) DEFAULT NULL,
  `givEmpployee` varchar(100) DEFAULT NULL,
  `givItem` varchar(100) DEFAULT NULL,
  `givQuantity` int(10) DEFAULT NULL,
  `groID` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groceries`
--

CREATE TABLE `groceries` (
  `groID` int(20) NOT NULL,
  `groDate` date DEFAULT current_timestamp(),
  `groItem` varchar(300) DEFAULT NULL,
  `groQuantity` int(100) DEFAULT NULL,
  `grocShop` varchar(100) DEFAULT NULL,
  `grocPrice` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giveaway`
--
ALTER TABLE `giveaway`
  ADD PRIMARY KEY (`givID`),
  ADD KEY `groID` (`groID`);

--
-- Indexes for table `groceries`
--
ALTER TABLE `groceries`
  ADD PRIMARY KEY (`groID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giveaway`
--
ALTER TABLE `giveaway`
  MODIFY `givID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groceries`
--
ALTER TABLE `groceries`
  MODIFY `groID` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giveaway`
--
ALTER TABLE `giveaway`
  ADD CONSTRAINT `giveaway_ibfk_1` FOREIGN KEY (`groID`) REFERENCES `groceries` (`groID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
