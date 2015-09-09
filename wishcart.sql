-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2013 at 06:01 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wishcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `descr` text NOT NULL,
  `cost` int(11) NOT NULL,
  `sold` int(11) NOT NULL DEFAULT '0',
  `image` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `descr`, `cost`, `sold`, `image`, `date`) VALUES
(1, 'Birthday Card', 'a beautiful birthday card with custom message box inside.', 23, 23, '01.jpg', '2013-01-29'),
(2, 'Birthday Card', 'A simple birthday card with cool graphics.', 43, 9, '02.jpg', '2013-11-05'),
(3, 'Birthday Card', 'music birthday card with speakers. Plays music when opened.', 45, 1, '03.jpg', '2013-03-27'),
(4, 'Birthday Card', 'simple birthday card with a good poem inside.', 13, 0, '04.jpg', '2013-04-24'),
(5, 'Birthday Card', 'Music birthday card with a cool graphic message.', 95, 0, '05.jpg', '2013-09-21'),
(6, 'Birthday Card', 'full size birthday card with laminated cover inside.', 13, 0, '06.jpg', '2013-06-21'),
(7, 'Christmas Card', 'simple christmas card with a good poem inside.', 32, 0, '07.jpg', '2013-02-28'),
(8, 'Christmas Card', 'A simple christmas card with cool graphics.', 65, 2, '08.jpg', '2013-08-21'),
(9, 'Christmas Card', 'A beautiful christmas card with custom message box inside.', 25, 1, '09.jpg', '2013-07-21'),
(10, 'Christmas Card', 'full size christmas card with laminated cover inside.', 34, 0, '010.jpg', '2013-11-26'),
(11, 'Christmas Card', 'A simple christmas card with cool graphics.', 30, 5, '011.jpg', '2013-03-21'),
(12, 'Christmas Card', 'Music christmas card with a cool graphic message.', 43, 0, '012.jpg', '2013-10-21'),
(13, 'Diwali Card', 'A simple diwali card with cool graphics.', 13, 53, '013.jpg', '2013-11-05'),
(14, 'Diwali Card', 'A beautiful diwali card with cool graphics.', 19, 1, '014.jpg', '2013-05-21'),
(15, 'Diwali Card', 'full size diwali card with laminated cover inside.', 28, 0, '015.jpg', '2013-09-21'),
(16, 'Diwali Card', 'simple diwali card with a good poem inside.', 28, 0, '016.jpg', '2013-05-02'),
(17, 'Diwali Card', 'A beautiful diwali card with custom message box inside.', 93, 0, '017.jpg', '2013-04-21'),
(18, 'Diwali Card', 'Diwali music card with custom message box inside.', 43, 1, '018.jpg', '2013-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `desc` text NOT NULL,
  `cost` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `image` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `sold` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
