-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2018 at 04:28 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Publication`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal_details`
--

CREATE TABLE IF NOT EXISTS `journal_details` (
  `nature` varchar(255) NOT NULL,
  `conference` varchar(255) NOT NULL,
  `precedence` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `journal` varchar(255) NOT NULL,
  `volume` int(10) NOT NULL,
  `issue` int(10) NOT NULL,
  `pfrom` int(10) NOT NULL,
  `pto` int(10) NOT NULL,
  `issn` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `ugc` int(10) NOT NULL,
  `sij` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal_details`
--

INSERT INTO `journal_details` (`nature`, `conference`, `precedence`, `name`, `title`, `journal`, `volume`, `issue`, `pfrom`, `pto`, `issn`, `month`, `year`, `ugc`, `sij`) VALUES
('National', 'National', '1', 'Adarsh', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('International', '', '', 'Dr.Sarathambekai S', 'Task scheduling using multi-objective hamming discrete particle swarm optimisation in distributed systems', ' International  Journal of  Swarm Intelligence', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Umamaheswari K', 'Multimodal Biometrics for Improving Automatic Teller Machine SecurityBonfring', ' International Journal of Advances in Image Processing', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', 'Dr.Umamaheswari K', 'Article: A Combined Genetic Programming for Microarray Data Analysis', ' International Journal of Computer Applications 80(14):13-17', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', 'Mrs.Sangeetha B', 'Semantic Ontology Mapping using Support Vector Machine', '. IJCA Proceedings on International Conference on Innovations in Computing Techniques (ICICT 2015) ', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Adarsh Srikanth', '1', '1', 1, 1, 1, 1, 0, 12, 1244, 0, 0),
('', '', '', '035', '21324', '1324', 213, 213, 213, 213, 21324, 13, 1234, 1, 1),
('', '', '', '', 'An Effective Intrusion Detection System Using Flawless Feature Selection, Outlier Detection and Classification', 'Advances in Intelligent and Soft Computing, ', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', '', 'PSO-Based Multipath routing in Wireless Sensor Network', 'Advances in Intelligent Systems and Compuitng', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'AN INTEGRATED EVOLUTIONARY ALGORITHM FOR REVIEW SPAM DETECTION ON ONLINE REVIEWS', 'Advances in Natural and Applied Sciences ', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'Survey on MANET Attacks and Mitigation using Routing Protocols', 'American Journal of Applied Sciences', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'A Hybrid Approach to Optimize Feature Selection Process   Using iBPSO- BFPA for Review Spam Detection,', 'AMIS', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'Performance Analysis of iBPSO and BFPA Based Feature Selection Techniques for Improving Classiï¬cation Accuracy in Review Spam Detection', 'AMIS', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Rekha R', 'Fuzzy Based Key Agreement Scheme Using ECG signals for Wireless Body Sensor Networks', 'Applied Mechanics and Materials', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'SEAR: Secured Energy-Aware Routing With Trusted Payment Model for Wireless Networks', 'ARPN Journal of Engineering and Applied Sciences', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Design of Reconfigurable Discrete Cosine Transform in Multicore Architecture', 'Asian Journal of Information and Technology', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'AIS-DAG: Artificial Immune System for Directed Acyclic Graphs Model Based Fair Resource Allocation for Heterogeneous Cloud Computing', 'Asian Journal of Information Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Ilayaraja V', 'Enhanced Traffic Aware Scheduling Protocol for Variable Bit Rate Traffic in IEEE 802.11e WLAN', 'Asian Journal of Information Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'An Effective Intrusion Detection System using CRF Based Cuttlefish Feature Selection Algorithm and MSVM', 'Asian Journal Of Information Technology.', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Mrs.Sangeetha B', 'Semantic Ontology Mapping Using Ensemble Learning', 'Australian Journal of Basic & Applied Science', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'A DEXTEROUS ASYMMETRIC TWO-SERVER PASSWORD AUTHENTICATION SCHEME USING ECC WITH PROVABLE SECURITY', 'Australian Journal of Basic and Applied Sciences', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'An Efficient FPGA Architecture For RDCT With Reduced Components', 'Australian Journal of Basic and Applied Sciences', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Efficient Processing of Information Retrival Using Fuzzy Sql Queries', 'Australian Journal of Basic and Applied Sciences', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Multi Agent Based Dynamic Resource Allocation in Cloud Environment for Improving Quality of Service', 'Australian Journal of Basic and Applied Sciences', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'OPINION MINING USING HYBRID METHODS', 'â€, International Journal  of Computer Application', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Rekha R', 'Evaluation of Effect of Unsupervised Dimensionality Reduction Techniques on Automated Arrhythmia Classification', 'Biomedical Signal Processing and Control', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Rekha R', 'Secure Medical Data Transmission in Body Area Sensor Networks Using Dynamic Biometrics and Steganography', 'Bonfring International Journal of Software Engineering and Soft Computing', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'A Survey on Image Data Retrieval in Digital Libraries', 'CiiT International Journal of Digital Image Processing', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', 'Mrs.Shymala Gowri S', 'Reversible Data Embedding Using Color DICOM Images For Medical Applications', 'CiiT International Journal of Digital Image Processing', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Dr.Rekha R', 'Critical Evaluation of Linear Dimensionality Reduction Techniques for Cardiac Arrhythmia Classification', 'Circuits and Systems', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'A Packet Classification and Node-Level Certification Mechanism for Intrusion Detection in MANET', 'Communications in Computer and Information Science', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'Hybrid approach of improved binary particle swarm optimization and shuffled frog leaping for feature selection', 'Computers & Electrical Engineering', 0, 0, 0, 0, 0, 0, 2018, 0, 0),
('', '', '', '', 'Journal of Theoretical and Applied Information Technology', 'Efficient Techniques for Securing Digital Video Data', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', '', 'Mining of customer walking path sequence from RFID supermarket data', 'Electronic Government', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', '', 'Hidden Markov Model Based Web Query Classification', 'European Journal of Sci. Research', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'An Efficient Framework Model to Detect and Eliminate Redundancy in RFID', 'European Journal of Scientific Research', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'An Evolutionary Approach for Ruleset Selection in a Class Based Associative Classifier', 'European Journal of Scientific Research', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'CBMIR: Content Based Image Retrieval using Invariant Moments, GLCM and Grayscale Resolution for Medical Images', 'European Journal of Scientific Research', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'Fast Random Bit Encryption Technique for Video Data', 'European Journal of Scientific Research', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'Improving the Effectiveness of Statistical Feature Selection Algorithm using Bag of Synsets and its Parallelization', 'European Journal of Scientific Research', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'An enhanced ACO algorithm to select features for text categorization and its parallelization', 'Expert Systems with Applications- Elsevier ', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('National', 'International', '1', 'fgd', 'gf', 'gf', 43, 43, 43, 43, 43, 4, 43, 1, 0),
('', '', '', '', 'LACI: Lazy Associative Classification Using Information Gain', 'IACSIT International Journal of Engineering and Technology', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Dr.Subashini G', 'A Fast And Elitist Bi-Objective Evolutionary Algorithm For Scheduling Independent Tasks On Heterogeneous Systems', 'ICTACT Journal on Soft Computing', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', '', 'Power System Planning using ANN with Fuzzy Logic and Wavelet Analysis', 'ICTACT Journal on Soft Computing', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'Automatic Test Case Generation for UML Collaboration Diagrams', 'IETE Journal of Research', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'AN EFFICIENT 3D ELLIPTIC CURVE DIFFIE-HELLMAN (ECDH) BASED TWO-SERVER PASSWORD-ONLY AUTHENTICATED KEY EXCHANGE PROTOCOL WITH PROVABLE SECURITY', 'IETE Journal of Research (T & F)', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Ilayaraja V', 'Improving QoS using Adaptive TXOP Allocation in IEEE 802.11e WLAN', 'IJCA', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Rekha R', 'Secure Communication in BAN using Modified Fuzzy Vault Scheme', 'IJCA Proceedings of International Conference on Innovations in Computing Techniques', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'A SYMMETRIC TWO-SERVER PASSWORD BASED AUTHENTICATION AND KEY EXCHANGE PROTOCOL DEPLOYED IN PAAS', 'IJCA Proceedings on International Conference on Innovations in Computing Techniques (ICICT 2015)', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.Sangeetha B', 'Semantic Mapping using Extreme Learning Machine', 'IJCA Proceedings on International Conference on Innovations in Computing Techniques (ICICT 2015)', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'An Increment Feature Selection Approach for Intrusion Detection System in MANET', 'International Journal for Research in Applied Science & Engineering Technology', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Sarathambekai S', 'Shuffled frog leaping algorithm in distributed system', 'International Journal of   Computer Application', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'A parallel ACO algorithm to select terms to categorise longer documents', 'International Journal of  Computational Science and Engineering', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', 'Dr.Subashini G', 'Task Allocation in Distributed Computing Systems using Adaptive Particle Swarm Optimization', 'International Journal Of  Computer Applications and Technology', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'Optimal Solution for Finding Secured Routes in Mobile Ad-Hoc Networks ', 'International Journal of  Networking and Communication Engineering', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'AN EFFICIENT 2D DIFFIE - HELLMAN BASED TWO-SERVER PASSWORD-ONLY AUTHENTICATED KEY EXCHANGE PROTOCOL', 'International Journal of Advanced Engineering Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'Improving Energy Efficiency in Multi-Core Processing Using Dynamically Re-Focusing on Processors', 'International Journal of Advanced Engineering Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Mrs.Sangeetha B', 'Integrating Heterogeneous Ontologies using Fuzzy Rule Based Systems and Boosting Algorithm', 'International Journal of Advanced Engineering Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Rekha R', 'Optimal Selection of Feature Extraction Method for PNN Based Automatic Cardiac Arrhythmia Classification', 'International Journal of Advanced Engineering Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Sarathambekai S', 'Performance comparison of discrete particle swarm optimisation and shuffled frog leaping algorithm in multiprocessor task scheduling problem', 'International Journal of Advanced Intelligence Paradigms', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'International Journal of Advanced Research in Computer Science and Software Engineering(IJARCSSE)', 'International Journal of Advanced Research in Computer Science and Software Engineering(IJARCSSE)', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Umamaheswari K', 'Weighted K Nearest Neighbor Classification using Optimized Genetic algorithm', 'International Journal of Advances in Computer Science and Engineering', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', 'Dr.Subashini G', 'Non Dominated Particle Swarm Optimization For Scheduling Independent Tasks On Heterogeneous Distributed Environments', 'International Journal of Advances in Soft Computing and Its Applications', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'Automatic Test Case Generation for UML object diagrams using Genetic Algorithm', 'International Journal of Advances in Soft Computing and Its Applications (IJASCA)', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', '', 'Network Performance Improvement Using Fuzzy Genetic based AODV', 'International Journal of Applied Engineering Resea', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', '', 'A Framework for Effective Resource Allocation in a Distributed Cloud Environment', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'AN EFFICIENT SECURE AND IMPROVED SYMMETRIC TWO-SERVER PASSWORD BASED AUTHENTICATION AND KEY EXCHANGE PROTOCOL USING ECC', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.Senthilprabha R', 'Biometric lock pattern authentication for smart phones', 'International Journal of Applied Engineering Research ', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Design of Finite Field Hybrid Multipliers with Optimum Placement and Routing Architecture', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Effective Architecture of Discrete Cosine Transform Using Sum Select Algorithm', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', '', 'Efficient Memory Built in Self-Test Address Generator Implementation', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Rekha R', 'Electrocardiogram â€“ Fuzzy Based Secure Healthcare System Using Time and Frequency Domain Features', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Intelligent Multipath Routing in Wireless Sensor Network in Genetic Algorithm', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.Sangeetha B', 'Mapping of Domain Ontologies using Aggregation Method', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Privacy Enhanced Sitekey Authentication for Mobile Cloud Using Visual Cryptography', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.Sangeetha B', 'Semantic Ontology Mapping using Extreme Learning Machine with Dimensionality Reduction', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'SENTIMENT CLASSIFICATION BASED ON LDA USING SMO CLASSIFIER', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Strategies for Resource Allocation in Cloud Computing: A Review', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Test Data Compression Techniques Emphasizing Linear Decompressor Based Schemes: A Review', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Wirelength Driven Placement for FPGA using Soft Computing Technique', 'International Journal of Applied Engineering Research', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.Senthilprabha R', 'BIOMETRIC LOCK PATTERN AUTHENTICATION FOR SMART PHONES', 'International Journal of Applied Engineering Research (IJAER)  ', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Ilayaraja V', 'DiffServ Based QoS Architecture for Uplink/Downlink Fairness in IEEE 802.11e Wireless LAN', 'International Journal of Applied Engineering Research (IJAER)', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', 'Dr.Ilayaraja V', 'Diffserv Based QoS Enhancement In IEEE 802.11e Wireless LAN using ARCR', 'International Journal of Applied Engineering Research (IJAER)', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'ECC BASED ASYMMETRIC TWO-SERVER PASSWORD AUTHENTICATION SCHEME WITH PROVABLE SECURITY', 'International Journal of Applied Engineering Research (IJAER) ', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.Hema Priya N', 'OPTIMAL WEB SERVICE SELECTION USING HYBRID IWD EVOLUTIONARY ALGORITHM', 'International Journal of Applied Engineering Research (IJAER)', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Sarathambekai S', 'Task Scheduling in Distributed Systems using Heap Intelligent Discrete Particle Swarm Optimization', 'International Journal of Computational Intelligence', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Subashini G', 'A Bi-Objective Evolutionary Algorithm for Fault Tolerant Scheduling in Heterogeneous Systems', 'International Journal of Computational Intelligence Research', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', '', 'Multipath Routing for Multimedia Streaming in Wireless Sensor Network: Survey', 'International Journal of Computer Application', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'SENTIMENT CLASSIFICATION BASED ON LATENT DIRICHLET ALLOCATION', 'International Journal of Computer Application', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'Content based Image Retrieval for Medical Images using Canny Edge Detection Algorithm', 'International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'Efficient Associative Classification using Genetic Network Programming', 'International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'Efficient Priority Based Multipath Routing in wireless Sensor Network for Multimedia Streaming', 'International journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Enhancing Feature Selection Using Statistical Data with Unigrams and Bigrams', 'International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', 'Mrs.Sangeetha S', 'Hybrid Approach to Association Rule Hiding', 'International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Integrating Swarm Intelligence and Statistical Data for Feature Selection in Text Categorization', 'International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', 'Mrs.Hema Priya N', 'Optimal Selection and Composition of Web Services â€“ A Survey', 'International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'SOLUTION TO SECURITY AND SECRECY IN CLOUD ENVIRONMENT USING PAKE PROTOCOL - A BIBLIOGRAPHIC SURVEY', 'International Journal of Computer Applications ', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', '', 'Web knowledge and Wordnet based Automatic Web Query Classification', 'International Journal of Computer Applications ', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', 'Mrs.Shymala Gowri S', 'WSASRESSO - A Novel Framework for Analysis of SAML based SSO Protocols using Black Box Penetration Testing', 'International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Umamaheswari K', 'Text Classification using Enhanced Naive Bayes with Genetic algorithm ', 'International Journal of Computer Applications in Engineering, Technology and Sciences', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', '', 'Texture Based Image Retrieval Using Gabor Filter for Medical Images', 'International Journal of Computer Applications in Engineering, Technology and Sciences', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', 'Dr.Umamaheswari K', 'Weight Adapted k- Nearest Neighbor Algorithm with Genetic Approach for Data Classification', 'International Journal of Computer Applications in Engineering, Technology and Sciences', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', 'Dr.Mahesh V', 'Classification of Heart Murmurs using Wavelet Decomposition and Neural Networks', 'International Journal of Computer Applications in Engineering, Technology and Sciences      (IJ-CA-ETS)', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', '', 'An efficient approach to web query classification using state space tree', 'International Journal of Computer Science & Technology', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'TRIGON BASED AUTHENTICATION SERVICE CREATION WITH GLOBUS MIDDLEWARE', 'International Journal of Computer Science and Information Security', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'A RESILIENT TWO - SERVER AUTHENTICATION MECHANISM FOR ENHANCING SECURITY IN GRID ENVIRONMENT', 'International Journal of Computer Science and Information Technologies', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', '', 'CBMIR: Content Based Medical Image Retrieval Using Multilevel Hybrid Approach', 'International Journal of Computers Communications & Control,', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'A REVIEW: PAKE SECURITY FOR DISTRIBUTED ENVIRONMENT', 'International Journal of Data and Network Security', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', '', 'Compact Weighted Class Association Rule Mining Using Information Gain', 'International Journal of Data Mining & Knowledge Management Process (IJDKP)', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'MACGDI: Low Power MAC Based Filter Bank Using GDI Logic for Hearing Aid Applications', 'International Journal of Electronics and Electrical Engineering ', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', '', 'Interference Aware Multi-path Routing in Wireless Sensor Networks', 'International Journal of Emerging Science and Engineering (IJESE)', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', 'Dr.Umamaheswari K', ' A Survey on Multimodal Biometrics', 'International Journal of Engineering & Technology Research Volume 1, Issue 2', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', 'Dr.Mahesh V', 'A Rule-based   Expert System for ECG Analysis', 'International Journal of Engineering and Technology (IJET)', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', 'Dr.Ilayaraja V', 'Study of IEEE 802.11e WLAN with respect to QoS Issues', 'International Journal of Engineering Sciences & Emerging Technologies', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'CBMIR: Shape-based Image Retrieval using Canny Edge detection and K-Means Clustering Algorithms for Medical Images', 'International Journal of Engineering,  Science and Technologies  ', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', 'Dr.Ilayaraja V', 'Fuzzy Based Adaptive User-Weight Classification Scheme for EDCA in IEEE 802.11e WLAN', 'International Journal of Future Generation Communication and Networking, Science & Engineering Research Support society (SERSC)', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.Akalya Devi C', 'A Hybrid Classifier approach for Software Fault Prediction', 'International Journal of Information Technology and Management Research', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', '', 'Distinctive Framework for Ensuring Privacy in Mobile Cloud', 'International Journal of Informative and Futuristic Research', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Ilayaraja V', 'Traffic differentiation and QoS provisioning for IEEE 802.11e wireless LAN', 'International Journal of Mobile Network Design and Innovation', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', 'Dr.Subashini G', 'NSGA - II with Controlled Elitism for Scheduling Tasks in Heterogeneous Computing Systems', 'International Journal of Open Problems in Computer Science and Mathematics', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', '', 'Efficient Method for Identifying Location and Removal of Data Redundancy for RFID Data', 'International Journal of Recent Trends in Engineering (IJRTE)', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', 'Ms.SruthiSivakumar', ' Decision Support Framework to  Pre - guide against  Heart Disease', 'International Journal of Science, Engineering and Technology Research ', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'SECURE GROUP COMMUNICATION IN GRID ENVIRONMENT', 'International Journal of Security', 0, 0, 0, 0, 0, 0, 2010, 0, 0),
('', '', '', 'Mrs.Akalya Devi C', 'A Hybrid Feature Selection Model For Software Fault Prediction', 'International Journal on Computational Sciences & Applications ', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Dr.Subashini G', 'Dynamic NSPSO For Task Scheduling On Heterogeneous Systems', 'International Journal On Computer Engineering And Information Technology', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'Evaluation of Intrusion Detection Algorithms for Interoperability Gateways in Ad Hoc Networks', 'International Journal on Computer Science and Engineering ', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', '', 'Survey on FPGA Routing Techniques', 'International Journal on Computer Science and Engineering ', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'A Markovian Approach for Automatic Web Query Classification', 'International Journal on Electronics & Communication Technology (IJECT) ', 0, 0, 0, 0, 0, 0, 2011, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'FEATURE SELECTION USING BINARY ARTIFICIAL BEE COLONY FOR SENTIMENT CLASSIFICATION', 'International Research Journal of Engineering and Technology ', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'Fuzzy Logic with Hybrid Optimization Approach for Optimal Route Selection in MANET', 'International Review on Computer and Software', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', '', 'Data Access Prediction and Optimization in Data Grid using SVM and AHL Classifications', 'International Review on Computers and Software', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', '', 'Gene Selection from MMicroarray Data Using Binary Grey Wolf Algorithm for Classifying Acute Leukemia', 'Journal Current Signal Transduction Therap', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'MANET  Routing: Optimization by Genetic and Fuzzy Logic Approach', 'Journal of  Theoretical and Applied Information Technology', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', '', 'A Survey on Cloud Data Security', 'Journal of Advance Research in Computer Science and Management Studies', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', 'Dr.Sarathambekai S', 'Intelligent Discrete Particle Swarm Optimization for Multiprocessor task Scheduling problem', 'Journal of Algorithms & Computational Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'An Efficient 3D Diffie - Hellman based Two-Server Password-only Authenticated Key Exchange', 'Journal of Applied Research and Technology (JART) - Elsevier', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Dr.Mahesh V', 'ECG Arrhythmia Classification based on Logistic Model Tree', 'Journal of Biomedical Science and Engineering (JBISE)', 0, 0, 0, 0, 0, 0, 2009, 0, 0),
('', '', '', '', 'Secure Data Classification using Superior NaÃ¯ve-Classifier in Agent based Mobile Cloud Computing', 'Journal of Cluster Computing', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', '', 'NLFB: Design of a Novel Lifting Based Filter Bank for Digital Hearing Aid', 'Journal of Computational and Theoretical Nanoscience', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', '', 'A Survey on Joint Compression and Encryption Techniques for Video data', 'Journal of Computer Science', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'Content Based Medical Image Retrieval with Texture Content Using Gray Level Co-occurrence Matrix and K-Means Clustering Algorithms', 'Journal of Computer Science', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'Normalized Web Distance Based Web Query Classification', 'Journal of Computer Science', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'A Comprehensive Survey of AODV  Routing Protocol in MANET', 'Journal of Computer Science and Engineering', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Dr.Sarathambekai S', 'Task Scheduling using Hamming Particle Swarm Optimization in Distributed Systems', 'Journal of Computing and Informatics', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.Hema Priya N', 'QoS Based Optimal Selection of Web Services Using Fuzzy Logic', 'Journal of Emerging Technologies in Web Intelligence', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', '', 'A Novel Approach to Incorporate Efficient Security in Content Distribution', 'Journal of Engineering and Applied Science', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', '', 'Hybrid Architecture for Overlapped Test Vector Compression', 'Journal Of Information Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'A SECURE ANDROID APPLICATION WITH INTEGRATION OF WEARABLES FOR HEALTHCARE MONITORING SYSTEM USING 3D ECCDH PAKE PROTOCOL', 'Journal of Medical Imaging and Health Informatics (JMIHI)', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'Dynamic Replica Placement and Selection Strategies in Data Grid - A Comprehensive Survey', 'Journal of Parallel and Distributed Computing ', 0, 0, 0, 0, 0, 0, 2014, 0, 0),
('', '', '', 'Dr.Umamaheswari K', 'Aspect Ranking Based on Author Specific Information Aggregation', 'Journal of Scientific & Industrial Research', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Mrs.Senthilprabha R', 'Intruder Detection system based on Behavioral Biometric Security', 'Journal of Scientific & Industrial Research', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.Senthilprabha R', 'Intruder Dtection System Based on Behavioral Biometric Security', 'Journal of Scientific & Industrial Research', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', '', 'Puzzle Fast Random Bit Encryption Technique for Joint Video Compression and Encryption', 'Journal of Theoretical and Applied Information Technology', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'Trust Based Routing to Mitigate Black Hole Attack in MANET', 'Life Science Journal', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', 'Dr.Anitha Kumari K', 'A SYMMETRIC TWO-SERVER PASSWORD BASED AUTHENTICATION AND KEY EXCHANGE PROTOCOL', 'National Journal of Technology', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', '', 'Power Aware Entropic Hidden Markov Chain Algorithm for Code based Test Data Compression', 'Pakistan Journal on Biotechnology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'AN EFFECTIVE HYBRID CUCKOO SEARCH WITH HARMONY SEARCH FOR REVIEW SPAM DETECTION ', 'Proceedings of  Third International Conference on Advances in Electrical, Electronics, Information, Communication and Bio-Informatics (AEEICB)IEEE DIGITAL LIBRARY', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'A SURVEY ON ONLINE REVIEW SPAM DETECTION TECHNIQUES', 'Proceedings of International Conference on Innovations in Green Energy and Healthcare Technologies (IGEHT),IEEE DIGITAL LIBRARY,2017', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'ADAPTIVE BINARY FLOWER POLLINATION ALGORITHM FOR FEATURE SELECTION IN REVIEW SPAM DETECTION', 'Proceedings of International Conference on Innovations in Green Energy and Healthcare Technologies (IGEHT),IEEE DIGITAL LIBRARY,2017', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'SENTIMENT CLASSIFICATION USING DEEP LEARNING TECHNIQUES-A SURVEY', 'Proceedings of the 2nd International Conference on Inventive Computation Technologies ( ICICT 2017), ', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', 'Mrs.RajaMohana S P', 'HYBRID OPTIMIZATION ALGORITHM OF IMPROVED BINARY PARTICLE SWARM OPTIMIZATION (iBPSO) AND CUCKOO SEARCH FOR REVIEW SPAM DETECTION', 'Proceedings of9th International Conference on Machine Learning and Computing (ICMLC 2017) ,ACM digital library,2017', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', '', 'International Journal of Applied Engineering Research', 'QuAADD: A Quick Access Routing Algorithm using Distance and Direction of Nodes in MANET', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Enhanced Randomized Arithmetic Coding for Joint Compression and Encryption of Video Data', 'Research Journal of Applied Sciences ', 0, 0, 0, 0, 0, 0, 2013, 0, 0),
('', '', '', 'Dr.Subashini G', 'Comparison of Multi-objective Evolutionary Approaches for Task Scheduling in Distributed Computing Systems', 'Sadhana- Academy Proceedings in Engineering Sciences', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', '', 'Directory knowledge, query stream and weighted state space tree based automatic web query classification', 'Scientific Research and Essays', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Mrs.Sangeetha S', 'Energy Efficient and Reliable Job Submission in Hadoop Clusters', 'Special Issue of International Journal of Computer Applications', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('', '', '', 'Dr.Sarathambekai S', 'Task scheduling using Multi-objective Particle Swarm Optimization with Hamming Inertia Weight', 'Springer: Advances in Intelligent Systems and Computing', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('National', 'National', '1', 'Adarsh Srikanth', 'testing', 'testing', 741852, 741852, 45, 46, 741852, 10, 1389, 1, 1),
('', '', '', 'Dr.Subashini G', 'testPaper', 'testJournal', 0, 0, 0, 0, 0, 0, 2018, 0, 0),
('', '', '', 'Dr.Sarathambekai S', 'Multi-objective optimization techniques for task scheduling problem in distributed systems', 'The Computer Journal', 0, 0, 0, 0, 0, 0, 2017, 0, 0),
('', '', '', '', 'Tamper Protection for Dynamic Service Level Agreement in Intelligent Agent Based Mobile Cloud Framework', 'The IIOAB Journal ', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'RPLB: A Replica Placement Algorithm in Data Grid with Load Balancing', 'The International Arab Journal of Information Technology', 0, 0, 0, 0, 0, 0, 2016, 0, 0),
('', '', '', '', 'Evolution of Encryption Techniques and Data Security Mechanisms', 'World Applied Sciences Journal', 0, 0, 0, 0, 0, 0, 2015, 0, 0),
('', '', '', '', 'Extracting Customer Movement Path Sequence From RFID Data Streams', 'Wulfenia Journal', 0, 0, 0, 0, 0, 0, 2012, 0, 0),
('National', 'National', '', '1548', 'sdfghjk', 'xcvbnm', 78456, 756, 21, 45, 452, 2, 1989, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
  `pid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `journal` varchar(255) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`pid`, `title`, `journal`, `year`) VALUES
