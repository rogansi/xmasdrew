-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2013 at 12:04 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `memoryjar`
--
CREATE DATABASE IF NOT EXISTS `memoryjar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `memoryjar`;

-- --------------------------------------------------------

--
-- Table structure for table `memories`
--

CREATE TABLE IF NOT EXISTS `memories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `year` varchar(4) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`id`, `userid`, `title`, `body`, `year`, `picture`, `public`) VALUES
(1, '3', 'The Dream...', 'Waking up in Minot, North Dakota, I began describing a dream I had the night before.  After I had finished, you told me the dream you had the night before, and not only were they related, but your dream seemed to overlap and carry on from where my dream left off.', '1995', '', 0),
(2, '3', 'Kilgore''s House and Meet the Feebles', 'We began the night by taking acid and getting into your gray Honda.  All the way up we listened to ''Slim Shady'' until we got to your friend Kilgore''s house.  We watched ''Meet the Feebles'' in the dark and chain smoked.  \r\n\r\nAfterwards (at around midnight) we got bored and went back to Burnsville, staying there for all of 5 minutes before going back to Minneapolis.', '2000', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `picture`, `email`) VALUES
(1, 'Alex', 'Tofte', 'acerjofte', 'guest', '', 'tofteism@gmail.com'),
(2, 'Nick ', 'Tofte', 'Dutt', 'guest', '', 'nicholas.tofte@gmail.com'),
(3, 'Joseph', 'Tapper', 'Rogansi', 'guest', '', 'joewtapper@gmail.com'),
(4, 'Peter ', 'Tapper', 'Meeps', 'guest', '', 'whislinpete@hotmail.com'),
(5, 'Adam', 'Tapper', 'Deem', 'guest', '', 'tappe030@umn.edu'),
(6, 'Alissa', 'Tofte', 'Acakes', 'guest', '', 'atofte01@gmail.com'),
(7, 'Sherry', 'Tapper', 'mother', 'guest', '', 'bstapper77@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
