-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 08:47 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aid` int(11) NOT NULL,
  `selectedanswer` text NOT NULL,
  `uid` int(11) NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `selectedanswer`, `uid`, `qid`) VALUES
(1, '{\"result\":[\"9\"]}', 8, 17);

-- --------------------------------------------------------

--
-- Table structure for table `catogery`
--

CREATE TABLE `catogery` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catogery`
--

INSERT INTO `catogery` (`c_id`, `c_name`) VALUES
(5, 'python'),
(6, 'c'),
(7, 'myown'),
(8, ''),
(9, 'aptitude'),
(10, 'vinnu'),
(11, 'niit'),
(12, 'aptitude2'),
(13, 'catcat'),
(14, 'cat'),
(15, 'tamil');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `qp_id` int(11) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`qp_id`, `q_name`, `c_id`) VALUES
(7, 'tamil', 7),
(10, 'cool', 5),
(11, 'newquestion', 11),
(12, 'myquestion', 12),
(14, 'new question', 13),
(15, 'vinnu', 13),
(16, 'fanfan', 14),
(17, 'paper 123', 15);

-- --------------------------------------------------------

--
-- Table structure for table `passcode`
--

CREATE TABLE `passcode` (
  `pc_id` int(11) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passcode`
--

INSERT INTO `passcode` (`pc_id`, `passcode`) VALUES
(1, 'G98hi');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `qp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_name`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `qp_id`) VALUES
(1, '1', '2', '22', '2', '11', '22', 7),
(2, '57', '7', '73', '79', '7', '7', 7),
(3, '111111', '1', '1', '1/71', '1', '1', 15),
(4, '2', '2', '2', '2', '2', '2', 7),
(5, '3', '3', '3', '3', '3', '3', 15),
(6, '1', '11', '1', '1', '1', '1', 15),
(7, '9', '9', '9', '99', '9', '9', 17);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `uname`, `password`) VALUES
(12, 'revathi@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `tid` int(11) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `dateofT` date NOT NULL,
  `etime` varchar(100) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tid`, `testname`, `dateofT`, `etime`, `qp_id`, `pc_id`) VALUES
(11, 'exam2', '2019-03-29', '60', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tenth` int(11) NOT NULL,
  `twelth` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `study` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`uid`, `username`, `email`, `password`, `tenth`, `twelth`, `gender`, `study`, `dob`) VALUES
(1, '', '', '', 99, 0, '', '', '0000-00-00'),
(2, 'vinnu', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 45, 566, '', '', '0000-00-00'),
(3, 'vin', 'vinnu@gmail.com', '202cb962ac59075b964b07152d234b70', 324, 4324, '', '', '0000-00-00'),
(4, 'vinnu', 'vinnu@gmail.com', '182be0c5cdcd5072bb1864cdee4d3d6e', 33, 33, '', '', '0000-00-00'),
(5, '', '', '', 0, 0, '', '', '2019-02-05'),
(6, 'tamil', 'tamil@gmail', '81dc9bdb52d04dc20036dbd8313ed055', 33, 33, 'female', 'School', '2019-02-14'),
(7, 'vinu', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 23, 32, 'female', 'UG', '2019-03-07'),
(8, 'java', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 1, 11, 'male', 'UG', '2019-03-13'),
(9, 'vinnu', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 34, 12, 'male', 'UG', '2019-03-15'),
(10, 'cool', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 21, 12, 'female', 'UG', '2019-03-15'),
(11, 'vinnu@gmail.com', 'vinnu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 23, 32, 'male', 'School', '2019-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `qid` (`qid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `catogery`
--
ALTER TABLE `catogery`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`qp_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `passcode`
--
ALTER TABLE `passcode`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `qp_id` (`qp_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `qp_id` (`qp_id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `catogery`
--
ALTER TABLE `catogery`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `qp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `passcode`
--
ALTER TABLE `passcode`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