(1, 'Hybrid approach of improved binary particle swarm optimization and shuffled frog leaping for feature selection', 'Computers & Electrical Engineering', 2018),
(2, 'HYBRID OPTIMIZATION ALGORITHM OF IMPROVED BINARY PARTICLE SWARM OPTIMIZATION (iBPSO) AND CUCKOO SEARCH FOR REVIEW SPAM DETECTION', 'Proceedings of9th International Conference on Machine Learning and Computing (ICMLC 2017) ,ACM digital library,2017', 2017),
(3, 'AN EFFECTIVE HYBRID CUCKOO SEARCH WITH HARMONY SEARCH FOR REVIEW SPAM DETECTION ', 'Proceedings of  Third International Conference on Advances in Electrical, Electronics, Information, Communication and Bio-Informatics (AEEICB)IEEE DIGITAL LIBRARY', 2017),
(4, 'ADAPTIVE BINARY FLOWER POLLINATION ALGORITHM FOR FEATURE SELECTION IN REVIEW SPAM DETECTION', 'Proceedings of International Conference on Innovations in Green Energy and Healthcare Technologies (IGEHT),IEEE DIGITAL LIBRARY,2017', 2017),
(5, 'A SURVEY ON ONLINE REVIEW SPAM DETECTION TECHNIQUES', 'Proceedings of International Conference on Innovations in Green Energy and Healthcare Technologies (IGEHT),IEEE DIGITAL LIBRARY,2017', 2017),
(6, ' Decision Support Framework to  Pre - guide against  Heart Disease', 'International Journal of Science, Engineering and Technology Research ', 2017),
(7, 'Performance Analysis of iBPSO and BFPA Based Feature Selection Techniques for Improving Classiï¬cation Accuracy in Review Spam Detection', 'AMIS', 2017),
(8, 'A Hybrid Approach to Optimize Feature Selection Process   Using iBPSO- BFPA for Review Spam Detection,', 'AMIS', 2017),
(9, 'SENTIMENT CLASSIFICATION USING DEEP LEARNING TECHNIQUES-A SURVEY', 'Proceedings of the 2nd International Conference on Inventive Computation Technologies ( ICICT 2017), ', 2017),
(10, 'An Effective Intrusion Detection System Using Flawless Feature Selection, Outlier Detection and Classification', 'Advances in Intelligent and Soft Computing, ', 2017),
(11, 'NLFB: Design of a Novel Lifting Based Filter Bank for Digital Hearing Aid', 'Journal of Computational and Theoretical Nanoscience', 2017),
(12, 'MACGDI: Low Power MAC Based Filter Bank Using GDI Logic for Hearing Aid Applications', 'International Journal of Electronics and Electrical Engineering ', 2017),
(13, 'Secure Data Classification using Superior NaÃ¯ve-Classifier in Agent based Mobile Cloud Computing', 'Journal of Cluster Computing', 2017),
(14, 'Distinctive Framework for Ensuring Privacy in Mobile Cloud', 'International Journal of Informative and Futuristic Research', 2017),
(15, 'An Increment Feature Selection Approach for Intrusion Detection System in MANET', 'International Journal for Research in Applied Science & Engineering Technology', 2017),
(16, 'WSASRESSO - A Novel Framework for Analysis of SAML based SSO Protocols using Black Box Penetration Testing', 'International Journal of Computer Applications', 2017),
(17, 'Multi-objective optimization techniques for task scheduling problem in distributed systems', 'The Computer Journal', 2017),
(18, 'Performance comparison of discrete particle swarm optimisation and shuffled frog leaping algorithm in multiprocessor task scheduling problem', 'International Journal of Advanced Intelligence Paradigms', 2017),
(19, 'Task Scheduling in Distributed Systems using Heap Intelligent Discrete Particle Swarm Optimization', 'International Journal of Computational Intelligence', 2017),
(20, 'Task Scheduling using Hamming Particle Swarm Optimization in Distributed Systems', 'Journal of Computing and Informatics', 2017),
(21, 'Evaluation of Effect of Unsupervised Dimensionality Reduction Techniques on Automated Arrhythmia Classification', 'Biomedical Signal Processing and Control', 2017),
(22, 'Intruder Dtection System Based on Behavioral Biometric Security', 'Journal of Scientific & Industrial Research', 2017),
(23, 'Intruder Detection system based on Behavioral Biometric Security', 'Journal of Scientific & Industrial Research', 2017),
(24, 'Fuzzy Based Adaptive User-Weight Classification Scheme for EDCA in IEEE 802.11e WLAN', 'International Journal of Future Generation Communication and Networking, Science & Engineering Research Support society (SERSC)', 2017),
(25, 'An Efficient 3D Diffie - Hellman based Two-Server Password-only Authenticated Key Exchange', 'Journal of Applied Research and Technology (JART) - Elsevier', 2017),
(26, 'AN EFFICIENT 2D DIFFIE - HELLMAN BASED TWO-SERVER PASSWORD-ONLY AUTHENTICATED KEY EXCHANGE PROTOCOL', 'International Journal of Advanced Engineering Technology', 2016),
(27, 'SENTIMENT CLASSIFICATION BASED ON LATENT DIRICHLET ALLOCATION', 'International Journal of Computer Application', 2016),
(28, 'FEATURE SELECTION USING BINARY ARTIFICIAL BEE COLONY FOR SENTIMENT CLASSIFICATION', 'International Research Journal of Engineering and Technology ', 2016),
(29, 'AN INTEGRATED EVOLUTIONARY ALGORITHM FOR REVIEW SPAM DETECTION ON ONLINE REVIEWS', 'Advances in Natural and Applied Sciences ', 2016),
(30, 'International Journal of Advanced Research in Computer Science and Software Engineering(IJARCSSE)', 'International Journal of Advanced Research in Computer Science and Software Engineering(IJARCSSE)', 2016),
(31, 'RPLB: A Replica Placement Algorithm in Data Grid with Load Balancing', 'The International Arab Journal of Information Technology', 2016),
(32, 'Power Aware Entropic Hidden Markov Chain Algorithm for Code based Test Data Compression', 'Pakistan Journal on Biotechnology', 2016),
(33, 'Gene Selection from MMicroarray Data Using Binary Grey Wolf Algorithm for Classifying Acute Leukemia', 'Journal Current Signal Transduction Therap', 2016),
(34, 'AIS-DAG: Artificial Immune System for Directed Acyclic Graphs Model Based Fair Resource Allocation for Heterogeneous Cloud Computing', 'Asian Journal of Information Technology', 2016),
(35, 'Improving Energy Efficiency in Multi-Core Processing Using Dynamically Re-Focusing on Processors', 'International Journal of Advanced Engineering Technology', 2016),
(36, 'An Effective Intrusion Detection System using CRF Based Cuttlefish Feature Selection Algorithm and MSVM', 'Asian Journal Of Information Technology.', 2016),
(37, 'Hybrid Architecture for Overlapped Test Vector Compression', 'Journal Of Information Technology', 2016),
(38, 'Intelligent Discrete Particle Swarm Optimization for Multiprocessor task Scheduling problem', 'Journal of Algorithms & Computational Technology', 2016),
(39, 'Task scheduling using Multi-objective Particle Swarm Optimization with Hamming Inertia Weight', 'Springer: Advances in Intelligent Systems and Computing', 2016),
(40, 'Task scheduling using multi-objective hamming discrete particle swarm optimisation in distributed systems', ' International  Journal of  Swarm Intelligence', 2016),
(41, 'Power System Planning using ANN with Fuzzy Logic and Wavelet Analysis', 'ICTACT Journal on Soft Computing', 2016),
(42, 'Critical Evaluation of Linear Dimensionality Reduction Techniques for Cardiac Arrhythmia Classification', 'Circuits and Systems', 2016),
(43, 'Optimal Selection of Feature Extraction Method for PNN Based Automatic Cardiac Arrhythmia Classification', 'International Journal of Advanced Engineering Technology', 2016),
(44, 'Integrating Heterogeneous Ontologies using Fuzzy Rule Based Systems and Boosting Algorithm', 'International Journal of Advanced Engineering Technology', 2016),
(45, 'Study of IEEE 802.11e WLAN with respect to QoS Issues', 'International Journal of Engineering Sciences & Emerging Technologies', 2016),
(46, 'Enhanced Traffic Aware Scheduling Protocol for Variable Bit Rate Traffic in IEEE 802.11e WLAN', 'Asian Journal of Information Technology', 2016),
(47, 'Aspect Ranking Based on Author Specific Information Aggregation', 'Journal of Scientific & Industrial Research', 2016),
(48, 'AN EFFICIENT 3D ELLIPTIC CURVE DIFFIE-HELLMAN (ECDH) BASED TWO-SERVER PASSWORD-ONLY AUTHENTICATED KEY EXCHANGE PROTOCOL WITH PROVABLE SECURITY', 'IETE Journal of Research (T & F)', 2016),
(49, 'A SECURE ANDROID APPLICATION WITH INTEGRATION OF WEARABLES FOR HEALTHCARE MONITORING SYSTEM USING 3D ECCDH PAKE PROTOCOL', 'Journal of Medical Imaging and Health Informatics (JMIHI)', 2016),
(50, 'Intelligent Multipath Routing in Wireless Sensor Network in Genetic Algorithm', 'International Journal of Applied Engineering Research', 2015),
(51, 'Multipath Routing for Multimedia Streaming in Wireless Sensor Network: Survey', 'International Journal of Computer Application', 2015),
(52, 'Efficient Priority Based Multipath Routing in wireless Sensor Network for Multimedia Streaming', 'International journal of Computer Applications', 2015),
(53, 'Biometric lock pattern authentication for smart phones', 'International Journal of Applied Engineering Research ', 2015),
(54, 'PSO-Based Multipath routing in Wireless Sensor Network', 'Advances in Intelligent Systems and Compuitng', 2015),
(55, 'Hybrid Approach to Association Rule Hiding', 'International Journal of Computer Applications', 2015),
(56, 'Efficient Processing of Information Retrival Using Fuzzy Sql Queries', 'Australian Journal of Basic and Applied Sciences', 2015),
(57, 'CBMIR: Content Based Medical Image Retrieval Using Multilevel Hybrid Approach', 'International Journal of Computers Communications & Control,', 2015),
(58, 'OPTIMAL WEB SERVICE SELECTION USING HYBRID IWD EVOLUTIONARY ALGORITHM', 'International Journal of Applied Engineering Research (IJAER)', 2015),
(59, 'A SYMMETRIC TWO-SERVER PASSWORD BASED AUTHENTICATION AND KEY EXCHANGE PROTOCOL DEPLOYED IN PAAS', 'IJCA Proceedings on International Conference on Innovations in Computing Techniques (ICICT 2015)', 2015),
(60, 'ECC BASED ASYMMETRIC TWO-SERVER PASSWORD AUTHENTICATION SCHEME WITH PROVABLE SECURITY', 'International Journal of Applied Engineering Research (IJAER) ', 2015),
(61, 'A DEXTEROUS ASYMMETRIC TWO-SERVER PASSWORD AUTHENTICATION SCHEME USING ECC WITH PROVABLE SECURITY', 'Australian Journal of Basic and Applied Sciences', 2015),
(62, 'AN EFFICIENT SECURE AND IMPROVED SYMMETRIC TWO-SERVER PASSWORD BASED AUTHENTICATION AND KEY EXCHANGE PROTOCOL USING ECC', 'International Journal of Applied Engineering Research', 2015),
(63, 'SENTIMENT CLASSIFICATION BASED ON LDA USING SMO CLASSIFIER', 'International Journal of Applied Engineering Research', 2015),
(64, 'OPINION MINING USING HYBRID METHODS', 'â€, International Journal  of Computer Application', 2015),
(65, 'Privacy Enhanced Sitekey Authentication for Mobile Cloud Using Visual Cryptography', 'International Journal of Applied Engineering Research', 2015),
(66, 'Evolution of Encryption Techniques and Data Security Mechanisms', 'World Applied Sciences Journal', 2015),
(67, 'An Efficient FPGA Architecture For RDCT With Reduced Components', 'Australian Journal of Basic and Applied Sciences', 2015),
(68, 'Design of Reconfigurable Discrete Cosine Transform in Multicore Architecture', 'Asian Journal of Information and Technology', 2015),
(69, 'Efficient Memory Built in Self-Test Address Generator Implementation', 'International Journal of Applied Engineering Research', 2015),
(70, 'Tamper Protection for Dynamic Service Level Agreement in Intelligent Agent Based Mobile Cloud Framework', 'The IIOAB Journal ', 2015),
(71, 'Design of Finite Field Hybrid Multipliers with Optimum Placement and Routing Architecture', 'International Journal of Applied Engineering Research', 2015),
(72, 'Wirelength Driven Placement for FPGA using Soft Computing Technique', 'International Journal of Applied Engineering Research', 2015),
(73, 'International Journal of Applied Engineering Research', 'QuAADD: A Quick Access Routing Algorithm using Distance and Direction of Nodes in MANET', 2015),
(74, 'SEAR: Secured Energy-Aware Routing With Trusted Payment Model for Wireless Networks', 'ARPN Journal of Engineering and Applied Sciences', 2015),
(75, 'Multi Agent Based Dynamic Resource Allocation in Cloud Environment for Improving Quality of Service', 'Australian Journal of Basic and Applied Sciences', 2015),
(76, 'Test Data Compression Techniques Emphasizing Linear Decompressor Based Schemes: A Review', 'International Journal of Applied Engineering Research', 2015),
(77, 'A Framework for Effective Resource Allocation in a Distributed Cloud Environment', 'International Journal of Applied Engineering Research', 2015),
(78, 'Strategies for Resource Allocation in Cloud Computing: A Review', 'International Journal of Applied Engineering Research', 2015),
(79, 'Shuffled frog leaping algorithm in distributed system', 'International Journal of   Computer Application', 2015),
(80, 'Electrocardiogram â€“ Fuzzy Based Secure Healthcare System Using Time and Frequency Domain Features', 'International Journal of Applied Engineering Research', 2015),
(81, 'Secure Communication in BAN using Modified Fuzzy Vault Scheme', 'IJCA Proceedings of International Conference on Innovations in Computing Techniques', 2015),
(82, 'Fuzzy Based Key Agreement Scheme Using ECG signals for Wireless Body Sensor Networks', 'Applied Mechanics and Materials', 2015),
(83, 'BIOMETRIC LOCK PATTERN AUTHENTICATION FOR SMART PHONES', 'International Journal of Applied Engineering Research (IJAER)  ', 2015),
(84, 'Semantic Mapping using Extreme Learning Machine', 'IJCA Proceedings on International Conference on Innovations in Computing Techniques (ICICT 2015)', 2015),
(85, 'Semantic Ontology Mapping using Support Vector Machine', '. IJCA Proceedings on International Conference on Innovations in Computing Techniques (ICICT 2015) ', 2015),
(86, 'Semantic Ontology Mapping Using Ensemble Learning', 'Australian Journal of Basic & Applied Science', 2015),
(87, 'Semantic Ontology Mapping using Extreme Learning Machine with Dimensionality Reduction', 'International Journal of Applied Engineering Research', 2015),
(88, 'Mapping of Domain Ontologies using Aggregation Method', 'International Journal of Applied Engineering Research', 2015),
(89, 'Diffserv Based QoS Enhancement In IEEE 802.11e Wireless LAN using ARCR', 'International Journal of Applied Engineering Research (IJAER)', 2015),
(90, 'Improving QoS using Adaptive TXOP Allocation in IEEE 802.11e WLAN', 'IJCA', 2015),
(91, 'Traffic differentiation and QoS provisioning for IEEE 802.11e wireless LAN', 'International Journal of Mobile Network Design and Innovation', 2015),
(92, 'QoS Based Optimal Selection of Web Services Using Fuzzy Logic', 'Journal of Emerging Technologies in Web Intelligence', 2014),
(93, 'SOLUTION TO SECURITY AND SECRECY IN CLOUD ENVIRONMENT USING PAKE PROTOCOL - A BIBLIOGRAPHIC SURVEY', 'International Journal of Computer Applications ', 2014),
(94, 'Effective Architecture of Discrete Cosine Transform Using Sum Select Algorithm', 'International Journal of Applied Engineering Research', 2014),
(95, 'Network Performance Improvement Using Fuzzy Genetic based AODV', 'International Journal of Applied Engineering Resea', 2014),
(96, 'Data Access Prediction and Optimization in Data Grid using SVM and AHL Classifications', 'International Review on Computers and Software', 2014),
(97, 'A Novel Approach to Incorporate Efficient Security in Content Distribution', 'Journal of Engineering and Applied Science', 2014),
(98, 'Fuzzy Logic with Hybrid Optimization Approach for Optimal Route Selection in MANET', 'International Review on Computer and Software', 2014),
(99, 'Dynamic Replica Placement and Selection Strategies in Data Grid - A Comprehensive Survey', 'Journal of Parallel and Distributed Computing ', 2014),
(100, 'DiffServ Based QoS Architecture for Uplink/Downlink Fairness in IEEE 802.11e Wireless LAN', 'International Journal of Applied Engineering Research (IJAER)', 2014),
(101, 'Mining of customer walking path sequence from RFID supermarket data', 'Electronic Government', 2013),
(102, 'A SYMMETRIC TWO-SERVER PASSWORD BASED AUTHENTICATION AND KEY EXCHANGE PROTOCOL', 'National Journal of Technology', 2013),
(103, 'A REVIEW: PAKE SECURITY FOR DISTRIBUTED ENVIRONMENT', 'International Journal of Data and Network Security', 2013),
(104, 'A RESILIENT TWO - SERVER AUTHENTICATION MECHANISM FOR ENHANCING SECURITY IN GRID ENVIRONMENT', 'International Journal of Computer Science and Information Technologies', 2013),
(105, 'A Survey on Cloud Data Security', 'Journal of Advance Research in Computer Science and Management Studies', 2013),
(106, 'Enhanced Randomized Arithmetic Coding for Joint Compression and Encryption of Video Data', 'Research Journal of Applied Sciences ', 2013),
(107, 'MANET  Routing: Optimization by Genetic and Fuzzy Logic Approach', 'Journal of  Theoretical and Applied Information Technology', 2013),
(108, 'A Hybrid Classifier approach for Software Fault Prediction', 'International Journal of Information Technology and Management Research', 2013),
(109, 'Journal of Theoretical and Applied Information Technology', 'Efficient Techniques for Securing Digital Video Data', 2013),
(110, 'Trust Based Routing to Mitigate Black Hole Attack in MANET', 'Life Science Journal', 2013),
(111, 'Article: A Combined Genetic Programming for Microarray Data Analysis', ' International Journal of Computer Applications 80(14):13-17', 2013),
(112, ' A Survey on Multimodal Biometrics', 'International Journal of Engineering & Technology Research Volume 1, Issue 2', 2013),
(113, 'Multimodal Biometrics for Improving Automatic Teller Machine SecurityBonfring', ' International Journal of Advances in Image Processing', 2013),
(114, 'Interference Aware Multi-path Routing in Wireless Sensor Networks', 'International Journal of Emerging Science and Engineering (IJESE)', 2013),
(115, 'Task Allocation in Distributed Computing Systems using Adaptive Particle Swarm Optimization', 'International Journal Of  Computer Applications and Technology', 2012),
(116, 'Comparison of Multi-objective Evolutionary Approaches for Task Scheduling in Distributed Computing Systems', 'Sadhana- Academy Proceedings in Engineering Sciences', 2012),
(117, 'Optimal Selection and Composition of Web Services â€“ A Survey', 'International Journal of Computer Applications', 2012),
(118, 'Directory knowledge, query stream and weighted state space tree based automatic web query classification', 'Scientific Research and Essays', 2012),
(119, 'Extracting Customer Movement Path Sequence From RFID Data Streams', 'Wulfenia Journal', 2012),
(120, 'Content Based Medical Image Retrieval with Texture Content Using Gray Level Co-occurrence Matrix and K-Means Clustering Algorithms', 'Journal of Computer Science', 2012),
(121, 'An Efficient Framework Model to Detect and Eliminate Redundancy in RFID', 'European Journal of Scientific Research', 2012),
(122, 'An enhanced ACO algorithm to select features for text categorization and its parallelization', 'Expert Systems with Applications- Elsevier ', 2012),
(123, 'Normalized Web Distance Based Web Query Classification', 'Journal of Computer Science', 2012),
(124, 'LACI: Lazy Associative Classification Using Information Gain', 'IACSIT International Journal of Engineering and Technology', 2012),
(125, 'Reversible Data Embedding Using Color DICOM Images For Medical Applications', 'CiiT International Journal of Digital Image Processing', 2012),
(126, 'A Hybrid Feature Selection Model For Software Fault Prediction', 'International Journal on Computational Sciences & Applications ', 2012),
(127, 'Survey on FPGA Routing Techniques', 'International Journal on Computer Science and Engineering ', 2012),
(128, 'A Packet Classification and Node-Level Certification Mechanism for Intrusion Detection in MANET', 'Communications in Computer and Information Science', 2012),
(129, 'Survey on MANET Attacks and Mitigation using Routing Protocols', 'American Journal of Applied Sciences', 2012),
(130, 'Puzzle Fast Random Bit Encryption Technique for Joint Video Compression and Encryption', 'Journal of Theoretical and Applied Information Technology', 2012),
(131, 'A Comprehensive Survey of AODV  Routing Protocol in MANET', 'Journal of Computer Science and Engineering', 2012),
(132, 'A Survey on Joint Compression and Encryption Techniques for Video data', 'Journal of Computer Science', 2012),
(133, 'Secure Medical Data Transmission in Body Area Sensor Networks Using Dynamic Biometrics and Steganography', 'Bonfring International Journal of Software Engineering and Soft Computing', 2012),
(134, 'Energy Efficient and Reliable Job Submission in Hadoop Clusters', 'Special Issue of International Journal of Computer Applications', 2012),
(135, 'Non Dominated Particle Swarm Optimization For Scheduling Independent Tasks On Heterogeneous Distributed Environments', 'International Journal of Advances in Soft Computing and Its Applications', 2011),
(136, 'Dynamic NSPSO For Task Scheduling On Heterogeneous Systems', 'International Journal On Computer Engineering And Information Technology', 2011),
(137, 'A parallel ACO algorithm to select terms to categorise longer documents', 'International Journal of  Computational Science and Engineering', 2011),
(138, 'Hidden Markov Model Based Web Query Classification', 'European Journal of Sci. Research', 2011),
(139, 'Compact Weighted Class Association Rule Mining Using Information Gain', 'International Journal of Data Mining & Knowledge Management Process (IJDKP)', 2011),
(140, 'CBMIR: Content Based Image Retrieval using Invariant Moments, GLCM and Grayscale Resolution for Medical Images', 'European Journal of Scientific Research', 2011),
(141, 'A Markovian Approach for Automatic Web Query Classification', 'International Journal on Electronics & Communication Technology (IJECT) ', 2011),
(142, 'Efficient Associative Classification using Genetic Network Programming', 'International Journal of Computer Applications', 2011),
(143, 'An efficient approach to web query classification using state space tree', 'International Journal of Computer Science & Technology', 2011),
(144, 'CBMIR: Shape-based Image Retrieval using Canny Edge detection and K-Means Clustering Algorithms for Medical Images', 'International Journal of Engineering,  Science and Technologies  ', 2011),
(145, 'Web knowledge and Wordnet based Automatic Web Query Classification', 'International Journal of Computer Applications ', 2011),
(146, 'Content based Image Retrieval for Medical Images using Canny Edge Detection Algorithm', 'International Journal of Computer Applications', 2011),
(147, 'An Evolutionary Approach for Ruleset Selection in a Class Based Associative Classifier', 'European Journal of Scientific Research', 2011),
(148, 'Automatic Test Case Generation for UML Collaboration Diagrams', 'IETE Journal of Research', 2011),
(149, 'Improving the Effectiveness of Statistical Feature Selection Algorithm using Bag of Synsets and its Parallelization', 'European Journal of Scientific Research', 2011),
(150, 'Fast Random Bit Encryption Technique for Video Data', 'European Journal of Scientific Research', 2011),
(151, 'Evaluation of Intrusion Detection Algorithms for Interoperability Gateways in Ad Hoc Networks', 'International Journal on Computer Science and Engineering ', 2011),
(152, 'A Fast And Elitist Bi-Objective Evolutionary Algorithm For Scheduling Independent Tasks On Heterogeneous Systems', 'ICTACT Journal on Soft Computing', 2010),
(153, 'A Bi-Objective Evolutionary Algorithm for Fault Tolerant Scheduling in Heterogeneous Systems', 'International Journal of Computational Intelligence Research', 2010),
(154, 'NSGA - II with Controlled Elitism for Scheduling Tasks in Heterogeneous Computing Systems', 'International Journal of Open Problems in Computer Science and Mathematics', 2010),
(155, 'TRIGON BASED AUTHENTICATION SERVICE CREATION WITH GLOBUS MIDDLEWARE', 'International Journal of Computer Science and Information Security', 2010),
(156, 'SECURE GROUP COMMUNICATION IN GRID ENVIRONMENT', 'International Journal of Security', 2010),
(157, 'Texture Based Image Retrieval Using Gabor Filter for Medical Images', 'International Journal of Computer Applications in Engineering, Technology and Sciences', 2010),
(158, 'Enhancing Feature Selection Using Statistical Data with Unigrams and Bigrams', 'International Journal of Computer Applications', 2010),
(159, 'Integrating Swarm Intelligence and Statistical Data for Feature Selection in Text Categorization', 'International Journal of Computer Applications', 2010),
(160, 'Optimal Solution for Finding Secured Routes in Mobile Ad-Hoc Networks ', 'International Journal of  Networking and Communication Engineering', 2010),
(161, 'ECG Arrhythmia Classification based on Logistic Model Tree', 'Journal of Biomedical Science and Engineering (JBISE)', 2009),
(162, 'A Rule-based   Expert System for ECG Analysis', 'International Journal of Engineering and Technology (IJET)', 2009),
(163, 'Classification of Heart Murmurs using Wavelet Decomposition and Neural Networks', 'International Journal of Computer Applications in Engineering, Technology and Sciences      (IJ-CA-ETS)', 2009),
(164, 'Efficient Method for Identifying Location and Removal of Data Redundancy for RFID Data', 'International Journal of Recent Trends in Engineering (IJRTE)', 2009),
(165, 'A Survey on Image Data Retrieval in Digital Libraries', 'CiiT International Journal of Digital Image Processing', 2009),
(166, 'Automatic Test Case Generation for UML object diagrams using Genetic Algorithm', 'International Journal of Advances in Soft Computing and Its Applications (IJASCA)', 2009),
(167, 'Weighted K Nearest Neighbor Classification using Optimized Genetic algorithm', 'International Journal of Advances in Computer Science and Engineering', 2009),
(168, 'Weight Adapted k- Nearest Neighbor Algorithm with Genetic Approach for Data Classification', 'International Journal of Computer Applications in Engineering, Technology and Sciences', 2009),
(169, 'Text Classification using Enhanced Naive Bayes with Genetic algorithm ', 'International Journal of Computer Applications in Engineering, Technology and Sciences', 2009);

