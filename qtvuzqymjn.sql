-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 06:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qtvuzqymjn`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(30) NOT NULL,
  `user_id` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `bus_name` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `bus_id` int(30) NOT NULL,
  `no_of_seats` int(20) NOT NULL,
  `from` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `travel_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bus_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total_cost` int(20) NOT NULL,
  `cost_per_seat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `bus_name`, `bus_id`, `no_of_seats`, `from`, `to`, `travel_date`, `bus_type`, `total_cost`, `cost_per_seat`) VALUES
(15, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 3, 'tirusulam', 'potheri', '2020-04-05', 'A/C Sleeper', 1000, 3000),
(16, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'tambaram sanatorium', 'potheri', '2020-04-04', 'Air', 500, 1500),
(17, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 5, 'tirusulam', 'potheri', '2020-04-05', 'A/C Sleeper', 1000, 5000),
(18, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'vandalur', 'potheri', '2020-04-04', 'Air', 500, 1500),
(19, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'vandalur', 'potheri', '2020-04-04', 'Air', 500, 1500),
(20, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'perungalathur', 'urappakkam', '2020-04-05', 'Air', 500, 1500),
(21, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'perungalathur', 'vandalur', '2020-04-05', 'Air', 500, 1500),
(22, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'tambaram', 'urappakkam', '2020-04-05', 'Air', 500, 1500),
(23, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'vandalur', 'urappakkam', '2020-04-05', 'Air', 500, 1000),
(24, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'perungalathur', 'potheri', '2020-04-05', 'Air', 500, 1500),
(25, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'tambaram sanatorium', 'vandalur', '2020-04-04', 'Air', 500, 1500),
(26, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'tambaram', 'urappakkam', '2020-04-05', 'Air', 500, 1500),
(27, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'urappakkam', 'potheri', '2020-04-05', 'Air', 500, 1000),
(28, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'chrompet', 'vandalur', '2020-04-05', 'Air', 500, 1000),
(29, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'perungalathur', 'potheri', '2020-04-05', 'Air', 500, 1500),
(30, 'srdeepansr@gmail.com', 'deepan express', 111, 5, 'chrompet', 'urappakkam', '2020-04-05', 'Air', 500, 2500),
(31, 'srdeepansr@gmail.com', 'deepan express', 111, 3, 'chrompet', 'perungalathur', '2020-04-05', 'Air', 500, 1500),
(32, 'srdeepansr@gmail.com', 'deepan express', 111, 4, 'perungalathur', 'vandalur', '2020-04-05', 'Air', 500, 2000),
(33, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'tambaram', 'vandalur', '2020-04-05', 'Air', 500, 1000),
(34, 'kiruthigait2000@gmail.com', 'deepan express', 111, 2, 'tambaram', 'guduvancheri', '2020-04-05', 'Air', 500, 1000),
(35, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 4, 'nungambakkam', 'saidapet', '2020-04-06', 'A/C Sleeper', 1000, 4000),
(36, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'chrompet', 'urappakkam', '2020-04-06', 'Air', 500, 1000),
(37, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'chrompet', 'urappakkam', '2020-04-08', 'Air', 500, 1000),
(38, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'tambaram', 'guduvancheri', '2020-04-07', 'Air', 500, 1000),
(39, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'tambaram sanatorium', 'vandalur', '2020-04-07', 'Air', 500, 1000),
(40, 'srdeepansr@gmail.com', 'deepan express', 111, 1, 'chrompet', 'perungalathur', '2020-04-09', 'Air', 500, 500),
(41, 'srdeepansr@gmail.com', 'deepan express', 111, 1, 'chrompet', 'perungalathur', '2020-04-09', 'Air', 500, 500),
(42, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 1, 'tirusulam', 'perungalathur', '2020-04-09', 'A/C Sleeper', 1000, 1000),
(43, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 2, 'tirusulam', 'perungalathur', '2020-04-09', 'A/C Sleeper', 1000, 2000),
(44, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'tambaram', 'vandalur', '2020-04-09', 'Air', 500, 1000),
(45, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 2, 'chetpet', 'nungambakkam', '2020-04-07', 'A/C Sleeper', 1000, 2000),
(46, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 2, 'chetpet', 'nungambakkam', '2020-04-07', 'A/C Sleeper', 1000, 2000),
(47, 'Kiruthigait2000@gmail.com', 'vishwa express', 333, 1, 'nungambakkam', 'saidapet', '2020-04-07', 'A/C', 800, 800),
(48, 'Kiruthigait2000@gmail.com', 'vishwa express', 333, 1, 'nungambakkam', 'saidapet', '2020-04-07', 'A/C', 800, 800),
(49, 'test', 'test', 444, 4, 'test', 'test', 'test', 'test', 2, 2),
(50, 'srdeepansr@gmail.com', 'deepan express', 111, 1, 'pallavaram', 'chrompet', '2020-04-04', 'Air', 500, 500),
(51, 'srdeepansr@gmail.com', 'deepan express', 111, 1, 'pallavaram', 'tambaram', '2020-04-01', 'Air', 500, 500),
(52, 'kiruthigait2000@gmail.com', 'deepan express', 111, 2, 'tambaram', 'potheri', '2020-04-01', 'Air', 500, 1000),
(53, 'kiruthigait2000@gmail.com', 'deepan express', 111, 2, 'tambaram', 'potheri', '2020-04-01', 'Air', 500, 1000),
(54, 'deepan@gmail.com', 'deepan express', 111, 1, 'vandalur', 'potheri', '2020-04-01', 'Air', 500, 500),
(55, 'dhya01m@gmail.com', 'deepan express', 111, 1, 'chrompet', 'urappakkam', '2020-04-03', 'Air', 500, 500),
(56, 'Shobicaanand@gmail.com ', 'deepan express', 111, 2, 'chrompet', 'tambaram', '2020-04-08', 'Air', 500, 1000),
(57, 'srdeepansr@gmail.com', 'deepan express', 111, 2, 'tambaram sanatorium', 'guduvancheri', '2020-04-02', 'Air', 500, 1000),
(58, 'srdeepansr@gmail.com', 'deepan vishwa express', 222, 6, 'minambakkam', 'perungalathur', '2020-04-08', 'A/C Sleeper', 1000, 6000),
(59, 'srdeepansr@gmail.com', 'deepan express', 111, 1, 'perungalathur', 'potheri', '2020-04-03', 'Air', 500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `busses`
--

CREATE TABLE `busses` (
  `bus_id` int(20) NOT NULL,
  `bus_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bus_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total_seats` int(20) NOT NULL,
  `price` int(40) NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `busses`
--

INSERT INTO `busses` (`bus_id`, `bus_name`, `route`, `bus_type`, `total_seats`, `price`, `time`) VALUES
(111, 'deepan express', 'pallavaram;chrompet;tambaram sanatorium;tambaram;perungalathur;vandalur;urappakkam;guduvancheri;potheri', 'Air', 40, 500, '12:00 PM;01:00 PM;02:00 PM;03:00 PM;04:00 PM;05:00 PM;06:00 PM;07:00 PM;08:00 PM;09:00 PM'),
(222, 'deepan vishwa express', 'chennai beach;chennai fort;chennai park;chennai egmore;chetpet;nungambakkam;kodambakkam;mambalam;saidapet;guindy;st thomas mount;minambakkam;tirusulam;pallavaram;chromepet;tambaram sanatorium;tambaram;perungalathur;vandalur;urapakkam;guduvancheri;potheri', 'A/C Sleeper', 40, 1000, '09:00 AM;10:00 AM;11:00 AM;12:00 PM;01:00 PM;02:00 PM;03:00 PM;04:00 PM;05:00 PM;06:00 PM;07:00 PM;08:00 PM;09:00 PM;10:00 PM;11:00 PM;12:00 AM;01:00 AM;02:00 AM;03:00 AM;04:00 AM;05:00 AM;06:00 AM;07:00 AM;08:00 AM'),
(333, 'vishwa express', 'chennai beach;chennai fort;chennai park;chennai egmore;chetpet;nungambakkam;kodambakkam;mambalam;saidapet;guindy;st thomas mount;minambakkam;tirusulam', 'A/C', 40, 800, '09:00 PM;10:00 PM;11:00 PM;12:00 AM;01:00 AM;02:00 AM;03:00 AM;04:00 AM;05:00 AM;06:00 AM;07:00 AM;08:00 AM;09:00 AM;10:00 AM'),
(444, 'test', 'test', 'test', 3, 3, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `bus_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `available_seats` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`bus_id`, `date_`, `available_seats`) VALUES
('111', '2020-04-01', 38),
('111', '2020-04-02', 38),
('111', '2020-04-03', 38),
('111', '2020-04-04', 19),
('111', '2020-04-05', 0),
('111', '2020-04-06', 38),
('111', '2020-04-07', 36),
('111', '2020-04-08', 36),
('111', '2020-04-09', 36),
('111', '2020-04-10', 40),
('222', '2020-04-05', 32),
('222', '2020-04-06', 36),
('222', '2020-04-07', 36),
('222', '2020-04-08', 34),
('222', '2020-04-09', 37),
('222', '2020-04-10', 40),
('222', '2020-04-11', 40),
('222', '2020-04-12', 40),
('222', '2020-04-13', 40),
('222', '2020-04-14', 40),
('333', '2020-04-03', 40),
('333', '2020-04-04', 40),
('333', '2020-04-05', 40),
('333', '2020-04-06', 40),
('333', '2020-04-07', 38),
('333', '2020-04-08', 40),
('333', '2020-04-09', 40),
('333', '2020-04-10', 40),
('333', '2020-04-11', 40),
('333', '2020-04-12', 40),
('111', '2020-05-06', 40),
('111', '2020-06-04', 40),
('111', '2020-04-30', 40),
('222', '2020-05-01', 40),
('333', '2020-05-10', 40),
('222', '2020-05-06', 40),
('222', '2020-05-16', 40),
('111', '2020-05-03', 40),
('111', '2020-06-01', 40),
('111', '2020-05-01', 40),
('111', '2020-05-23', 40),
('111', '2020-06-04', 40),
('222', '2020-05-02', 40),
('111', '2020-05-03', 40),
('222', '2020-06-07', 40),
('111', '2020-05-15', 40),
('1', '', 40),
('1', '', 40),
('222', '2020-05-05', 40),
('0', '', 40);

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pw` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `activationcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fcode` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`fname`, `lname`, `email`, `pw`, `status`, `activationcode`, `fcode`) VALUES
('dee', 'vish', 'deepan@gmail.com', '1111111111', 0, 'manual', ''),
('sandhya', 'm', 'dhya01m@gmail.com', 'sandhya0505', 1, '02815f652eee81121e015544eaaad6e9', ''),
('kiruthiga', 'dhanuskodi', 'kiruthigait2000@gmail.com', 'kiru2000', 1, 'f1b377bd7d093ff27179940d8a22c1d0', ''),
('Shobica', 'Anand', 'shobicaanand@gmail.com', 'srmuniv', 1, 'f812b31c3b843c99cf61c165f19167f5', ''),
('Deepan', 'Vishwa', 'srdeepansr@gmail.com', 'deepan', 1, '41a7bf6d222051e969070cf7993d19b5', 'edcf4fc8591e6e6825e7fe3a61aab035'),
('Vignesh', 'S R', 'srvigneshsr@gmail.com', '1234567890', 1, '9163bdadf24ddf8294b6b8dd535d60f8', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `busses`
--
ALTER TABLE `busses`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
