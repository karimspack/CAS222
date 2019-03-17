-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 06:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karimmaz_acedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `myName` varchar(44) NOT NULL,
  `myEmail` varchar(55) NOT NULL,
  `myQuestion` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `myName`, `myEmail`, `myQuestion`) VALUES
(1, 'karim mazza', 'pcc@pcc.edu', ''),
(2, 'karim mazza', 'pcc@pcc.edu', ''),
(3, 'karim mazza', 'pcc@pcc.edu', ''),
(4, 'Kasa', 'kasa@pcc.edu', 'No question!');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `image`) VALUES
(1, 'WELCOME TO ACE IN THE HOLE MULTISPORT EVENTS', 'Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.', 'images/adult-agile-athlete-1465892.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `participant` varchar(55) NOT NULL,
  `fname` varchar(54) NOT NULL,
  `lname` varchar(54) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `ename` varchar(54) NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `fevent` text NOT NULL,
  `sevent` text NOT NULL,
  `accommodation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `participant`, `fname`, `lname`, `email`, `phone`, `ename`, `gender`, `age`, `fevent`, `sevent`, `accommodation`) VALUES
(1, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(2, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(3, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(4, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(5, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(6, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(7, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(8, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(9, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(10, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(11, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(12, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'event', '', 'accommodation'),
(13, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'fevent', 'sevent', 'accommodation'),
(14, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'fevent', 'sevent', 'accommodation'),
(15, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'fevent', 'sevent', 'accommodation'),
(16, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'fevent', 'sevent', 'accommodation'),
(17, 'participant', 'fname', 'lname', 'email', '0', 'ename', 'gender', 0, 'fevent', 'sevent', 'accommodation'),
(19, 'athlete', 'Kims', 'Goss', 'karimmazza@gmail.com', '4076003580', 'Jennifer', 'male', 35, 'None', 'Try-a-Tri', 'Cool Water');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
