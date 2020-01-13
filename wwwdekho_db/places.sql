-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2015 at 01:15 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

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
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `desc` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `image`, `city`, `desc`) VALUES
(3, 'ambaji.jpg', 'Ambaji', 'Ambaji Is A Very Popular Place Of Godess "Amba". '),
(4, 'delwada.jpg', 'Mount Aabu', 'Delwada Is Popular Place Of  "Jaina".'),
(5, 'dwarka.jpg', 'Dwarka', 'Very Popular Place In Gujarat Is Dwarka.Bhumi Of Krishna.'),
(6, 'eme temple.jpg', 'Vadodara', 'EME Temple Located In Vadodara. This Is Only Place In India Where Shivji''s Idol Is Present.'),
(7, 'fatehsinh musium.jpg', 'Vadodara', 'This Is Just A Musium. Where All Cultural And Haritage Things Are Stored By Centuries.'),
(8, 'gandhi aashram.jpg', 'Ahmedabad', 'Gandhi Aashram Is Located In The Sabarmati Suburb Of Ahmedabad,Gujarat,Adjoining The Ashram Road,On The Banks Of the River Sabarmati,4 Miles From Townhall.'),
(9, 'girnar.jpg', 'Junagadh', 'Girnar Is A Collection Of Mountains In The Junagadh District Of Gujarat,India,Situated Near Junagadh At A Distance Of 327 KM From Ahmedabad.'),
(10, 'hajira.jpg', 'Ankleshwar', 'Hajira Is A Town And A Transshipment In The Surat District In The Gujarat State In Southern India.'),
(11, 'hathnimata.jpg', 'Vadodara', 'Hathnimata Is A Very Popular Waterfall Near Vadodara.'),
(12, 'kabir vad.jpg', 'Bharuch', 'Kabirvad Is A Famous Place Situated On An Island In The Middle Of The River Narmada.'),
(13, 'somnath.jpg', 'Junagadh', 'Somnath Is A Land Of Shiva.It Is One Of The Twelve Jyortiling Of Shiva In India.'),
(16, 'sayaji baug.jpg', 'Vadodara', 'Sayaji Baug Is A Garden Located In Vadoodara,Gujarat,India.Sayaji Baug Was Dadicated To The Citizens Of Vadodara.'),
(17, 'sur sagar.jpg', 'Vadodara', 'Sursagar Is A Very Popular Lake In Middle Of Vadodara City.'),
(19, 'sidi saiyad jali.jpg', 'Ahmedabad', 'This Is A Historical Monument Located In Ahmedabad By Centeuries.'),
(20, 'white rann.jpg', 'Kutchh', 'The World Famous White Rann Located In Kutchh.'),
(21, 'pavagadh2.jpg', 'Halol', 'Pavagadh Is A Hill Station,and A Municipality In Panchmahal District About 60 Kilometers Away From Vadodara ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
