-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2018 at 07:34 AM
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
('MHRD', 'Dr.T.Sivakumar', 'Aakash R&D ', 100000, '2014-03-01', '2018-05-01', 'ongoing'),
('PSG Industry', 'G.Sindhu', 'Calibration Software', 50000, '2017-06-01', '2018-05-01', 'ongoing');

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
