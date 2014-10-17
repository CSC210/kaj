-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2014 at 01:43 PM
-- Server version: 5.5.38-35.2-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zzengnin_pa`
--
CREATE DATABASE `zzengnin_pa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zzengnin_pa`;
--
-- Database: `zzengnin_wheel`
--
CREATE DATABASE `zzengnin_wheel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zzengnin_wheel`;

-- --------------------------------------------------------

--
-- Table structure for table `Info`
--

DROP TABLE IF EXISTS `Info`;
CREATE TABLE IF NOT EXISTS `Info` (
  `id` int(32) NOT NULL,
  `pw` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `bs` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Info`
--

INSERT INTO `Info` (`id`, `pw`, `email`, `bs`) VALUES
(1, 'demo', 'yliang8@u.rochester.edu', 1),
(2, 'dude', 'gtamiya@u.rochester.edu', 1),
(3, 'gfdgfdg', 'dfgfdgg', 7),
(3, '', '', 7),
(3, 'dsfsadf', 'fsdfsdgfsdf', 7),
(3, 'dsfsadf', 'dsgdsfg', 7),
(3, 'dsfsadf', 'fsdfsdg', 7),
(3, 'hello', 'dsfsadg', 7),
(3, 'dsadad', 'dsadas', 7),
(3, 'dcx', 'jjqjwjejjjjj', 7),
(3, 'sdfasdfsadfasdfa', 'yliang88@gmail.com', 7),
(3, '235235345', 'asd@gmail.com', 7),
(3, 'fsegsdg', 'kaj@gmail.com', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
