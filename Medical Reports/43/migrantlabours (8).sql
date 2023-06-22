-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 06:16 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `migrantlabours`
--
CREATE DATABASE IF NOT EXISTS `migrantlabours` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `migrantlabours`;

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE IF NOT EXISTS `agency` (
  `agencyId` int(10) NOT NULL,
  `agencyName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `propName` varchar(30) NOT NULL,
  `contactNo` int(10) NOT NULL,
  `loginId` int(10) NOT NULL,
  PRIMARY KEY (`agencyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agencyId`, `agencyName`, `address`, `pincode`, `district`, `city`, `propName`, `contactNo`, `loginId`) VALUES
(10001, 'InterManagement Manpower Services', 'Paramara Road, Ernakulam North, Cochin\r\nKerala, India', 682018, 'Ernakulam', 'Kochi', 'Vimal Hari', 2147483647, 24),
(10002, 'Greenline Management Consultancies', 'C1, II Floor, Periellath Towers, Jawahar Road - Mahatma Road, Vytilla, Kochi, Kerala, India', 692019, 'Ernakulam', 'Kochi', 'Ram Mohan', 2147483647, 25),
(10003, 'Connecting 2 Work', 'G-5, Logic Square, VIP Rd, Kaloor, Ernakulam, Kerala', 682017, 'Ernakulam', 'Kochi', 'Rivin Thomas', 2147483647, 26),
(10004, 'Sans International', '501, Ayur-Trivandrum Road, Ayur, Kollam, Kerala', 691533, 'Kollam', 'Ayur', 'Niveth Saraswathy', 2147483647, 27);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendanceId` int(20) NOT NULL AUTO_INCREMENT,
  `worker_loginId` varchar(20) NOT NULL,
  `attendance` enum('Absent','Present') NOT NULL,
  `agency_loginId` varchar(20) NOT NULL,
  `currentDate` date NOT NULL,
  `currentMonth` varchar(20) NOT NULL,
  PRIMARY KEY (`attendanceId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceId`, `worker_loginId`, `attendance`, `agency_loginId`, `currentDate`, `currentMonth`) VALUES
(2, '31', 'Present', '24', '2023-04-08', '04'),
(6, '32', 'Present', '24', '2023-04-08', '04'),
(10, '33', 'Present', '24', '2023-04-08', '04'),
(11, '34', 'Present', '24', '2023-04-08', '04'),
(12, '31', 'Absent', '24', '2023-04-09', '04'),
(13, '32', 'Present', '24', '2023-04-09', '04'),
(14, '33', 'Absent', '24', '2023-04-09', '04'),
(15, '34', 'Present', '24', '2023-04-09', '04'),
(16, '31', 'Present', '24', '2023-04-10', '04'),
(17, '32', 'Absent', '24', '2023-04-10', '04'),
(18, '33', 'Present', '24', '2023-04-10', '04'),
(19, '34', 'Present', '24', '2023-04-10', '04');

-- --------------------------------------------------------

--
-- Table structure for table `insuranceagency`
--

CREATE TABLE IF NOT EXISTS `insuranceagency` (
  `insAgId` int(10) NOT NULL,
  `insAgName` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `district` varchar(15) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `loginId` varchar(20) NOT NULL,
  PRIMARY KEY (`insAgId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insuranceagency`
--

INSERT INTO `insuranceagency` (`insAgId`, `insAgName`, `address`, `district`, `contactNo`, `loginId`) VALUES
(10001, 'Bajaj Allianz General Insurance', '13k, 26/1206, 3rd Floor, Pandari Tower, Rice Bazar Rd, Near ', 'Thrissur', '1800209404', '28'),
(10002, 'National Insurance Company', 'Karippurathu Building, First Floor, Near Muhamma Post Office', 'Alappuzha', '987457444', '29');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `loginId` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userType` enum('0','1','2','3','4','5') NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`loginId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `email`, `password`, `userType`, `status`) VALUES
(1, 'shoanchlklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(2, 'shoekldaklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(3, 'shoehknpklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(4, 'shokdklpklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(5, 'shokkzpsklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '2'),
(6, 'shoktzpsklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(7, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '0', '1'),
(9, 'shokdrklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(10, 'shokunkdklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(11, 'shopprmklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(12, 'shopylyklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(13, 'shopnlrklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(14, 'shoptorklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(15, 'shokkzpsklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(16, 'shosorndklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(17, 'shothenklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(18, 'shoerrklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(19, 'shocglmklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(20, 'shoakvlklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(21, 'shoakvlklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(22, 'shoakvlklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(23, 'shoakvlklmrl.pol@kerala.gov.in', '202cb962ac59075b964b07152d234b70', '1', '0'),
(24, 'info@intermanagement.com', '202cb962ac59075b964b07152d234b70', '2', '1'),
(25, 'info@greenlinegroup.in', '202cb962ac59075b964b07152d234b70', '2', '1'),
(26, 'connect2work@hi2.in', '202cb962ac59075b964b07152d234b70', '2', '1'),
(27, 'sansinter@sansglob.com', '202cb962ac59075b964b07152d234b70', '2', '1'),
(28, 'bagichelp@bajajallianz.co.in', '202cb962ac59075b964b07152d234b70', '4', '1'),
(29, 'nickerala@nic.in', '202cb962ac59075b964b07152d234b70', '4', '1'),
(31, 'rajesh.kumar@gmail.com', '202cb962ac59075b964b07152d234b70', '3', '1'),
(32, 'anjali.singh@yahoo.com', '202cb962ac59075b964b07152d234b70', '3', '1'),
(33, 'sandeep.sharma@hotmail.com', '202cb962ac59075b964b07152d234b70', '3', '1'),
(34, 'rakesh.singh@yahoo.com', '202cb962ac59075b964b07152d234b70', '3', '1'),
(35, 'priya.patel@gmail.com', '202cb962ac59075b964b07152d234b70', '3', '2'),
(36, 'labourcommission@gmail.com', '202cb962ac59075b964b07152d234b70', '5', '1'),
(37, 'faridabad@haryanapolice.gov.in', '202cb962ac59075b964b07152d234b70', '1', '1'),
(38, 'dinesh.raj@gmail.com', '202cb962ac59075b964b07152d234b70', '3', '2'),
(39, 'john.doe@gmail.com', '202cb962ac59075b964b07152d234b70', '3', '0'),
(40, 'john.doe@gmail.com', '202cb962ac59075b964b07152d234b70', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `policestation`
--

CREATE TABLE IF NOT EXISTS `policestation` (
  `stationId` varchar(10) NOT NULL,
  `addLine1` varchar(60) NOT NULL,
  `addLine2` varchar(60) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `loginId` varchar(10) NOT NULL,
  PRIMARY KEY (`stationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policestation`
--

INSERT INTO `policestation` (`stationId`, `addLine1`, `addLine2`, `pincode`, `district`, `city`, `contactNo`, `loginId`) VALUES
('00000', 'Station House Officer, Pooyapally Police Station', 'Pooyappally P.O. Kollam', '691537', 'Kollam Rural', 'Pooyapally', '9497947136', '12'),
('11022', 'Station House Officer, Kundara Police Station', 'Elampalloor, Kundara P.O, Kollam', '691504', 'Kollam Rural', 'Kundara', '9497987034', '9'),
('11023', 'Station House Officer, East Kallada Police Station', 'East Kallada PO, Kollam', '591502', 'Kollam Rural', 'East Kallada', '9497947139', '2'),
('11029', 'Station House Officer, Sasthamcotta Police Station', 'Manakkara, Sasthamcotta P.O, Kollam', '690521', 'Kollam Rural', 'Sasthamcotta', '9497987036', '15'),
('11031', 'Station House Officer, Sooranadu Police Station', 'Sooranadu P.O, Chakkuvally, Kollam', '690522', 'Kollam Rural', 'Sooranadu', '9497947277', '16'),
('11036', 'Station House Officer, Punalur Police Staion', 'Punalur P.O, Kollam', '691305', 'Kollam Rural', 'Punalur', '9497987038', '13'),
('11037', 'Station House Officer, Pathanapuram Police Station', 'Pathanapuram P.O, KOLLAM', '689695', 'Kollam Rural', 'Pathanapuram', '9497990338', '11'),
('11038', 'Station House Officer, Kunnicode Police Station', 'Kunnicode PO, KOLLAM', '691508', 'Kollam Rural', 'Kunnicode', '9497947141', '10'),
('11041', 'Station House Officer, Kottarakkara PS', 'Kottarakkara P.O KOLLAM', '691506', 'Kollam Rural', 'Kottarakkara', '9497987039', '5'),
('11043', 'Station House Officer, Ezhukone Police Station', 'Ezhukone P.O, Kollam', '691505', 'Kollam Rural', 'Ezhukone', '9497987043', '3'),
('11047', 'CHADAYAMANGALAM POLICE STATION', 'CHADAYAMANGALAM P.O KOLLAM', '691534', 'Kollam Rural', 'Chadayamangalam', '9497947137', '19'),
('11049', 'The Station House Officer, Kulathupuzha Police Station', 'Kollam', '691310', 'Kollam Rural', 'Kulathupuzha', '9497987041', '6'),
('11050', 'The Station House Officer, Thenmala Police Station', 'Thenmala PO, Kollam', '691308', 'Kollam Rural', 'Thenmala', '9497947138', '17'),
('11051', 'ACHANKOVIL POLICE STATION', 'ACHANKOVIL P.O KOLLAM', '689696', 'Kollam Rural', 'Achancovil', '9497960654', '23'),
('11052', 'Station House Officer, Anchal Police Station', 'Anchal P.O, Kollam', '691306', 'Kollam Rural', 'Anchal', '9497980157', '1'),
('11053', 'Station House Officer, Yeroor Police Station', 'Yeroor P.O, Kollam', '691312', 'Kollam Rural', 'Yeroor', '9497947135', '18'),
('11059', 'Station House officer, Puthoor Police Station', 'Puthoor PO, Kollam', '691507', 'Kollam Rural', 'Puthoor', '9497947140', '14'),
('41104', 'Station House Officer, Kadakkal Police Station', 'Kadakkal PO, Kollam', '691536', 'Kollam Rural', 'Kadakkal', '9497987040', '4'),
('60001', 'Police Station Sector 31', 'Sector 31, Inder Colony, Sector 31, Faridabad, Haryana 12100', '121003', 'Faridabad', 'Sector 31', '911292255888', '37');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE IF NOT EXISTS `scheme` (
  `schemeId` int(15) NOT NULL AUTO_INCREMENT,
  `schemeCat` varchar(20) NOT NULL,
  `schemeName` varchar(30) NOT NULL,
  `schemeAmnt` varchar(15) NOT NULL,
  `validity` varchar(10) NOT NULL,
  `schemeDetails` varchar(500) NOT NULL,
  `interestRate` varchar(10) NOT NULL,
  `insAg_loginId` int(10) NOT NULL,
  PRIMARY KEY (`schemeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`schemeId`, `schemeCat`, `schemeName`, `schemeAmnt`, `validity`, `schemeDetails`, `interestRate`, `insAg_loginId`) VALUES
(1, 'Life Insurance', 'Jeevan', '300000', '5', 'This is a life insurance scheme', '10', 29),
(2, 'Accidental Protectio', 'loocaa', '55000000', '1', 'free food free wifi', '100', 29);

-- --------------------------------------------------------

--
-- Table structure for table `schemeapply`
--

CREATE TABLE IF NOT EXISTS `schemeapply` (
  `schemeApplyId` int(20) NOT NULL AUTO_INCREMENT,
  `worker_loginId` varchar(20) NOT NULL,
  `schemeId` varchar(20) NOT NULL,
  `currentDate` date NOT NULL,
  `schemeStatus` enum('0','1','2') NOT NULL,
  `insuranceCard` varchar(50) NOT NULL,
  PRIMARY KEY (`schemeApplyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `schemeapply`
--

INSERT INTO `schemeapply` (`schemeApplyId`, `worker_loginId`, `schemeId`, `currentDate`, `schemeStatus`, `insuranceCard`) VALUES
(5, '32', '1', '2023-04-10', '2', ''),
(6, '33', '1', '2023-04-10', '1', ''),
(9, '32', '2', '2023-04-10', '0', ''),
(10, '35', '2', '2023-04-10', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `workerId` int(10) NOT NULL AUTO_INCREMENT,
  `workerName` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `street` varchar(50) NOT NULL,
  `district` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `aadhaar` varchar(25) NOT NULL,
  `loginId` varchar(20) NOT NULL,
  `agency_loginId` int(30) NOT NULL,
  `passingStatus` enum('0','1','2','3') NOT NULL,
  `crimeReport` varchar(50) NOT NULL,
  PRIMARY KEY (`workerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`workerId`, `workerName`, `photo`, `address`, `dob`, `street`, `district`, `city`, `pincode`, `contactNo`, `aadhaar`, `loginId`, `agency_loginId`, `passingStatus`, `crimeReport`) VALUES
(2, 'Rajesh Kumar', 'v3_0019214.jpg', '24/3, Nehru Nagar', '2000-04-20', 'Bhagwanpur', 'Haridwar', 'Roorkee', '247667', '9876543210', '123456789012', '31', 24, '2', ''),
(3, 'Anjali Singh', 'image.93256.2505690.jpg', 'H. No. 23, Ashok Vihar', '2000-04-01', 'Sector 35', 'Faridabad', 'Faridabad', '121003', '8765432109', '234567890123', '32', 24, '3', 'Document.docx'),
(4, 'Sandeep Sharma', 'v3_0457787.jpg', '56/1, Shivaji Nagar', '2000-04-13', 'Jhansi Road', 'Gwalior', 'Gwalior', '474002', '7654321098', '345678901234', '33', 24, '0', ''),
(5, 'Rakesh Singh', 'image.10700.3545089.jpg', 'H. No. 6, Vishwakarma Colony', '2000-04-16', 'Nehru Road', 'Jalandhar', 'Jalandhar', '144001', '5432109876', '567890123456', '34', 24, '1', ''),
(6, 'Priya Patel', 'v3_0146065.jpg', '12/3, Adarsh Colony', '2000-04-20', 'Vrindavan', 'Mathura', 'Mathura', '281004', '6543210987', '456789012345', '35', 24, '2', ''),
(7, 'Dinesh Raj', 'v3_0457787.jpg', 'Raj Bhavan\r\nInder Colony, Sector 35, Faridabad, Ha', '2000-04-30', 'Sector 35', 'Haryana', 'Sector 35', '121003', '8574487884', '658489652563', '38', 24, '2', 'mgw.docx'),
(8, 'John Doe', 'Screenshot (1).png', 'Dilbar Vilas, Tamil Nadu', '2000-04-10', 'Chennai', 'Madurai', 'Chennai', '561666', '8888888888', '123456789154', '39', 24, '0', ''),
(9, 'John Doe', 'Screenshot (1).png', 'Dilbar Vilas, Tamil Nadu', '2000-11-25', 'Chennai', 'Madurai', 'Chennai', '561666', '8888888888', '123456789154', '40', 24, '0', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
