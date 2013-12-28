-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2013 at 09:44 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `memoryjar`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(5) NOT NULL,
  `memoryid` varchar(5) NOT NULL,
  `commentTitle` varchar(20) NOT NULL,
  `commentBody` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`id`, `userid`, `title`, `body`, `year`, `picture`, `public`) VALUES
(1, '3', 'The Dream...', 'Waking up in Minot, North Dakota, I began describing a dream I had the night before. After I had finished, you told me the dream you had the night before, and not only were they related, but your dream seemed to overlap and carry on from where my dream left off.', '1995', '', 0),
(2, '3', 'Kilgore''s House and Meet the Feebles', 'We began the night by taking acid and getting into your gray Honda. All the way up we listened to ''Slim Shady'' until we got to your friend Kilgore''s house. We watched ''Meet the Feebles'' in the dark and chain smoked. \r\n\r\nAfterwards (at around midnight) we got bored and went back to Burnsville, staying there for all of 5 minutes before going back to Minneapolis.', '2000', '', 0),
(3, '2', 'Riding to Tofte', 'I loved talking with you for hours on the ride up to and back from Tofte.', '2013', '', 0),
(4, '2', 'The Adventures of Hercules', 'I had so much fun watching Hercules in your room while you were painting metal guys.', '2001', '', 0),
(5, '2', 'Riding to KMart', 'I will always remember you giving me shoulder back rides to K-Mart when I was like, 6!', '1991', '', 1),
(6, '1', 'Shadowrun', 'Listening to ''The Offspring'' playing Shadowrun on Genesis.', '1994', 'shadowrun', 0),
(7, '1', 'Living Together', 'An awesome time!', '2009', '', 0),
(8, '1', 'Trips to Phoenix', 'I loved taking trips together to Phoenix Games.', '1993', '', 0),
(9, '4', 'The Kids', 'I love how enthusiastic you are with my kids.', '2013', '', 0),
(10, '4', 'Punks!', '"Just a bunch of punks!"', '1996', '', 0),
(11, '4', 'The Mutant Chronicles', 'How could I forget playing The Mutant Chronicles in Minot.', '1992', '', 0),
(12, '5', 'Stories', 'The series of memories you created with your storytelling and narration of worlds and characters, whether fantasy or reality based.  D&D, Shadowrun, and Vampire were entertaining beyond what cinema or video games could provide.', '2002', '', 0),
(13, '6', 'My Wedding', 'When you pulled me to the side at my wedding to say how happy he was that I''m part of the family--and that Sally would be too.', '2010', '', 0),
(14, '6', 'Rocking Elle', 'When you were rocking Elle to sleep.', '2013', '', 0),
(26, '3', 'ffff', 'wqrweqrwe', '1234', 'qeqwwe', 1),
(27, '3', 'he''sgot''s i''ts', 'it''s all"we know''s', '1982', '', 1),
(28, '3', '', '', '', '', 1),
(29, '3', '', '', '', '', 1);

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
  `userpicture` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `userpicture`, `email`, `admin`) VALUES
(1, 'Alex', 'Tofte', 'acerjofte', 'face83ee3014bdc8f98203cc94e2e89222452e90', '', 'tofteism@gmail.com', 0),
(2, 'Nick ', 'Tofte', 'Dutt', 'face83ee3014bdc8f98203cc94e2e89222452e90', '', 'nicholas.tofte@gmail.com', 0),
(3, 'Joseph', 'Tapper', 'Rogansi', 'face83ee3014bdc8f98203cc94e2e89222452e90', 'userpicture.jpg', 'joewtapper@gmail.com', 0),
(4, 'Peter ', 'Tapper', 'Meeps', 'face83ee3014bdc8f98203cc94e2e89222452e90', '', 'whislinpete@hotmail.com', 0),
(5, 'Adam', 'Tapper', 'Deem', 'face83ee3014bdc8f98203cc94e2e89222452e90', '', 'tappe030@umn.edu', 0),
(6, 'Alissa', 'Tofte', 'Acakes', 'face83ee3014bdc8f98203cc94e2e89222452e90', '', 'atofte01@gmail.com', 0),
(7, 'Sherry', 'Tapper', 'mother', 'face83ee3014bdc8f98203cc94e2e89222452e90', '', 'bstapper77@hotmail.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
