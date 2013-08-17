-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2012 at 03:05 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `sno` int(4) NOT NULL AUTO_INCREMENT,
  `forum` varchar(40) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`sno`, `forum`, `datetime`) VALUES
(1, '', '2004-05-12 05:50:29'),
(2, '', '2004-05-12 05:51:57'),
(3, '', '2004-05-12 05:52:04'),
(4, '', '2004-05-12 05:52:10'),
(5, '', '2004-05-12 05:52:16'),
(6, 'adminnnnnnnnn', '2004-05-12 06:05:20'),
(7, 'aaaaaaa', '2004-05-12 06:37:39'),
(8, 'aaaaaaa', '2004-05-12 06:38:43'),
(9, 'dddd', '2004-05-12 06:40:05'),
(10, 'mmm', '2004-05-12 06:51:42'),
(11, 'bbbbb', '2004-05-12 07:15:41'),
(12, 'aaaaaaaaaaaaaaaaaaaa', '2005-05-12 04:02:42'),
(13, 'cccc', '2005-05-12 06:27:51'),
(14, 'xxcx', '2005-05-12 07:05:31'),
(15, 'sale', '2006-05-12 02:25:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
