-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 03:58 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minor_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_content`
--

CREATE TABLE IF NOT EXISTS `course_content` (
  `Course_ID` int(11) NOT NULL,
  `Unit` text NOT NULL,
  `FileTarget` text NOT NULL,
`UniqueID` int(11) NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `course_content`
--

INSERT INTO `course_content` (`Course_ID`, `Unit`, `FileTarget`, `UniqueID`, `Type`) VALUES
(18, 'Unit1', 'uploads/ppt/ch1.ppt', 5, 'ppt'),
(18, 'Unit1', 'uploads/ppt/ch2.ppt', 6, 'ppt'),
(18, 'Unit1', 'uploads/ppt/ch3.ppt', 7, 'ppt'),
(18, 'Unit1', 'uploads/ppt/ch4.ppt', 8, 'ppt'),
(18, 'Unit2', 'uploads/ppt/ch5.ppt', 9, 'ppt'),
(18, 'Unit2', 'uploads/ppt/ch6.ppt', 10, 'ppt'),
(18, 'Unit2', 'uploads/ppt/ch7.ppt', 11, 'ppt'),
(18, 'Unit2', 'uploads/ppt/ch8.ppt', 12, 'ppt'),
(18, 'Unit3', 'uploads/ppt/ch9.ppt', 13, 'ppt'),
(18, 'Unit3', 'uploads/ppt/ch10.ppt', 14, 'ppt'),
(18, 'Unit4', 'uploads/ppt/ch11.ppt', 15, 'ppt'),
(18, 'Unit5', 'uploads/ppt/ch12.ppt', 16, 'ppt'),
(18, 'Unit5', 'uploads/ppt/ch13.ppt', 17, 'ppt'),
(19, 'Unit1', 'https://www.youtube.com/watch?v=VwCdNJsJLhc', 18, 'vid'),
(19, 'Unit4', 'https://www.youtube.com/watch?v=VwCdNJsJLhchttps://www.youtube.com/watch?v=949NWVZ3hRQ', 19, 'vid'),
(21, 'Unit1', 'uploads/ppt/documentation1.pdf', 20, 'ppt'),
(21, 'Unit1', 'https://www.youtube.com/watch?v=949NWVZ3hRQ', 21, 'vid'),
(21, 'Unit1', 'https://www.youtube.com/watch?v=g4RUfANJmTA', 22, 'vid');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE IF NOT EXISTS `course_details` (
`Course_ID` int(5) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `CourseDesc` text NOT NULL,
  `CourseLevel` varchar(255) NOT NULL,
  `CourseImage` varchar(255) NOT NULL,
  `CourseCordinator` varchar(255) NOT NULL,
  `Unit1` varchar(255) NOT NULL,
  `Unit2` varchar(255) NOT NULL,
  `Unit3` varchar(255) NOT NULL,
  `Unit4` varchar(255) NOT NULL,
  `Unit5` varchar(255) NOT NULL,
  `Unit1_content` text NOT NULL,
  `Unit2_content` text NOT NULL,
  `Unit3_content` text NOT NULL,
  `Unit4_content` text NOT NULL,
  `Unit5_content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`Course_ID`, `CourseName`, `CourseDesc`, `CourseLevel`, `CourseImage`, `CourseCordinator`, `Unit1`, `Unit2`, `Unit3`, `Unit4`, `Unit5`, `Unit1_content`, `Unit2_content`, `Unit3_content`, `Unit4_content`, `Unit5_content`) VALUES
