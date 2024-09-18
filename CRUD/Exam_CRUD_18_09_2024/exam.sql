-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 12:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practise_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `terms` varchar(10) NOT NULL DEFAULT 'agree',
  `user_type` varchar(10) NOT NULL DEFAULT 'client',
  `auth` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`name`, `email`, `phone`, `dob`, `gender`, `country`, `address`, `city`, `state`, `zip`, `comments`, `terms`, `user_type`, `auth`) VALUES
('rajat', 'r@gmail.com', 7430828041, '2024-09-03', 'Male', 'USA', 'kol', 'kolkata', 'wb', '700102', '      ', 'agree', 'admin', 0),
('Suman Kumar Ghorai', 'sumanghorai000000000@gmail.com', 7439146998, '2024-09-16', 'Male', 'India', 'Qtr no-Sf a/9,Durgachak,haldia', 'string:Haldia', 'West Bengal', '721602', '      ', 'agree', 'client', 0),
('Sampad', 'sampad@gmail.com', 8906969286, '2024-09-23', 'Male', 'USA', 'sonarpur', 'kolkata', 'wb', '700107', '      ', 'agree', 'client', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
