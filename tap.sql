-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 03:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tap`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `Sr` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `club` varchar(50) NOT NULL,
  `school` varchar(10) NOT NULL,
  `interests` varchar(5000) DEFAULT NULL,
  `why` varchar(5000) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `selected` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`Sr`, `name`, `email`, `phone`, `city`, `club`, `school`, `interests`, `why`, `grade`, `selected`) VALUES
(1, 'Kahan', 'kg@.com', '1234567890', 'pune', 'coding', 'DNMPS', NULL, NULL, 'C', ''),
(2, 'Jainam', 'uj@.com', '0987654321', 'mumbai', 'dance', 'LNMPS', NULL, NULL, 'B', 'Yes'),
(3, 'Tejas', '123@.com', '1234567890', 'pune', 'dance', 'DNMPS', NULL, NULL, 'C', ''),
(4, 'Yashvi', '1234@.com', '0987654321', 'mumbai', 'coding', 'ABMPS', NULL, NULL, 'B', ''),
(5, 'Dhruv', '12345@.com', '0987654321', 'mumbai', 'drama', 'ABMPS', NULL, NULL, 'A', 'No'),
(6, 'Heeket', '123456@.com', '0987654321', 'mumbai', 'music', 'ABMPS', NULL, NULL, '', ''),
(7, 'Ananya', '123456@.com', '0987654321', 'pune', 'drama', 'DNMPS', NULL, NULL, '', ''),
(8, 'Iyer', '123456@.com', '0987654321', 'pune', 'music', 'ABMPS', NULL, NULL, '', ''),
(9, 'Sahil', '123456@.com', '0987654321', 'mumbai', 'electronics', 'DNMPS', NULL, NULL, 'A', ''),
(10, 'Akshay', '123456@.com', '0987654321', 'pune', 'electronics', 'DNMPS', NULL, NULL, '', ''),
(11, 'Akash', '123456@.com', '0987654321', 'pune', 'public speaking', 'DNMPS', NULL, NULL, '', ''),
(12, 'Harsh', '123456@.com', '0987654321', 'mumbai', 'public speaking', 'DNMPS', NULL, NULL, '', ''),
(13, 'Rohan', '123456@.com', '0987654321', 'mumbai', 'visual arts', 'DNMPS', NULL, NULL, '', ''),
(14, 'Soham', '123456@.com', '0987654321', 'mumbai', 'frisbee', 'DNMPS', NULL, NULL, '', ''),
(15, 'Sunita', '123456@.com', '0987654321', 'mumbai', 'school manager', 'DNMPS', NULL, NULL, '', ''),
(16, 'Priya', '123456@.com', '0987654321', 'pune', 'visual arts', 'DNMPS', NULL, NULL, '', ''),
(17, 'Sanobar', '123456@.com', '0987654321', 'pune', 'school manager', 'DNMPS', NULL, NULL, '', ''),
(18, 'Riya', '123456@.com', '0987654321', 'pune', 'frisbee', 'DNMPS', NULL, NULL, '', ''),
(19, 'Tina', 'kg@.com', '1234567890', 'pune', 'coding', 'ABMPS', NULL, NULL, 'C', ''),
(20, 'Ujas', 'ujasitalia786@gmail.com', '0987654321', 'mumbai', 'dance', 'LNMPS', NULL, NULL, 'B', 'Yes'),
(21, 'Tanvi', '123@.com', '1234567890', 'pune', 'dance', 'ABMPS', NULL, NULL, 'C', ''),
(22, 'Dhavan', 'dkanakia34@gmail.com', '0987654321', 'mumbai', 'coding', 'DNMPS', NULL, NULL, 'B', 'no'),
(23, 'Dhrumit', '12345@.com', '0987654321', 'mumbai', 'drama', 'ABMPS', NULL, NULL, 'A', ''),
(24, 'Meet', '123456@.com', '0987654321', 'mumbai', 'music', 'DNMPS', NULL, NULL, '', ''),
(25, 'Dev', '123456@.com', '0987654321', 'pune', 'drama', 'ABMPS', NULL, NULL, '', ''),
(26, 'Isha', '123456@.com', '0987654321', 'pune', 'music', 'DNMPS', NULL, NULL, '', ''),
(27, 'Raj', '123456@.com', '0987654321', 'mumbai', 'electronics', 'ABMPS', NULL, NULL, '', ''),
(28, 'Rahul', '123456@.com', '0987654321', 'pune', 'electronics', 'ABMPS', NULL, NULL, '', ''),
(29, 'Pandey', '123456@.com', '0987654321', 'pune', 'public speaking', 'ABMPS', NULL, NULL, '', ''),
(30, 'BJ', '123456@.com', '0987654321', 'mumbai', 'public speaking', 'ABMPS', NULL, NULL, '', ''),
(31, 'Madhuri', '123456@.com', '0987654321', 'mumbai', 'visual arts', 'ABMPS', NULL, NULL, '', ''),
(32, 'Kumkum', '123456@.com', '0987654321', 'mumbai', 'frisbee', 'ABMPS', NULL, NULL, '', ''),
(33, 'Sachi', '123456@.com', '0987654321', 'mumbai', 'school manager', 'ABMPS', NULL, NULL, '', ''),
(34, 'Sp', '123456@.com', '0987654321', 'pune', 'visual arts', 'ABMPS', NULL, NULL, '', ''),
(35, 'ABK', '123456@.com', '0987654321', 'pune', 'school manager', 'ABMPS', NULL, NULL, '', ''),
(36, 'Vijal', '123456@.com', '0987654321', 'pune', 'frisbee', 'ABMPS', NULL, NULL, '', ''),
(37, 'Ayushi', 'kg@.com', '1234567890', 'pune', 'coding', 'ABMPS', NULL, NULL, 'C', ''),
(38, 'Himani', '123456@.com', '0987654321', 'mumbai', 'frisbee', 'WBMPS', NULL, NULL, '', ''),
(39, 'Parthivi', '123456@.com', '0987654321', 'mumbai', 'frisbee', 'WBMPS', NULL, NULL, '', ''),
(40, 'Shreeya', '123456@.com', '0987654321', 'pune', 'frisbee', 'WBMPS', NULL, NULL, '', ''),
(41, 'Aarohi', '123456@.com', '0987654321', 'pune', 'music', 'WBMPS', NULL, NULL, '', ''),
(42, 'Saumya', '123456@.com', '0987654321', 'pune', 'electronics', 'WBMPS', NULL, NULL, '', ''),
(43, 'Krisha', '123456@.com', '0987654321', 'mumbai', 'public speaking', 'WBMPS', NULL, NULL, '', ''),
(44, 'Pranav', '123456@.com', '0987654321', 'pune', 'school manager', 'WBMPS', NULL, NULL, '', ''),
(45, 'Karina', '123456@.com', '0987654321', 'pune', 'visual arts', 'WBMPS', NULL, NULL, '', ''),
(46, 'Preeti', 'kg@.com', '1234567890', 'pune', 'coding', 'WBMPS', NULL, NULL, '', ''),
(47, 'Gambani', '12345@.com', '0987654321', 'mumbai', 'drama', 'WBMPS', NULL, NULL, '', ''),
(48, 'Deep', '1234@.com', '0987654321', 'mumbai', 'coding', 'WBMPS', NULL, NULL, '', ''),
(49, 'Neal', '123456@.com', '0987654321', 'pune', 'school manager', 'WBMPS', NULL, NULL, '', ''),
(50, 'Sonia', '123@.com', '1234567890', 'pune', 'dance', 'WBMPS', NULL, NULL, '', ''),
(51, 'Jainam', 'uj@.com', '0987654321', 'mumbai', 'dance', 'ABMPS', NULL, NULL, 'C', ' no');

-- --------------------------------------------------------

--
-- Table structure for table `form responses 1`
--

CREATE TABLE `form responses 1` (
  `A` varchar(9) DEFAULT NULL,
  `B` varchar(13) DEFAULT NULL,
  `C` varchar(4) DEFAULT NULL,
  `D` varchar(12) DEFAULT NULL,
  `E` varchar(13) DEFAULT NULL,
  `F` varchar(17) DEFAULT NULL,
  `G` varchar(15) DEFAULT NULL,
  `H` varchar(25) DEFAULT NULL,
  `I` varchar(15) DEFAULT NULL,
  `J` varchar(4) DEFAULT NULL,
  `K` varchar(11) DEFAULT NULL,
  `L` varchar(17) DEFAULT NULL,
  `M` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form responses 1`
--

INSERT INTO `form responses 1` (`A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`, `M`) VALUES
('Timestamp', 'Email address', 'Name', 'Phone number', 'Vertical/Club', 'Reason of Absence', 'Date of Absence', 'Do you have a substitute?', 'Substitute Name', 'City', 'School Name', 'Substitute Number', 'Substitutes Email ID');

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `club` varchar(50) DEFAULT NULL,
  `school` varchar(10) DEFAULT NULL,
  `Sr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected`
--

INSERT INTO `selected` (`name`, `email`, `phone`, `city`, `club`, `school`, `Sr`) VALUES
('Jainam', 'uj@.com', '0987654321', 'mumbai', 'dance', 'LNMPS', 2),
('Ujas', 'ujasitalia786@gmail.com', '0987654321', 'mumbai', 'dance', 'LNMPS', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`Sr`),
  ADD UNIQUE KEY `Sr` (`Sr`);

--
-- Indexes for table `selected`
--
ALTER TABLE `selected`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `selected`
--
ALTER TABLE `selected`
  MODIFY `Sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
