-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `guadian_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(12) NOT NULL,
  `course` varchar(40) NOT NULL,
  `country` varchar(60) NOT NULL,
  `contact` varchar(69) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `guadian_name`, `dob`, `gender`, `course`, `country`, `contact`, `email`) VALUES
('taha', 'taha', '2016-12-27', 'M', 'Courseb1', 'AF', '98374214', 'tahamuhammadi476@gmail.com'),
('taha', 'taha', '2016-12-28', 'M', 'Courseb1', 'AF', '9384021', 'tahamuhammadi476@gmail.com'),
('Muhammad Taha', 'Ghulam ALi', '2004-10-12', 'M', 'Courseb1', 'AF', '98374214', 'tahamuhammadi476@gmail.com'),
('Zulfiqar', 'Zulfi', '2016-12-17', 'M', 'Courseb1', 'AQ', '787878', 'zulfi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `education`, `dob`, `gender`, `country`, `course`, `contact`, `email`) VALUES
(1, 'Muhammad Taha', 'BS', '2001-11-27', 'M', 'AD', 'Courseb2', '30490349', 'tahamuhammadi476@gmail.com'),
(2, 'Nasir Hussain', 'MA in Islamic studies', '2001-11-27', 'M', 'HN', 'Courseb2', '98374214', 'nasir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('cromer', 'golden686'),
('mtm', 'mtm'),
('taha', 'golden686'),
('admin1', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
