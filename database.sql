-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2020 at 03:12 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qTVuzqyMJn`
--
CREATE DATABASE IF NOT EXISTS `qTVuzqyMJn` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `qTVuzqyMJn`;

-- --------------------------------------------------------

--
-- Table structure for table `busses`
--

CREATE TABLE `busses` (
  `bus_id` int(20) NOT NULL,
  `bus_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bus_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `available_seats` int(20) NOT NULL,
  `total_seats` int(20) NOT NULL,
  `price` int(40) NOT NULL,
  `stops_time` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `busses`
--

INSERT INTO `busses` (`bus_id`, `bus_name`, `route`, `bus_type`, `available_seats`, `total_seats`, `price`, `stops_time`) VALUES
(111, 'deepan express', 'pallavaram;chromepet;tambaram sanatorium;tambaram;perungalathur;vandalur;urapakkam;guduvancheri;potheri', 'Air', 40, 40, 500, '<table class=\"table table-dark\">\r\n  <thead><tr><th scope=\"col\">#</th><th scope=\"col\">Stops</th><th scope=\"col\">Departure Time</th></tr></thead><tbody><tr><th scope=\"row\">1</th><td>pallavaram</td><td>12:00 PM</td></tr><tr><th scope=\"row\">2</th><td>Chrompet</td><td>01:00 PM</td></tr><tr><th scope=\"row\">3</th><td>Tambaram Sanatorium</td><td>03:00 PM</td></tr><tr><th scope=\"row\">3</th><td>Tambaram</td><td>04:00 PM</td></tr>\r\n<tr><th scope=\"row\">3</th><td>Perungulattur</td><td>05:00 PM</td></tr><tr><th scope=\"row\">3</th><td>vandalur</td><td>06:00 PM</td</tr>\r\n<tr><th scope=\"row\">3</th><td>urappakkam</td><td>07:00 PM</td></tr><tr><th scope=\"row\">3</th><td>Guduvancheri</td><td>08:00 PM</td>\r\n</tr><tr><th scope=\"row\">3</th><td>Potheri</td><td>09:00 PM</td></tr></tbody></table>\r\n\r\n'),
(222, 'deepan vishwa express', 'chennai beach;chennai fort;chennai park;chennai egmore;chetpet;nungambakkam;kodambakkam;mambalam;saidapet;guindy;st thomas mount;minambakkam;tirusulam;pallavaram;chromepet;tambaram sanatorium;tambaram;perungalathur;vandalur;urapakkam;guduvancheri;potheri', 'A/C Sleeper', 40, 40, 1000, '<table class=\"table table-dark\"><thead>\r\n <tr>\r\n     \r\n      <th scope=\"col\">Stops</th>\r\n      <th scope=\"col\">Departure Time</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n<tr>\r\n      <td>Chennai Beach</td>\r\n      <td>09.00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chennai Fort</td>\r\n      <td>10.00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chennai park</td>\r\n      <td>11.00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chennai Egmore</td>\r\n      <td>12.00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chetpet</td>\r\n      <td>01.00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Nungambakkam</td>\r\n      <td>02.00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Kodambakkam</td>\r\n      <td>03.00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Mambalam</td>\r\n      <td>04:00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Saidapet</td>\r\n      <td>05:00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Guindy</td>\r\n      <td>06:00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>St Thomas Mount</td>\r\n      <td>07:00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Palavanthangal</td>\r\n      <td>08:00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Minambakkam</td>\r\n      <td>09:00 PM</td>\r\n    </tr>\r\n<tr>\r\n\r\n      <td>Tirusualm</td>\r\n      <td>10:00 PM</td>\r\n    </tr>\r\n    <tr>\r\n\r\n      <td>pallavaram</td>\r\n      <td>11:00 PM</td>\r\n    </tr>\r\n    <tr>\r\n      <td>Chrompet</td>\r\n      <td>12:00 AM</td>\r\n    </tr>\r\n    <tr>\r\n  \r\n      <td>Tambaram Sanatorium</td>\r\n      <td>01:00 AM</td>\r\n    </tr>\r\n<tr>\r\n    \r\n      <td>Tambaram</td>\r\n      <td>02:00 AM</td>\r\n    </tr>\r\n<tr>\r\n     \r\n      <td>Perungulattur</td>\r\n      <td>04:00 AM</td>\r\n    </tr>\r\n<tr>\r\n   \r\n      <td>vandalur</td>\r\n      <td>05:00 AM</td>\r\n    </tr>\r\n<tr>\r\n    \r\n      <td>urappakkam</td>\r\n      <td>06:00 AM</td>\r\n    </tr>\r\n<tr>\r\n      \r\n      <td>Guduvancheri</td>\r\n      <td>07:00 AM</td>\r\n    </tr>\r\n<tr>\r\n     \r\n      <td>Potheri</td>\r\n      <td>08:00 AM</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n\r\n'),
(333, 'vishwa express', 'chennai beach;chennai fort;chennai park;chennai egmore;chetpet;nungambakkam;kodambakkam;mambalam;saidapet;guindy;st thomas mount;minambakkam;tirusulam', 'A/C', 40, 40, 800, '<table class=\"table table-dark\"><thead>\r\n <tr>\r\n     \r\n      <th scope=\"col\">Stops</th>\r\n      <th scope=\"col\">Departure Time</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n<tr>\r\n      <td>Chennai Beach</td>\r\n      <td>09.00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chennai Fort</td>\r\n      <td>10.00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chennai park</td>\r\n      <td>11.00 PM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chennai Egmore</td>\r\n      <td>12.00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Chetpet</td>\r\n      <td>01.00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Nungambakkam</td>\r\n      <td>02.00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Kodambakkam</td>\r\n      <td>03.00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Mambalam</td>\r\n      <td>04:00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Saidapet</td>\r\n      <td>05:00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Guindy</td>\r\n      <td>06:00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>St Thomas Mount</td>\r\n      <td>07:00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Palavanthangal</td>\r\n      <td>08:00 AM</td>\r\n    </tr>\r\n<tr>\r\n      <td>Minambakkam</td>\r\n      <td>09:00 AM</td>\r\n    </tr>\r\n<tr>\r\n\r\n      <td>Tirusualm</td>\r\n      <td>10:00 AM</td>\r\n    </tr>\r\n    <tr>\r\n\r\n      \r\n  </tbody>\r\n</table>\r\n\r\n');

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
  `activationcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`fname`, `lname`, `email`, `pw`, `status`, `activationcode`) VALUES
('kiruthiga', 'dhanuskodi', 'kiruthigait2000@gmail.com', 'kiru2000', 1, 'f1b377bd7d093ff27179940d8a22c1d0'),
('Deepan', 'Vishwa', 'srdeepansr@gmail.com', '1234567890', 1, 'fa3e89c1d9f3ab4ad96e39b6e5fa9822'),
('Vignesh', 'S R', 'srvigneshsr@gmail.com', '1234567890', 1, '9163bdadf24ddf8294b6b8dd535d60f8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
