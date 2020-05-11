-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 01:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `bus_details_id` int(100) NOT NULL,
  `bus_id` int(100) NOT NULL,
  `bus_number` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `bus_type` varchar(100) NOT NULL,
  `number_of_seats` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`bus_details_id`, `bus_id`, `bus_number`, `user_id`, `bus_type`, `number_of_seats`) VALUES
(1, 1, 'AC37', 10, 'AC', 35),
(2, 1, 'AC37', 10, 'AC', 35),
(4, 2, 'S-5', 10, 'SLEEPER', 30),
(5, 2, 'S-5', 10, 'SLEEPER', 30),
(7, 2, 'S-5', 10, 'SLEEPER', 30),
(8, 2, 'S-5', 10, 'SLEEPER', 30),
(10, 3, 'AC35', 10, 'AC', 35),
(11, 3, 'AC35', 10, 'AC', 35),
(12, 3, 'AC35', 19, 'AC', 35);

-- --------------------------------------------------------

--
-- Table structure for table `bus_stoppage_map`
--

CREATE TABLE `bus_stoppage_map` (
  `bus_stoppage_map_id` int(100) NOT NULL,
  `bus_id` int(100) NOT NULL,
  `stoppage_details_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stoppage_map`
--

INSERT INTO `bus_stoppage_map` (`bus_stoppage_map_id`, `bus_id`, `stoppage_details_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 3),
(5, 2, 4),
(7, 2, 2),
(8, 2, 1),
(10, 3, 7),
(11, 3, 1),
(12, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(100) NOT NULL,
  `contact_number` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `contact_number`, `user_id`, `employee_name`, `email`, `gender`) VALUES
(10, 1234567890, 0, 'emp5', 'emp@gmail.com', 'FEMALE');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(100) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'ADMIN'),
(2, 'EMPLOYEE'),
(3, 'PASSENGER');

-- --------------------------------------------------------

--
-- Table structure for table `stoppage_details`
--

CREATE TABLE `stoppage_details` (
  `stoppage_details_id` int(100) NOT NULL,
  `stoppage_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stoppage_details`
--

INSERT INTO `stoppage_details` (`stoppage_details_id`, `stoppage_name`) VALUES
(1, 'GARIA'),
(2, 'NEW GARIA'),
(3, 'PATULI'),
(4, 'PEERLESS'),
(5, 'EM BYPASS'),
(6, 'RUBY'),
(7, 'SCIENCE CITY'),
(8, 'CHINGRI GHATA'),
(9, 'NICCO PARK'),
(10, 'TECHNO MAIN'),
(11, 'SDF'),
(12, 'HOWRAH');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `role_id`, `contact_no`, `city`) VALUES
(14, '', 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 1, 0, ''),
(17, 'nisha', 'bharti', 'nishabharti789@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3, 1234567890, 'kolkata'),
(18, 'test1', 'testpassenger', 'test1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3, 1234567890, 'kolkata'),
(19, 'emp5', 'emp', 'emp@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2, 1234567890, 'kolkata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`bus_details_id`);

--
-- Indexes for table `bus_stoppage_map`
--
ALTER TABLE `bus_stoppage_map`
  ADD PRIMARY KEY (`bus_stoppage_map_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `stoppage_details`
--
ALTER TABLE `stoppage_details`
  ADD PRIMARY KEY (`stoppage_details_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_details`
--
ALTER TABLE `bus_details`
  MODIFY `bus_details_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bus_stoppage_map`
--
ALTER TABLE `bus_stoppage_map`
  MODIFY `bus_stoppage_map_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
