-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 02:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `programs_attended`
--

CREATE TABLE `programs_attended` (
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
  `Resourceperson` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs_attended`
--

INSERT INTO `programs_attended` (`eid`, `ename`, `natureofprogram`, `nameofworkshop`, `duration`, `fromdate`, `todate`, `venue`, `noofparticipants`, `sponsoringagencies`, `Resourceperson`) VALUES
('C6188', 'Dr.R.manimegalai', 'Technicalseminar', 'Cybersecuity', 'oneday', '2017-09-27', '2017-09-27', 'Coimbatore', 40, 'Cisco', 'Mr.Visakaraman');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
