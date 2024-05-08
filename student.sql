-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 08:37 PM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
