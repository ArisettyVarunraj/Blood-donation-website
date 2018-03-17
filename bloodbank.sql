-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 03:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bg_id` int(100) NOT NULL,
  `bg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(13, 'o+'),
(14, 'o-'),
(15, 'AB+'),
(16, 'AB-'),
(17, 'A+'),
(18, 'A-'),
(19, 'B+'),
(20, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `pin_code`, `district`) VALUES
(4, 'faridabad', '121001', 'Gurgaon'),
(7, 'jalandhar', '144001', 'jalandhar'),
(8, 'Bangalore', '560035', 'Bangalore'),
(9, 'vijag', '555555', 'vijag'),
(10, 'scadc', '5555', 'vavac');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `row_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`row_id`, `name`, `email`, `mobile`, `subj`) VALUES
(1, 'nannu', 'bawa12@ymail.com', '98889619909', 'save life'),
(2, 'manu', 'manukaler@yahoo.com', '9888889765', 'save life'),
(3, 'neeru', 'neeru45@gmail.com', '9463958058', 'give blooooooood'),
(4, 'paras', 'bhatia34@gmail.com', '9216291294', 'save life'),
(10, 'herry', 'herry@ymaol.com', '8790675438', 'give me a blood');

-- --------------------------------------------------------

--
-- Table structure for table `donarregistration`
--

CREATE TABLE `donarregistration` (
  `donar_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `b_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` int(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`donar_id`, `name`, `gender`, `age`, `mobile`, `b_id`, `email`, `pwd`, `city`) VALUES
(23, 'viraj anand', 'male', '21', '9492042643', 14, 'varunrajbbl@gmail.com', 555, ''),
(24, 'chiranjeevi', 'male', '61', '9703675098', 14, 'chiru@gmail.com', 555, ''),
(25, 'arjun', 'male', '35', '9494920422', 13, 'arjun@gmail.com', 1515, ''),
(26, 'testa', 'male', '41', '9494944444', 15, 'test1@gmail.com', 145145, ''),
(27, 'rrrr', 'male', '54', '9709709709', 18, 'varunrajj@gmail.com', 2222, '8'),
(29, 'baba', 'female', '29', '9919919196', 17, 'baba@gmail.com', 5555, '1'),
(30, 'shiva', 'male', '16', '9494945555', 14, 'shiva@gmail.com', 1111, '4'),
(31, 'varun', 'male', '18', '9999999999', 18, 'varun2@gmail.com', 5555, '8'),
(32, 'varunb', 'male', '16', '8888888888', 18, 'varunb@gmail.com', 5555, '1'),
(33, 'bhuvan', 'male', '19', '9948885889', 17, 'vakabhuvanreddy000@gmail.com', 0, '8'),
(34, 'lavaa', 'male', '20', '9666666666', 20, 'lava@gmail.com', 1111, '8'),
(35, 'testmy', 'male', '26', '9555555555', 14, 'testmy@gmail.com', 8888, '8'),
(36, 'neeru', 'male', '66', '9492042643', 14, 'vatrun@gmail.com', 5555, '4'),
(37, 'chandu', 'male', '52', '9441712643', 19, 'chandu@gmail.com', 5555, '8'),
(38, 'shiva', 'male', '16', '9494945555', 14, 'shiva@gmail.com', 1111, '4'),
(39, 'shiva', 'male', '25', '9445555555555', 14, 'varunrajf@gmail.com', 5555, '7'),
(40, 'shiva', 'male', '16', '9494945555', 14, 'shiva@gmail.com', 1111, '4'),
(41, 'shiva', 'male', '16', '9494945555', 14, 'shiva@gmail.com', 1111, '4'),
(42, 'africa', 'male', '18', '500', 15, 'varunraj@gmail.com', 5555, '4');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(100) NOT NULL,
  `camp_id` int(100) NOT NULL,
  `ddate` datetime NOT NULL,
  `units` int(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES
(28, 1, '2014-09-14 00:00:00', 20, 'A Blood Donation Camp at Ramgarhia Engg Collage organized by Ramgarhia consial , Phagwara.', 'parasbhatia08@gmail.com'),
(29, 7, '2015-05-11 00:00:00', 30, 'A Blood Donation Camp at Lovely Professional University organized by Lovely Professional University , Jalandhar.', 'parasbhatia08@gmail.com'),
(30, 8, '2014-11-04 00:00:00', 25, 'A Blood Donation Camp at G.N.C College, Phagwara organized by Lions Club, Phagwara.', 'parasbhatia08@gmail.com'),
(31, 9, '2014-12-18 00:00:00', 22, 'A Blood Donation Camp at Apee-Jay College, Jalandhar organized by Human Welfare Society, Jalandhar.\r\n ', 'parasbhatia08@gmail.com'),
(32, 7, '2010-06-19 00:00:00', 27, 'A Blood Donation Camp at Lovely Professional Unive...', 'preet22@yahoo.com'),
(33, 8, '2010-08-20 00:00:00', 17, 'save life', 'manpreetkaler@yahoo.com'),
(34, 9, '2009-06-05 00:00:00', 10, 'give blood', 'manpreetkaler@yahoo.com'),
(35, 1, '2012-09-13 00:00:00', 22, 'save life', 'sahildubey@gmail.com'),
(36, 9, '0000-00-00 00:00:00', 444, 'kjj', 'neeru.bawa@yahoo.com'),
(37, 7, '0000-00-00 00:00:00', 150, '', 'varun@gmail.com'),
(38, 7, '2017-03-11 00:00:00', 300, 'MY WISH', 'baba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `requestes`
--

CREATE TABLE `requestes` (
  `req_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` int(100) NOT NULL,
  `reqdate` datetime NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestes`
--

INSERT INTO `requestes` (`req_id`, `name`, `gender`, `age`, `mobile`, `email`, `bgroup`, `reqdate`, `detail`) VALUES
(9, 'Naresh', 'female', '21', '8427420291', 'nareshheer719@gmail.com', 17, '2015-01-18 00:00:00', 'save life'),
(11, 'viraj anand', 'male', '22', '9492042643', 'varunrajbbl@gmail.com', 15, '2017-01-01 00:00:00', ''),
(12, 'raman', 'male', '45', '9494949444', 'ram@gmail.com', 15, '2017-02-01 00:00:00', ''),
(13, 'laluu', 'male', '20', '9555959555', 'laluu@gmail.com', 19, '2017-01-01 00:00:00', ''),
(14, 'babag', 'male', '28', '5555555555', 'babag@gmail.com', 15, '2018-01-01 00:00:00', ''),
(15, 'viraj anand', 'male', '25', '9492042643', 'vatrun@gmail.com', 19, '2017-01-01 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pwd`, `typeofuser`) VALUES
('varun', 'varun', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `donarregistration`
--
ALTER TABLE `donarregistration`
  ADD PRIMARY KEY (`donar_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `requestes`
--
ALTER TABLE `requestes`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `bg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `donarregistration`
--
ALTER TABLE `donarregistration`
  MODIFY `donar_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `requestes`
--
ALTER TABLE `requestes`
  MODIFY `req_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
