-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2012 at 03:04 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_answer` varchar(80) NOT NULL,
  `a_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(0, 1, 'aaaaaaaa', 'jkbjkbkjnjk', 'xxxxxxxxx', '2003-05-12 08:45:09'),
(0, 1, 'aaaaaaaa', 'jkbjkbkjnjk', 'xxxxxxxxx', '2003-05-12 08:50:13'),
(7, 1, 'aaaaaaaa', 'jkbjkbkjnjk', 'xxxxxxxxx', '2003-05-12 08:52:20'),
(7, 2, 'aaaaaaaa', 'jkbjkbkjnjk', 'xxxxxxxxx', '2003-05-12 08:54:14'),
(0, 3, 'hjbsvk', 'xxxxxxxx', 'jknjnjlk', '2003-05-12 08:58:40'),
(7, 3, 'hjbsvk', 'xxxxxxxx', 'jknjnjlk', '2003-05-12 08:59:17'),
(4, 1, 'aashna', 'dsssddg@yahoo.com', 'ghyfjhygvfhjvhjvvbkjbgjk', '2003-05-12 09:20:51'),
(6, 1, 'jmknbd', 'kjbcjk', 'kjncckj', '2003-05-12 14:20:51'),
(6, 2, 'jmknbd', 'kjbcjk', 'kjncckj', '2003-05-12 14:34:35'),
(6, 3, 'aashna', 'aashnagarg16@gmail.com', 'gaaa geee guuu', '2003-05-12 14:34:55'),
(11, 1, 'srishti', 'srishtu@gmail.com', 'dkjnkjdsns', '2003-05-12 14:37:40'),
(40, 1, 'kjbkjdsb', 'jndkj', 'lkjndjlk', '2003-05-12 18:01:32'),
(40, 2, 'lkknslk', 'ndkl', 'kjlfnc', '2003-05-12 18:01:39'),
(40, 3, 'lknkdsnln', 'ionjfdo', 'klnlk', '2003-05-12 18:01:46'),
(40, 4, 'ssss', 'ccccc', 'cccccccccccccccccccccc', '2003-05-12 18:01:54'),
(40, 5, 'lndond', 'oijnfoinjono', 'onfofnd', '2003-05-12 18:02:06'),
(40, 6, 'klnsdoin', 'onfoln', 'oinfojnf', '2003-05-12 18:02:12'),
(50, 1, 'radha', 'xdddd', 'wswwww', '2004-05-12 17:09:28'),
(80, 1, 'Sanya', 'aaa', 'sddd', '2005-05-12 03:54:00'),
(81, 1, 'Sanya', 'jhbdjx', 'KJ BCKNJ KJDXKJDS', '2005-05-12 04:02:08'),
(81, 2, 'Sanya', 'JHBVCX', 'KJBKCJ', '2005-05-12 04:02:13'),
(82, 1, 'Sanya', 'sxx', 'xx', '2005-05-12 07:04:52'),
(85, 1, 'Sanya', 'ss', 'ss', '2006-05-12 14:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `forum_sno` int(4) NOT NULL,
  `topic` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `views` int(4) NOT NULL DEFAULT '0',
  `replies` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`Id`, `forum_sno`, `topic`, `name`, `email`, `datetime`, `views`, `replies`) VALUES
