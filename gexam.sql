-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2019 at 04:10 AM
-- Server version: 5.5.28-log
-- PHP Version: 5.4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `govexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `selectedanswer` text NOT NULL,
  `uid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `qid` (`qid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `selectedanswer`, `uid`, `qid`) VALUES
(67, '{"result":["22","73"]}', 6, 7),
(68, '{"result":["22","73"]}', 6, 7),
(69, '{"result":["22","73"]}', 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `catogery`
--

CREATE TABLE IF NOT EXISTS `catogery` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `catogery`
--

INSERT INTO `catogery` (`c_id`, `c_name`) VALUES
(4, 'java'),
(5, 'python'),
(6, 'c'),
(7, 'myown'),
(8, ''),
(9, 'aptitude'),
(10, 'vinnu'),
(11, 'niit'),
(12, 'aptitude2');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
  `qp_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_name` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`qp_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`qp_id`, `q_name`, `c_id`) VALUES
(7, 'tamil', 7),
(10, 'cool', 5),
(11, 'newquestion', 11),
(12, 'myquestion', 12);

-- --------------------------------------------------------

--
-- Table structure for table `passcode`
--

CREATE TABLE IF NOT EXISTS `passcode` (
  `pc_id` int(11) NOT NULL AUTO_INCREMENT,
  `passcode` varchar(255) NOT NULL,
  PRIMARY KEY (`pc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passcode`
--

INSERT INTO `passcode` (`pc_id`, `passcode`) VALUES
(1, 'G98hi');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_name` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `qp_id` int(11) NOT NULL,
  PRIMARY KEY (`q_id`),
  KEY `qp_id` (`qp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_name`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `qp_id`) VALUES
(1, '1', '2', '22', '2', '11', '22', 7),
(2, '57', '7', '73', '79', '7', '7', 7);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `uname`, `password`) VALUES
(12, 'revathi@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `testname` varchar(255) NOT NULL,
  `dateofT` date NOT NULL,
  `etime` varchar(100) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `pc_id` (`pc_id`),
  KEY `qp_id` (`qp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tid`, `testname`, `dateofT`, `etime`, `qp_id`, `pc_id`) VALUES
(4, 'Dpi test', '2018-12-24', '40', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE IF NOT EXISTS `userregister` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tenth` int(11) NOT NULL,
  `twelth` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `study` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`uid`, `username`, `email`, `password`, `tenth`, `twelth`, `gender`, `study`, `dob`) VALUES
(1, '', '', '', 99, 0, '', '', '0000-00-00'),
(2, 'vinnu', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 45, 566, '', '', '0000-00-00'),
(3, 'vin', 'vinnu@gmail.com', '202cb962ac59075b964b07152d234b70', 324, 4324, '', '', '0000-00-00'),
(4, 'vinnu', 'vinnu@gmail.com', '182be0c5cdcd5072bb1864cdee4d3d6e', 33, 33, '', '', '0000-00-00'),
(5, '', '', '', 0, 0, '', '', '2019-02-05'),
(6, 'tamil', 'tamil@gmail', '81dc9bdb52d04dc20036dbd8313ed055', 33, 33, 'female', 'School', '2019-02-14');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `qid` FOREIGN KEY (`qid`) REFERENCES `paper` (`qp_id`),
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `userregister` (`uid`);

--
-- Constraints for table `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `Paper_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catogery` (`c_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `Questions_ibfk_1` FOREIGN KEY (`qp_id`) REFERENCES `paper` (`qp_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `Test_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `passcode` (`pc_id`),
  ADD CONSTRAINT `Test_ibfk_2` FOREIGN KEY (`qp_id`) REFERENCES `paper` (`qp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
