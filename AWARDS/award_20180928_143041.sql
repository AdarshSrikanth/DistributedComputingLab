-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "awardEntries" -----------------------------
-- CREATE TABLE "awardEntries" ---------------------------------
CREATE TABLE `awardEntries` ( 
	`eid` VarChar( 5 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`aid` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`nature` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`year` Year NOT NULL,
	PRIMARY KEY ( `aid` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "detail" -----------------------------------
-- CREATE TABLE "detail" ---------------------------------------
CREATE TABLE `detail` ( 
	`eid` VarChar( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`ename` VarChar( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`nature` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`title` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`year` Year NOT NULL )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = MyISAM;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "staff" ------------------------------------
-- CREATE TABLE "staff" ----------------------------------------
CREATE TABLE `staff` ( 
	`eid` VarChar( 5 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`name` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `eid` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "awardEntries" -----------------------------
-- ---------------------------------------------------------


-- Dump data of "detail" -----------------------------------
INSERT INTO `detail`(`eid`,`ename`,`nature`,`title`,`year`) VALUES ( 'C6208', 'K.R.Chandran', 'National', 'Outstanding Engineer', '2016' );
INSERT INTO `detail`(`eid`,`ename`,`nature`,`title`,`year`) VALUES ( 'C3539', 'V.Ilayaraja', 'National', 'Tech-Novator', '2016' );
INSERT INTO `detail`(`eid`,`ename`,`nature`,`title`,`year`) VALUES ( 'C6208', 'K.R.Chandran', 'National', 'SITRA', '2000' );
INSERT INTO `detail`(`eid`,`ename`,`nature`,`title`,`year`) VALUES ( 'C6208', 'K.R.Chandran', 'National', 'Outstanding Engineer', '2016' );
INSERT INTO `detail`(`eid`,`ename`,`nature`,`title`,`year`) VALUES ( 'C3539', 'V.Ilayaraja', 'National', 'Tech-Novator', '2016' );
INSERT INTO `detail`(`eid`,`ename`,`nature`,`title`,`year`) VALUES ( 'C6208', 'K.R.Chandran', 'National', 'SITRA', '2000' );
-- ---------------------------------------------------------


-- Dump data of "staff" ------------------------------------
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C0000', 'Dr.Sarathambekai S' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C1495', 'Dr.Subashini G' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C1600', 'Dr.Umamaheswari K' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C1954', 'Dr.Karthika Renuka D' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C3537', 'Mrs.RajaMohana S P' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C3539', 'Dr.Ilayaraja V' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5056', 'Dr.Rekha R' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5073', 'Mrs.Sangeetha B' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5213', 'Dr.Anitha Kumari K' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5243', 'Mrs.Senthilprabha R' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5251', 'Ms.Thamilselvi K P' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5500', 'Mrs.Akalya Devi C' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5506', 'Mrs.Shymala Gowri S' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5507', 'Mrs.Hema Priya N' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5517', 'Ms.Padmashani R' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5661', 'Ms.Brintha V P' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5662', 'Ms.Ravitha Rajalakshmi N' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5773', 'Mr.Saravanan R' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5809', 'Ms.Sindhu G' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5914', 'Ms.Radhika E G' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C5956', 'Dr.Mahesh V' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6066', 'Ms.D.Dharani' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6083', 'Ms.Anusuya R' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6114', 'Mrs.Sangeetha S' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6148', 'Ms.R.LogeswariSaranya' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6149', 'Ms.Priya S' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6160', 'Ms.P.Jeneessha' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6164', 'Ms.SruthiSivakumar' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6188', 'Dr.R.Manimegalai' );
INSERT INTO `staff`(`eid`,`name`) VALUES ( 'C6208', 'Dr.Chandran K R' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


