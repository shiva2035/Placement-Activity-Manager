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
