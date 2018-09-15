-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 05:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `ID` int(5) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `hno` varchar(10) NOT NULL,
  `strname` varchar(25) NOT NULL,
  `are` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `token` varchar(8) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `donoreli`
--

CREATE TABLE `donoreli` (
  `ID` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `weight` int(2) NOT NULL,
  `diabetes` varchar(3) NOT NULL DEFAULT 'No',
  `bp` varchar(3) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `ID` int(5) NOT NULL,
  `hospname` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `userid` varchar(15) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `are` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `tele` bigint(10) NOT NULL,
  `ownname` varchar(20) DEFAULT NULL,
  `ownmob` bigint(10) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `year` int(4) DEFAULT NULL,
  `recog` varchar(3) NOT NULL,
  `token` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donoreli`
--
ALTER TABLE `donoreli`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donoreli`
--
ALTER TABLE `donoreli`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
