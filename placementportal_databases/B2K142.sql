-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:58 PM
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
-- Table structure for table `B2K142`
--

CREATE TABLE IF NOT EXISTS `B2K142` (
  `stu_id` varchar(8) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `ssc` float DEFAULT NULL,
  `puc` float DEFAULT NULL,
  `engg` float DEFAULT NULL,
  `dist` varchar(20) DEFAULT NULL,
  `mdl` varchar(20) DEFAULT NULL,
  `village` varchar(30) DEFAULT NULL,
  `stats` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `B2K142`
--

