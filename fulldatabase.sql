CREATE DATABASE  IF NOT EXISTS `sparta` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sparta`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sparta
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `A_Id` int(11) NOT NULL AUTO_INCREMENT,
  `A_Name` varchar(255) NOT NULL,
  `Street` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Zip` int(11) DEFAULT NULL,
  PRIMARY KEY (`A_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `s_event_time_testimonial`
--

DROP TABLE IF EXISTS `s_event_time_testimonial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s_event_time_testimonial` (
  `SETT_Id` int(11) NOT NULL AUTO_INCREMENT,
  `SET_ID` int(11) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`SETT_Id`),
  KEY `SET_ID` (`SET_ID`),
  CONSTRAINT `s_event_time_testimonial_ibfk_1` FOREIGN KEY (`SET_ID`) REFERENCES `s_events_time` (`SET_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `s_events`
--

DROP TABLE IF EXISTS `s_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s_events` (
  `SE_Id` int(11) NOT NULL AUTO_INCREMENT,
  `SE_Name` varchar(255) NOT NULL,
  `U_Id` int(11) DEFAULT NULL,
  `A_Id` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SE_Id`),
  KEY `U_Id` (`U_Id`),
  KEY `A_Id` (`A_Id`),
  CONSTRAINT `s_events_ibfk_1` FOREIGN KEY (`U_Id`) REFERENCES `users` (`U_Id`),
  CONSTRAINT `s_events_ibfk_2` FOREIGN KEY (`A_Id`) REFERENCES `address` (`A_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `s_events_time`
--

DROP TABLE IF EXISTS `s_events_time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s_events_time` (
  `SET_Id` int(11) NOT NULL AUTO_INCREMENT,
  `SE_ID` int(11) DEFAULT NULL,
  `StartTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EndTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Volunteers` int(3) DEFAULT NULL,
  PRIMARY KEY (`SET_Id`),
  KEY `SE_ID` (`SE_ID`),
  CONSTRAINT `s_events_time_ibfk_1` FOREIGN KEY (`SE_ID`) REFERENCES `s_events` (`SE_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `signups`
--

DROP TABLE IF EXISTS `signups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signups` (
  `S_Id` int(11) NOT NULL AUTO_INCREMENT,
  `U_Id` int(11) DEFAULT NULL,
  `SET_Id` int(11) DEFAULT NULL,
  `SignupTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`S_Id`),
  KEY `U_Id` (`U_Id`),
  KEY `SET_Id` (`SET_Id`),
  CONSTRAINT `signups_ibfk_1` FOREIGN KEY (`U_Id`) REFERENCES `users` (`U_Id`),
  CONSTRAINT `signups_ibfk_2` FOREIGN KEY (`SET_Id`) REFERENCES `s_events_time` (`SET_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_type` (
  `UT_ID` int(11) NOT NULL,
  `U_Type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `U_Id` int(11) NOT NULL AUTO_INCREMENT,
  DeSmet_ID varchar(255),
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `UT_Id` int(11) DEFAULT NULL,
  `A_Id` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Salt` varchar(255) DEFAULT NULL,
  `date_deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`U_Id`),
  KEY `UT_Id` (`UT_Id`),
  KEY `A_Id` (`A_Id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`UT_Id`) REFERENCES `user_type` (`UT_ID`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`A_Id`) REFERENCES `address` (`A_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-14 15:54:57
