-- MySQL dump 10.13  Distrib 5.7.18, for Linux (i686)
--
-- Host: localhost    Database: task
-- ------------------------------------------------------
-- Server version	5.7.18

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
-- Table structure for table `taskmanager`
--

DROP TABLE IF EXISTS `taskmanager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taskmanager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descriptions` varchar(255) DEFAULT NULL,
  `due` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `completed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taskmanager`
--

LOCK TABLES `taskmanager` WRITE;
/*!40000 ALTER TABLE `taskmanager` DISABLE KEYS */;
INSERT INTO `taskmanager` VALUES (1,'simple description','2017-08-11 06:02:54',0),(2,'more simple description','2017-08-11 06:03:10',1),(3,'go coxbazar','2017-12-11 01:40:25',0),(4,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus impedit expedita, velit esse beatae reiciendis. Nostrum, cum facere pariatur fugiat modi, quibusdam laboriosam in possimus ad, beatae temporibus eaque delectus!','2017-08-13 01:02:14',0),(5,'Lorem ipsum','2017-08-12 01:08:02',0),(6,'Lorem ipsum','2017-08-12 01:08:07',0),(7,'go coxbazar','2017-12-11 01:41:18',0),(8,'sweet home','2017-12-11 01:56:51',0),(9,'Teaching php study','2017-08-11 04:27:37',0);
/*!40000 ALTER TABLE `taskmanager` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-11 14:33:12
