-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 05:01 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.0

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
-- Table structure for table `memories`
--

CREATE TABLE IF NOT EXISTS `memories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` longtext NOT NULL,
  `year` varchar(4) NOT NULL,
  `picture` varchar(20) DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`id`, `userid`, `title`, `body`, `year`, `picture`, `public`) VALUES
(1, '3', 'The Dream...', 'Waking up in Minot, North Dakota, I began describing a dream I had the night before. After I had finished, you told me the dream you had the night before, and not only were they related, but your dream seemed to overlap and carry on from where my dream left off.', '1995', '', 0),
(2, '3', 'Kilgore''s House and Meet the Feebles', 'We began the night by taking acid and getting into your gray Honda. All the way up we listened to ''Slim Shady'' until we got to your friend Kilgore''s house. We watched ''Meet the Feebles'' in the dark and chain smoked. \r\n\r\nAfterwards (at around midnight) we got bored and went back to Burnsville, staying there for all of 5 minutes before going back to Minneapolis.', '2000', '', 0),
(3, '2', 'Riding to Tofte', 'I loved talking with you for hours on the ride up to and back from Tofte.', '2013', '', 0),
(4, '2', 'The Adventures of Hercules', 'I had so much fun watching Hercules in your room while you were painting metal guys.', '2001', '', 0),
(5, '2', 'Riding to KMart', 'I will always remember you giving me shoulder back rides to K-Mart when I was like, 6!', '1991', '', 0),
(6, '1', 'Shadowrun', 'Listening to ''The Offspring'' playing Shadowrun on Genesis.', '1994', 'shadowrun', 0),
(7, '1', 'Living Together', 'An awesome time!', '2009', '', 0),
(8, '1', 'Trips to Phoenix', 'I loved taking trips together to Phoenix Games.', '1993', '', 0),
(9, '4', 'The Kids', 'I love how enthusiastic you are with my kids.', '2013', '', 0),
(10, '4', 'Punks!', '"Just a bunch of punks!"', '1996', '', 0),
(11, '4', 'The Mutant Chronicles', 'How could I forget playing The Mutant Chronicles in Minot.', '1992', '', 0),
(12, '5', 'Stories', 'The series of memories you created with your storytelling and narration of worlds and characters, whether fantasy or reality based.  D&D, Shadowrun, and Vampire were entertaining beyond what cinema or video games could provide.', '2002', '', 0),
(13, '6', 'My Wedding', 'When you pulled me to the side at my wedding to say how happy he was that I''m part of the family--and that Sally would be too.', '2010', '', 0),
(14, '6', 'Rocking Elle', 'When you were rocking Elle to sleep.', '2013', '', 0),
(15, '4', 'Test', 'Test me', '1984', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
