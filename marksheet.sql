create database marksheet;
use marksheet;

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 04:40 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marksheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `aid` int(11) NOT NULL,
  `aname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `aemail` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aid`, `aname`, `username`, `password`, `aemail`) VALUES
(1, 'Sabin Pathak', 'sabin.pathak', 'sabin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `sroll` varchar(30) NOT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `semail` varchar(30) DEFAULT NULL,
  `semester` varchar(30) NOT NULL,
  `term` varchar(30) NOT NULL,
  `toc` int(11) DEFAULT NULL,
  `sad` int(11) DEFAULT NULL,
  `dbms` int(11) DEFAULT NULL,
  `cg` int(11) DEFAULT NULL,
  `cs` int(11) DEFAULT NULL,
  `tw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sroll`, `sname`, `semail`, `semester`, `term`, `toc`, `sad`, `dbms`, `cg`, `cs`, `tw`) VALUES
('0427', 'Sabin Pathak', 'sabin.pathak@deerwalk.edu.np', 'Sem IV', 'Mid-term', 98, 68, 56, 65, 56, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
 ADD PRIMARY KEY (`sroll`,`semester`,`term`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
