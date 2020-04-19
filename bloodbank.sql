-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2016 at 04:01 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `Cost` int(5) NOT NULL,
  `Code` varchar(8) NOT NULL,
  `Type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`Cost`, `Code`, `Type`) VALUES
(1200, 'BJ01', 'O+ve'),
(1200, 'BJ01', 'O+ve');

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `username` text NOT NULL,
  `Age` int(10) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Donner_ID` int(6) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`username`, `Age`, `Phone_Number`, `Donner_ID`, `Sex`, `Address`) VALUES
('Shahriar Al Nahian', 23, 1677065527, 160701, 'Male', 'Wirlessgate,Mohakhali'),
('Asif Ali', 24, 1681583033, 160702, 'Male', 'R:9, H:10, Nikunjo-2, Dhaka'),
('Sakibul Islam', 23, 1673173921, 160703, 'Male', 'Kalshi, Mirpur-11, Dhaka');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
