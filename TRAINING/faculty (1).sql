-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 07:54 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `sid` varchar(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `sid` (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staffs` (`sid`, `sname`, `password`) VALUES
('C1495', 'Subashini.G', 'c1495'),
('C1600', 'Umamaheshwari.K', 'c1600'),
('C1954', 'Karthika Renuka.D', 'c1954'),
('C3043', 'Sarathambekai.S', 'c3043'),
('C3537', 'Raja Mohana.S.P', 'c3537'),
('C3538', 'Vairam.T', 'c3538'),
('C3539', ' Ilayaraja.V', 'c3539'),
('C5056', 'Rekha.R', 'c5056'),
('C5073', 'Sangeetha.B', 'c5073'),
('C5213', 'Anitha Kumari.K', 'c5213'),
('C5243', 'Senthilprabha.R', 'c5243'),
('C5251', 'Thamil Selvi.K.P', 'c5251'),
('C5500', 'Akalya Devi.C', 'c5500'),
('C5506', 'Shyamala Gowri.S', 'c5506'),
('C5507', 'Hema Priya.N', 'c5507'),
('C5517', 'Padmashani.R', 'c5517'),
('C5661', 'Brintha V.P', 'c5661'),
('C5662', 'Ravitha Rajalakshmi.N', 'c5662'),
('C5773', 'Saravanan.R', 'c5773'),
('C5805', 'Balasubramanian.P', 'c5805'),
('C5809', 'Sindhu.G', 'c5809'),
('C5914', 'Radhika.E.G', 'c5914'),
('C5956', 'Dr Mahesh V', 'c5956'),
('C6012', 'Geetha Rajakumari.R', 'c6012'),
('C6066', 'Dharani .D', 'c6066'),
('C6083', 'Anusuya.R', 'c6083'),
('c6103', 'Viji.P', 'c6103'),
('C6114', 'Sangeetha.S', 'c6114'),
('C6148', 'Logeswari Saranya.R', 'c6148'),
('C6149', 'Priya.S', 'c6149'),
('C6160', 'Jeneessha.P', 'c6160'),
('C6164', 'Sruthi Sivakumar', 'c6164'),
('C6188', 'Manimegalai.R', 'c6188'),
('C6208', 'Chandran K.R', 'c6208');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `sid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aoi` varchar(40) NOT NULL,
  `nod` int(3) NOT NULL,
  `pi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`sid`, `name`, `aoi`, `nod`, `pi`) VALUES
('C1600', 'Umamaheshwari.K', 'Machine learning', 7, 'NIT'),
('C6208', 'Chandran.K.R', 'IOT', 14, 'any'),
('C5956', 'Mahesh.V', 'IOT', 3, 'any'),
('C1495', 'Subashini.G', 'Security', 7, 'IIT'),
('C6188', 'Manimegalai.R', 'IOT', 7, 'IIT'),
('C1954', 'Karthika Renuka.D', 'Machine learning', 7, 'IIT'),
('C3539', 'Ilayaraja.V', 'DBMS', 7, 'NIT'),
('C3539', 'Ilayaraja.V', 'OS', 7, 'IIT'),
('C3538', 'Vairam.T', 'IOT', 7, 'IIT'),
('C5056', 'Rekha.R', 'IOT', 7, 'any'),
('C5073', 'Sangeetha.B', 'IOT', 7, 'IIT'),
('C5243', 'Senthilprabha.R', 'Biometrics', 14, 'IIT'),
('C5507', 'Hema Priya.N', 'Web Services', 14, 'NIT'),
('C3043', 'Sarathambekai.S', 'Web Technology', 7, 'any'),
('C3537', 'Raja Mohana.S.P', 'Deep learning', 7, 'IIT'),
('C5213', 'Anitha Kumari.K', 'Quantum Cryptography', 7, 'IIT'),
('C5500', 'Akalya Devi.C', 'Data Mining', 7, 'NIT'),
('C5914', 'Radhika.E.G', 'Cloud Computing', 7, 'any'),
('C5251', 'Thamil Selvi.K.P', 'Deep learning', 7, 'any'),
('C5506', 'Shymala Gowri.S ', 'Deep learning', 7, 'NIT'),
('C5662', 'Ravitha Rajalakshmi.N', 'Image Processing', 7, 'PSG '),
('C5773', 'Saravanan.R', 'Maya 3D animation', 7, 'any'),
('C5809', 'Sindhu.G', 'Big Data Analytics', 7, 'IIT'),
('C6066', 'Dharani.D', 'Machine learning', 7, 'any'),
('C6083', 'Anusuya.R', 'Python Programming', 7, 'any'),
('C6114', 'Sangeetha.S', 'Big Data Analytics', 7, 'any');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `training`
--
+

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
