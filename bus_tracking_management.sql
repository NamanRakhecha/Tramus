-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 11:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_tracking_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('8XfXlezEQ+ziB+zDw3LoSE51DXlcPdnlW8VOzKZdDDs=', 'dl5r7bDDTBD/1mfz8LfgsYrHu2hs/6xMBihj/TELpFQ='),
('A3KVeF+2z4tPh30nAgB0hP2ZdT0pY1jwwJfNFtJCTek=', '6NMwNpxak785/aMMcilsueo240DIuBHOb4GveQlfdso='),
('kYocHVEGgpjoxy5YvzCrwzLQNGdhoYwmjk04gAkilMM=', 'kFnhZoo6RmM7wA/5STgbrqaiQE1RqDun1Jf6u5ed4qA='),
('vbM8AE+Q48pxbauWOPTWp3G0vgROY2OVUylGY7eDhPs=', '8ugLPOlMvB7s9wlx6rKGlUCyv0KmRsddERRU2yFvREk='),
('vZtnDOGtPqV13JIYO1Ev1/8e95ReBdIIDZ/bI2DWmgM=', 'dzFNqAAN3hd56OAtUQ61Wrj4n8c2Yv4d6ic6ltzYwy0=');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE IF NOT EXISTS `buses` (
  `id_reg_no` varchar(15) NOT NULL,
  `bus_name` varchar(30) NOT NULL,
  `drivers_id` int(40) NOT NULL,
  `stops_id` int(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_reg_no`),
  KEY `drivers_id` (`drivers_id`),
  KEY `stops_id` (`stops_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id_reg_no`, `bus_name`, `drivers_id`, `stops_id`, `status`) VALUES
('GA08FR3213', 'Flying Rani', 120, 22, 1),
('GA08JR2456', 'Jolliz 2', 119, 23, 0),
('GA08SV5843', 'Sai travels', 118, 41, 0),
('GA08TA8095', 'Tanvisha Travels', 121, 24, 0),
('GA08VP9505', 'Amalia', 117, 37, 0),
('GA08VT4284', 'Jolliz', 101, 21, 1),
('GA08ZT7707', 'Manju Travels', 102, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_images`
--

CREATE TABLE IF NOT EXISTS `bus_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_id` varchar(15) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bus_id` (`bus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bus_images`
--

INSERT INTO `bus_images` (`id`, `bus_id`, `path`) VALUES
(1, '1', 'http://localhost/Tramus/image repository/bus_images/1.jpg'),
(2, '2', 'http://localhost/Tramus/image repository/bus_images/2.jpg'),
(3, 'GA08ZT7707', 'image repository/bus_images/3.jpg'),
(4, '4', 'http://localhost/Tramus/image repository/bus_images/4.jpg'),
(5, '5', 'http://localhost/Tramus/image repository/bus_images/5.jpg'),
(6, '6', 'http://localhost/Tramus/image repository/bus_images/6.jpg'),
(7, '7', 'http://localhost/Tramus/image repository/bus_images/7.jpg'),
(8, 'GA08FR3213', 'http://localhost/Tramus/image repository/bus_images/8.jpg'),
(11, 'GA08VT4284', 'image repository/bus_images/11.jpg\n'),
(12, 'GA08SV5843', 'http://localhost/Tramus/image repository/bus_images/9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bus_location`
--

CREATE TABLE IF NOT EXISTS `bus_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busid` varchar(15) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `busid` (`busid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bus_location`
--

INSERT INTO `bus_location` (`id`, `busid`, `lat`, `lng`) VALUES
(1, 'GA08VT4284', 15.2675, 74.0373);

-- --------------------------------------------------------

--
-- Table structure for table `bus_timing`
--

CREATE TABLE IF NOT EXISTS `bus_timing` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `stop_order_id` int(15) NOT NULL,
  `bus_id` varchar(15) NOT NULL,
  `bus_timings` time(6) NOT NULL,
  `trip` int(10) NOT NULL,
  `trip_direction` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stop_order_id` (`stop_order_id`),
  KEY `bus_id` (`bus_id`),
  KEY `stop_order_id_2` (`stop_order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=478 ;

--
-- Dumping data for table `bus_timing`
--

INSERT INTO `bus_timing` (`id`, `stop_order_id`, `bus_id`, `bus_timings`, `trip`, `trip_direction`) VALUES
(1, 20, 'GA08VT4284', '08:00:00.000000', 1, 0),
(2, 21, 'GA08VT4284', '08:05:00.000000', 1, 0),
(3, 22, 'GA08VT4284', '08:10:00.000000', 1, 0),
(4, 23, 'GA08VT4284', '08:15:00.000000', 1, 0),
(5, 24, 'GA08VT4284', '08:20:00.000000', 1, 0),
(6, 25, 'GA08VT4284', '08:25:00.000000', 1, 0),
(7, 26, 'GA08VT4284', '08:30:00.000000', 1, 0),
(8, 27, 'GA08VT4284', '08:35:00.000000', 1, 0),
(9, 28, 'GA08VT4284', '08:40:00.000000', 1, 0),
(10, 29, 'GA08VT4284', '08:45:00.000000', 1, 0),
(11, 30, 'GA08VT4284', '08:50:00.000000', 1, 0),
(12, 31, 'GA08VT4284', '08:55:00.000000', 1, 0),
(13, 32, 'GA08VT4284', '09:00:00.000000', 1, 0),
(14, 33, 'GA08VT4284', '09:05:00.000000', 1, 0),
(15, 34, 'GA08VT4284', '09:10:00.000000', 1, 0),
(16, 35, 'GA08VT4284', '09:15:00.000000', 1, 0),
(17, 36, 'GA08VT4284', '09:20:00.000000', 1, 0),
(18, 37, 'GA08VT4284', '09:25:00.000000', 1, 0),
(19, 38, 'GA08VT4284', '09:30:00.000000', 1, 0),
(20, 39, 'GA08VT4284', '09:35:00.000000', 1, 0),
(21, 40, 'GA08VT4284', '09:40:00.000000', 1, 0),
(22, 41, 'GA08VT4284', '09:45:00.000000', 1, 0),
(23, 40, 'GA08VT4284', '11:00:00.000000', 1, 1),
(24, 39, 'GA08VT4284', '11:05:00.000000', 1, 1),
(25, 38, 'GA08VT4284', '11:10:00.000000', 1, 1),
(26, 37, 'GA08VT4284', '11:15:00.000000', 1, 1),
(27, 36, 'GA08VT4284', '11:20:00.000000', 1, 1),
(28, 35, 'GA08VT4284', '11:25:00.000000', 1, 1),
(29, 34, 'GA08VT4284', '11:30:00.000000', 1, 1),
(30, 33, 'GA08VT4284', '11:35:00.000000', 1, 1),
(31, 32, 'GA08VT4284', '11:40:00.000000', 1, 1),
(32, 31, 'GA08VT4284', '11:45:00.000000', 1, 1),
(33, 30, 'GA08VT4284', '11:50:00.000000', 1, 1),
(34, 29, 'GA08VT4284', '11:55:00.000000', 1, 1),
(35, 28, 'GA08VT4284', '12:00:00.000000', 1, 1),
(36, 27, 'GA08VT4284', '12:05:00.000000', 1, 1),
(37, 26, 'GA08VT4284', '12:10:00.000000', 1, 1),
(38, 25, 'GA08VT4284', '12:15:00.000000', 1, 1),
(39, 24, 'GA08VT4284', '12:20:00.000000', 1, 1),
(40, 23, 'GA08VT4284', '12:25:00.000000', 1, 1),
(41, 22, 'GA08VT4284', '12:30:00.000000', 1, 1),
(42, 21, 'GA08VT4284', '12:35:00.000000', 1, 1),
(43, 20, 'GA08VT4284', '12:40:00.000000', 1, 1),
(45, 20, 'GA08VT4284', '14:00:00.000000', 2, 0),
(46, 21, 'GA08VT4284', '14:05:00.000000', 2, 0),
(47, 22, 'GA08VT4284', '14:10:00.000000', 2, 0),
(48, 23, 'GA08VT4284', '14:15:00.000000', 2, 0),
(49, 24, 'GA08VT4284', '14:20:00.000000', 2, 0),
(50, 25, 'GA08VT4284', '14:25:00.000000', 2, 0),
(51, 26, 'GA08VT4284', '14:30:00.000000', 2, 0),
(52, 27, 'GA08VT4284', '14:35:00.000000', 2, 0),
(53, 28, 'GA08VT4284', '14:40:00.000000', 2, 0),
(54, 29, 'GA08VT4284', '14:45:00.000000', 2, 0),
(55, 30, 'GA08VT4284', '14:50:00.000000', 2, 0),
(56, 31, 'GA08VT4284', '14:55:00.000000', 2, 0),
(57, 32, 'GA08VT4284', '15:00:00.000000', 2, 0),
(58, 33, 'GA08VT4284', '15:05:00.000000', 2, 0),
(59, 34, 'GA08VT4284', '15:10:00.000000', 2, 0),
(60, 35, 'GA08VT4284', '15:15:00.000000', 2, 0),
(61, 36, 'GA08VT4284', '15:20:00.000000', 2, 0),
(62, 37, 'GA08VT4284', '15:25:00.000000', 2, 0),
(63, 38, 'GA08VT4284', '15:30:00.000000', 2, 0),
(64, 39, 'GA08VT4284', '15:35:00.000000', 2, 0),
(65, 40, 'GA08VT4284', '15:40:00.000000', 2, 0),
(66, 41, 'GA08VT4284', '15:45:00.000000', 2, 0),
(67, 40, 'GA08VT4284', '17:00:00.000000', 2, 1),
(68, 39, 'GA08VT4284', '17:05:00.000000', 2, 1),
(69, 38, 'GA08VT4284', '17:10:00.000000', 2, 1),
(70, 37, 'GA08VT4284', '17:15:00.000000', 2, 1),
(71, 36, 'GA08VT4284', '17:20:00.000000', 2, 1),
(72, 35, 'GA08VT4284', '17:25:00.000000', 2, 1),
(73, 34, 'GA08VT4284', '17:30:00.000000', 2, 1),
(74, 33, 'GA08VT4284', '17:35:00.000000', 2, 1),
(75, 32, 'GA08VT4284', '17:40:00.000000', 2, 1),
(76, 31, 'GA08VT4284', '17:45:00.000000', 2, 1),
(77, 30, 'GA08VT4284', '17:50:00.000000', 2, 1),
(78, 29, 'GA08VT4284', '17:55:00.000000', 2, 1),
(79, 28, 'GA08VT4284', '18:00:00.000000', 2, 1),
(80, 27, 'GA08VT4284', '18:05:00.000000', 2, 1),
(81, 26, 'GA08VT4284', '18:10:00.000000', 2, 1),
(82, 25, 'GA08VT4284', '18:15:00.000000', 2, 1),
(83, 24, 'GA08VT4284', '18:20:00.000000', 2, 1),
(84, 23, 'GA08VT4284', '18:25:00.000000', 2, 1),
(85, 22, 'GA08VT4284', '18:30:00.000000', 2, 1),
(86, 21, 'GA08VT4284', '18:35:00.000000', 2, 1),
(87, 20, 'GA08VT4284', '18:40:00.000000', 2, 1),
(89, 20, 'GA08ZT7707', '09:00:00.000000', 1, 0),
(90, 21, 'GA08ZT7707', '09:05:00.000000', 1, 0),
(91, 22, 'GA08ZT7707', '09:10:00.000000', 1, 0),
(92, 23, 'GA08ZT7707', '09:15:00.000000', 1, 0),
(93, 24, 'GA08ZT7707', '09:20:00.000000', 1, 0),
(94, 25, 'GA08ZT7707', '09:25:00.000000', 1, 0),
(95, 26, 'GA08ZT7707', '09:30:00.000000', 1, 0),
(96, 27, 'GA08ZT7707', '09:35:00.000000', 1, 0),
(97, 28, 'GA08ZT7707', '09:40:00.000000', 1, 0),
(98, 29, 'GA08ZT7707', '09:45:00.000000', 1, 0),
(99, 30, 'GA08ZT7707', '09:50:00.000000', 1, 0),
(100, 31, 'GA08ZT7707', '09:55:00.000000', 1, 0),
(101, 32, 'GA08ZT7707', '10:00:00.000000', 1, 0),
(102, 33, 'GA08ZT7707', '10:05:00.000000', 1, 0),
(103, 34, 'GA08ZT7707', '10:10:00.000000', 1, 0),
(104, 35, 'GA08ZT7707', '10:15:00.000000', 1, 0),
(105, 36, 'GA08ZT7707', '10:20:00.000000', 1, 0),
(106, 37, 'GA08ZT7707', '10:25:00.000000', 1, 0),
(107, 38, 'GA08ZT7707', '10:30:00.000000', 1, 0),
(108, 39, 'GA08ZT7707', '10:35:00.000000', 1, 0),
(109, 40, 'GA08ZT7707', '10:40:00.000000', 1, 0),
(110, 41, 'GA08ZT7707', '10:45:00.000000', 1, 0),
(111, 40, 'GA08ZT7707', '12:00:00.000000', 1, 1),
(112, 39, 'GA08ZT7707', '12:05:00.000000', 1, 1),
(113, 38, 'GA08ZT7707', '12:10:00.000000', 1, 1),
(114, 37, 'GA08ZT7707', '12:15:00.000000', 1, 1),
(115, 36, 'GA08ZT7707', '12:20:00.000000', 1, 1),
(116, 35, 'GA08ZT7707', '12:25:00.000000', 1, 1),
(117, 34, 'GA08ZT7707', '12:30:00.000000', 1, 1),
(118, 33, 'GA08ZT7707', '12:35:00.000000', 1, 1),
(119, 32, 'GA08ZT7707', '12:40:00.000000', 1, 1),
(120, 31, 'GA08ZT7707', '12:45:00.000000', 1, 1),
(121, 30, 'GA08ZT7707', '12:50:00.000000', 1, 1),
(122, 29, 'GA08ZT7707', '12:55:00.000000', 1, 1),
(123, 28, 'GA08ZT7707', '13:00:00.000000', 1, 1),
(124, 27, 'GA08ZT7707', '13:05:00.000000', 1, 1),
(125, 26, 'GA08ZT7707', '13:10:00.000000', 1, 1),
(126, 25, 'GA08ZT7707', '13:15:00.000000', 1, 1),
(127, 24, 'GA08ZT7707', '13:20:00.000000', 1, 1),
(128, 23, 'GA08ZT7707', '13:25:00.000000', 1, 1),
(129, 22, 'GA08ZT7707', '13:30:00.000000', 1, 1),
(130, 21, 'GA08ZT7707', '13:35:00.000000', 1, 1),
(131, 20, 'GA08ZT7707', '13:40:00.000000', 1, 1),
(133, 20, 'GA08ZT7707', '15:00:00.000000', 2, 0),
(134, 21, 'GA08ZT7707', '15:05:00.000000', 2, 0),
(135, 22, 'GA08ZT7707', '15:10:00.000000', 2, 0),
(136, 23, 'GA08ZT7707', '15:15:00.000000', 2, 0),
(137, 24, 'GA08ZT7707', '15:20:00.000000', 2, 0),
(138, 25, 'GA08ZT7707', '15:25:00.000000', 2, 0),
(139, 26, 'GA08ZT7707', '15:30:00.000000', 2, 0),
(140, 27, 'GA08ZT7707', '15:35:00.000000', 2, 0),
(141, 28, 'GA08ZT7707', '15:40:00.000000', 2, 0),
(142, 29, 'GA08ZT7707', '15:45:00.000000', 2, 0),
(143, 30, 'GA08ZT7707', '15:50:00.000000', 2, 0),
(144, 31, 'GA08ZT7707', '15:55:00.000000', 2, 0),
(145, 32, 'GA08ZT7707', '16:00:00.000000', 2, 0),
(146, 33, 'GA08ZT7707', '16:05:00.000000', 2, 0),
(147, 34, 'GA08ZT7707', '16:10:00.000000', 2, 0),
(148, 35, 'GA08ZT7707', '16:15:00.000000', 2, 0),
(149, 36, 'GA08ZT7707', '16:20:00.000000', 2, 0),
(150, 37, 'GA08ZT7707', '16:25:00.000000', 2, 0),
(151, 38, 'GA08ZT7707', '16:30:00.000000', 2, 0),
(152, 39, 'GA08ZT7707', '16:35:00.000000', 2, 0),
(153, 40, 'GA08ZT7707', '16:40:00.000000', 2, 0),
(154, 41, 'GA08ZT7707', '16:45:00.000000', 2, 0),
(155, 40, 'GA08ZT7707', '18:00:00.000000', 2, 1),
(156, 39, 'GA08ZT7707', '18:05:00.000000', 2, 1),
(157, 38, 'GA08ZT7707', '18:10:00.000000', 2, 1),
(158, 37, 'GA08ZT7707', '18:15:00.000000', 2, 1),
(159, 36, 'GA08ZT7707', '18:20:00.000000', 2, 1),
(160, 35, 'GA08ZT7707', '18:25:00.000000', 2, 1),
(161, 34, 'GA08ZT7707', '18:30:00.000000', 2, 1),
(162, 33, 'GA08ZT7707', '18:35:00.000000', 2, 1),
(163, 32, 'GA08ZT7707', '18:40:00.000000', 2, 1),
(164, 31, 'GA08ZT7707', '18:45:00.000000', 2, 1),
(165, 30, 'GA08ZT7707', '18:50:00.000000', 2, 1),
(166, 29, 'GA08ZT7707', '18:55:00.000000', 2, 1),
(167, 28, 'GA08ZT7707', '19:00:00.000000', 2, 1),
(168, 27, 'GA08ZT7707', '19:05:00.000000', 2, 1),
(169, 26, 'GA08ZT7707', '19:10:00.000000', 2, 1),
(170, 25, 'GA08ZT7707', '19:15:00.000000', 2, 1),
(171, 24, 'GA08ZT7707', '19:20:00.000000', 2, 1),
(172, 23, 'GA08ZT7707', '19:25:00.000000', 2, 1),
(173, 22, 'GA08ZT7707', '19:30:00.000000', 2, 1),
(174, 21, 'GA08ZT7707', '19:35:00.000000', 2, 1),
(175, 20, 'GA08ZT7707', '19:40:00.000000', 2, 1),
(437, 41, 'GA08ZT7707', '12:05:00.000000', 1, 1),
(438, 41, 'GA08ZT7707', '17:55:00.000000', 2, 1),
(439, 41, 'GA08VT4284', '10:55:00.000000', 1, 1),
(440, 41, 'GA08VT4284', '16:55:00.000000', 2, 1),
(441, 42, 'GA08FR3213', '08:15:00.000000', 1, 0),
(442, 43, 'GA08FR3213', '08:17:00.000000', 1, 0),
(443, 44, 'GA08FR3213', '08:19:00.000000', 1, 0),
(444, 45, 'GA08FR3213', '08:23:00.000000', 1, 0),
(445, 46, 'GA08FR3213', '08:25:00.000000', 1, 0),
(446, 47, 'GA08FR3213', '08:35:00.000000', 1, 0),
(447, 48, 'GA08FR3213', '08:37:00.000000', 1, 0),
(448, 49, 'GA08FR3213', '08:39:00.000000', 1, 0),
(449, 50, 'GA08FR3213', '08:44:00.000000', 1, 0),
(450, 51, 'GA08FR3213', '08:49:00.000000', 1, 0),
(451, 52, 'GA08FR3213', '08:54:00.000000', 1, 0),
(452, 53, 'GA08FR3213', '08:57:00.000000', 1, 0),
(453, 54, 'GA08FR3213', '09:00:00.000000', 1, 0),
(454, 55, 'GA08FR3213', '09:03:00.000000', 1, 0),
(455, 56, 'GA08FR3213', '09:06:00.000000', 1, 0),
(456, 57, 'GA08FR3213', '09:09:00.000000', 1, 0),
(457, 58, 'GA08FR3213', '09:12:00.000000', 1, 0),
(458, 59, 'GA08FR3213', '09:15:00.000000', 1, 0),
(459, 60, 'GA08FR3213', '09:18:00.000000', 1, 0),
(460, 61, 'GA08FR3213', '09:21:00.000000', 1, 0),
(461, 62, 'GA08FR3213', '09:24:00.000000', 1, 0),
(462, 63, 'GA08FR3213', '09:27:00.000000', 1, 0),
(463, 64, 'GA08FR3213', '09:30:00.000000', 1, 0),
(464, 65, 'GA08FR3213', '09:33:00.000000', 1, 0),
(465, 66, 'GA08FR3213', '09:36:00.000000', 1, 0),
(466, 67, 'GA08FR3213', '09:39:00.000000', 1, 0),
(467, 68, 'GA08FR3213', '09:42:00.000000', 1, 0),
(468, 69, 'GA08FR3213', '09:45:00.000000', 1, 0),
(469, 70, 'GA08FR3213', '09:48:00.000000', 1, 0),
(470, 71, 'GA08FR3213', '09:51:00.000000', 1, 0),
(471, 72, 'GA08FR3213', '09:56:00.000000', 1, 0),
(472, 73, 'GA08FR3213', '09:58:00.000000', 1, 0),
(473, 74, 'GA08FR3213', '10:05:00.000000', 1, 0),
(474, 75, 'GA08FR3213', '10:08:00.000000', 1, 0),
(475, 76, 'GA08FR3213', '10:12:00.000000', 1, 0),
(476, 77, 'GA08FR3213', '10:15:00.000000', 1, 0),
(477, 78, 'GA08FR3213', '10:20:00.000000', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `First_Name`, `Last_Name`, `Email`, `Phone`, `Message`) VALUES
(9, 'suraj', 'naik', 'suraj@gmail.com', 8276543215, 'helloooooooooooooooooooooooooooo'),
(10, 'Ramesh', 'Kudalkar', 'r.kudalkar@gmail.com', 7656909886, 'hey'),
(15, 'Alston', 'Rebello', 'lord.zeref@gmail.com', 9595343108, 'Ok. Ggwp. Good night'),
(20, 'Pratik', 'Kolvenkar', 'pratik@gmail.com', 9876543115, 'Helooo'),
(21, 'Pratik', 'Kolvenkar', 'pratik.kolvenkar16@gmail.com', 9545657649, 'beste re'),
(22, 'Pratik', 'Kolvenkar', 'pratik.kolvenkar16@gmail.com', 9545657649, 'beste re');

-- --------------------------------------------------------

--
-- Table structure for table `driver_conductor_details`
--

CREATE TABLE IF NOT EXISTS `driver_conductor_details` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `designation` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `house_no` varchar(10) NOT NULL,
  `building` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `driver_conductor_details`
--

INSERT INTO `driver_conductor_details` (`id`, `designation`, `first_name`, `last_name`, `Email`, `phone`, `house_no`, `building`, `city`, `state`, `pincode`) VALUES
(101, 'Driver', 'Vishwas', 'Naik', 'vishwas.naik@gmail.com', 7083301874, 'T-4', 'Vaishyak Appts', 'Margao', 'Goa', 403601),
(102, 'Driver', 'Caetano', 'Fernandes', 'k.fernandes@gmail.com', 8806799885, 'S-6', 'Nanu Estates', 'Margao', 'Goa', 403601),
(116, 'Driver', 'Ramesh', 'Redkar', 'rredkar@gmail.com', 9822719944, 'F-5', 'Mahanagar Appts', 'Margao', 'Goa', 403601),
(117, 'Driver', 'Vijay', 'Prabhu', 'v.prabhu@gmail.com', 9168662805, '128', 'Smith Street', 'Chandor', 'Goa', 403714),
(118, 'Driver', 'Srinath', 'Verlekar', 'verlekar.sri@gmail.com', 8806728451, 'F-7', 'Chandragupta Appts', 'Savordem', 'Goa', 403506),
(119, 'Driver', 'Jose', 'Rebello', 'rebello.jose@gmail.com', 9881883397, '384', 'Cross Street', 'Savordem', 'Goa', 403506),
(120, 'Driver', 'Krishna', 'Kamat', 'kkamat@gmail.com', 9422386800, 'T-11', 'Durga Arcade', 'Savordem', 'Goa', 403506),
(121, 'Driver', 'Aliston', 'Gonsalves', 'gonsalves45@gmail.com', 9920788417, 'F-14', 'Lincoln Appts', 'Margao', 'Goa', 403601),
(122, 'Driver', 'Samuel', 'Furtado', 'samuel4tado@gmail.com', 9819550978, '142', 'Nehru Road', 'Chandor', 'Goa', 403714),
(123, 'Driver', 'Joffre', 'Rodrigues', 'jrodrigues@gmail.com', 9168304098, '381', 'Smith Street', 'Chandor', 'Goa', 403714);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_id` varchar(11) NOT NULL,
  `star` varchar(11) NOT NULL,
  `feedback_1` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `bus_id`, `star`, `feedback_1`) VALUES
(1, 'GA08VT4284', '5', '		great bus'),
(2, 'GA08VT4284', '3', '		fghjkjhg'),
(3, 'GA08VT4284', '3', '		ghj'),
(4, 'GA08VT4284', '4', '		fghjk'),
(5, 'GA08VT4284', '4', '		fghjk'),
(6, 'GA08VT4284', '3', '		ttt'),
(7, 'GA08VT4284', '3', '		ttt'),
(8, 'GA08VT4284', '4', '		tyuytr'),
(9, 'GA08VT4284', '4', '		tyuytr'),
(10, 'GA08VT4284', '4', '		tyuytr'),
(11, 'GA08VT4284', '3', '		hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(12, 'GA08VT4284', '3', '		hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(13, 'GA08VT4284', '3', '		hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(14, 'GA08VT4284', '3', '		hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(15, 'GA08VT4284', '3', '		hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(16, 'GA08VT4284', '3', '		hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(17, 'GA08VT4284', '3', '		hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(18, 'GA08VT4284', '4', '	erthjkl	'),
(19, 'GA08ZT7707', '4', '		hello'),
(20, '', '3', '	hg	');

-- --------------------------------------------------------

--
-- Table structure for table `regitered_user_pass`
--

CREATE TABLE IF NOT EXISTS `regitered_user_pass` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `used` tinyint(1) NOT NULL,
  `bus_id` varchar(15) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `registration_id` (`bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regitered_user_pass`
--

INSERT INTO `regitered_user_pass` (`username`, `password`, `used`, `bus_id`) VALUES
('jolliz', 'jolizpass', 1, 'GA08VT4284'),
('jolliz2user', 'jolliz2123', 0, 'GA08JR2456'),
('manjuusertravel', 'manju123', 1, 'GA08ZT7707'),
('saiuser', 'sai123', 1, 'GA08SV5843'),
('taniusertravel', 'travel123', 1, 'GA08TA8095'),
('useramilia', 'amilia123', 1, 'GA08VP9505'),
('userrani', 'rani123', 1, 'GA08FR3213');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `via` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `source`, `destination`, `via`) VALUES
(16, 'Margao', 'Savordem', 'Raitolem'),
(17, 'panjim', 'colva', 'verna'),
(18, 'panjim', 'vasco', 'titan'),
(19, 'Margao', 'Savordem', 'Quepem');

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

CREATE TABLE IF NOT EXISTS `stops` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `stop_name` varchar(50) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `stops`
--

INSERT INTO `stops` (`id`, `stop_name`, `latitude`, `longitude`) VALUES
(20, 'chandor', 15.2613, 74.0444),
(21, 'bhise stores', 15.2643, 74.0443),
(22, 'mahalaxmi temple', 15.2667, 74.0406),
(23, 'bombay road', 15.2675, 74.0373),
(24, 'karim workshop', 15.2699, 74.0331),
(25, 'vailankani church', 15.2711, 74.0244),
(26, 'raitolem curtorem', 15.271, 74.0208),
(27, 'raitolem', 15.2722, 74.0186),
(28, 'narrow gate', 15.2737, 74.0123),
(29, 'ramnagri', 15.2759, 74.0051),
(30, 'nessai ramnagri char rasta', 15.2713, 74.0027),
(31, 'Davorlim church', 15.2706, 73.9944),
(32, 'indian oversea bank', 15.2702, 73.9875),
(33, 'yamaha showroom', 15.2709, 73.9827),
(34, 'Aquem Power House Aquem Alto', 15.2729, 73.9778),
(35, 'Costa Factory Aquem', 15.2724, 73.9742),
(36, 'Aptech Aviation Institute Sanscar Society', 15.272, 73.9704),
(37, 'fbb, Cine Vishant Complex', 15.2716, 73.9682),
(38, 'Dhoom Center New Market', 15.2723, 73.9589),
(39, 'State Bank Of India ATM', 15.2734, 73.9576),
(40, 'NH 66 Old Market', 15.2814, 73.9567),
(41, 'Kadamba Bus Workshop', 15.2893, 73.9554),
(42, 'indian petrol', 15.2581, 74.1041),
(43, 'shree chandreshwar bhuthnath sausthan', 15.2134, 74.0344),
(44, 'paroda church', 15.2287, 74.045),
(45, 'paroda bustop', 15.2285, 74.0519),
(46, 'kaleri road', 15.2224, 74.0585),
(47, 'quepem police station', 15.2176, 74.0628),
(48, 'quepem', 15.2142, 74.0681),
(49, 'amona', 15.2272, 74.0619),
(50, 'health center borimol', 15.2164, 74.0759),
(51, 'court', 15.2188, 74.0796),
(52, 'tilamol', 15.2214, 74.0754),
(53, 'kakumodi', 15.2405, 74.0949),
(54, 'goa rajee Honda', 15.2405, 74.0949),
(55, 'kakoda village road', 15.2503, 74.1002),
(56, 'shree ganesh temple', 15.2515, 74.1007),
(57, 'bansai', 15.2537, 74.1034),
(58, 'tata n Suzuki showroom', 15.2542, 74.1012),
(59, 'ambedkar circle bus stop', 15.259, 74.1025),
(60, 'Colva Circle', 15.2838, 73.9575),
(61, 'Margao Session Court', 15.2824, 73.9583),
(62, 'Holy Spirit Church and School Bus Stand', 15.2816, 73.9603),
(63, 'Hospicio Bus Stand', 15.279, 73.961),
(64, 'Pajifond Bus Stand', 15.2731, 73.9634),
(65, 'Cotta', 15.2594, 74.0503),
(66, 'Assolda', 15.2582, 74.056),
(67, 'Xelvona', 15.2587, 74.061),
(68, 'Odar', 15.2647, 74.0847),
(69, 'Vorra', 15.2609, 74.0959),
(70, 'Gudi', 15.2388, 74.0139),
(71, 'Gudi, char rasta', 15.2399, 74.0216),
(72, 'Gudi+chadav', 15.2421, 74.0187),
(73, 'padribhat', 15.2466, 74.0075),
(74, 'Pali+(Don+Khuris)', 15.2488, 74.0033),
(75, 'Lakaki', 15.2543, 73.9963),
(76, 'Ganapati Mandir', 15.2572, 73.988),
(77, 'MES(Mrg)', 15.2603, 73.9821),
(78, 'Rawanfond Circle', 15.2646, 73.9766);

-- --------------------------------------------------------

--
-- Table structure for table `stops_orders`
--

CREATE TABLE IF NOT EXISTS `stops_orders` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `route_id` int(15) NOT NULL,
  `stop_id` int(15) NOT NULL,
  `stop_order` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `route_id` (`route_id`),
  KEY `stop_id` (`stop_id`),
  KEY `stop_id_2` (`stop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `stops_orders`
--

INSERT INTO `stops_orders` (`id`, `route_id`, `stop_id`, `stop_order`) VALUES
(20, 16, 20, 1),
(21, 16, 21, 2),
(22, 16, 22, 3),
(23, 16, 23, 4),
(24, 16, 24, 5),
(25, 16, 25, 6),
(26, 16, 26, 7),
(27, 16, 27, 8),
(28, 16, 28, 9),
(29, 16, 29, 10),
(30, 16, 30, 11),
(31, 16, 31, 12),
(32, 16, 32, 13),
(33, 16, 33, 14),
(34, 16, 34, 15),
(35, 16, 35, 16),
(36, 16, 36, 17),
(37, 16, 37, 18),
(38, 16, 38, 19),
(39, 16, 39, 20),
(40, 16, 40, 21),
(41, 16, 41, 22),
(42, 19, 41, 1),
(43, 19, 60, 2),
(44, 19, 62, 3),
(45, 19, 63, 4),
(46, 19, 64, 5),
(47, 19, 37, 6),
(48, 19, 36, 7),
(49, 19, 35, 8),
(50, 19, 34, 9),
(51, 19, 78, 10),
(52, 19, 77, 11),
(53, 19, 76, 12),
(54, 19, 75, 13),
(55, 19, 74, 14),
(56, 19, 73, 15),
(57, 19, 72, 16),
(58, 19, 71, 17),
(59, 19, 70, 18),
(60, 19, 42, 19),
(61, 19, 43, 20),
(62, 19, 44, 21),
(63, 19, 45, 22),
(64, 19, 46, 23),
(65, 19, 47, 24),
(66, 19, 48, 25),
(67, 19, 49, 26),
(68, 19, 50, 27),
(69, 19, 51, 28),
(70, 19, 52, 29),
(71, 19, 53, 30),
(72, 19, 54, 31),
(73, 19, 55, 32),
(74, 19, 56, 33),
(75, 19, 57, 34),
(76, 19, 58, 35),
(77, 19, 59, 36),
(78, 19, 20, 37);

-- --------------------------------------------------------

--
-- Table structure for table `stop_images`
--

CREATE TABLE IF NOT EXISTS `stop_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sto_id` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sto_id` (`sto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `stop_images`
--

INSERT INTO `stop_images` (`id`, `sto_id`, `path`) VALUES
(1, 23, 'image repository\\stop images\\bombayroad.jpg'),
(3, 21, 'image repository\\stop images\\bhise stores.jpg'),
(4, 20, 'image repository\\stop images\\cur.jpg'),
(5, 22, 'image repository\\stop images\\mahalaxmitemple.jpg'),
(6, 24, 'image repository\\stop images\\chadav.jpg'),
(7, 25, 'image repository\\stop images\\vailankanichurch.jpg'),
(8, 26, 'image repository\\stop images\\gudi4rastha.jpg'),
(9, 27, 'image repository\\stop images\\22.jpg'),
(10, 28, 'image repository\\stop images\\comba.jpg'),
(11, 29, 'image repository\\stop images\\ramnagri.jpg'),
(12, 30, 'image repository\\stop images\\nessaichar.jpg'),
(13, 31, 'image repository\\stop images\\davorlimchurch.jpg'),
(14, 32, 'image repository\\stop images\\44.jpg'),
(15, 33, 'image repository\\stop images\\yamaha.jpg'),
(16, 34, 'image repository\\stop images\\powerhouse.jpg'),
(17, 35, 'image repository\\stop images\\costafactory.jpg'),
(18, 36, 'image repository\\stop images\\sebastianchurch.jpg'),
(19, 37, 'image repository\\stop images\\cinevishant.jpg'),
(20, 38, 'image repository\\stop images\\pajifond.jpg'),
(21, 39, 'image repository\\stop images\\statebank.jpg'),
(22, 40, 'image repository\\stop images\\oldcourt.jpg'),
(23, 41, 'image repository\\stop images\\ktc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unregistered_request`
--

CREATE TABLE IF NOT EXISTS `unregistered_request` (
  `registration_id` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(20) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Phone` bigint(11) DEFAULT NULL,
  `House_no` varchar(20) NOT NULL,
  `Building` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Bus_name` varchar(30) NOT NULL,
  `Registration_number` varchar(20) NOT NULL,
  `Trips` int(10) NOT NULL,
  `Start_point` varchar(20) NOT NULL,
  `End_point` varchar(20) NOT NULL,
  `Via` varchar(20) NOT NULL,
  PRIMARY KEY (`registration_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `unregistered_request`
--

INSERT INTO `unregistered_request` (`registration_id`, `Designation`, `First_Name`, `Last_Name`, `Email`, `Phone`, `House_no`, `Building`, `City`, `State`, `Pincode`, `Bus_name`, `Registration_number`, `Trips`, `Start_point`, `End_point`, `Via`) VALUES
(6, 'Driver', 'Ramesh', 'Redkar', 'rredkar@gmail.com', 8765676115, '406', 'Km', 'Margao', 'GOA', 403601, 'REDKAR TRAVELS', 'GA08RT6790', 4, 'MARGAO', 'CHANDOR', 'GUDI'),
(7, 'Conductor', 'suraj', 'naik', 'suraj@gmailcom', 8765321675, '222', 'SS', 'Margao', 'GOA', 403601, 'naik travels', 'GA08aN8565', 3, 'MARGAO', 'CHANDOR', 'GUDI'),
(9, 'Driver', 'vishwas', 'naik', 'v.naik@gmail.com', 9834509885, '302', 'vaishyak appts', 'margao', 'goa', 403601, 'Vishwas', 'GA08VT4284', 4, 'Margao', 'Savordem', 'Chandor'),
(10, 'Driver', 'Zeref', 'Rebello', 'z.rebello@gmail.com', 9543436108, '777', 'anime Appts', 'Margao', 'goa', 403602, 'Zeref Travels', 'GA08ZT7707', 5, 'Margao', 'Savordem', 'Chandor'),
(11, 'Driver', 'Alston', 'naik', 'ghft@gmail.com', 8765432998, '56', 'SS', 'Margao', 'GOA', 403601, 'REDKAR TRAVELS', 'GA08VM8765', 1, 'MARGAO', 'Savordem', 'GUDI'),
(12, 'Driver', 'Alston', 'naik', 'ghft@gmail.com', 8765432998, '56', 'SS', 'Margao', 'GOA', 403601, 'REDKAR TRAVELS', 'GA08VM8765', 1, 'MARGAO', 'Savordem', 'GUDI'),
(13, 'Driver', 'abc', 'naik', 'ghft@gmail.com', 8765432998, '121', 'SS', 'Margao', 'GOA', 403601, 'abc', 'GA08sr9009', 3, 'MARGAO', 'Savordem', 'GUDI'),
(14, '', '', '', '', 0, '', '', '', '', 0, '', '', 0, '', '', ''),
(15, 'Driver', 'dfghj', 'dfghj', 'sdfgh@dfgh.com', 2345678555, '45', 'dfghj', 'dfghj', 'fghj', 345674, 'fghj', 'dfghj', 4, 'cvbn', 'fghj', 'fgh'),
(17, 'Driver', 'joseph', 'carvalo', 'carvalo@gmail.com', 9876543210, '11', 'rema residency', 'fatorda', 'goa', 123456, 'Flying rani', 'ga09p1234', 4, 'margao', 'savordem', 'quepem'),
(18, 'Conductor', 'mohan', 'pyare', 'praye@mohan.com', 1234567890, '45', 'hghxhmg', 'hgv', 'vgh', 454522, 'hgfhg', 'fhg', 56, 'hg', 'fgh', 'g');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_ibfk_1` FOREIGN KEY (`drivers_id`) REFERENCES `driver_conductor_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buses_ibfk_2` FOREIGN KEY (`stops_id`) REFERENCES `stops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bus_location`
--
ALTER TABLE `bus_location`
  ADD CONSTRAINT `bus_location_ibfk_1` FOREIGN KEY (`busid`) REFERENCES `buses` (`id_reg_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bus_timing`
--
ALTER TABLE `bus_timing`
  ADD CONSTRAINT `bus_timing_ibfk_1` FOREIGN KEY (`stop_order_id`) REFERENCES `stops_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bus_timing_ibfk_2` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id_reg_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regitered_user_pass`
--
ALTER TABLE `regitered_user_pass`
  ADD CONSTRAINT `regitered_user_pass_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id_reg_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stops_orders`
--
ALTER TABLE `stops_orders`
  ADD CONSTRAINT `stops_orders_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stops_orders_ibfk_2` FOREIGN KEY (`stop_id`) REFERENCES `stops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stop_images`
--
ALTER TABLE `stop_images`
  ADD CONSTRAINT `stop_images_ibfk_1` FOREIGN KEY (`sto_id`) REFERENCES `stops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