-- --------------------------------------------------------

--
-- Table structure for table `pdfStore`
--

CREATE TABLE IF NOT EXISTS `pdfStore` (
  `pid` int(11) NOT NULL,
  `pdf` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `eid` varchar(5) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`eid`, `name`) VALUES
('C0000', 'Dr.Sarathambekai S'),
('C1495', 'Dr.Subashini G'),
('C1600', 'Dr.Umamaheswari K'),
('C1954', 'Dr.Karthika Renuka D'),
('C3537', 'Mrs.RajaMohana S P'),
('C3539', 'Dr.Ilayaraja V'),
('C5056', 'Dr.Rekha R'),
('C5073', 'Mrs.Sangeetha B'),
('C5213', 'Dr.Anitha Kumari K'),
('C5243', 'Mrs.Senthilprabha R'),
('C5251', 'Ms.Thamilselvi K P'),
('C5500', 'Mrs.Akalya Devi C'),
('C5506', 'Mrs.Shymala Gowri S'),
('C5507', 'Mrs.Hema Priya N'),
('C5517', 'Ms.Padmashani R'),
('C5661', 'Ms.Brintha V P'),
('C5662', 'Ms.Ravitha Rajalakshmi N'),
('C5773', 'Mr.Saravanan R'),
('C5805', ''),
('C5809', 'Ms.Sindhu G'),
('C5914', 'Ms.Radhika E G'),
('C5956', 'Dr.Mahesh V'),
('C6066', 'Ms.D.Dharani'),
('C6083', 'Ms.Anusuya R'),
('C6103', ''),
('C6114', 'Mrs.Sangeetha S'),
('C6148', 'Ms.R.LogeswariSaranya'),
('C6149', 'Ms.Priya S'),
('C6160', 'Ms.P.Jeneessha'),
('C6164', 'Ms.SruthiSivakumar'),
('C6188', 'Dr.R.Manimegalai'),
('C6208', 'Dr.Chandran K R');

