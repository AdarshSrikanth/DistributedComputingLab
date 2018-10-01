-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2018 at 10:02 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `fromd` varchar(255) NOT NULL,
  `tood` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`name`, `title`, `company`, `amount`, `fromd`, `tood`, `status`) VALUES
('adlene', 'iot', 'cgwhsdtfhhqsc', 1587, '2018-04-26', '2018-04-28', 'completed'),
('vairam', 'iot', 'psg', 1200000, '2018-04-20', '2018-04-28', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `funded`
--

CREATE TABLE `funded` (
  `name` varchar(255) NOT NULL,
  `facultyname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `sfrom` varchar(255) NOT NULL,
  `sto` varchar(255) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funded`
--

INSERT INTO `funded` (`name`, `facultyname`, `title`, `amount`, `sfrom`, `sto`, `status`) VALUES
('synergy', 'pranamika', 'iot', 2, '2018-04-21', '2018-04-27', 'completed'),
('hdhfdcm', 'pranu', 'iot3', 12000, '2018-04-26', '2018-04-27', 'applied'),
('hdhfdcme', 'pranufedgrg', 'iot32', 12000, '2018-04-26', '2018-04-27', 'applied');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`name`,`title`);

--
-- Indexes for table `funded`
--
ALTER TABLE `funded`
  ADD PRIMARY KEY (`facultyname`,`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
