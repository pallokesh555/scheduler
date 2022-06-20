-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2022 at 11:18 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_event`
--

DROP TABLE IF EXISTS `s_event`;
CREATE TABLE IF NOT EXISTS `s_event` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `badge` varchar(15) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `userid` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_event`
--

INSERT INTO `s_event` (`id`, `name`, `description`, `date`, `type`, `badge`, `color`, `userid`) VALUES
(1, 'meeting', 'office meeting', '2022-06-28', 'event', '06:00 - 07:00 ', '#63d867', 1),
(2, 'birthday', 'celebration party', '2022-06-26', 'event', '06:00 - 07:00 ', '#63d867', 3),
(3, 'test1', 'car service', '2022-06-17', ' event', '09:52 - 11:54', '#63d867', 3),
(4, 'test1', 'car service', '2022-06-17', ' event', '09:52 - 11:54', '#63d867', 1),
(5, 'test 2', 'lorem ipsum', '2022-06-18', ' event', '22:22 - 03:33', '#63d867', 1),
(6, 'test1', 'car service', '2022-06-01', ' event', '11:11 - 22:22', '#63d867', 1),
(7, 'test1', 'car service', '2022-06-01', ' event', '11:11 - 22:22', '#63d867', 3),
(8, 'party', 'birthday', '2022-06-25', ' event', '05:55 - 06:06', '#63d867', 2),
(9, 'test2', 'lorem ipsum', '2022-06-02', ' event', '19:06 - 14:11', '#63d867', 1),
(10, 'test9', 'lorem ipsum', '2022-06-04', ' event', '08:08 - 09:09', '#63d867', 3),
(11, 'test5', 'test', '2022-06-30', ' event', '20:36 - 19:35', '#63d867', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'root', '', 'user@admin.com', 'JKL@456#'),
(2, 'test1', '', 'test1@test.com', 'password1'),
(3, 'lokesh', 'pal', 'test2@test.com', 'password2'),
(4, 'lokesh', 'pal', 'pallokesh555@gmail.com', 'password123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
