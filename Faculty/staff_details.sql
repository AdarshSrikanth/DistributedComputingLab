-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2018 at 09:15 AM
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
  PRIMARY KEY (`EID`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`EID`, `name`, `mail`, `doj`, `design`, `curr_doj`, `qualification`, `area_of_interest`) VALUES
('C1495', 'Dr.Subashini G', 'suba@ity.psgtech.ac.in', '2000-07-21', 'Professor', '2017-06-01', 'M.E, Ph.D', 'Computer Architecture, Advanced Computer Architecture,Data Communication Networks,\r\nDistributed Systems'),
('C1600', 'Dr.Umamaheswari K', 'uma@ity.psgtech.ac.in ', '0000-00-00', 'Professor, H.O.D', '0000-00-00', 'M.E, Ph.D', 'Compiler Design,Data Analytics,Data Mining,Machine Learning,Investigations on exploring the efficiency'),
('C1954', 'Dr.Karthika Renuka D', 'dkr@ity.psgtech.ac.in ', '0000-00-00', 'Assistant Professor (SR GR)', '0000-00-00', 'M.Sc, Ph.D', 'Data Mining,Neural Networks,Optimization Techniques,Advanced data structures,IoT,Data Analytics\r\n'),
('c3403', 'Dr. Sarathambekai S', 'ssi@ity.psgtech.ac.in', '2005-06-02', 'Assistant Professor Sr.Gr', '2014-04-01', 'M.Tech, Ph.D', 'Web Methodologies, Semantic Web, Distributed Systems'),
('C3537', 'Mrs.RajaMohana S P', 'spr@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (SR GR)', '2018-04-03', 'M.Tech, Ph.D', 'Data Mining,\r\nDatabase Management System,\r\nMobile Computing,\r\nObject Oriented Analysis and Design,\r\nInvestigations on exploring the efficacy of Distributed Pair Programming in academic environment (Agile Methodology),\r\nTCP/IP Networks and Applications'),
('C3539', 'Dr.Ilayaraja V', 'vir@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sl. Gr.)', '2018-04-02', 'M.E, Ph.D', 'Information storage and Management,\r\nDatabase Management System,\r\nMobile Computing,\r\nOperating Systems'),
('C5056', 'Dr.Rekha R', 'rra@ity.psgtech.edu', '2009-06-01', 'Assistant Professor (Sr. Gr.)', '2014-01-01', 'M.E, Ph.D', 'IoT Data Analytics\r\nData Mining\r\nGenomic crptanalysis\r\nOperating Systems\r\nWireless Sensor Networks'),
('C5073', 'Mrs.Sangeetha B', '', '2009-06-01', 'Assistant Professor (SR GR)', '2014-01-01', 'M.E, Ph.D', 'Data Integration\r\nDatabase Management System\r\nDeep Learning Natural Language Processing\r\nInternet of'),
('C5213', 'Dr.Anitha Kumari K', 'kak@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-02', 'M.E, Ph.D, M.B.A', 'Semantic Web services \r\nIoT Security\r\nBio-Crypto Systems\r\nswarm intelligence\r\nCryptography and Netwo'),
('C5243', 'Mrs.Senthilprabha R', 'rsp@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-02', 'M.E, Ph.D', 'Mobile Computing\r\nEnergy harvesting and optimal cluster head selection in wireless sensor networks\r\n'),
('C5251', 'Ms.Thamilselvi K P', 'kpt@psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.Tech', 'Data Structures\r\nInvestigations on exploring the efficacy of Distributed Pair Programming in academi'),
('C5500', 'Mrs.Akalya Devi C', 'cad@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-01', 'M.E, Ph.D', 'swarm intelligence\r\nData Structures, Design and Analysis of Algorithms\r\nInformation Security\r\nObject'),
('C5506', 'Mrs.Shymala Gowri S', 'ssg@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.E.', 'Information Security\r\nMachine Learning\r\nNeural Networks\r\nData Structures\r\nOperating Systems\r\nBio-Cry'),
('C5507', 'Mrs.Hema Priya N', 'nhp@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (SR GR)', '2018-04-01', 'M.E, Ph.D', 'Quantum Computing\r\nDistributed Systems\r\nTCP/IP Network and Applications\r\nWeb Methodologies\r\nOptimiza'),
('C5517', 'Ms.Padmashani R', 'rpi@ity.psgtech.ac.in', '2012-06-01', 'Assistant Professor', '2012-06-01', 'M.E, Ph.D', 'Data Mining\r\nAdvanced Data Structures\r\nCryptography and Network Security\r\nData Structures\r\nDeep Lear'),
('C5661', 'Ms.Brintha V P', 'bvp.it@psgtech.ac.in', '2013-06-05', 'Assistant Professor', '2013-06-05', 'M.E', 'Computer Architecture, Advanced Computer Architecture\r\nSemantic Web services \r\nIoT Data Analytics\r\nD'),
('C5662', 'Ms.Ravitha Rajalakshmi N', 'nrr@ity.psgtech.ac.in', '2012-06-01', 'Assistant Professor', '2014-06-01', 'M.E, Ph.D', 'Machine Learning\r\nData Analytics\r\nData Mining\r\nDeep Learning Natural Language Processing\r\nNeural Net'),
('C5773', 'Mr.Saravanan R', 'rs@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.E', 'Compiler Design\r\nQuantum Computing\r\nDatabase Management System\r\nInternet of Things (IoT) \r\nJava Prog'),
('C5809', 'Ms.Sindhu G', 'sindhuit91@gmail.com', '2014-07-14', 'Assistant Professor', '2017-06-01', 'M.Tech', 'Data Integration\r\nData Mining\r\nDatabase Management System\r\nMachine Learning\r\nOperating Systems\r\nOpti'),
('C5914', 'Ms.Radhika E G', 'egr@ity.psgtech.ac.in', '2015-06-01', 'Assistant Professor (SR GR)', '2017-06-01', 'M.E, Ph.D', 'Cloud Computing\r\nCloud Services Framework Computing\r\nData Structures\r\nData Structures, Design and An'),
('C5956', 'Dr.Mahesh V', 'vm@ity.psgtech.ac.in', '2018-04-01', 'Professor', '0000-00-00', 'M.E, Ph.D', 'Principles of Electrical Engineering\r\nElectronic Devices and Circuits\r\nRenewable Energy Sources\r\nBio'),
('C6066', 'Ms.D.Dharani', 'ddi@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '0000-00-00', 'M.Tech', 'swarm intelligence\r\nMachine Learning\r\nTheory of Computing\r\nSemantic Web'),
('C6083', 'Ms.Anusuya R', 'raa.it@psgtech.ac.in', '2016-08-22', 'Assistant Professor', '2016-08-22', 'M.Tech', 'Semantic Web\r\nSemantic Web services \r\nUnix System Programming\r\nJava Programming\r\nQuantum Computing\r\n'),
('C6114', 'Mrs.Sangeetha S', 'ssa.it@psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E, Ph.D', 'Information storage and Management\r\nObject Oriented Analysis and Design\r\nOperating Systems\r\nTCP/IP N'),
('C6148', 'Ms.R.LogeswariSaranya', 'rls@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.Tech', 'Database Management System\r\nJava Programming\r\nData Structures\r\nSemantic Web'),
('C6149', 'Ms.Priya S', 'spa@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E, Ph.D', 'Data Mining on IoT\r\nInternet of Things (IoT) \r\nSentimental Analysis\r\nSemantic Web\r\nWireless Sensor N'),
('C6160', 'Ms.P.Jeneessha', 'jen@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.Tech', 'swarm intelligence\r\nIoT Security\r\nOperating Systems'),
('C6164', 'Ms.SruthiSivakumar', 'sru.it@psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E', 'Data Mining\r\nDatabase Management System\r\nMachine Learning\r\nMobile Computing'),
('C6188', 'Dr.R.Manimegalai', 'drrm.it@psgtech.ac.in', '2018-04-01', 'PROFESSOR', '0000-00-00', 'M.E, Ph.D', 'Data Structures, Design and Analysis of Algorithms\r\nComputer Architecture, Advanced Computer Archite'),
('C6208', 'Dr.Chandran K R', 'krc@ity.psgtech.ac.in', '2018-04-01', 'Professor', '0000-00-00', 'M.E, Ph.D', 'Communication System \r\nElectronic Circuits\r\nError Control Coding \r\nInternet of Things (IoT) \r\nIoT \r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