(1, 0, 'aashna garg', 'rt@yahoo.co.in', 'vhg', '2002-05-12 00:00:00', 2, 0),
(2, 0, 'renu', 'rt@yahoo.co.in', 'vhg', '2002-05-12 00:00:00', 0, 0),
(3, 0, 'renu', 'rt@yahoo.co.in', 'vhg', '2002-05-12 00:00:00', 0, 0),
(4, 0, 'mummy', 'rt@yahoo.co.in', 'vhg', '2002-05-12 00:00:00', 0, 1),
(5, 0, 'jhgvshj', 'jkhbdjkhkhj', 'jhkbcjk', '2002-05-12 00:00:00', 0, 0),
(6, 0, 'jhgvshj', 'jkhbdjkhkhj', 'jhkbcjk', '2002-05-12 00:00:00', 3, 3),
(7, 0, 'hjsbvhj', 'jknbdjk', 'jknjkd', '2003-05-12 07:00:06', 0, 0),
(8, 0, 'heeeaaa', 'jknjkdnkjdn', 'jkndjknds', '2003-05-12 07:12:43', 0, 0),
(9, 0, 'fegeheh', 'hdhdhdh', 'hdhdhdhd', '2003-05-12 07:26:06', 0, 0),
(10, 0, 'fegeheh', 'hdhdhdh', 'hdhdhdhd', '2003-05-12 02:17:26', 0, 0),
(11, 0, 'geeeeeeeeee', 'garvita', 'garmi11@yahoo.com', '2003-05-12 02:36:24', 9, 1),
(12, 0, 'xjkbx', 'jkbxjk', 'jkbkjs', '2003-05-12 02:55:57', 2, 0),
(13, 0, 'xjkbx', 'jkbxjk', 'jkbkjs', '2003-05-12 02:59:42', 0, 0),
(14, 0, 'xjkbx', 'jkbxjk', 'jkbkjs', '2003-05-12 03:02:13', 0, 0),
(15, 0, 'xjkbx', 'jkbxjk', 'jkbkjs', '2003-05-12 03:03:01', 0, 0),
(16, 0, 'xjkbx', 'jkbxjk', 'jkbkjs', '2003-05-12 03:03:12', 0, 0),
(17, 0, 'xjkbx', 'jkbxjk', 'jkbkjs', '2003-05-12 03:03:24', 0, 0),
(18, 0, '', '', '', '2003-05-12 03:28:09', 0, 0),
(19, 0, 'aaaaa', 'dddd', 'ddd', '2003-05-12 03:49:27', 2, 0),
(20, 0, 'aaa', 'jkbckj', 'kjbckj', '2003-05-12 04:08:19', 0, 0),
(21, 0, 'aaa', 'jkbckj', 'kjbckj', '2003-05-12 04:09:06', 0, 0),
(22, 0, 'aaa', 'jkbckj', 'kjbckj', '2003-05-12 04:18:58', 0, 0),
(23, 0, 'aaa', 'jkbckj', 'kjbckj', '2003-05-12 04:20:35', 0, 0),
(24, 0, 'jhbvdhj', '', 'jknbdjk', '2003-05-12 04:27:59', 0, 0),
(25, 0, 'jhbvdhj', '', 'jknbdjk', '2003-05-12 04:38:25', 0, 0),
(26, 0, 'jhbvdhj', '', 'jknbdjk', '2003-05-12 04:39:29', 0, 0),
(27, 0, 'jhbvdhj', '', 'jknbdjk', '2003-05-12 04:41:08', 0, 0),
(28, 0, 'sssss', '', 'ddd@yahoo.com', '2003-05-12 05:00:03', 0, 0),
(29, 0, 'sssss', '', 'ddd@yahoo.com', '2003-05-12 05:00:26', 0, 0),
(30, 0, 'sssss', 'feefaa', 'ddd@yahoo.com', '2003-05-12 05:01:10', 0, 0),
(31, 0, 'sssss', 'feefaa', 'ddd@yahoo.com', '2003-05-12 05:16:05', 0, 0),
(32, 0, 'sssss', 'feefaa', 'ddd@yahoo.com', '2003-05-12 05:17:58', 0, 0),
(33, 0, 'sssss', 'feefaa', 'ddd@yahoo.com', '2003-05-12 05:18:36', 0, 0),
(34, 0, 'sssss', 'feefaa', 'ddd@yahoo.com', '2003-05-12 05:20:23', 0, 0),
(35, 0, 'jkbs', 'Aashna garg', 'jkns', '2003-05-12 05:21:25', 0, 0),
(36, 0, 'jkbs', 'Aashna garg', 'jkns', '2003-05-12 05:22:25', 0, 0),
(37, 0, 'jkbs', 'Aashna garg', 'jkns', '2003-05-12 05:22:52', 0, 0),
(38, 0, 'jkbs', 'Aashna garg', 'jkns', '2003-05-12 05:23:27', 2, 0),
(39, 0, 'jkbs', 'Aashna garg', 'jkns', '2003-05-12 05:24:28', 3, 0),
(40, 0, 'jug', 'Aashna garg', 'kijhc', '2003-05-12 05:37:26', 12, 6),
(41, 0, '', '<br /><b>Notice</b>:  Undefine', '', '2003-05-12 05:37:34', 0, 0),
(42, 0, 'kjhbkdd', '', 'jkbdkj', '2003-05-12 05:55:41', 0, 0),
(43, 0, 'kjhbkdd', '', '', '2003-05-12 05:56:40', 0, 0),
(44, 0, '', 'Sanya', '', '2003-05-12 06:58:35', 0, 0),
(45, 0, 'bjhbdhj', 'radha', 'jjjj', '2004-05-12 04:42:19', 0, 0),
(46, 0, 'ss', 'radha', '', '2004-05-12 05:00:00', 0, 0),
(47, 0, 'sss', '', '', '2004-05-12 05:00:47', 0, 0),
(48, 0, 'sss', '', '', '2004-05-12 05:02:07', 0, 0),
(49, 0, 'sss', '', '', '2004-05-12 05:03:43', 0, 0),
(50, 0, 'sss', '', '', '2004-05-12 05:03:58', 10, 1),
(51, 0, '', '', '', '2004-05-12 07:12:27', 0, 0),
(52, 0, '', '', '', '2004-05-12 07:12:58', 0, 0),
(53, 0, 'akjakj', '', '', '2004-05-12 07:14:58', 2, 0),
(54, 0, '', '', '', '2004-05-12 07:43:47', 0, 0),
(55, 0, 'dddd', '', '', '2004-05-12 07:47:06', 0, 0),
(56, 0, 'dddd', '', '', '2004-05-12 07:54:54', 0, 0),
(57, 0, 'dddd', '', '', '2004-05-12 08:01:33', 0, 0),
(58, 0, 'dddd', '', '', '2004-05-12 08:01:55', 0, 0),
(59, 0, 'dddd', '', '', '2004-05-12 08:02:15', 0, 0),
(60, 0, 'dddd', '', '', '2004-05-12 08:04:38', 0, 0),
(61, 0, 'dddd', '', '', '2004-05-12 08:04:51', 0, 0),
(62, 0, 'dddd', '', '', '2004-05-12 08:05:05', 2, 0),
(63, 0, 'xx', '', '', '2004-05-12 08:21:45', 0, 0),
(64, 0, 'jkbskj', '', '', '2004-05-12 08:23:18', 0, 0),
(65, 9, '6666', '', '', '2004-05-12 08:24:54', 3, 0),
(66, 0, '6666', '', '', '2004-05-12 08:32:55', 0, 0),
(67, 0, '6666', '', '', '2004-05-12 08:33:37', 0, 0),
(68, 9, 'cccccc', '', '', '2005-05-12 03:28:36', 2, 0),
(69, 0, 'cccccc', '', '', '2005-05-12 03:28:50', 0, 0),
(70, 0, 'cccccc', '', '', '2005-05-12 03:29:55', 0, 0),
(71, 9, 'sss', '', '', '2005-05-12 03:47:33', 0, 0),
(72, 0, 'ssscc', '', '', '2005-05-12 03:48:17', 0, 0),
(73, 9, 'aaa', '', '', '2005-05-12 03:49:22', 0, 0),
(74, 9, 'aaa', '', '', '2005-05-12 03:49:37', 0, 0),
(75, 0, 'aaa', '', '', '2005-05-12 03:50:46', 0, 0),
(76, 9, 'xxx', '', '', '2005-05-12 03:51:02', 0, 0),
(77, 0, 'xxxxx', '', '', '2005-05-12 03:51:32', 0, 0),
(78, 9, 'aaa', '', '', '2005-05-12 03:51:46', 0, 0),
(79, 9, 'lll', '', '', '2005-05-12 03:52:26', 0, 0),
(80, 8, 'aashna', '', '', '2005-05-12 03:53:39', 5, 1),
(82, 12, 'xx', '', '', '2005-05-12 04:13:19', 11, 1),
(84, 8, 'ss', '', '', '2005-05-12 06:27:20', 0, 0),
(86, 12, 'cc', '', '', '2005-05-12 07:05:05', 0, 0),
(88, 11, 'aashna', '', '', '2006-05-12 06:43:18', 0, 0),
(89, 11, 'aashna', '', '', '2006-05-12 06:44:09', 0, 0),
(90, 11, 'aashnaddddddddddddd', '', '', '2006-05-12 06:44:23', 12, 0),
(91, 11, 'aashna', '', '', '2006-05-12 06:45:06', 0, 0),
(92, 11, 'aashna', '', '', '2006-05-12 06:45:39', 0, 0),
(93, 11, 'aashna', '', '', '2006-05-12 06:46:54', 0, 0),
(94, 11, 'aashna', '', '', '2006-05-12 06:47:22', 0, 0),
(95, 11, 'aashna', '', '', '2006-05-12 06:47:58', 0, 0),
(96, 11, 'aashna', '', '', '2006-05-12 06:48:26', 0, 0),
(97, 11, 'aashna', '', '', '2006-05-12 06:48:56', 0, 0),
(98, 11, 'aashna', '', '', '2006-05-12 06:49:47', 0, 0),
(99, 11, 'AA', '', '', '2006-05-12 06:54:14', 0, 0),
(100, 7, 'ccaa', '', '', '2006-05-12 02:23:56', 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
