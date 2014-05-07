# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.73)
# Database: test
# Generation Time: 2014-02-23 20:59:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table counselor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `counselor`;

CREATE TABLE `counselor` (
  `counselor_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `first_name` varchar(20) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`counselor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table course
# ------------------------------------------------------------

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL DEFAULT '',
  `subject` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table school
# ------------------------------------------------------------

DROP TABLE IF EXISTS `school`;

CREATE TABLE `school` (
  `school_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `address` tinytext,
  `phone` int(10) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `color1` varchar(6) DEFAULT NULL,
  `color2` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table student
# ------------------------------------------------------------

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `ACT` int(2) DEFAULT NULL,
  `SAT` int(4) DEFAULT NULL,
  `GPA` float DEFAULT NULL,
  `statement` text,
  `school_id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table taken_course
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taken_course`;

CREATE TABLE `taken_course` (
  `taken_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `year_taken` year(4) DEFAULT NULL,
  `grade` int(2) DEFAULT NULL,
  PRIMARY KEY (`taken_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table university_rep
# ------------------------------------------------------------

DROP TABLE IF EXISTS `university_rep`;

CREATE TABLE `university_rep` (
  `rep_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `school_id` int(11) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`rep_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
