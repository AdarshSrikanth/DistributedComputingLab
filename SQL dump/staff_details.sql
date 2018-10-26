-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 06:06 PM
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
CREATE DATABASE IF NOT EXISTS `staff_details` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `staff_details`;

-- --------------------------------------------------------

--
-- Table structure for table `programs_attended`
--

CREATE TABLE IF NOT EXISTS `programs_attended` (
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `eid` (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `EID` varchar(5) NOT NULL,
  `name` varchar(35) NOT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `doj` date NOT NULL,
  `design` varchar(30) NOT NULL,
  `curr_doj` date NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `area_of_interest` varchar(1000) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`EID`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`EID`, `name`, `mail`, `doj`, `design`, `curr_doj`, `qualification`, `area_of_interest`, `password`) VALUES
('C1495', 'Dr.Subashini G', 'suba@ity.psgtech.ac.in', '2000-07-21', 'Professor', '2017-06-01', 'M.E, Ph.D', 'Computer Architecture, Advanced Computer Architecture,Data Communication Networks,\r\nDistributed Systems', 'c1495'),
('C1600', 'Dr.Umamaheswari K', 'uma@ity.psgtech.ac.in ', '0000-00-00', 'Professor, H.O.D', '0000-00-00', 'M.E, Ph.D', 'Compiler Design,Data Analytics,Data Mining,Machine Learning,Investigations on exploring the efficiency', 'c1600'),
('C1954', 'Dr.Karthika Renuka D', 'dkr@ity.psgtech.ac.in ', '0000-00-00', 'Assistant Professor (SR GR)', '0000-00-00', 'M.Sc, Ph.D', 'Data Mining,Neural Networks,Optimization Techniques,Advanced data structures,IoT,Data Analytics\r\n', 'c1954'),
('c3403', 'Dr. Sarathambekai S', 'ssi@ity.psgtech.ac.in', '2005-06-02', 'Assistant Professor Sr.Gr', '2014-04-01', 'M.Tech, Ph.D', 'Web Methodologies, Semantic Web, Distributed Systems', ''),
('C3537', 'Mrs.RajaMohana S P', 'spr@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (SR GR)', '2018-04-03', 'M.Tech, Ph.D', 'Data Mining,\r\nDatabase Management System,\r\nMobile Computing,\r\nObject Oriented Analysis and Design,\r\nInvestigations on exploring the efficacy of Distributed Pair Programming in academic environment (Agile Methodology),\r\nTCP/IP Networks and Applications', 'c3537'),
('C3539', 'Dr.Ilayaraja V', 'vir@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sl. Gr.)', '2018-04-02', 'M.E, Ph.D', 'Information storage and Management,\r\nDatabase Management System,\r\nMobile Computing,\r\nOperating Systems', 'c3539'),
('C5056', 'Dr.Rekha R', 'rra@ity.psgtech.edu', '2009-06-01', 'Assistant Professor (Sr. Gr.)', '2014-01-01', 'M.E, Ph.D', 'IoT Data Analytics\r\nData Mining\r\nGenomic crptanalysis\r\nOperating Systems\r\nWireless Sensor Networks', 'c5056'),
('C5073', 'Mrs.Sangeetha B', '', '2009-06-01', 'Assistant Professor (SR GR)', '2014-01-01', 'M.E, Ph.D', 'Data Integration\r\nDatabase Management System\r\nDeep Learning Natural Language Processing\r\nInternet of', 'c5073'),
('C5213', 'Dr.Anitha Kumari K', 'kak@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-02', 'M.E, Ph.D, M.B.A', 'Semantic Web services \r\nIoT Security\r\nBio-Crypto Systems\r\nswarm intelligence\r\nCryptography and Netwo', 'c5213'),
('C5243', 'Mrs.Senthilprabha R', 'rsp@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-02', 'M.E, Ph.D', 'Mobile Computing\r\nEnergy harvesting and optimal cluster head selection in wireless sensor networks\r\n', 'c5243'),
('C5251', 'Ms.Thamilselvi K P', 'kpt@psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.Tech', 'Data Structures\r\nInvestigations on exploring the efficacy of Distributed Pair Programming in academi', 'c5251'),
('C5500', 'Mrs.Akalya Devi C', 'cad@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-01', 'M.E, Ph.D', 'swarm intelligence\r\nData Structures, Design and Analysis of Algorithms\r\nInformation Security\r\nObject', 'c5500'),
('C5506', 'Mrs.Shymala Gowri S', 'ssg@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.E.', 'Information Security\r\nMachine Learning\r\nNeural Networks\r\nData Structures\r\nOperating Systems\r\nBio-Cry', 'c5506'),
('C5507', 'Mrs.Hema Priya N', 'nhp@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (SR GR)', '2018-04-01', 'M.E, Ph.D', 'Quantum Computing\r\nDistributed Systems\r\nTCP/IP Network and Applications\r\nWeb Methodologies\r\nOptimiza', 'c5507'),
('C5517', 'Ms.Padmashani R', 'rpi@ity.psgtech.ac.in', '2012-06-01', 'Assistant Professor', '2012-06-01', 'M.E, Ph.D', 'Data Mining\r\nAdvanced Data Structures\r\nCryptography and Network Security\r\nData Structures\r\nDeep Lear', 'c5517'),
('C5661', 'Ms.Brintha V P', 'bvp.it@psgtech.ac.in', '2013-06-05', 'Assistant Professor', '2013-06-05', 'M.E', 'Computer Architecture, Advanced Computer Architecture\r\nSemantic Web services \r\nIoT Data Analytics\r\nD', 'c5661'),
('C5662', 'Ms.Ravitha Rajalakshmi N', 'nrr@ity.psgtech.ac.in', '2012-06-01', 'Assistant Professor', '2014-06-01', 'M.E, Ph.D', 'Machine Learning\r\nData Analytics\r\nData Mining\r\nDeep Learning Natural Language Processing\r\nNeural Net', 'c5662'),
('C5773', 'Mr.Saravanan R', 'rs@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.E', 'Compiler Design\r\nQuantum Computing\r\nDatabase Management System\r\nInternet of Things (IoT) \r\nJava Prog', 'c5773'),
('C5809', 'Ms.Sindhu G', 'sindhuit91@gmail.com', '2014-07-14', 'Assistant Professor', '2017-06-01', 'M.Tech', 'Data Integration\r\nData Mining\r\nDatabase Management System\r\nMachine Learning\r\nOperating Systems\r\nOpti', 'c5809'),
('C5914', 'Ms.Radhika E G', 'egr@ity.psgtech.ac.in', '2015-06-01', 'Assistant Professor (SR GR)', '2017-06-01', 'M.E, Ph.D', 'Cloud Computing\r\nCloud Services Framework Computing\r\nData Structures\r\nData Structures, Design and An', 'c5914'),
('C5956', 'Dr.Mahesh V', 'vm@ity.psgtech.ac.in', '2018-04-01', 'Professor', '0000-00-00', 'M.E, Ph.D', 'Principles of Electrical Engineering\r\nElectronic Devices and Circuits\r\nRenewable Energy Sources\r\nBio', 'c5956'),
('C6066', 'Ms.D.Dharani', 'ddi@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '0000-00-00', 'M.Tech', 'swarm intelligence\r\nMachine Learning\r\nTheory of Computing\r\nSemantic Web', 'c6066'),
('C6083', 'Ms.Anusuya R', 'raa.it@psgtech.ac.in', '2016-08-22', 'Assistant Professor', '2016-08-22', 'M.Tech', 'Semantic Web\r\nSemantic Web services \r\nUnix System Programming\r\nJava Programming\r\nQuantum Computing\r\n', 'c6083'),
('C6114', 'Mrs.Sangeetha S', 'ssa.it@psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E, Ph.D', 'Information storage and Management\r\nObject Oriented Analysis and Design\r\nOperating Systems\r\nTCP/IP N', 'c6114'),
('C6148', 'Ms.R.LogeswariSaranya', 'rls@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.Tech', 'Database Management System\r\nJava Programming\r\nData Structures\r\nSemantic Web', 'c6148'),
('C6149', 'Ms.Priya S', 'spa@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E, Ph.D', 'Data Mining on IoT\r\nInternet of Things (IoT) \r\nSentimental Analysis\r\nSemantic Web\r\nWireless Sensor N', 'c6149'),
('C6160', 'Ms.P.Jeneessha', 'jen@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.Tech', 'swarm intelligence\r\nIoT Security\r\nOperating Systems', 'c6160'),
('C6164', 'Ms.SruthiSivakumar', 'sru.it@psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E', 'Data Mining\r\nDatabase Management System\r\nMachine Learning\r\nMobile Computing', 'c6164'),
('C6188', 'Dr.R.Manimegalai', 'drrm.it@psgtech.ac.in', '2018-04-01', 'PROFESSOR', '0000-00-00', 'M.E, Ph.D', 'Data Structures, Design and Analysis of Algorithms\r\nComputer Architecture, Advanced Computer Archite', 'c6188'),
('C6208', 'Dr.Chandran K R', 'krc@ity.psgtech.ac.in', '2018-04-01', 'Professor', '0000-00-00', 'M.E, Ph.D', 'Communication System \r\nElectronic Circuits\r\nError Control Coding \r\nInternet of Things (IoT) \r\nIoT \r\n', 'c6208');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `eid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aoi` varchar(40) NOT NULL,
  `nod` int(3) NOT NULL,
  `pi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`eid`, `name`, `aoi`, `nod`, `pi`) VALUES
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
-- Constraints for table `programs_attended`
--
ALTER TABLE `programs_attended`
  ADD CONSTRAINT `programs_attended_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `staff` (`EID`);

--
-- Constraints for table `programs_conducted`
--
ALTER TABLE `programs_conducted`
  ADD CONSTRAINT `programs_conducted_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `staff` (`EID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
