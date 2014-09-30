-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:57 PM
-- Server version: 5.5.12
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placementportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `uname` varchar(10) NOT NULL,
  `pass1` varchar(20) DEFAULT NULL,
  `first` varchar(100) DEFAULT NULL,
  `last` varchar(100) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(5) DEFAULT NULL,
  `ss` varchar(5) DEFAULT NULL,
  `a1` varchar(50) DEFAULT NULL,
  `a2` varchar(50) DEFAULT NULL,
  `a3` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `hostel` varchar(10) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `position`, `dept`, `dob`, `sex`, `ss`, `a1`, `a2`, `a3`, `email`, `phone`, `class`, `hostel`, `type`) VALUES
('admin', 'admin', 'Shiva Kumar', 'K', 'Krishnaiah', 'Padma', 'Student', 'CSE', '0000-00-00', 'M', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'B082035@rgukt.in', '9963808956', '312', 'sf12', 'admin'),
('B082035', 'shiva2035', 'Kanneboina', 'Shiva Kumar', 'KRISHNAIAH', 'PADMA', 'Student', 'Computer Science and Engineering(CSE)', '1993-01-29', 'Male', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'shiva2035.iiit@gmail.com', '9963808956', '312', 'SF-12', 'admin');
