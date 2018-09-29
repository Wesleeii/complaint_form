-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 07:56 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentitems`
--

DROP TABLE IF EXISTS `studentitems`;
CREATE TABLE IF NOT EXISTS `studentitems` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `matricNumber` varchar(7) NOT NULL,
  `course` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `serialNumber` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentitems`
--

INSERT INTO `studentitems` (`studentid`, `firstname`, `lastname`, `matricNumber`, `course`, `level`, `item`, `serialNumber`, `description`) VALUES
(1, 'Kendral', 'Lehm', '14/1823', 'Computer Science', '300', 'Laptop', '5CD32536GP', 'Black HP core i5 with Nvidia graphics cards. 8GB Ram'),
(2, 'Bunmi', 'Bayo', '15/2837', 'Accounting', '200', 'Fan', '35WFSGTDY', 'White in colour. Standing fan'),
(3, 'Beni', 'Tayo', '12/1928', 'Banking and Finance', '400', 'Kettle', '6GDBSM678584-8478', 'small in size with Black Hot Plate'),
(4, 'Wesley', 'Okuweh', '14/2837', 'Computer Technology', '400', 'Laptop', '5436ETG647657', 'Red colour with Radeon Graphics Card'),
(9, 'Muyi', 'Nehikhare', '14/3746', 'Computer Science', '400', 'laptop', '457VHSGDJS56', 'hp black corei7 8GB RAM'),
(10, 'wesley', 'okra', '15/2635', 'Accounting', '200', 'laptop', '435VSFGDTTEG', 'Black Hp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
