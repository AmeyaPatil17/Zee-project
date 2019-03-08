-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2013 at 06:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register`
--
CREATE DATABASE IF NOT EXISTS `register` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `register`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `m_id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `repass` varchar(50) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`m_id`, `email`, `repass`) VALUES
(1, 'admin@admin.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `e_id` int(50) NOT NULL AUTO_INCREMENT,
  `m_id` int(50) NOT NULL,
  `t_complete` varchar(50) NOT NULL,
  `tt_complete` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`e_id`, `m_id`, `t_complete`, `tt_complete`) VALUES
(3, 1, 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `m_id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` char(50) NOT NULL,
  `mobileno` bigint(200) NOT NULL,
  `b_date` date NOT NULL,
  `branch` varchar(50) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`m_id`, `email`, `repass`, `f_name`, `m_name`, `l_name`, `gender`, `mobileno`, `b_date`, `branch`) VALUES
(1, 'abc@abc.com', '123456', 'manoj', 'laxman', 'dharne', 'Male', 1234567890, '2012-12-12', 'CE'),
(6, 'manojdharne3892@gmail.com', '123456', 'Manoj', 'Laxman', 'Dharne', 'Male', 8149594703, '1992-08-03', 'CE'),
(7, 'speedyboyxxx@gmail.com', '123456', 'asd', 'asd', 'asd', 'Male', 1234567890, '2013-08-19', 'CE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
