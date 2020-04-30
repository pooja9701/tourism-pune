-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 08:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pune_tourism`
--
CREATE DATABASE IF NOT EXISTS `pune_tourism` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pune_tourism`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('kunalrai007', 'Access@12');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`name`, `email`, `password`) VALUES
('', '', ''),
('kunal', 'asdas@s.com', 'aaaaaaa'),
('kunal', 'kunal@gmail.com', 'Access@1'),
('pooja', 'pooja@gmail.com', 'Abcd');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `comment`) VALUES
('pooja', 'p@gmail.com', 'Test'),
('pooja', 'p@gmail.com', 'Test'),
('Ku', 'kunal@gmail.com', 'This is a test email'),
('pooja', 'su@wa.com', 'test message'),
('pooja', 'kunal@gmail.com', 'This is a test email'),
('pooja', 'su@wa.com', 'aasdfghjkl'),
('Ku', 'kunal@gmail.com', 'This is a test email'),
('', 'Ruchika@gmail.com', ''),
('Ruchika', 'Ruchika@gmail.com', 'This is a test message'),
('P', 'asdas@s.com', ''),
('P', 'asdas@s.com', ''),
('Ruchika', 'kunal@gmail.com', ''),
('Ruchika', 'kunal@gmail.com', ''),
('t', 'asdas@s.com', ''),
('dasda', 'asdas@s.com', ''),
('dasda', 'asdas@s.com', ''),
('dasda', 'asdas@s.com', ''),
('aa', 'asdasd@g.c', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `Unique_userid` (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD UNIQUE KEY `unique_email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
