-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 08:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `260421`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `city`, `marks`, `added_on`) VALUES
(10, 'Vishal', 'Noida', 10, '2021-05-18 11:07:58'),
(11, 'Amit0', 'Noida0', 10, '2021-05-18 11:10:33'),
(13, 'Amit1', 'Noida1', 10, '2021-05-18 11:10:33'),
(14, 'Amit2', 'Noida2', 10, '2021-05-18 11:10:33'),
(15, 'Amit3', 'Noida3', 10, '2021-05-18 11:10:33'),
(16, 'Amit4', 'Noida4', 10, '2021-05-18 11:10:33'),
(17, 'Amit5', 'Noida5', 10, '2021-05-18 11:10:33'),
(18, 'Amit6', 'Noida6', 10, '2021-05-18 11:10:33'),
(19, 'Amit7', 'Noida7', 10, '2021-05-18 11:10:33'),
(20, 'Amit8', 'Noida8', 10, '2021-05-18 11:10:33'),
(21, 'Amit9', 'Noida9', 10, '2021-05-18 11:10:33'),
(22, 'Amit10', 'Noida10', 10, '2021-05-18 11:10:33'),
(23, 'Amit11', 'Noida11', 10, '2021-05-18 11:10:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
