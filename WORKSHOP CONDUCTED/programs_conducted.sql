-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2018 at 10:09 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `staff_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `programs_conducted`
--

CREATE TABLE IF NOT EXISTS `programs_conducted` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eid` varchar(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `natureofprogram` varchar(255) NOT NULL,
  `nameofworkshop` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `venue` varchar(50) NOT NULL,
  `noofparticipants` int(11) NOT NULL,
  `sponsoringagencies` varchar(50) NOT NULL,
  `Resourceperson` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `programs_conducted_ibfk_1` (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `programs_conducted`
--

INSERT INTO `programs_conducted` (`id`, `eid`, `ename`, `natureofprogram`, `nameofworkshop`, `duration`, `fromdate`, `todate`, `venue`, `noofparticipants`, `sponsoringagencies`, `Resourceperson`) VALUES
(1, 'C6188', 'Dr.R.Manimegalai', 'Research Seminar', 'Cybersecuity', 'oneday', '2017-09-27', '2017-09-27', 'Coimbatore', 40, 'Cisco', 'Mr.Visakaraman'),
(53, 'C5500', 'Mrs.Akalya Devi C', 'FDP', 'Hadoop', 'workshop', '2016-03-05', '2016-03-06', 'Ekalavya Lab', 30, 'TEQIP', 'Stephy');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `programs_conducted`
--
ALTER TABLE `programs_conducted`
  ADD CONSTRAINT `programs_conducted_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `staff` (`EID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
