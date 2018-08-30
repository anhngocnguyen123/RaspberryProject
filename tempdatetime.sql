-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 11:12 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempdatetime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `email`, `password`, `telephone`) VALUES
(1, 'Nguyen Van Teo', 'teonguyen', 'teonguyen@gmail.com', '123456789', '01557857894'),
(2, 'Nguyen Van Ty', 'tynguyen', 'tynguyen@gmail.com', '123456789', '015896758648');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `isDelete` int(1) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`id`, `date`, `isDelete`, `createdAt`) VALUES
(1, '2018-08-29', 0, '2018-08-29 10:02:00'),
(2, '2018-08-30', 0, '2018-08-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `temperaturedatetime`
--

CREATE TABLE `temperaturedatetime` (
  `id` int(11) NOT NULL,
  `dateId` int(11) NOT NULL,
  `timeId` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `humidity` int(11) NOT NULL,
  `isDelete` int(1) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temperaturedatetime`
--

INSERT INTO `temperaturedatetime` (`id`, `dateId`, `timeId`, `temperature`, `humidity`, `isDelete`, `createdAt`) VALUES
(1, 1, 1, 25, 65, 0, '2018-08-29 17:22:00'),
(2, 1, 2, 24, 55, 0, '2018-08-29 17:22:00'),
(3, 1, 3, 23, 65, 0, '2018-08-29 17:22:00'),
(4, 1, 4, 26, 70, 0, '2018-08-29 17:22:00'),
(5, 1, 5, 26, 50, 0, '2018-08-29 17:22:00'),
(6, 1, 6, 25, 65, 0, '2018-08-29 17:22:00'),
(7, 2, 1, 28, 58, 0, '2018-08-30 00:00:00'),
(8, 2, 2, 28, 54, 0, '2018-08-30 00:30:00'),
(9, 2, 25, 38, 45, 0, '2018-08-30 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tempperiod`
--

CREATE TABLE `tempperiod` (
  `id` int(11) NOT NULL,
  `namePeriod` enum('Morning','Afternoon') DEFAULT NULL,
  `maximumTemp` int(11) NOT NULL,
  `nomalTemp` int(11) NOT NULL,
  `isDelete` int(1) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tempperiod`
--

INSERT INTO `tempperiod` (`id`, `namePeriod`, `maximumTemp`, `nomalTemp`, `isDelete`, `createdAt`, `updatedAt`) VALUES
(1, 'Morning', 30, 28, 0, '2018-08-29 17:22:00', '2018-08-29 17:22:00'),
(2, 'Afternoon', 35, 32, 0, '2018-08-29 17:22:00', '2018-08-29 17:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL,
  `isDelete` int(1) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `time`, `isDelete`, `createdAt`) VALUES
(1, '00:00:00', 0, '2018-08-29 10:02:00'),
(2, '00:30:00', 0, '2018-08-29 10:02:00'),
(3, '01:00:00', 0, '2018-08-29 10:02:00'),
(4, '01:30:00', 0, '2018-08-29 10:02:00'),
(5, '02:00:00', 0, '2018-08-29 10:02:00'),
(6, '02:30:00', 0, '2018-08-29 10:02:00'),
(7, '03:00:00', 0, '2018-08-29 10:02:00'),
(8, '03:30:00', 0, '2018-08-29 10:02:00'),
(9, '04:00:00', 0, '2018-08-29 10:02:00'),
(10, '04:30:00', 0, '2018-08-29 10:02:00'),
(11, '05:00:00', 0, '2018-08-29 10:02:00'),
(12, '05:30:00', 0, '2018-08-29 10:02:00'),
(13, '06:00:00', 0, '2018-08-29 10:02:00'),
(14, '06:30:00', 0, '2018-08-29 10:02:00'),
(15, '07:00:00', 0, '2018-08-29 10:02:00'),
(16, '07:30:00', 0, '2018-08-29 10:02:00'),
(17, '08:00:00', 0, '2018-08-29 10:02:00'),
(18, '08:30:00', 0, '2018-08-29 10:02:00'),
(19, '09:00:00', 0, '2018-08-29 10:02:00'),
(20, '09:30:00', 0, '2018-08-29 10:02:00'),
(21, '10:00:00', 0, '2018-08-29 10:02:00'),
(22, '10:30:00', 0, '2018-08-29 10:02:00'),
(23, '11:00:00', 0, '2018-08-29 10:02:00'),
(24, '11:30:00', 0, '2018-08-29 10:02:00'),
(25, '12:00:00', 0, '2018-08-29 10:02:00'),
(26, '12:30:00', 0, '2018-08-29 10:02:00'),
(27, '13:00:00', 0, '2018-08-29 10:02:00'),
(28, '13:30:00', 0, '2018-08-29 10:02:00'),
(29, '14:00:00', 0, '2018-08-29 10:02:00'),
(30, '14:30:00', 0, '2018-08-29 10:02:00'),
(31, '15:00:00', 0, '2018-08-29 10:02:00'),
(32, '15:30:00', 0, '2018-08-29 10:02:00'),
(33, '16:00:00', 0, '2018-08-29 10:02:00'),
(34, '16:30:00', 0, '2018-08-29 10:02:00'),
(35, '17:00:00', 0, '2018-08-29 10:02:00'),
(36, '17:30:00', 0, '2018-08-29 10:02:00'),
(37, '18:00:00', 0, '2018-08-29 10:02:00'),
(38, '18:30:00', 0, '2018-08-29 10:02:00'),
(39, '19:00:00', 0, '2018-08-29 10:02:00'),
(40, '19:30:00', 0, '2018-08-29 10:02:00'),
(41, '20:00:00', 0, '2018-08-29 10:02:00'),
(42, '20:30:00', 0, '2018-08-29 10:02:00'),
(43, '21:00:00', 0, '2018-08-29 10:02:00'),
(44, '21:30:00', 0, '2018-08-29 10:02:00'),
(45, '22:00:00', 0, '2018-08-29 10:02:00'),
(46, '22:30:00', 0, '2018-08-29 10:02:00'),
(47, '23:00:00', 0, '2018-08-29 10:02:00'),
(48, '23:30:00', 0, '2018-08-29 10:02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temperaturedatetime`
--
ALTER TABLE `temperaturedatetime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dateId` (`dateId`),
  ADD KEY `timeId` (`timeId`);

--
-- Indexes for table `tempperiod`
--
ALTER TABLE `tempperiod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temperaturedatetime`
--
ALTER TABLE `temperaturedatetime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tempperiod`
--
ALTER TABLE `tempperiod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `temperaturedatetime`
--
ALTER TABLE `temperaturedatetime`
  ADD CONSTRAINT `temperaturedatetime_ibfk_1` FOREIGN KEY (`dateId`) REFERENCES `date` (`id`),
  ADD CONSTRAINT `temperaturedatetime_ibfk_2` FOREIGN KEY (`timeId`) REFERENCES `time` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
