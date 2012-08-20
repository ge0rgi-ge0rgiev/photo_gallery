-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2012 at 03:41 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photo_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photograph_id` int(11) NOT NULL,
  `created` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `photograph_id` (`photograph_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photograph_id`, `created`, `author`, `body`) VALUES
(1, 18, '15 August, 18:05:50', 'Georgi', 'i like this'),
(3, 21, '15-Aug-12, 22:38:39', 'Georgi', 'kreten nqkaf'),
(4, 16, '15-Aug-12, 23:18:30', 'Georgi', 'self comment'),
(5, 22, '16-Aug-12, 0:13:17', 'Georgi', 'qkata ralta'),
(7, 24, '16-Aug-12, 23:50:55', 'Ivailo', 'i like this page'),
(8, 24, '16-Aug-12, 23:51:06', 'Kiro', 'I like it too'),
(9, 25, '16-Aug-12, 23:51:31', 'Georgi', 'write something'),
(10, 25, '16-Aug-12, 23:51:47', 'Ivan', 'test comment'),
(11, 27, '16-Aug-12, 23:52:07', 'Neven', 'test comment'),
(12, 24, '20-Aug-12, 2:38:12', 'Stoqn', 'some comment'),
(13, 24, '20-August-2012, 02:41:04', 'Stoqn', 'another comment');

-- --------------------------------------------------------

--
-- Table structure for table `photographs`
--

CREATE TABLE IF NOT EXISTS `photographs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `photographs`
--

INSERT INTO `photographs` (`id`, `filename`, `type`, `size`, `caption`) VALUES
(24, '1.jpg', 'image/jpeg', 195982, 'test caption'),
(25, '2.jpg', 'image/jpeg', 217574, 'another test caption'),
(27, '3.jpg', 'image/jpeg', 143574, 'and another test caption'),
(28, '4.jpg', 'image/jpeg', 172887, 'asdada'),
(29, '5.jpg', 'image/jpeg', 195700, 'gsfdgsfd'),
(30, '6.jpg', 'image/jpeg', 215477, 'sadfsadf'),
(31, '7.jpg', 'image/jpeg', 158003, 'gdsfgdgfsd'),
(32, '8.jpg', 'image/jpeg', 167805, 'fsadfsafasf'),
(33, '12.jpg', 'image/jpeg', 194720, 'asdxa'),
(34, '34.jpg', 'image/jpeg', 205011, 'caption');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'user', '1a1dc91c907325c69271ddf0c944bc72', 'Georgi', 'Georgiev'),
(2, 'torque', '1a1dc91c907325c69271ddf0c944bc72', 'Dimitur', 'Dimitrov');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
