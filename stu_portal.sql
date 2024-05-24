-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 11:32 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `course_unit` int(11) NOT NULL,
  `stu_id` varchar(255) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `grade`, `points`, `course_unit`, `stu_id`, `staff_id`, `course_name`, `create_date`) VALUES
(10, 'B', 65, 3, 's100', '', 'computer programming II ', '2024-04-25 13:49:59'),
(11, 'A', 70, 3, 's100', '', ' Electric circuits ', '2024-04-25 14:02:46'),
(12, 'B', 60, 3, 's111', 'st001', 'foundation of sequential program ', '2024-04-25 14:05:45'),
(13, 'A', 90, 3, 's111', 'st001', 'numerical analysis ', '2024-04-25 16:48:38'),
(14, 'C', 50, 3, 's100', 'st001', 'data structures ', '2024-04-25 16:49:19'),
(15, 'A', 90, 3, 's100', 'st001', 'foundation of sequential program ', '2024-04-25 16:58:40'),
(16, 'F', 35, 3, 's100', 'st001', ' Electric circuits ', '2024-04-29 17:10:37'),
(17, 'F', 44, 2, 's100', 'st001', 'me ', '2024-04-29 22:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `staff_id`, `position`, `create_date`) VALUES
(1, 'stanley nwasukka', 'stanleynwasukka@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'st001', 'HOD', '2024-04-10 22:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_unit` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_title`, `course_code`, `course_unit`, `create_date`) VALUES
(1, 'computer programming II', 'CSC 221', 3, '2024-04-07 00:25:06'),
(2, 'foundation of sequential program', 'CSC 222', 3, '2024-04-07 00:25:06'),
(3, 'data structures', 'CSC 225', 3, '2024-04-07 00:25:06'),
(4, 'numerical analysis', 'MTH 224', 3, '2024-04-07 00:25:06'),
(5, ' Electric circuits', 'PHY 221', 3, '2024-04-07 00:25:06'),
(6, 'me', 'm101', 2, '2024-04-29 11:45:25'),
(7, 'enginnerring', 'ENG111', 4, '2024-04-29 22:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `finace`
--

CREATE TABLE `finace` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `trans_type` varchar(255) NOT NULL,
  `stu_id` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finace`
--

INSERT INTO `finace` (`id`, `amount`, `description`, `trans_type`, `stu_id`, `create_date`) VALUES
(1, 500000, 'school fees', 'CR', 's100', '2024-04-06 23:45:40'),
(2, 2000, 'library card', 'CR', 's100', '2024-04-06 23:45:40'),
(3, 10000, 'books', 'CR', 's100', '2024-04-06 23:46:14'),
(4, 50000, 'medical bills', 'CR', 's100', '2024-04-06 23:46:44'),
(5, 500000, 'SCHOOL FEES', 'CR', 's111', '2024-04-07 00:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `stu_course`
--

CREATE TABLE `stu_course` (
  `id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_unit` int(11) NOT NULL,
  `stu_id` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_course`
--

INSERT INTO `stu_course` (`id`, `course_title`, `course_code`, `course_unit`, `stu_id`, `create_date`) VALUES
(1, 'computer programming II', 'CSC 221', 3, 's100', '2024-04-07 19:55:21'),
(2, 'data structures', 'CSC 225', 3, 's100', '2024-04-07 19:55:21'),
(3, ' Electric circuits', 'PHY 221', 3, 's100', '2024-04-07 19:55:21'),
(4, 'numerical analysis', 'MTH 214', 3, 's111', '2024-04-07 20:09:45'),
(5, 'foundation of sequential program', 'CSC 222', 3, 's111', '2024-04-07 20:09:45'),
(6, 'computer programming II', 'CSC 221', 3, 's112', '2024-04-07 19:55:21'),
(7, 'data structures', 'CSC 225', 3, 's101', '2024-04-07 19:55:21'),
(8, ' Electric circuits', 'PHY 221', 3, 's101', '2024-04-07 19:55:21'),
(9, 'numerical analysis', 'MTH 214', 3, 's112', '2024-04-07 20:09:45'),
(10, 'foundation of sequential program', 'CSC 222', 3, 's101', '2024-04-07 20:09:45'),
(11, 'numerical analysis', 'MTH 214', 3, 's100', '2024-04-07 20:09:45'),
(12, 'foundation of sequential program', 'CSC 222', 3, 's100', '2024-04-07 20:09:45'),
(22, 'me', 'm101', 2, 's100', '2024-04-29 21:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `date_of_exit` date NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date_of_return` date NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `parent_phone_no` varchar(255) NOT NULL,
  `check_stats` varchar(255) NOT NULL,
  `stu_id` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `date_of_exit`, `destination`, `date_of_return`, `phone_no`, `parent_phone_no`, `check_stats`, `stu_id`, `create_date`) VALUES
(1, '2024-03-01', 'porthacourt', '2024-04-04', '08033415500', '09131434480', 'returned', 's100', '2024-04-05 10:41:15'),
(2, '2024-02-01', 'imo state', '2024-03-01', '09786578967', '264775573475', 'returned', 's100', '2024-04-05 10:41:15'),
(3, '2024-04-05', 'ekiti', '2024-05-01', '09134550071', '0804563241', 'returned', 's111', '2024-04-05 10:44:15'),
(4, '2024-01-01', 'abia state', '2024-01-10', '09098686965', '07696764654', '', 's100', '2024-04-05 10:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `stu_id` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `state_of_origin` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `sname`, `email`, `password`, `phone_no`, `level`, `stu_id`, `address`, `state_of_origin`, `date_of_birth`, `create_date`) VALUES
(1, 'tobi', 'Tobechi', 'Ogaziechi', 'tobechiogaziechi10@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '08033415500', '200', 's100', 'no 3 green', 'imo state', '2005-12-14', '2024-03-31 23:27:52'),
(2, 'davola', 'Damalola', 'Akambi', 'Damalolaakambi9@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '098868836729', '300', 's111', 'isi alanwga', 'abia', '2024-04-03', '2024-04-07 00:38:56'),
(3, 'bolongo', 'daniel', 'ekem', 'bologo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09808544478', '200', 's101', 'supermarket', 'anambara', '0000-00-00', '2024-04-25 16:54:16'),
(4, 'angel', 'angel', 'woke', 'wokeangel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+1 96787996687', '200', 's112', 'shoprite', 'rivers state', '0000-00-00', '2024-04-25 16:54:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finace`
--
ALTER TABLE `finace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_course`
--
ALTER TABLE `stu_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `finace`
--
ALTER TABLE `finace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stu_course`
--
ALTER TABLE `stu_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
