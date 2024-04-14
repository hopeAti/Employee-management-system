-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 03:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delmo_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(2, 'admin', 'a1Bz20ydqelm8m1wqlf865b53623b121fd34ee5426c792e5c33af8c227', 'junil', 'a', 'toledo'),
(3, 'admin2', 'admin123\r\n', 'junil', 'a', 'toledo'),
(4, 'admin', 'admin123\r\n', 'junil', 'a', 'toledo');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `username`, `password`, `firstname`) VALUES
(1, 'admin', 'admin123', 'flave'),
(2, 'admin', 'admin123', 'flave');

-- --------------------------------------------------------

--
-- Table structure for table `emp_message`
--

CREATE TABLE `emp_message` (
  `empID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_message`
--

INSERT INTO `emp_message` (`empID`, `name`, `email`, `message`) VALUES
(3, 'nice', 'jonelwalangkontra@yahoo.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `late`
--

CREATE TABLE `late` (
  `late_id` int(11) NOT NULL,
  `user_no` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `datehire` date NOT NULL DEFAULT current_timestamp(),
  `designation` text NOT NULL,
  `Department` text NOT NULL,
  `id` varchar(200) NOT NULL,
  `days` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `dat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `late`
--

INSERT INTO `late` (`late_id`, `user_no`, `password`, `fname`, `mname`, `lname`, `datehire`, `designation`, `Department`, `id`, `days`, `payment`, `date`, `dat`) VALUES
(12, 'CTcf475', 'toledo12345', 'junil', 'a', 'toledo', '2022-06-21', '', '', 'OFFLINE', 13, 2100, '2022-06-30', ''),
(13, 'CT4292d', 'cecil', 'maria cecilia', 'r', 'obal', '2022-06-21', '', '', 'OFFLINE', 4, 1400, '2022-06-25', ''),
(14, 'CTa48b4', '12345678', 'jonalyn', 'r', 'areglo', '2022-06-21', '', '', 'OFFLINE', 0, 0, '2022-06-06', ''),
(15, 'CT2887d', 'dar123', 'darwin', 'r', 'alborte', '2022-06-21', '', '', 'OFFLINE', 0, 0, '2022-06-18', ''),
(16, 'CT793f5', '12345678', 'jonalyn', 'r', 'areglo', '2022-06-21', 'it staff', 'Purchasing Dept', 'OFFLINE', 0, 0, '2022-06-14', ''),
(17, 'flavianwere@gmail.com', 'Theflave1', 'flave', 'fl', 'were', '2022-06-21', 'hr manager', 'hr', 'ONLINE', 9, 10500, '2022-06-07', ''),
(18, 'flavianwere@gmail.com', 'Theflave1', 'flave', 'fl', 'were', '2022-06-21', 'hr manager', 'hr', 'ONLINE', 9, 10500, '2022-06-01', ''),
(19, '12121', 'Beckie', 'beckie', 'BeckiG', 'BG', '2022-10-14', 'IT assistant', 'IT', 'OFFLINE', 13, 9800, '2022-10-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `timein`
--

CREATE TABLE `timein` (
  `id` int(10) NOT NULL,
  `user_no` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `time` varchar(200) NOT NULL,
  `out` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timein`
--

INSERT INTO `timein` (`id`, `user_no`, `user_name`, `password`, `time`, `out`, `date`) VALUES
(38, '12121', 'beckie BeckiG BG', 'Beckie', '01:13 PM', '03:05 PM', '2022-10-14'),
(39, '12121', 'beckie BeckiG BG', 'Beckie', '01:15 PM', '03:05 PM', '2022-10-14'),
(40, '12121', 'beckie BeckiG BG', 'Beckie', '01:15 PM', '03:05 PM', '2022-10-14'),
(41, '12121', 'beckie BeckiG BG', 'Beckie', '01:17 PM', '03:05 PM', '2022-10-14'),
(42, '12121', 'beckie BeckiG BG', 'Beckie', '01:40 PM', '03:05 PM', '2022-10-14'),
(43, '12121', 'beckie BeckiG BG', 'Beckie', '01:42 PM', '03:05 PM', '2022-10-14'),
(44, '12121', 'beckie BeckiG BG', 'Beckie', '01:48 PM', '03:05 PM', '2022-10-14'),
(45, '12121', 'beckie BeckiG BG', 'Beckie', '01:57 PM', '03:05 PM', '2022-10-14'),
(46, '12121', 'beckie BeckiG BG', 'Beckie', '02:23 PM', '03:05 PM', '2022-10-14'),
(47, '12121', 'beckie BeckiG BG', 'Beckie', '02:37 PM', '03:05 PM', '2022-10-14'),
(48, '12121', 'beckie BeckiG BG', 'Beckie', '02:39 PM', '03:05 PM', '2022-10-14'),
(49, '12121', 'beckie BeckiG BG', 'Beckie', '02:47 PM', '03:05 PM', '2022-10-14'),
(50, '12121', 'beckie BeckiG BG', 'Beckie', '02:59 PM', '03:05 PM', '2022-10-14'),
(51, '12121', 'beckie BeckiG BG', 'Beckie', '03:05 PM', '03:05 PM', '2022-10-14'),
(52, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '03:06 PM', '04:05 PM', '2022-10-14'),
(53, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '03:19 PM', '04:05 PM', '2022-10-14'),
(54, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '03:21 PM', '04:05 PM', '2022-10-14'),
(55, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '03:24 PM', '04:05 PM', '2022-10-14'),
(56, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '03:31 PM', '04:05 PM', '2022-10-14'),
(57, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '03:50 PM', '04:05 PM', '2022-10-14'),
(58, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '04:00 PM', '04:05 PM', '2022-10-14'),
(59, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '04:02 PM', '04:05 PM', '2022-10-14'),
(60, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '04:04 PM', '04:05 PM', '2022-10-14'),
(61, 'flavianwere@gmail.com', 'flave fl were', 'Theflave1', '04:12 PM', '', '2022-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `timeout`
--

CREATE TABLE `timeout` (
  `id` int(20) NOT NULL,
  `user_no` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `emp_message`
--
ALTER TABLE `emp_message`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `late`
--
ALTER TABLE `late`
  ADD PRIMARY KEY (`late_id`);

--
-- Indexes for table `timein`
--
ALTER TABLE `timein`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeout`
--
ALTER TABLE `timeout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_message`
--
ALTER TABLE `emp_message`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `late`
--
ALTER TABLE `late`
  MODIFY `late_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `timein`
--
ALTER TABLE `timein`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `timeout`
--
ALTER TABLE `timeout`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
