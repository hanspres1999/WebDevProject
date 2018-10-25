-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2018 at 06:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7249614_clinic_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `Assistant`
--

CREATE TABLE `Assistant` (
  `Login_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Passwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Assistant`
--

INSERT INTO `Assistant` (`Login_ID`, `Passwd`) VALUES
('david', 'david'),
('hansel', 'hansel'),
('shubham', 'shubham');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `Login_ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Passwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Doctor`
--

INSERT INTO `Doctor` (`Login_ID`, `Passwd`) VALUES
('david', 'david'),
('hansel', 'hansel'),
('shubham', 'shubham');

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `Patient_ID` int(10) NOT NULL,
  `Passwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`Patient_ID`, `Passwd`, `Name`) VALUES
(0, '', ''),
(1, 'sh', 'sh');

-- --------------------------------------------------------

--
-- Table structure for table `Visit_details`
--

CREATE TABLE `Visit_details` (
  `Patient_ID` int(11) NOT NULL,
  `Symptoms` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Med_written` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Comments` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Visit_details`
--

INSERT INTO `Visit_details` (`Patient_ID`, `Symptoms`, `Med_written`, `Comments`) VALUES
(0, '', '', ''),
(1, '', 'tablet', 'come tommo!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Assistant`
--
ALTER TABLE `Assistant`
  ADD PRIMARY KEY (`Login_ID`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`Login_ID`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `Visit_details`
--
ALTER TABLE `Visit_details`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Patient`
--
ALTER TABLE `Patient`
  ADD CONSTRAINT `Patient_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `Visit_details` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Visit_details`
--
ALTER TABLE `Visit_details`
  ADD CONSTRAINT `Visit_details_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `Patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
