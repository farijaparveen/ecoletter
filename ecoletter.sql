-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 07:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoletter`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_data`
--

CREATE TABLE `faculty_data` (
  `faculty_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `designation` varchar(75) NOT NULL,
  `experience` int(5) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `dob` date NOT NULL,
  `phno` varchar(30) NOT NULL,
  `bldgrp` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_data`
--

INSERT INTO `faculty_data` (`faculty_id`, `name`, `type`, `department`, `designation`, `experience`, `gender`, `email`, `dob`, `phno`, `bldgrp`, `address`) VALUES
('tcs111', 'Ritheesh', '1', 'CSE', '3', 5, '1', 'ritheesh@gmail.com', '1975-03-05', '9874524110', 'O+', 'stfyjmhknk.m'),
('tcs112', 'sheeba joice', '1', 'ECE', '4', 8, '2', 'sheeba joice@gmail.com', '1970-08-15', '3546764534', 'A+', 'abc road,xyz colony'),
('tcs113', 'M.Joly', '1', 'EEE', '1', 6, '2', 'joly@gmail.com', '1980-05-25', '097556358', 'AB+', 'ftytuy.ljk;\r\n'),
('tcs114', 'Muthukumar', '1', 'MECH', '4', 17, '1', 'muthukumar@gmail.com', '1972-12-19', '3456', 'AB-', 'abc,xyz'),
('tcs115', 'P.latha', '1', 'IT', '4', 17, '2', 'latha@gmail.com', '1977-09-04', '44668686', 'B-', 'yg,hk.hli.jlff'),
('tcs116', 'Arivalagan', '1', 'CIVIL', '2', 3, '1', 'arivalagan@gmail.com', '1971-02-15', '546468678', 'A-', 'fghkjlkjkljl');

-- --------------------------------------------------------

--
-- Table structure for table `hod_data`
--

CREATE TABLE `hod_data` (
  `hod_id` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `factype` varchar(50) NOT NULL,
  `experience` int(5) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `bldgrp` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod_data`
--

INSERT INTO `hod_data` (`hod_id`, `name`, `department`, `designation`, `factype`, `experience`, `dob`, `gender`, `email`, `phno`, `bldgrp`, `address`) VALUES
('hodcse', 'Godfrey', 'EI', '4', '1', 8, '1975-03-05', '1', 'godfrey@gmail.com', '9874524100', 'O+', 'shfhtfnxxx,sttt'),
('hodece', 'Srijitha.S.Nath', 'ECE', '1', '1', 16, '1978-05-05', '2', 'srijitha@gmail.com', '9762148990', 'A-', 'sgdndhtfhmt'),
('hodeee', 'Senthil Kumar', 'EEE', '4', '1', 15, '1976-11-19', '1', 'senthilkumar@gmail.com', '5564545453', 'O-', 'gkjhkjhkj'),
('hodit', 'Vijayaraj.A', 'IT', '1', '1', 13, '1971-12-13', '1', 'vijayaraj@gmail.com', '9884057623', 'B+', 'xsgyugkbkg'),
('hodmech', 'Gnanavel', 'MECH', '4', '1', 21, '1969-01-21', '1', 'gnanavel@gmail.com', '9787424463', 'AB+', 'fygk.jl,/,lkklb');

-- --------------------------------------------------------

--
-- Table structure for table `letter_content`
--

CREATE TABLE `letter_content` (
  `letter_id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `hod` varchar(2) NOT NULL,
  `principal` varchar(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `department` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `days` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letter_content`
--

INSERT INTO `letter_content` (`letter_id`, `sender`, `receiver`, `type`, `subject`, `message`, `hod`, `principal`, `timestamp`, `department`, `status`, `duration`, `days`) VALUES
(10000, '', '', '', '', '', '', '', '2018-04-15 05:33:32', '', '', NULL, NULL),
(10001, '212214104026', '1', 'leave', 'dg', '<p>BODY OF THE LETTER</p>', '', '', '2018-04-15 05:40:45', 'EI', '3', '15/04/2018 12:00 AM - 15/04/2018 11:59 PM', 14),
(10002, '212214104026', '3', 'leave', 'cv', '<p>BODY OF THE LETTER</p>', '2', '3', '2018-04-15 05:43:26', 'EI', '3', '15/04/2018 12:00 AM - 15/04/2018 11:59 PM', 45);

-- --------------------------------------------------------

--
-- Table structure for table `letter_index`
--

CREATE TABLE `letter_index` (
  `letter_id` varchar(10) NOT NULL,
  `faculty_id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letter_index`
--

INSERT INTO `letter_index` (`letter_id`, `faculty_id`, `name`, `role`, `comments`, `timestamp`, `status`) VALUES
('10001', 'warden1', 'sumathi', 'Faculty', 'vj', '2018-04-15 05:40:45', '3'),
('10002', 'tcs111', 'Ritheesh', 'Faculty', 'good boy', '2018-04-15 05:42:19', '2'),
('10002', 'hodcse', 'Godfrey', 'HOD', 'pannalam', '2018-04-15 05:42:45', '2'),
('10002', 'principal', 'Ramesh', 'Principal', 'approve', '2018-04-15 05:43:12', '2'),
('10002', 'principal', 'Ramesh', 'Principal', 'fzdfsdf', '2018-04-15 05:43:26', '3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `role`) VALUES
('212214104021', '212214104021', '1'),
('212214104022', '212214104022', '1'),
('212214104023', '212214104023', '1'),
('212214104024', '212214104024', '1'),
('212214104025', '212214104025', '1'),
('212214104026', '12345', '1'),
('212214104027', '212214104027', '1'),
('212214104028', '212214104028', '1'),
('admin', 'admin', '6'),
('hodcivil', 'hodcivil', '4'),
('hodcse', 'hodcse', '4'),
('hodece', 'hodece', '4'),
('hodeee', 'hodeee', '4'),
('hodei', 'hodei', '4'),
('hodit', 'hodit', '4'),
('hodmech', 'hodmech', '4'),
('principal', 'principal', '5'),
('tcs111', 'tcs111', '2'),
('tcs112', 'tcs112', '2'),
('tcs113', 'tcs113', '2'),
('tcs114', 'tcs114', '2'),
('tcs115', 'tcs115', '2'),
('tcs116', 'tcs116', '2'),
('tcs123', 'tcs117', '2'),
('warden1', 'warden1', '3'),
('warden2', 'warden2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `title` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `role` varchar(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`title`, `message`, `role`, `timestamp`) VALUES
('nrew', '<h1><u>Notification message</u></h1>', '1', '0000-00-00 00:00:00'),
('jjjhgghfh', '<h1><u>Notification message</u></h1>', '1', '2018-04-12 08:02:40'),
('sdgsg', '<p><u><small><i></i></small></u><i>sdg</i><u></u></p>', '2', '2018-04-12 08:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `principal_data`
--

CREATE TABLE `principal_data` (
  `principal_id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `factype` varchar(50) NOT NULL,
  `experience` int(5) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `bldgrp` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal_data`
--

INSERT INTO `principal_data` (`principal_id`, `name`, `role`, `dept`, `designation`, `factype`, `experience`, `dob`, `gender`, `email`, `phno`, `bldgrp`, `address`) VALUES
('principal', 'Ramesh', '1', 'ECE', 'Professor', 'teaching staff', 10, '1970-11-05', 'male', 'aaa@gmail.com', '8512745610', 'A positive', 'sshlihlhy');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `studenttype` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `section` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `dob` date NOT NULL,
  `phno` varchar(30) NOT NULL,
  `fathernam` varchar(100) NOT NULL,
  `fathermob` varchar(30) NOT NULL,
  `bldgrp` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`student_id`, `name`, `studenttype`, `year`, `department`, `section`, `gender`, `email`, `dob`, `phno`, `fathernam`, `fathermob`, `bldgrp`, `address`) VALUES
('212214104021', 'dineshbabu', '1', 4, 'CSE', 'A', '1', 'dineshbabu@gmail.com', '1996-04-08', '9874524100', 'aaa', '123456789', 'O+', '111qqq'),
('212214104022', 'dineshkumar', '2', 4, 'IT', 'B', '1', 'dineshkumar@gmail.com', '1996-03-18', '654123347', 'bbb', '154795335', 'O-', 'qwert'),
('212214104023', 'Divya.K', '1', 4, 'ECE', 'C', '2', 'divya@gmail.com', '1996-02-05', '277900888', 'qaz', '11346789', 'A+', 'azxxccdvg'),
('212214104024', 'divya.R', '2', 4, 'EEE', 'A', '2', 'born2win1997@gmail.com', '1997-06-20', '1234567890', 'rangan', '5521112221', 'A+', 'wffjhgjgkjh'),
('212214104025', 'sailatha', '1', 3, 'CSE', 'A', '2', 'sailatha@gmail.com', '1996-12-24', '13148656346', 'bbb', '12344667889', 'B-', 'qefjbnmn'),
('212214104026', 'Duraisankar', '2', 4, 'EI', 'B', '1', 'rduraisankar@gmail.com', '1997-03-28', '22456657879', 'abc', '12334566778', 'O+', 'qdgfchgvhjgj'),
('212214104027', 'S.Evangelin', '2', 4, 'MECH', 'A', '2', 'lovelyevlin@gmail.com', '1997-03-16', '9600107227', 'asgfhj', '565131212', 'A-', 'stgkjj.m.,m.,m.m.bv123'),
('212214104028', 'Farijaparveen', '2', 4, 'CIVIL', 'A', '2', 'anjaliparveennb@gmail.com', '1997-06-13', '9789942386', 'nagoor basha', '9840369863', 'O+', 'ftfgkjh.kmnk,hjgyjgtiu');

-- --------------------------------------------------------

--
-- Table structure for table `warden_data`
--

CREATE TABLE `warden_data` (
  `wardenid` varchar(10) NOT NULL,
  `name` varchar(75) NOT NULL,
  `wardentype` varchar(75) NOT NULL,
  `experience` int(5) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(75) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `bldgrp` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden_data`
--

INSERT INTO `warden_data` (`wardenid`, `name`, `wardentype`, `experience`, `gender`, `dob`, `email`, `phno`, `bldgrp`, `address`) VALUES
('454', 'SDFS', '1', 554, '1', '2018-01-01', '', '56', '', ''),
('warden1', 'sumathi', 'ddfsd', 4, '454', '0000-00-00', 'asd', 'asd', 'asd', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hod_data`
--
ALTER TABLE `hod_data`
  ADD PRIMARY KEY (`hod_id`);

--
-- Indexes for table `letter_content`
--
ALTER TABLE `letter_content`
  ADD PRIMARY KEY (`letter_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
