-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "staff" ------------------------------------
-- CREATE TABLE "staff" ----------------------------------------
CREATE TABLE `staff` ( 
	`EID` VarChar( 5 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`name` VarChar( 35 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`mail` VarChar( 40 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
	`doj` Date NOT NULL,
	`design` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`curr_doj` Date NOT NULL,
	`qualification` VarChar( 30 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`area_of_interest` VarChar( 1000 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	PRIMARY KEY ( `EID` ),
	CONSTRAINT `mail` UNIQUE( `mail` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "staff" ------------------------------------
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C1495', 'Dr.Subashini G', 'suba@ity.psgtech.ac.in', '2000-07-21', 'Professor', '2017-06-01', 'M.E, Ph.D', 'Computer Architecture, Advanced Computer Architecture,Data Communication Networks,
Distributed Systems' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C1600', 'Dr.Umamaheswari K', 'uma@ity.psgtech.ac.in ', '0000-00-00', 'Professor, H.O.D', '0000-00-00', 'M.E, Ph.D', 'Compiler Design,Data Analytics,Data Mining,Machine Learning,Investigations on exploring the efficiency' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C1954', 'Dr.Karthika Renuka D', 'dkr@ity.psgtech.ac.in ', '0000-00-00', 'Assistant Professor (SR GR)', '0000-00-00', 'M.Sc, Ph.D', 'Data Mining,Neural Networks,Optimization Techniques,Advanced data structures,IoT,Data Analytics
' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'c3403', 'Dr. Sarathambekai S', 'ssi@ity.psgtech.ac.in', '2005-06-02', 'Assistant Professor Sr.Gr', '2014-04-01', 'M.Tech, Ph.D', 'Web Methodologies, Semantic Web, Distributed Systems' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C3537', 'Mrs.RajaMohana S P', 'spr@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (SR GR)', '2018-04-03', 'M.Tech, Ph.D', 'Data Mining,
Database Management System,
Mobile Computing,
Object Oriented Analysis and Design,
Investigations on exploring the efficacy of Distributed Pair Programming in academic environment (Agile Methodology),
TCP/IP Networks and Applications' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C3539', 'Dr.Ilayaraja V', 'vir@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sl. Gr.)', '2018-04-02', 'M.E, Ph.D', 'Information storage and Management,
Database Management System,
Mobile Computing,
Operating Systems' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5056', 'Dr.Rekha R', 'rra@ity.psgtech.edu', '2009-06-01', 'Assistant Professor (Sr. Gr.)', '2014-01-01', 'M.E, Ph.D', 'IoT Data Analytics
Data Mining
Genomic crptanalysis
Operating Systems
Wireless Sensor Networks' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5073', 'Mrs.Sangeetha B', '', '2009-06-01', 'Assistant Professor (SR GR)', '2014-01-01', 'M.E, Ph.D', 'Data Integration
Database Management System
Deep Learning Natural Language Processing
Internet of' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5213', 'Dr.Anitha Kumari K', 'kak@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-02', 'M.E, Ph.D, M.B.A', 'Semantic Web services 
IoT Security
Bio-Crypto Systems
swarm intelligence
Cryptography and Netwo' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5243', 'Mrs.Senthilprabha R', 'rsp@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-02', 'M.E, Ph.D', 'Mobile Computing
Energy harvesting and optimal cluster head selection in wireless sensor networks
' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5251', 'Ms.Thamilselvi K P', 'kpt@psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.Tech', 'Data Structures
Investigations on exploring the efficacy of Distributed Pair Programming in academi' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5500', 'Mrs.Akalya Devi C', 'cad@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (Sr. Gr.)', '2018-04-01', 'M.E, Ph.D', 'swarm intelligence
Data Structures, Design and Analysis of Algorithms
Information Security
Object' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5506', 'Mrs.Shymala Gowri S', 'ssg@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.E.', 'Information Security
Machine Learning
Neural Networks
Data Structures
Operating Systems
Bio-Cry' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5507', 'Mrs.Hema Priya N', 'nhp@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor (SR GR)', '2018-04-01', 'M.E, Ph.D', 'Quantum Computing
Distributed Systems
TCP/IP Network and Applications
Web Methodologies
Optimiza' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5517', 'Ms.Padmashani R', 'rpi@ity.psgtech.ac.in', '2012-06-01', 'Assistant Professor', '2012-06-01', 'M.E, Ph.D', 'Data Mining
Advanced Data Structures
Cryptography and Network Security
Data Structures
Deep Lear' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5661', 'Ms.Brintha V P', 'bvp.it@psgtech.ac.in', '2013-06-05', 'Assistant Professor', '2013-06-05', 'M.E', 'Computer Architecture, Advanced Computer Architecture
Semantic Web services 
IoT Data Analytics
D' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5662', 'Ms.Ravitha Rajalakshmi N', 'nrr@ity.psgtech.ac.in', '2012-06-01', 'Assistant Professor', '2014-06-01', 'M.E, Ph.D', 'Machine Learning
Data Analytics
Data Mining
Deep Learning Natural Language Processing
Neural Net' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5773', 'Mr.Saravanan R', 'rs@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '2018-04-01', 'M.E', 'Compiler Design
Quantum Computing
Database Management System
Internet of Things (IoT) 
Java Prog' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5809', 'Ms.Sindhu G', 'sindhuit91@gmail.com', '2014-07-14', 'Assistant Professor', '2017-06-01', 'M.Tech', 'Data Integration
Data Mining
Database Management System
Machine Learning
Operating Systems
Opti' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5914', 'Ms.Radhika E G', 'egr@ity.psgtech.ac.in', '2015-06-01', 'Assistant Professor (SR GR)', '2017-06-01', 'M.E, Ph.D', 'Cloud Computing
Cloud Services Framework Computing
Data Structures
Data Structures, Design and An' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C5956', 'Dr.Mahesh V', 'vm@ity.psgtech.ac.in', '2018-04-01', 'Professor', '0000-00-00', 'M.E, Ph.D', 'Principles of Electrical Engineering
Electronic Devices and Circuits
Renewable Energy Sources
Bio' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6066', 'Ms.D.Dharani', 'ddi@ity.psgtech.ac.in', '0000-00-00', 'Assistant Professor', '0000-00-00', 'M.Tech', 'swarm intelligence
Machine Learning
Theory of Computing
Semantic Web' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6083', 'Ms.Anusuya R', 'raa.it@psgtech.ac.in', '2016-08-22', 'Assistant Professor', '2016-08-22', 'M.Tech', 'Semantic Web
Semantic Web services 
Unix System Programming
Java Programming
Quantum Computing
' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6114', 'Mrs.Sangeetha S', 'ssa.it@psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E, Ph.D', 'Information storage and Management
Object Oriented Analysis and Design
Operating Systems
TCP/IP N' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6148', 'Ms.R.LogeswariSaranya', 'rls@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.Tech', 'Database Management System
Java Programming
Data Structures
Semantic Web' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6149', 'Ms.Priya S', 'spa@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E, Ph.D', 'Data Mining on IoT
Internet of Things (IoT) 
Sentimental Analysis
Semantic Web
Wireless Sensor N' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6160', 'Ms.P.Jeneessha', 'jen@ity.psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.Tech', 'swarm intelligence
IoT Security
Operating Systems' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6164', 'Ms.SruthiSivakumar', 'sru.it@psgtech.ac.in', '2018-04-01', 'Assistant Professor', '0000-00-00', 'M.E', 'Data Mining
Database Management System
Machine Learning
Mobile Computing' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6188', 'Dr.R.Manimegalai', 'drrm.it@psgtech.ac.in', '2018-04-01', 'PROFESSOR', '0000-00-00', 'M.E, Ph.D', 'Data Structures, Design and Analysis of Algorithms
Computer Architecture, Advanced Computer Archite' );
INSERT INTO `staff`(`EID`,`name`,`mail`,`doj`,`design`,`curr_doj`,`qualification`,`area_of_interest`) VALUES ( 'C6208', 'Dr.Chandran K R', 'krc@ity.psgtech.ac.in', '2018-04-01', 'Professor', '0000-00-00', 'M.E, Ph.D', 'Communication System 
Electronic Circuits
Error Control Coding 
Internet of Things (IoT) 
IoT 
' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


