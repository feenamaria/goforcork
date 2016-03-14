-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2016 at 09:54 PM
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
  `player4` varchar(20) NOT NULL,
  `sponsorid` int(11) NOT NULL,
  `corkunitprice` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corkdistribution`
--

INSERT INTO `corkdistribution` (`id`, `date`, `player1`, `player2`, `player3`, `player4`, `sponsorid`, `corkunitprice`) VALUES
(193, '2016-03-15', '514', '512', '511', '511', 501, 12);

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
(1, 501, 92, 10),
(2, 501, 29, 12),
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
  `sponsorid` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corkusage`
--

INSERT INTO `corkusage` (`id`, `memid`, `date`, `corkcnt`, `sponsorid`, `price`) VALUES
(33, 514, '2016-03-15', 0.25, 501, 3),
(34, 512, '2016-03-15', 0.25, 501, 3),
(35, 511, '2016-03-15', 0.5, 501, 6);

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
  `password` varchar(10) NOT NULL,
  `amountdue` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberdetails`
--

INSERT INTO `memberdetails` (`id`, `name`, `mobilenum`, `admin`, `sponsor`, `password`, `amountdue`) VALUES
(501, 'Karthik', '9500090857', 'no', 'yes', 'password', '-100'),
(502, 'Gunasekar', '9884220870', 'no', 'yes', 'haiall', '100'),
(503, 'Rafiq', '9344418191', 'no', 'yes', 'sponsor', '500'),
(504, 'Sanjay', '7200489443', 'no', 'yes', 'hhhhh', '100'),
(505, 'Prakash', '9597912050', 'no', 'no', 'nil', '1000'),
(506, 'Mukund', '9677221469', 'no', 'no', 'nil', '1000'),
(507, 'Sharmila', '8807740450', 'no', 'no', 'nil', '-166'),
(508, 'Karikalan', '9994171818', 'no', 'no', 'nil', '1000'),
(509, 'Govarathanan', '8300008568', 'no', 'no', 'nil', '-1000'),
(510, 'Ramesh', '9790424273', 'no', 'no', 'nil', '1000'),
(511, 'Feena', '9176069012', 'yes', 'no', 'admin', '2000'),
(512, 'Manimegalai', '8428417733', 'no', 'no', 'nil', '1000'),
(513, 'Ranjima', '9585864966', 'no', 'no', 'nil', '1000'),
(514, 'Rasathi', '9952791911', 'no', 'no', 'nil', '1000'),
(515, 'Mouni', '9597501013', 'no', 'no', 'nil', '2000'),
(516, 'Revathy', '9791140087', 'no', 'no', 'nil', '2000'),
(517, 'Newmember', '9099898989', 'no', 'no', 'nil', 'nil'),
(520, 'Fz1', '9012345678', 'no', 'yes', 'password', 'nil'),
(521, 'Fz2', '7200489440', 'no', 'yes', 'sponsor', 'nil');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `corkpossession`
--
ALTER TABLE `corkpossession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `corkusage`
--
ALTER TABLE `corkusage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `memberdetails`
--
ALTER TABLE `memberdetails`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