(18, 'Operating System', 'An operating system (OS) is system software that manages computer hardware and software resources and provides common services for computer programs. The operating system is a component of the system software in a computer system. Application programs usually require an operating system to function.', 'INTERMEDIATE', 'uploads/os-mini-logo.jpg', 'Sumant', 'INTRODUCTION TO OPERATING SYSTEM', 'PROCESS MANAGEMENT', 'MEMORY MANAGEMENT', 'STORAGE MANAGEMENT', 'LINUX SYSTEM ADMINISTRATION', 'Computer System Organization-Operating System Structure and Operations-\r\nSystem Calls, System Programs, OS Generation and System Boot.', 'Processes-Process Concept,Process Scheduling, Operations on\r\nProcesses,InterprocessCommunication;Threads- Overview, Multicore\r\nProgramming, Multithreading Models;Process Synchronization-Critical Section\r\nProblem,MutexLocks,Semophores,Monitors; CPU Scheduling and Deadlocks.', 'Main Memory-Contiguous Memory Allocation, Segmentation, Paging, 32 and 64\r\nbit architecture Examples; Virtual Memory- Demand Paging, Page Replacement,\r\nAllocation, Thrashing; Allocating Kernel Memory, OS Examples.', 'Mass Storage Structure- Overview, Disk Scheduling and Management; File\r\nSystem Storage-File Concepts,Directory and Disk Structure, Sharing and\r\nProtection; File System Implementation- File System Structure, Directory\r\nStructure, Allocation Methods, Free Space Mangement; I/O Systems', 'Linux System- Basic Concepts;System Administration-Requirements for Linux\r\nSystem Administrator,Setting up a LINUX Multifunction Server,Domain Name\r\nSystem, Setting Up Local Network Services; Virtualization- Basic Concepts,\r\nSetting Up Xen,VMware on Linux Host and Adding Guest OS.'),
(21, 'Computer Graphics', 'adsdsadasd', 'INTERMEDIATE', 'uploads/elegant_retirement_party_gold_sparkles_13_cm_x_18_cm_invitation_card-rf1bd076ae02245c48a1cdf7011c93bf7_zk9c4_324.jpg', 'Theertha ', 'cascasc', 'sadasdsa', 'asdasd', 'sadadasd', 'asdasdasd', 'adasdasd', 'asdasd', 'asdad', 'asdasdasd', 'asdasdas'),
(23, 'Data Warehosing', 'In computing, a data warehouse (DW or DWH), also known as an enterprise data warehouse (EDW), is a system used for reporting and data analysis, and is considered as a core component of Business Intelligence environment. DWs are central repositories of integrated data from one or more disparate sources.', 'BEGINNERS', 'uploads/stock-photo-19176310-cube-assembling-from-blocks.jpg', 'Sumant', 'DATA', 'BUSINESS ANALYSIS', 'DATA MINING', 'ASSOCIATION RULE MINING AND CLASSIFICATION', 'CLUSTERING AND TRENDS IN DATA MINING', 'Data warehousing Components –Building a Data warehouse –- Mapping the Data\r\nWarehouse to a Multiprocessor Architecture – DBMS Schemas for Decision\r\nSupport – Data Extraction, Cleanup, and Transformation Tools –Metadata.', 'Reporting and Query tools and Applications – Tool Categories – The Need for\r\nApplications – Cognos Impromptu – Online Analytical Processing (OLAP) – Need\r\n– Multidimensional Data Model – OLAP Guidelines – Multidimensional versus\r\nMultirelational OLAP – Categories of Tools – OLAP Tools and the Internet.', 'Introduction – Data – Types of Data – Data Mining Functionalities –\r\nInterestingness of Patterns – Classification of Data Mining Systems – Data Mining\r\nTask Primitives – Integration of a Data Mining System with a Data Warehouse –\r\nIssues –Data Preprocessing', 'Mining Frequent Patterns, Associations and Correlations – Mining Methods –\r\nMining various Kinds of Association Rules – Correlation Analysis – Constraint\r\nBased Association Mining – Classification and Prediction - Basic Concepts -\r\nDecision Tree Induction - Bayesian Classification – Rule Based Classification –\r\nClassification by Back propagation – Support Vector Machines – Associative\r\nClassification – Lazy Learners – Other Classification Methods – Prediction', 'Cluster Analysis - Types of Data – Categorization of Major Clustering Methods –\r\nK-means– Partitioning Methods – Hierarchical Methods - Density-Based Methods\r\n–Grid Based Methods – Model-Based Clustering Methods – Clustering High\r\nDimensional Data - Constraint – Based Cluster Analysis – Outlier Analysis – Data\r\nMining Applications.'),
(24, 'sdfns', 'adasda', 'INTERMEDIATE', 'uploads/sda.jpg', 'Sumant', 'adasd', 'adsdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', 'asdasd', 'adasda', 'asdasd', 'asdasddas');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Email`, `Pass`) VALUES
('Sumant Sahney ', 'sumantsahney@gmail.com', 'e634347e3ee31090665f1108cf65b4d2'),
('Sumant', 'sumant_5@yahoo.co.in', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
`studentid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`studentid`, `username`, `email`, `password`) VALUES
(1, 'theerth', 'theertha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Sumant', 'sumant_5@yahoo.co.in', 'e634347e3ee31090665f1108cf65b4d2'),
(3, 'Godwin Sir', 'godwin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `student_subscribe`
--

CREATE TABLE IF NOT EXISTS `student_subscribe` (
  `username` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subscribe`
--

INSERT INTO `student_subscribe` (`username`, `coursename`, `courseid`) VALUES
('sumant_5@yahoo.co.in', 'Operating System', 18),
('godwin@gmail.com', 'Operating System', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Sumant', 'sumant_5@yahoo.co.in', 'e634347e3ee31090665f1108cf65b4d2'),
(2, 'abhishek', 'abhishek_kundan@srmuniv.edu.in', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Theertha ', 'theertha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
 ADD PRIMARY KEY (`UniqueID`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
 ADD PRIMARY KEY (`Course_ID`), ADD UNIQUE KEY `CourseName` (`CourseName`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
 ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
MODIFY `UniqueID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
MODIFY `Course_ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
