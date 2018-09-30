-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 10:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `ename` varchar(25) NOT NULL,
  `natureofprogram` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `organised` varchar(30) NOT NULL,
  `imagename` varchar(30) NOT NULL,
  `imagetmp` blob NOT NULL,
  `id` int(10) NOT NULL,
  FOREIGN KEY(`eid`) REFERENCES staff(`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs_attended`
--

INSERT INTO `programs_attended` (`eid`, `ename`, `natureofprogram`, `title`, `duration`, `fromdate`, `todate`, `organised`, `imagename`, `imagetmp`, `id`) VALUES
('C1495', 'Dr.Subashini G', 'national conference', '51st CSI National convention', 'less than one week', '2017-01-23', '2017-01-25', 'IT department', '', '', 6),
('C1600', 'Dr.Umamaheswari.K', 'national conference', '51st CSI National convention', 'less than one week', '2017-01-22', '2017-01-25', 'IT department', '', '', 7),
('C1954', 'Dr.Karthika Renuka.D', 'national conference', '51st CSI National convention', 'less than one week', '2017-01-22', '2017-01-22', 'IT department', '', '', 8),
('C5073', 'Mrs.Sangeetha.B', 'national conference', '51st CSI National convention', 'less than one week', '2017-01-22', '2017-01-22', 'IT department', '', '', 9),
('C3537', 'Mrs.Rajamohana.S.P', 'national conference', '51st CSI National convention', 'less than one week', '2017-01-22', '2017-01-22', 'IT department', '', '', 10),
('C5506', 'Mrs.Shyamala Gowri.S', 'national conference', '51st CSI National convention', 'less than one week', '2017-01-22', '2017-01-22', 'IT department', '', '', 11),
('C6188', 'Dr.R.Manimegalai', 'international', '3rd International conference on innovative researc', 'less than one week', '2015-04-09', '2015-04-11', 'IT department', '', '', 12);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `programs_attended`
--
ALTER TABLE `programs_attended`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programs_attended`
--
ALTER TABLE `programs_attended`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
