-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 09:18 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(20) NOT NULL,
  `secured_password` char(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `username`, `password`, `secured_password`) VALUES
(1, 'Ifeoluwa', 'Sobogun', 's_ifeoluwa', 'babalola', '5d43e3021468a1fe5b8b4f019f8c6503ec8a9a8e'),
(2, 'Kendrick', 'Lamar', 'k_lamar', 'damn', '1f45855e4097abe90bfd5187b23d141a00d529ec');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(15) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `teacher_id`) VALUES
(1, 'Primary 1', 1),
(2, 'Primary 2', 2),
(3, 'Primary 3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `verbal` int(11) NOT NULL,
  `quantitative` int(11) NOT NULL,
  `vocational` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `social_studies` int(11) NOT NULL,
  `home_economics` int(11) NOT NULL,
  `final` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`student_id`, `english`, `math`, `verbal`, `quantitative`, `vocational`, `science`, `social_studies`, `home_economics`, `final`) VALUES
(2, 87, 98, 90, 97, 87, 82, 85, 98, 90.5),
(3, 87, 85, 86, 90, 76, 78, 91, 89, 85.25),
(6, 45, 98, 76, 54, 34, 90, 57, 67, 65.125),
(7, 98, 97, 99, 92, 91, 90, 95, 96, 94.75),
(1, 98, 99, 97, 98, 99, 97, 96, 99, 97.875);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `secured_password` char(40) NOT NULL,
  `age` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `user_name`, `password`, `secured_password`, `age`, `class_id`, `teacher_id`, `reg_date`) VALUES
(1, 'Ifeoluwa', 'Sobogun', 's_ifeoluwa', 'wande', '2de01eb48f1b35e6bd3549f0773d397c59de767c', 25, 2, 1, '2017-06-21 13:28:35'),
(2, 'Kendrick', 'Lamar', '', '', '', 30, 2, 1, '2017-06-21 20:52:52'),
(3, 'James', 'Babalola', 'j_babs', '05b0afd', '8851d55f0ce11aaca71471a1bebf801c1724940c', 24, 2, 1, '2017-06-25 23:25:05'),
(4, 'Russell', 'Westbrook', 'r_westbrook', '3cef96d', '99ddec45fa8863de238163488747ab4eaa382599', 22, 2, 1, '2017-06-25 23:28:36'),
(5, 'Travis', 'Scott', 't_scott', 'd97abcf', 'c422fb38e821fb400241f7999c0bd5d959d32660', 21, 2, 1, '2017-06-25 23:36:40'),
(6, 'Victor', 'Oladipo', 'v_oladipo', 'd54c1ac', '3af5efecc8a68a3ccb064f01357fb6ac21cbb02c', 24, 2, 1, '2017-06-26 00:39:13'),
(7, 'Yara', 'Shahidi', 'y_shahidi', '4ae1e2b', '298225618f2f0702c22dd242970c8797c10c7d44', 18, 2, 1, '2017-06-26 10:42:23'),
(8, 'Anthony', 'Martial', 'a_martial', 'eb9fc34', 'b4d7c41cf1568570e9258ac39bdf6f08d576f733', 21, 2, 1, '2017-06-26 13:01:29'),
(9, 'A$ap', 'Rocky', 'a_rocky', '539f0ff', '70efa7d17278edf56cc482b0a8a9cdd97b588aaf', 26, 2, 1, '2017-06-26 18:18:32'),
(10, 'Ogooluwa', 'Kassim', 'o_kassim', 'f0ff2ea', 'd80092434461de2c89f38481cf96ca1d9edc3f7c', 25, 3, 2, '2017-06-28 12:38:02'),
(11, 'Ife', 'Sobogun', 'i_sobogun', '3891b14', 'a4d575837465071ad9422c86a8e3b6da9442c085', 27, 2, 1, '2017-11-06 22:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  `password` char(20) NOT NULL,
  `secured_password` char(40) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `first_name`, `last_name`, `username`, `class_id`, `password`, `secured_password`, `category`) VALUES
(1, 'Ifeoluwa', 'Sobogun', 's_ifeoluwa', 2, 'ifeoluwa', '49067de093cdb682b8bbaa15d690943f3a1533d4', 'Assistant'),
(2, 'Yara', 'Shahidi', 'y_shahidi', 3, 'yara', 'c668a303d1dc81d685def8a27cde994dc8a414de', 'Main'),
(3, 'Russell', 'Westbrook', 'r_westbrook', 5, 'F4CF6B2', '86cb56875d382976346d2aa597ddb9089f36c8b3', 'Main');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
