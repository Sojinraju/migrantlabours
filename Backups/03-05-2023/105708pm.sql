-- MySQL dump 10.13  Distrib 5.5.32, for Win32 (x86)
--
-- Host: localhost    Database: migrantlabours
-- ------------------------------------------------------
-- Server version	5.5.32

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
-- Table structure for table `agency`
--

DROP TABLE IF EXISTS `agency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agency` (
  `agencyId` int(10) NOT NULL,
  `agencyName` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `propName` varchar(50) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `loginId` int(10) NOT NULL,
  PRIMARY KEY (`agencyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agency`
--

LOCK TABLES `agency` WRITE;
/*!40000 ALTER TABLE `agency` DISABLE KEYS */;
INSERT INTO `agency` VALUES (10001,'InterManagement Manpower Services','Paramara Road, Ernakulam North, Cochin\nKerala, India','682018','Ernakulam','Kochi','Vimal Hari','2147483647',24),(10002,'Greenline Management Consultancies','C1, II Floor, Periellath Towers, Jawahar Road - Mahatma Road, Vytilla, Kochi, Kerala, India','692019','Ernakulam','Kochi','Ram Mohan','2147483647',25),(10003,'Connecting 2 Work','G-5, Logic Square, VIP Rd, Kaloor, Ernakulam, Kerala','682017','Ernakulam','Kochi','Rivin Thomas','2147483647',26),(10004,'Sans International','501, Ayur-Trivandrum Road, Ayur, Kollam, Kerala','691533','Kollam','Ayur','Niveth Saraswathy','2147483647',27);
/*!40000 ALTER TABLE `agency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `attendanceId` int(10) NOT NULL AUTO_INCREMENT,
  `worker_loginId` int(10) NOT NULL,
  `attendance` enum('Absent','Present') NOT NULL,
  `agency_loginId` int(10) NOT NULL,
  `currentDate` date NOT NULL,
  `currentMonth` varchar(2) NOT NULL,
  PRIMARY KEY (`attendanceId`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` VALUES (2,31,'Present',24,'2023-04-08','04'),(6,32,'Present',24,'2023-04-08','04'),(10,33,'Present',24,'2023-04-08','04'),(11,34,'Present',24,'2023-04-08','04'),(12,31,'Absent',24,'2023-04-09','04'),(13,32,'Present',24,'2023-04-09','04'),(14,33,'Absent',24,'2023-04-09','04'),(15,34,'Present',24,'2023-04-09','04'),(16,31,'Present',24,'2023-04-10','04'),(17,32,'Absent',24,'2023-04-10','04'),(18,33,'Present',24,'2023-04-10','04'),(19,34,'Present',24,'2023-04-10','04'),(20,31,'Present',24,'2023-04-11','04'),(21,32,'Present',24,'2023-04-11','04'),(22,33,'Present',24,'2023-04-11','04'),(23,34,'Present',24,'2023-04-11','04'),(24,31,'Present',24,'2023-04-14','04'),(25,32,'Present',24,'2023-04-14','04'),(26,33,'Present',24,'2023-04-14','04'),(27,34,'Present',24,'2023-04-14','04');
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank` (
  `bankId` int(10) NOT NULL AUTO_INCREMENT,
  `bankName` varchar(50) NOT NULL,
  `branchName` varchar(50) NOT NULL,
  `ifsc` varchar(11) NOT NULL,
  `accHolderName` varchar(50) NOT NULL,
  `accountNo` varchar(16) NOT NULL,
  `cardType` varchar(50) NOT NULL,
  `cardNo` varchar(50) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expireDate` date NOT NULL,
  `totalAmount` varchar(10) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  PRIMARY KEY (`bankId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank`
--

LOCK TABLES `bank` WRITE;
/*!40000 ALTER TABLE `bank` DISABLE KEYS */;
INSERT INTO `bank` VALUES (1,'Federal Bank','Kollam','FBI03456FI','Rahul Raj','84487853212','VISA','8888888888888888','123','2023-04-12','991000','9999999999'),(2,'State Bank Of India','Kundara','SBIN004587','Admin','48487853212','RUPAY','1111111111111111','123','2099-04-12','24000','8888888888');
/*!40000 ALTER TABLE `bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaint` (
  `complaintId` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `worker_loginId` int(10) NOT NULL,
  `currentDate` date NOT NULL,
  `adminReply` text NOT NULL,
  PRIMARY KEY (`complaintId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint`
--

LOCK TABLES `complaint` WRITE;
/*!40000 ALTER TABLE `complaint` DISABLE KEYS */;
INSERT INTO `complaint` VALUES (1,'Related to salary','Salary is low',32,'2023-05-02','Dei dei  pani edukk'),(2,'Related to Work','Work is heavy',32,'2023-05-01','Okda mone');
/*!40000 ALTER TABLE `complaint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insuranceagency`
--

DROP TABLE IF EXISTS `insuranceagency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insuranceagency` (
  `insAgId` int(10) NOT NULL,
  `insAgName` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `district` varchar(50) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `loginId` int(10) NOT NULL,
  PRIMARY KEY (`insAgId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insuranceagency`
--

LOCK TABLES `insuranceagency` WRITE;
/*!40000 ALTER TABLE `insuranceagency` DISABLE KEYS */;
INSERT INTO `insuranceagency` VALUES (10001,'Bajaj Allianz General Insurance','13k, 26/1206, 3rd Floor, Pandari Tower, Rice Bazar Rd, Near ','Thrissur','1800209404',28),(10002,'National Insurance Company','Karippurathu Building, First Floor, Near Muhamma Post Office','Alappuzha','8888888888',29);
/*!40000 ALTER TABLE `insuranceagency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `loginId` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userType` enum('0','1','2','3','4','5') NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`loginId`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'shoanchlklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(2,'shoekldaklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(3,'shoehknpklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(4,'shokdklpklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(5,'shokkzpsklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','2'),(6,'shoktzpsklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(7,'admin@gmail.com','202cb962ac59075b964b07152d234b70','0','1'),(9,'shokdrklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(10,'shokunkdklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(11,'shopprmklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(12,'shopylyklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(13,'shopnlrklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(14,'shoptorklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(15,'shokkzpsklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(16,'shosorndklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(17,'shothenklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(18,'shoerrklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(19,'shocglmklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(20,'shoakvlklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(21,'shoakvlklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(22,'shoakvlklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(23,'shoakvlklmrl.pol@kerala.gov.in','202cb962ac59075b964b07152d234b70','1','0'),(24,'info@intermanagement.com','202cb962ac59075b964b07152d234b70','2','1'),(25,'info@greenlinegroup.in','202cb962ac59075b964b07152d234b70','2','1'),(26,'connect2work@hi2.in','202cb962ac59075b964b07152d234b70','2','1'),(27,'sansinter@sansglob.com','202cb962ac59075b964b07152d234b70','2','1'),(28,'bagichelp@bajajallianz.co.in','202cb962ac59075b964b07152d234b70','4','1'),(29,'nickerala@nic.in','202cb962ac59075b964b07152d234b70','4','1'),(31,'rajesh.kumar@gmail.com','202cb962ac59075b964b07152d234b70','3','1'),(32,'anjali.singh@yahoo.com','202cb962ac59075b964b07152d234b70','3','1'),(33,'sandeep.sharma@hotmail.com','202cb962ac59075b964b07152d234b70','3','1'),(34,'rakesh.singh@yahoo.com','202cb962ac59075b964b07152d234b70','3','1'),(35,'priya.patel@gmail.com','202cb962ac59075b964b07152d234b70','3','1'),(36,'labourcommission@gmail.com','202cb962ac59075b964b07152d234b70','5','1'),(37,'faridabad@haryanapolice.gov.in','202cb962ac59075b964b07152d234b70','1','1'),(38,'dinesh.raj@gmail.com','202cb962ac59075b964b07152d234b70','3','1'),(39,'john.doe@gmail.com','202cb962ac59075b964b07152d234b70','3','1'),(40,'john.hard@gmail.com','202cb962ac59075b964b07152d234b70','3','1'),(41,'varun.das@yahoo.com','202cb962ac59075b964b07152d234b70','3','1'),(43,'rajubhai@yahoo.com','202cb962ac59075b964b07152d234b70','3','1'),(44,'loocaa@gmail.com','202cb962ac59075b964b07152d234b70','3','1');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `notificationId` int(10) NOT NULL AUTO_INCREMENT,
  `notification` text NOT NULL,
  `currentDate` date NOT NULL,
  PRIMARY KEY (`notificationId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` VALUES (1,'This is a demo notification message','2023-04-12'),(3,'Subject: Request for Labor\n\nDear [Agency Name],\n\nI am writing to request your assistance in providing labor for our upcoming project. We are looking for [number] workers with experience in [skill] to work on a [duration]-month contract.\n\nThe project will begin on [start date] and end on [end date]. The workers will be required to work [hours] hours per day, [days] days per week.\n\nWe are looking for reliable and hardworking individuals who can work well under pressure and meet deadlines. The workers must have their own transportation and be able to provide their own tools.\n\nIf you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks.\n\nThank you for your assistance.\n\nSincerely,\n\n[Your Name] [Your Title] [Your Company] [Your Contact Information]\n\nI hope this helps! Let me know if you have any other questions.\n\nReceived message. Here\'s an example of a notification message that an admin could send to a labor agency: Subject: Request for Labor Dear [Agency Name], I am writing to request your assistance in providing labor for our upcoming project. We are looking for [number] workers with experience in [skill] to work on a [duration]-month contract. The project will begin on [start date] and end on [end date]. The workers will be required to work [hours] hours per day, [days] days per week. We are looking for reliable and hardworking individuals who can work well under pressure and meet deadlines. The workers must have their own transportation and be able to provide their own tools. If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks. Thank you for your assistance. Sincerely, [Your Name] [Your Title] [Your Company] [Your Contact Information] I hope this helps! Let me know if you have any other questions.\n','2023-04-16'),(4,'Subject: Request for Labor\r\n\r\nDear [Agency Name],\r\n\r\nI am writing to request your assistance in providing labor for our upcoming project. We are looking for [number] workers with experience in [skill] to work on a [duration]-month contract.\r\n\r\nThe project will begin on [start date] and end on [end date]. The workers will be required to work [hours] hours per day, [days] days per week.\r\n\r\nWe are looking for reliable and hardworking individuals who can work well under pressure and meet deadlines. The workers must have their own transportation and be able to provide their own tools.\r\n\r\nIf you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule int','2023-04-16'),(5,'lassdhfalfkl\r\ndalfadjf\r\ndlfadjfladf\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nelqjerkqjekrjq','2023-04-16'),(6,'adfadfdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddw\r\n\r\ne\r\nr\r\nwe\r\nr','2023-04-16'),(7,'sdfaf','2023-04-16'),(8,'Subject: Request for Labor\n\nDear [Agency Name],\n\nI am writing to request your assistance in providing labor for our upcoming project. We are looking for [number] workers with experience in [skill] to work on a [duration]-month contract.\n\nThe project will begin on [start date] and end on [end date]. The workers will be required to work [hours] hours per day, [days] days per week.','2023-04-16'),(9,'xckvhflkjrwljfhj\r\n\r\n\r\n\r\n\r\n\r\n\r\nsfgsfg','2023-04-16'),(10,'If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks. If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks. If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks. If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks. If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks. If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks. If you have any workers who meet these requirements and are available during the specified dates, please let us know as soon as possible. We would like to schedule interviews with potential candidates within the next two weeks.','2023-04-16');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `paymentId` int(10) NOT NULL AUTO_INCREMENT,
  `cardHolderName` varchar(50) NOT NULL,
  `cardNo` varchar(16) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expDate` varchar(5) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `loginId` varchar(10) NOT NULL,
  `currentDate` date NOT NULL,
  `schemeApplyId` int(10) NOT NULL,
  PRIMARY KEY (`paymentId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (1,'Rakesh Sharma','8888888888888888','123','11/23','3000','32','2023-05-01',5),(2,'Rakesh Sharma','8888888888888888','123','11/23','3000','32','2022-05-01',5);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policestation`
--

DROP TABLE IF EXISTS `policestation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policestation` (
  `stationId` varchar(10) NOT NULL,
  `addLine1` varchar(100) NOT NULL,
  `addLine2` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `loginId` int(10) NOT NULL,
  PRIMARY KEY (`stationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policestation`
--

LOCK TABLES `policestation` WRITE;
/*!40000 ALTER TABLE `policestation` DISABLE KEYS */;
INSERT INTO `policestation` VALUES ('00000','Station House Officer, Pooyapally Police Station','Pooyappally P.O. Kollam','691537','Kollam Rural','Pooyapally','9497947136',12),('11022','Station House Officer, Kundara Police Station','Elampalloor, Kundara P.O, Kollam','691504','Kollam Rural','Kundara','9497987034',9),('11023','Station House Officer, East Kallada Police Station','East Kallada PO, Kollam','591502','Kollam Rural','East Kallada','9497947139',2),('11029','Station House Officer, Sasthamcotta Police Station','Manakkara, Sasthamcotta P.O, Kollam','690521','Kollam Rural','Sasthamcotta','9497987036',15),('11031','Station House Officer, Sooranadu Police Station','Sooranadu P.O, Chakkuvally, Kollam','690522','Kollam Rural','Sooranadu','9497947277',16),('11036','Station House Officer, Punalur Police Staion','Punalur P.O, Kollam','691305','Kollam Rural','Punalur','9497987038',13),('11037','Station House Officer, Pathanapuram Police Station','Pathanapuram P.O, KOLLAM','689695','Kollam Rural','Pathanapuram','9497990338',11),('11038','Station House Officer, Kunnicode Police Station','Kunnicode PO, KOLLAM','691508','Kollam Rural','Kunnicode','9497947141',10),('11041','Station House Officer, Kottarakkara PS','Kottarakkara P.O KOLLAM','691506','Kollam Rural','Kottarakkara','9497987039',5),('11043','Station House Officer, Ezhukone Police Station','Ezhukone P.O, Kollam','691505','Kollam Rural','Ezhukone','9497987043',3),('11047','CHADAYAMANGALAM POLICE STATION','CHADAYAMANGALAM P.O KOLLAM','691534','Kollam Rural','Chadayamangalam','9497947137',19),('11049','The Station House Officer, Kulathupuzha Police Sta','Kollam','691310','Kollam Rural','Kulathupuzha','9497987041',6),('11050','The Station House Officer, Thenmala Police Station','Thenmala PO, Kollam','691308','Kollam Rural','Thenmala','9497947138',17),('11051','ACHANKOVIL POLICE STATION','ACHANKOVIL P.O KOLLAM','689696','Kollam Rural','Achancovil','9497960654',23),('11052','Station House Officer, Anchal Police Station','Anchal P.O, Kollam','691306','Kollam Rural','Anchal','9497980157',1),('11053','Station House Officer, Yeroor Police Station','Yeroor P.O, Kollam','691312','Kollam Rural','Yeroor','9497947135',18),('11059','Station House officer, Puthoor Police Station','Puthoor PO, Kollam','691507','Kollam Rural','Puthoor','9497947140',14),('41104','Station House Officer, Kadakkal Police Station','Kadakkal PO, Kollam','691536','Kollam Rural','Kadakkal','9497987040',4),('60001','Police Station Sector 31','Sector 31, Inder Colony, Sector 31, Faridabad, Haryana 12100','121003','Faridabad','Sector 31','9112922558',37);
/*!40000 ALTER TABLE `policestation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `salaryId` int(10) NOT NULL AUTO_INCREMENT,
  `work` varchar(50) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `agency_loginId` int(10) NOT NULL,
  PRIMARY KEY (`salaryId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (2,'Flooring installer','650',24),(3,'Electrician','450',24),(5,'Construction worker','500',24),(6,'Plumber','600',24),(7,'Carpenter','700',24),(8,'Heavy equipment operator','1000',24);
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scheme`
--

DROP TABLE IF EXISTS `scheme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scheme` (
  `schemeId` int(10) NOT NULL AUTO_INCREMENT,
  `schemeCat` varchar(50) NOT NULL,
  `schemeName` varchar(50) NOT NULL,
  `schemeAmnt` varchar(10) NOT NULL,
  `validity` varchar(2) NOT NULL,
  `schemeDetails` text NOT NULL,
  `interestRate` varchar(2) NOT NULL,
  `insAg_loginId` int(10) NOT NULL,
  PRIMARY KEY (`schemeId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheme`
--

LOCK TABLES `scheme` WRITE;
/*!40000 ALTER TABLE `scheme` DISABLE KEYS */;
INSERT INTO `scheme` VALUES (1,'Life Insurance','Jeevan','3000','5','This is a life insurance scheme','10',29),(2,'Accidental Protectio','loocaa','5500','8','free food free wifi','15',29);
/*!40000 ALTER TABLE `scheme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schemeapply`
--

DROP TABLE IF EXISTS `schemeapply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schemeapply` (
  `schemeApplyId` int(10) NOT NULL AUTO_INCREMENT,
  `worker_loginId` int(10) NOT NULL,
  `schemeId` int(10) NOT NULL,
  `currentDate` date NOT NULL,
  `schemeStatus` enum('0','1','2') NOT NULL,
  `insuranceCard` text NOT NULL,
  PRIMARY KEY (`schemeApplyId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schemeapply`
--

LOCK TABLES `schemeapply` WRITE;
/*!40000 ALTER TABLE `schemeapply` DISABLE KEYS */;
INSERT INTO `schemeapply` VALUES (5,32,1,'2023-04-10','1','Aadhar.png'),(6,33,1,'2023-04-10','1','iddd.png'),(9,32,2,'2023-04-10','1','idcard2.png'),(10,35,2,'2023-04-10','0',''),(11,40,1,'2023-04-11','0',''),(12,39,1,'2023-04-11','0',''),(13,31,1,'2023-04-11','0','');
/*!40000 ALTER TABLE `schemeapply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workassign`
--

DROP TABLE IF EXISTS `workassign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workassign` (
  `workAssignId` int(10) NOT NULL AUTO_INCREMENT,
  `worker_loginId` int(10) NOT NULL,
  `salaryId` int(10) NOT NULL,
  `startDate` date NOT NULL,
  `days` varchar(5) NOT NULL,
  `deallocationStatus` enum('0','1') NOT NULL,
  PRIMARY KEY (`workAssignId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workassign`
--

LOCK TABLES `workassign` WRITE;
/*!40000 ALTER TABLE `workassign` DISABLE KEYS */;
INSERT INTO `workassign` VALUES (1,32,2,'2023-04-21','5','1'),(2,38,3,'2023-04-20','5','1'),(4,40,7,'2023-04-12','5','1'),(6,40,3,'2023-05-04','5','1'),(9,38,5,'2023-02-12','5','0'),(11,32,3,'2023-04-24','5','0'),(12,40,7,'2023-04-25','9','0');
/*!40000 ALTER TABLE `workassign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worker`
--

DROP TABLE IF EXISTS `worker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worker` (
  `workerId` int(10) NOT NULL AUTO_INCREMENT,
  `workerName` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `street` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `aadhaar` varchar(12) NOT NULL,
  `loginId` int(10) NOT NULL,
  `agency_loginId` int(10) NOT NULL,
  `passingStatus` enum('0','1','2','3') NOT NULL,
  `medicalReport` text NOT NULL,
  `crimeReport` text NOT NULL,
  `workerCard` text NOT NULL,
  `deathReport` text NOT NULL,
  `deathPassingStatus` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`workerId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worker`
--

LOCK TABLES `worker` WRITE;
/*!40000 ALTER TABLE `worker` DISABLE KEYS */;
INSERT INTO `worker` VALUES (2,'Rajesh Kumar','v3_0019214.jpg','24/3, Nehru Nagar','2000-04-20','Male','Bhagwanpur','Haridwar','Roorkee','247667','9876543210','123456789012',31,24,'2','','','Rajesh_Kumar5221771.jpg','','0'),(3,'Anjali Singh','image.93256.2505690.jpg','H. No. 23, Ashok Vihar','2000-04-01','Female','Sector 35','Faridabad','Faridabad','121003','8765432109','234567890123',32,24,'3','New Text Document.txt','Document.docx','Anjali_Singh6636535.jpg','','0'),(4,'Sandeep Sharma','v3_0457787.jpg','56/1, Shivaji Nagar','2000-04-13','Male','Jhansi Road','Gwalior','Gwalior','474002','7654321098','345678901234',33,24,'0','','','','','0'),(5,'Rakesh Singh','image.10700.3545089.jpg','H. No. 6, Vishwakarma Colony','2000-04-16','Male','Nehru Road','Jalandhar','Jalandhar','144001','5432109876','567890123456',34,24,'1','','','Rakesh_Singh8864562.jpg','','0'),(6,'Priya Patel','v3_0146065.jpg','12/3, Adarsh Colony','2000-04-20','Female','Vrindavan','Mathura','Mathura','281004','6543210987','456789012345',35,24,'2','','','Priya_Patel8138092.jpg','','0'),(7,'Dinesh Raj','cmale.jpg','Raj Bhavan\r\nInder Colony','2000-04-30','Male','Sector 35','Haryana','Sector 35','121003','8574487884','658489652563',38,24,'2','','mgw.docx','Dinesh_Raj6962829.jpg','loocaa5488739.jpg','0'),(8,'John Doe','dmale.jpg','Dilbar Vilas, Tamil Nadu','2000-04-10','Male','Chennai','Madurai','Chennai','561666','8888888888','123456789154',39,24,'1','','','John_Doe2120330.jpg','','0'),(9,'John Hard','a.jpg','Naga Bhavanam, Tamil Nadu','2000-11-25','Male','Chennai','Madurai','Chennai','561666','5488888887','123456789154',40,24,'0','','','','','0'),(10,'Varun Das','emale.jpg','Varun Bhavan, Ibrahimpur, Bihar','2000-04-18','Male','Ibrahimpur','Ibrahimpur','Ibrahimpur','824102','8457885634','874589698722',41,26,'0','','','','','0'),(12,'Sojin Raju W','fmale.jpg','Ibrahimpur','2000-11-11','Male','Ibrahimpur','Kollam Rural','Ibrahimpur','824102','0845788563','644664656556',43,26,'0','migrantlabours (8).sql','','','','0'),(13,'Looca Muhammed','gmale.jpg','Peace Cottage','2000-04-14','Male','kundara','Kollam','chadayamangalam','123456','9999999999','258458655954',44,25,'1','Screenshot (9).png','','Looca_Muhammed6272338.jpg','','0');
/*!40000 ALTER TABLE `worker` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-03 22:57:11
