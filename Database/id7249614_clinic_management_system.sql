-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2018 at 11:53 AM
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
('dan', 'me'),
('david', 'david'),
('hansel', 'hansel'),
('new', ''),
('shubham', 'shubham');

-- --------------------------------------------------------

--
-- Table structure for table `Medicine`
--

CREATE TABLE `Medicine` (
  `Med_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Med_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Medicine`
--

INSERT INTO `Medicine` (`Med_name`, `Med_ID`) VALUES
('Oximoron', 1224);

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `Patient_ID` int(10) NOT NULL,
  `Passwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(3) NOT NULL,
  `E_mail` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` int(10) NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`Patient_ID`, `Passwd`, `Name`, `Age`, `E_mail`, `Contact`, `Address`) VALUES
(0, '', '', 0, '', 0, ''),
(64, 'Shubham', 'Shubham', 20, 'shubhamsapkal998@gma', 2147483647, 'Thane-West'),
(62, 'hansel', 'hansel', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `Visit_details`
--

CREATE TABLE `Visit_details` (
  `Patient_ID` int(10) NOT NULL,
  `Symptoms` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Med_written` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Comments` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Visit_details`
--

INSERT INTO `Visit_details` (`Patient_ID`, `Symptoms`, `Med_written`, `Comments`) VALUES
(62, 'cold', 'dloc', 'NA');

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
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `Visit_details`
--
ALTER TABLE `Visit_details`
  ADD PRIMARY KEY (`Patient_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
