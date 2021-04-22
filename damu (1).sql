-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2021 at 09:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `ppic` varchar(500) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `email`, `password`, `ppic`, `username`) VALUES
(6, 'lil', 'admin', 'admin@mail.com', '$2y$10$J8mUdl5u8CPdplq5DyI9pOI/3UnGAOPnX0QJT5dRYSZclq6NpNRVe', '940368.jpg', ''),
(7, NULL, NULL, NULL, '$2y$10$lC4gXCFBKVE6bM/WKRpBcumn8SZHLpRTyhSFB28v5Ty2recavsLru', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bloodnews`
--

CREATE TABLE `bloodnews` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `posttime` timestamp NOT NULL DEFAULT current_timestamp(),
  `newsphoto` varchar(900) NOT NULL,
  `imagedesc` varchar(100) NOT NULL,
  `brief` varchar(160) NOT NULL,
  `body` varchar(2000) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodnews`
--

INSERT INTO `bloodnews` (`id`, `title`, `author`, `posttime`, `newsphoto`, `imagedesc`, `brief`, `body`, `post_date`) VALUES
(32, 'Blood Donation Dates Upcoming', 'Ninja', '2017-01-13 07:50:13', '564584.jpg', 'Titanfall The Movie', 'Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions.', 'The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.', '0000-00-00'),
(34, 'University - Main Campus', 'Shifter', '2017-01-13 07:55:30', '193647.jpg', 'Assasin creed', 'Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions.', 'The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.', '0000-00-00'),
(35, 'Blood Donation Dates Upcoming', 'Gacheru', '2017-01-13 07:57:42', '298675.jpg', 'Horror', 'Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions.', 'The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients', '0000-00-00'),
(37, 'Blood Donation Dates Upcoming', 'Kunta', '2017-01-13 08:08:32', '37950.jpg', 'Cr7 with Messi', 'Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions.', 'The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients', '0000-00-00'),
(38, 'Blood Donation Dates Upcoming', 'Gacheru', '2017-02-20 08:03:28', '968843.jpg', 'Donec', 'fssfgsdfsdfdsfdsfsdfdsfsdfsdfdsfs', 'sfs rsdsd gas gsadf sadfs fds fsadf asf asdf asdf asd fasd fasd fsfs rsdsd gas gsadf sadfs fds fsadf asf asdf asdf asd fasd fasd f', '0000-00-00'),
(39, 'freeman', 'freezie', '2017-04-04 10:08:19', '120082.png', 'authentic', 'This is freezie World', 'welocme all donors to feezie world you will be allowed to donate blood after every 4 months .. enjoy your stay...', '0000-00-00'),
(40, 'New Blood Camps', 'Ninja', '2017-04-16 20:54:23', '472787.jpg', 'Roses are red violets are blue', 'sfs rsdsd gas gsadf sadfs fds fsadf asf asdf asdf asd fasd fasd f', 'sfs rsdsd gas gsadf sadfs fds fsadf asf asdf asdf asd fasd fasd fsfs rsdsd gas gsadf sadfs fds fsadf asf asdf asdf asd fasd fasd f', '0000-00-00'),
(41, 'mik', 'kim', '2017-05-15 11:46:15', '333309.jpg', '9io', 'jjjj jjjjjjjj', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxx\r\nfffff', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `bloodunits`
--

CREATE TABLE `bloodunits` (
  `id` int(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `units` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodunits`
--

INSERT INTO `bloodunits` (`id`, `bloodgroup`, `units`) VALUES
(1, 'A+', 90),
(2, 'A-', 95),
(3, 'B+', 107),
(4, 'B-', 79),
(5, 'AB+', 56),
(6, 'AB-', 142),
(7, 'O+', 66),
(8, 'O-', 39);

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `author` varchar(100) NOT NULL,
  `odate` date NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `title`, `body`, `author`, `odate`, `cdate`) VALUES
(9, 'Valluvanad Hosp', 'Ottapalam', 'Administrator', '2020-12-25', '2020-12-20'),
(10, 'Govt Hospital', 'Ottapalam', 'Ninja', '2020-12-25', '2020-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'real', 'real@mail.com', 'ghgh'),
(2, 'Brian Gacheru', 'bryo4419@gmail.com', 'hghjkl;kjhgfdrdtfygujhkl');

-- --------------------------------------------------------

--
-- Table structure for table `doctorregister`
--

CREATE TABLE `doctorregister` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `ppic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorregister`
--

INSERT INTO `doctorregister` (`id`, `fname`, `lname`, `code`, `email`, `password`, `ppic`) VALUES
(11, 'real', 'doctor', 'DOC123', 'doc@mail.com', '$2y$10$ClYOjcfuHGCY8CJbboOb/.LygK61UKxHrHs/yxKoPox1ohhklalxe', '581291.png');

-- --------------------------------------------------------

--
-- Table structure for table `donarregister`
--

CREATE TABLE `donarregister` (
  `id` int(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `b_id` varchar(5) NOT NULL,
  `ppic` varchar(1000) DEFAULT NULL,
  `day` int(10) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` int(5) NOT NULL,
  `county` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `last_donation_date` date DEFAULT NULL,
  `last_donation_camp` varchar(30) DEFAULT NULL,
  `number_of_donations` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarregister`
--

INSERT INTO `donarregister` (`id`, `fname`, `lname`, `gender`, `b_id`, `ppic`, `day`, `month`, `year`, `county`, `mobile`, `email`, `password`, `last_donation_date`, `last_donation_camp`, `number_of_donations`) VALUES
(9, 'Brian', 'Ba', 'Male', 'A+', '74382.png', 30, 'October', 1995, 'Uasin Gishu', '710301320', '', '$2y$10$3slXWI6f28TVnsUcrLr6ReJP8RaE3jMX.GroT/ee/.8/kGCbBpCZy', '2016-03-30', 'OTP', 5),
(10, 'Sasi', 'Kumar', 'Female', 'B+', '728239.jpg', 22, 'December', 1995, '', '729318034', '', '$2y$10$gND8bnkcYOSrUJkVzmFalONP.oziWO7HF5ikq2UEwhSp86WPrmf5u', '2016-04-14', 'PALAKA', 4),
(14, 'lil', 'ninja', 'Female', 'A-', '879607.jpg', 17, 'July', 1989, '', '729318067', 'lil@mail.com', '$2y$10$.akNwCFiTwp6xTiNlt5TdeJAxFGiIy6j4TxK6iKhaFz1.3QjewbVm', '2015-06-25', 'College', 4),
(15, 'real', 'user', 'Female', 'AB-', '', 17, 'February', 1990, 'Nairobi', '729318009', 'user1@mail.com', '$2y$10$ZIfUEOmdABC0jAqAeAgsM.aW/RQXVaCZDQN8mHLdcjB1rOnZVVene', '2016-07-21', 'Colege', 6),
(16, 'julie', 'wambui', 'Female', 'B-', '71608.jpg', 19, 'December', 1995, '', '705701719', 'julie@mail.com', '$2y$10$OL3ZY1hdIJ9xCdrwczAZq.Nndff26V4tWsVXT/rv3/mvP0tIcV/gG', '2015-10-19', 'School', 3),
(18, 'Yule', 'Msee', 'Female', 'AB+', '565255.jpg', 1, 'January', 1993, '', '710301323', 'msee@mail.com', '$2y$10$XSmFUqcceZDnmAY2p/buduTIDs3jqhhaGiqkuA4TNDLWyjymgxRI2', '2017-01-16', 'OTP', 6),
(19, 'Donor', 'Ninja', 'Female', 'O-', '869180.jpg', 10, 'April', 1995, '', '705107916', 'donor@mail.com', '$2y$10$kV57o9DlJXrAJ8GmDu0Wf.pDx0R.sc93Ng6jB7vzaY9eP0Hqg7vXC', '2017-01-16', 'JKLJKJ', 3),
(20, 'LatifAAa', 'Lee', 'Female', 'O+', '873083.jpg', 30, 'November', 1997, 'dsfdfsdfs', '710301326', 'lee@mail.com', '$2y$10$wn9tym8AU9X2TQlcn.ZizeptH4/X.tmzwtmwrC8qmEm0q0odFHIUu', '2017-02-15', 'LLKJK', 6),
(34, 'Test', 'Account', 'Male', 'B-', NULL, 14, 'September', 2010, 'Kannur', '8899889988', 'admain@mail.com', '$2y$10$RXZPGwlS0igBDQVZaEmx6eQ0UdBxrvAzajCpuTCAOuoO.LAB9Chw2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `pints` int(20) NOT NULL,
  `camp` varchar(50) NOT NULL,
  `ddate` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `bloodgroup`, `pints`, `camp`, `ddate`, `timestamp`) VALUES
(7, 'B-', 29, 'OTTAPALAM', '2017-04-24', '2017-04-24 02:20:06'),
(8, 'O-', 26, 'OTTAPALAM', '2017-04-24', '2017-04-24 02:28:50'),
(9, 'A+', 53, 'OTTAPALAM', '2017-04-24', '2017-04-24 02:29:13'),
(10, 'A-', 44, 'OTTAPALAM', '2017-04-24', '2017-04-24 02:29:34'),
(11, 'B+', 58, 'OTTAPALAM', '2017-04-24', '2017-04-24 02:30:17'),
(12, 'AB+', 41, 'OTTAPALAM', '2017-04-24', '2017-04-24 02:30:37'),
(13, 'B-', 35, 'Palakkad', '2017-04-24', '2017-04-24 02:31:25'),
(15, 'O+', 45, 'Shornur', '2017-06-01', '2017-06-14 16:32:33'),
(16, 'AB-', 78, 'SHornur', '2017-06-01', '2017-06-14 16:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `b_id` varchar(4) NOT NULL,
  `code` varchar(30) DEFAULT NULL,
  `reqdate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `added_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `units` int(10) NOT NULL,
  `issuedunits` int(30) NOT NULL DEFAULT 0,
  `issueddate` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `email`, `fname`, `lname`, `mobile`, `b_id`, `code`, `reqdate`, `status`, `added_timestamp`, `units`, `issuedunits`, `issueddate`) VALUES
(101, 'mm@mail.com', 'Brian', 'Baa', '710301320', 'O-', '', '2021-04-09', 'Waiting', '2021-04-02 20:50:47', 1, 0, '0000-00-00'),
(103, 'user@user.com', 'Test', 'AAcount', '8899889900', 'AB+', 'DOC123', '2021-04-09', 'Waiting', '2021-04-02 21:00:40', 1, 0, '0000-00-00'),
(104, '', 'Brian', 'Ba', '710301320', 'A+', NULL, '2021-04-10', 'Waiting', '2021-04-03 07:32:28', 2, 0, '0000-00-00'),
(105, 'julie@mail.com', 'julie', 'wambui', '705701719', 'B-', NULL, '2021-04-10', 'Waiting', '2021-04-03 07:33:48', 3, 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bloodnews`
--
ALTER TABLE `bloodnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodunits`
--
ALTER TABLE `bloodunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorregister`
--
ALTER TABLE `doctorregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donarregister`
--
ALTER TABLE `donarregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bloodnews`
--
ALTER TABLE `bloodnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `bloodunits`
--
ALTER TABLE `bloodunits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctorregister`
--
ALTER TABLE `doctorregister`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donarregister`
--
ALTER TABLE `donarregister`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
