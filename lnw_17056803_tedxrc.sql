-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql105.lockernerd.co.uk
-- Generation Time: Feb 20, 2017 at 12:54 PM
-- Server version: 5.6.34-79.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lnw_17056803_tedxrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE IF NOT EXISTS `attendees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` text NOT NULL,
  `sender_email` text NOT NULL,
  `sender_phone` text NOT NULL,
  `company` text NOT NULL,
  `role` text NOT NULL,
  `noname1` text NOT NULL,
  `noname2` text NOT NULL,
  `num` int(11) NOT NULL DEFAULT '0',
  `explan` text,
  `link` text,
  `about` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`id`, `sender_name`, `sender_email`, `sender_phone`, `company`, `role`, `noname1`, `noname2`, `num`, `explan`, `link`, `about`) VALUES
(1, 'xjvhkgads', 'fshkd@fndks.cin', '0', 'vjefdbvh', 'hfevkbw', '', 'null', 0, '', '', ''),
(2, 'mbafg', 'sjfgl@fsdbc.com', '0', 'hkfb', 'bfeke', '', 'null', 0, '', '', ''),
(3, 'khadf', 'jldhfjshf@fjs.vchi', '0', 'vkedfvkv', 'khvf', '', 'null', 0, '', '', ''),
(4, 'afhkdgfyi', 'fbshkfg@ejlhfvsk.fsdj', '0', 'dferuogv', 'cdfjksgv', '', 'null', 0, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
