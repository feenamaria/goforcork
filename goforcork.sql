-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2016 at 06:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goforcork`
--

-- --------------------------------------------------------

--
-- Table structure for table `corkdistribution`
--

CREATE TABLE `corkdistribution` (
  `id` int(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  `player1` varchar(20) NOT NULL,
  `player2` varchar(20) NOT NULL,
  `player3` varchar(20) NOT NULL,
  `player4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corkdistribution`
--

INSERT INTO `corkdistribution` (`id`, `date`, `player1`, `player2`, `player3`, `player4`) VALUES
(169, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(170, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(171, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(172, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(173, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(174, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(175, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(176, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(177, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(178, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(179, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(180, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(181, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(182, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(183, '2016-03-12', 'Karthik', 'Karthik', 'Karthik', 'Karthik'),
(184, '2016-03-12', 'Karthik', 'Karthik', 'Prakash', 'Sharmila');

-- --------------------------------------------------------

--
-- Table structure for table `corkpossession`
--

CREATE TABLE `corkpossession` (
  `id` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  `corkcnt` int(11) NOT NULL,
  `unitprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corkpossession`
--

INSERT INTO `corkpossession` (`id`, `memberid`, `corkcnt`, `unitprice`) VALUES
(1, 501, 100, 10),
(2, 501, 30, 12),
(3, 501, 10, 14),
(4, 502, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `corkusage`
--

CREATE TABLE `corkusage` (
  `id` int(11) NOT NULL,
  `memid` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `corkcnt` float NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberdetails`
--

CREATE TABLE `memberdetails` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobilenum` varchar(15) NOT NULL,
  `admin` varchar(10) NOT NULL,
  `sponsor` varchar(10) NOT NULL,
  `nboxes` int(5) NOT NULL,
  `ncorks` int(5) NOT NULL,
  `password` varchar(10) NOT NULL,
  `amountdue` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberdetails`
--

INSERT INTO `memberdetails` (`id`, `name`, `mobilenum`, `admin`, `sponsor`, `nboxes`, `ncorks`, `password`, `amountdue`) VALUES
(501, 'Karthik', '9500090857', 'no', 'yes', 10, 100, 'sponsor', '-200'),
(502, 'Gunasekar', '9884220870', 'no', 'yes', 3, 30, 'haiall', '100'),
(503, 'Rafiq', '9344418191', 'no', 'yes', 5, 50, 'sponsor', '500'),
(504, 'Sanjay', '7200489443', 'no', 'yes', 2, 20, 'hhhhh', '100'),
(505, 'Prakash', '9597912050', 'no', 'no', 0, 0, 'nil', '1000'),
(506, 'Mukund', '9677221469', 'no', 'no', 0, 0, 'nil', '1000'),
(507, 'Sharmila', '8807740450', 'no', 'no', 0, 0, 'nil', '-166'),
(508, 'Karikalan', '9994171818', 'no', 'no', 0, 0, 'nil', '1000'),
(509, 'Govarathanan', '8300008568', 'no', 'no', 0, 0, 'nil', '-1000'),
(510, 'Ramesh', '9790424273', 'no', 'no', 0, 0, 'nil', '1000'),
(511, 'Feena', '9176069012', 'yes', 'no', 0, 0, 'admin', '2000'),
(512, 'Manimegalai', '8428417733', 'no', 'no', 0, 0, 'nil', '1000'),
(513, 'Ranjima', '9585864966', 'no', 'no', 0, 0, 'nil', '1000'),
(514, 'Rasathi', '9952791911', 'no', 'no', 0, 0, 'nil', '1000'),
(515, 'Mouni', '9597501013', 'no', 'no', 0, 0, 'nil', '2000'),
(516, 'Revathy', '9791140087', 'no', 'no', 0, 0, 'nil', '2000'),
(517, 'Newmember', '9099898989', 'no', 'no', 0, 0, 'nil', 'nil'),
(520, 'Fz1', '9012345678', 'no', 'yes', 0, 0, 'nil', 'nil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corkdistribution`
--
ALTER TABLE `corkdistribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corkpossession`
--
ALTER TABLE `corkpossession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corkusage`
--
ALTER TABLE `corkusage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberdetails`
--
ALTER TABLE `memberdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corkdistribution`
--
ALTER TABLE `corkdistribution`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- AUTO_INCREMENT for table `corkpossession`
--
ALTER TABLE `corkpossession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `corkusage`
--
ALTER TABLE `corkusage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memberdetails`
--
ALTER TABLE `memberdetails`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=521;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
