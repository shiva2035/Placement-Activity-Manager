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

-- --------------------------------------------------------

--
-- Table structure for table `B2K140`
--

CREATE TABLE IF NOT EXISTS `B2K140` (
  `stu_id` varchar(8) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `ssc` float DEFAULT NULL,
  `puc` float DEFAULT NULL,
  `engg` float DEFAULT NULL,
  `dist` varchar(20) NOT NULL,
  `mdl` varchar(20) NOT NULL,
  `village` varchar(30) NOT NULL,
  `stats` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `B2K140`
--

INSERT INTO `B2K140` (`stu_id`, `fname`, `lname`, `email`, `phone`, `ssc`, `puc`, `engg`, `dist`, `mdl`, `village`, `stats`) VALUES
('B082035', 'Shiva Kumar', 'Kanneboina', 'shiva2035.iiit@gmail.com', '9963808956', 82.66, 84.5, 82.33, 'Nalgonda', 'Jajireddy Gudem', 'Nagaram', 'eligible');

-- --------------------------------------------------------

--
-- Table structure for table `B2K141`
--

CREATE TABLE IF NOT EXISTS `B2K141` (
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
-- Dumping data for table `B2K141`
--

INSERT INTO `B2K141` (`stu_id`, `fname`, `lname`, `email`, `phone`, `ssc`, `puc`, `engg`, `dist`, `mdl`, `village`, `stats`) VALUES
('B082035', 'Shiva Kumar', 'Kanneboina', 'shiva2035.iiit@gmail.com', '9963808956', 82.66, 84.5, 82.33, 'Nalgonda', 'Jajireddy Gudem', 'Nagaram', 'eligible');

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


-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
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
-- Dumping data for table `company`
--

INSERT INTO `company` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `position`, `dept`, `dob`, `sex`, `ss`, `a1`, `a2`, `a3`, `email`, `phone`, `class`, `hostel`, `type`) VALUES
('company', 'company', 'Placement', 'Portal', 'rgukt', 'rgukt', 'b.tect', 'CSE', '2013-09-15', 'm', 'gener', 'rgukt basar', 'mudhole', 'adilabad', 'shiva2035.iiit@rgukt.in', '504107', '312-CSE', 'sf-12', 'company');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` varchar(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `job_desc` varchar(200) NOT NULL,
  `eligibility` varchar(100) NOT NULL,
  `req_skills` varchar(100) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `other` varchar(200) NOT NULL,
  `link` varchar(50) NOT NULL,
  `posted_on` date NOT NULL,
  `last_date` date NOT NULL,
  PRIMARY KEY (`job_id`),
  UNIQUE KEY `job_id` (`job_id`),
  UNIQUE KEY `job_id_2` (`job_id`),
  UNIQUE KEY `job_id_3` (`job_id`),
  UNIQUE KEY `job_id_4` (`job_id`),
  UNIQUE KEY `job_id_5` (`job_id`),
  UNIQUE KEY `job_id_6` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `company_name`, `job_desc`, `eligibility`, `req_skills`, `salary`, `other`, `link`, `posted_on`, `last_date`) VALUES
('B2K140', 'Java Programmer', 'WisdomKites Limited', 'Strong in OOPS. Excellent Coding Skills. Good Analytical and Logical Skills', 'SSC>75%, PUC>70%, B.Tech>65%', 'C, Java', '5LPA', 'No Other Information is provided by the company', '-', '2014-03-11', '2014-05-22'),
('B2K141', 'Programmer Analyst', 'CTS Technologies', 'CTS Programmer Analyst pool drive', 'SSC>75%, PUC>70%, B.Tech>65%', 'C, Java', '5LPA', '', '-', '2014-03-11', '2014-03-12'),
('B2K142', 'Software Developer', 'Wipro Limited BPO Se', 'Call Center job', 'ssc>70%,puc>75%, cgpa>75%.', 'english, excellent communication skills', '3.45', 'Updated with latest photographs and 2 copies of resumes.', '-', '2014-05-21', '2014-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `cid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `hlink` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`cid`, `title`, `message`, `hlink`, `link`, `date`, `time`, `type`) VALUES
('BSR20141300', 'En-End Semester Results are Declared', 'Results are Declared this evening', 'http://10.31.3.9/Examination', 'RGUKT_BASAR_TEST SELECTS.xls', '2014-01-30', '04:09 PM', 'RGUKT-Basar'),
('BSR20141301', 'Infosys Shortlisted Candidates', 'Infosys', '', 'paper', '2014-01-30', '04:19 PM', 'Examination'),
('BSR20141302', 'Engg4-End Semester Results are Declared', 'sdfsl', 'lsdfl', '-', '2014-01-30', '07:22 PM', 'RGUKT-Basar');

-- --------------------------------------------------------

--
-- Table structure for table `studetails`
--

CREATE TABLE IF NOT EXISTS `studetails` (
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
  `ssc` float NOT NULL,
  `puc` float NOT NULL,
  `engg` float NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `position`, `dept`, `dob`, `sex`, `ss`, `a1`, `a2`, `a3`, `email`, `phone`, `class`, `hostel`, `ssc`, `puc`, `engg`, `type`) VALUES
('admin', 'admin', 'Shiva Kumar', 'K', 'Krishnaiah', 'Padma', 'Student', 'CSE', '0000-00-00', 'M', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'B082035@rgukt.in', '9963808956', '312', 'sf12', 0, 0, 0, 'student'),
('B082035', 'shiva2035', 'Shiva Kumar', 'Kanneboina', 'Krishnaiah', 'Padma', 'Student', 'CSE', '1993-01-29', 'Male', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'shiva2035.iiit@gmail.com', '9963808956', '312', 'SF12', 82.66, 84.5, 82.33, 'student');
