-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 04:12 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `b_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `flat_id` varchar(50) NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `m_cost` varchar(10) NOT NULL,
  `t_cost` varchar(10) NOT NULL,
  `p_date` varchar(20) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`b_id`, `u_name`, `flat_id`, `s_id`, `m_cost`, `t_cost`, `p_date`) VALUES
(1, 'mustaq', 'A4332', 'gulshan1', '2000', '30000', '20/12/2018');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `flat_id` varchar(50) NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `r_date` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`c_id`, `u_name`, `flat_id`, `s_id`, `subject`, `r_date`) VALUES
(1, 'mustaq', 'A4332', 'gulshan1', 'Nov month bill paid', '2018-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE IF NOT EXISTS `flat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `flat_id` varchar(10) NOT NULL,
  `apartment` varchar(50) NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`id`, `flat_id`, `apartment`, `s_id`, `address`) VALUES
(1, 'A4332', 'Kunjo', 'gulshan1', 'House No-14, Road No-113/A, Gulshan 2, Dhaka-1212');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `par_address` varchar(200) NOT NULL,
  `move_in_date` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `f_type` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `u_name`, `pass`, `email`, `par_address`, `move_in_date`, `gender`, `f_type`, `status`) VALUES
(1, 'mustaq', 'mansuree', 'mustaq', '12345', 'mustaq@gmail.com', 'KTM, Nepal', '20/12/2018', 'Male', '2 Bed/ 2 Bath', 'yes'),
(2, 'amin', 'hasan', 'amin', '123456', 'amin@gmail.com', 'Dhaka,Bangladesh', '2018-11-15', 'male', '2 Bed/ 2 Bath', 'no'),
(6, 'ewfvv', 'dvs frr', 'r egv', 'regtyu', 'fgdhyju', 'ghjyuukilo', '2018-11-28', 'female', '3', 'no'),
(7, 'caeryjtu', 'XCTY', 'crtverbytrnuty', 'XQCTVER', 'ervbtr', 'rvwteyrnuti', '2018-11-16', 'female', '2 Bed/2 Bath', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `LawsAndRules` (
  `doc_id` int(10) NOT NULL AUTO_INCREMENT,
  'description' varchar(500),
  'imageFileName' varchar(20),
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