-- --------------------------------------------------------

--
-- Table structure for table `staffpaper`
--

CREATE TABLE IF NOT EXISTS `staffpaper` (
  `eid` varchar(255) NOT NULL,
  `pid` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffpaper`
--

INSERT INTO `staffpaper` (`eid`, `pid`) VALUES
('C0000', 17),
('C0000', 18),
('C0000', 19),
('C0000', 20),
('C0000', 38),
('C0000', 39),
('C0000', 40),
('C0000', 79),
('C1495', 115),
('C1495', 116),
('C1495', 135),
('C1495', 136),
('C1495', 152),
('C1495', 153),
('C1495', 154),
('C1600', 47),
('C1600', 111),
('C1600', 112),
('C1600', 113),
('C1600', 167),
('C1600', 168),
('C1600', 169),
('C3537', 1),
('C3537', 2),
('C3537', 3),
('C3537', 4),
('C3537', 5),
('C3537', 7),
('C3537', 8),
('C3537', 9),
('C3537', 27),
('C3537', 28),
('C3537', 29),
('C3537', 30),
('C3537', 63),
('C3537', 64),
('C3539', 24),
('C3539', 45),
('C3539', 46),
('C3539', 89),
('C3539', 90),
('C3539', 91),
('C3539', 100),
('C5056', 21),
('C5056', 42),
('C5056', 43),
('C5056', 80),
('C5056', 81),
('C5056', 82),
('C5056', 133),
('C5073', 44),
('C5073', 84),
('C5073', 85),
('C5073', 86),
('C5073', 87),
('C5073', 88),
('C5213', 25),
('C5213', 26),
('C5213', 48),
('C5213', 49),
('C5213', 59),
('C5213', 60),
('C5213', 61),
('C5213', 62),
('C5213', 93),
('C5213', 102),
('C5213', 103),
('C5213', 104),
('C5213', 155),
('C5213', 156),
('C5243', 22),
('C5243', 23),
('C5243', 53),
('C5243', 83),
('C5500', 108),
('C5500', 126),
('C5506', 16),
('C5506', 125),
('C5507', 58),
('C5507', 92),
('C5507', 117),
('C5956', 161),
('C5956', 162),
('C5956', 163),
('C6114', 55),
('C6114', 134),
('C6164', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal_details`
--
ALTER TABLE `journal_details`
  ADD PRIMARY KEY (`journal`,`title`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pdfStore`
--
ALTER TABLE `pdfStore`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `staffpaper`
--
ALTER TABLE `staffpaper`
  ADD PRIMARY KEY (`eid`,`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=170;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
