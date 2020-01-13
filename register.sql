-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2015 at 05:55 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `display_images`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Register_Id` int(20) NOT NULL AUTO_INCREMENT,
  `First_Name` int(25) NOT NULL,
  `Last_Name` int(25) NOT NULL,
  `Gender` int(10) NOT NULL,
  `Birth_Date` int(25) NOT NULL,
  `Age` int(25) NOT NULL,
  `Address` int(50) NOT NULL,
  `Pin_Code` int(50) NOT NULL,
  `Contact_No` int(25) NOT NULL,
  `Email_Id` int(50) NOT NULL,
  `User_Id` int(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `Confirm_Password` int(50) NOT NULL,
  PRIMARY KEY (`Register_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
