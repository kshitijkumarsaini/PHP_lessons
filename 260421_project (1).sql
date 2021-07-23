-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 08:30 PM
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
-- Database: `260421_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorsId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `prisception` varchar(255) NOT NULL,
  `appointmentDetails` datetime NOT NULL,
  `remark` text NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorsId`, `userId`, `prisception`, `appointmentDetails`, `remark`, `createdOn`) VALUES
(1, 1, 1, 'Test', '2021-06-05 14:06:55', 'Test', '2021-06-02 23:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mobile`, `message`, `createdOn`) VALUES
(2, 'Vishal', 'vishal@gmail.com', '999', 'asd', '2021-06-02 23:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `specilization_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `fee` int(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `specilization_id`, `name`, `qualification`, `fee`, `mobile`, `email`, `password`, `status`, `createdOn`) VALUES
(1, 6, 'Dr Singh', 'MBBS, MD', 500, '9999999999', 'doctor@gmail.com', '1234567', 'Y', '2021-06-03 02:40:26'),
(3, 6, 'Test Doctor', 'MBBS, BDS', 123, '9999999999r', 'drsingh1@gmail.com', 'hjgh', 'Y', '2021-06-03 02:44:14'),
(4, 6, 'dasd', 'DHMS ', 123, '9608148706', 'faheem43bari@gmail.com', '1234567', 'Y', '2021-06-03 11:05:08'),
(5, 6, 'Dr MP singh', 'BHMS', 700, '4569874569', 'faheem43ebari@gmail.com', '78965412398', 'Y', '2021-06-03 11:12:20'),
(6, 6, 'shagufa fatma', 'MBBS', 500, '+919546352227', 'fam43bari@gmail.com', '1234567', 'Y', '2021-06-03 11:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `preferferred_slot`
--

CREATE TABLE `preferferred_slot` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `slot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preferferred_slot`
--

INSERT INTO `preferferred_slot` (`id`, `doctor_id`, `slot`) VALUES
(19, 1, '10.45AM-11.00AM'),
(20, 1, '11.00AM-11.15AM'),
(21, 1, '11.15AM-11.30AM'),
(22, 1, '11.30AM-11.45AM'),
(23, 1, '2.15PM-2.30PM'),
(24, 1, '2.30PM-2.45PM'),
(25, 1, '2.45PM-3.00PM'),
(26, 1, '3.00PM-3.15PM'),
(27, 1, '3.15PM-3.30PM'),
(28, 1, '3.30PM-3.45PM');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `name`) VALUES
(1, '1oth, 12th, BSc, MBBS, ');

-- --------------------------------------------------------

--
-- Table structure for table `slot_date`
--

CREATE TABLE `slot_date` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `slot_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot_date`
--

INSERT INTO `slot_date` (`id`, `doctor_id`, `slot_date`) VALUES
(1, 1, '2021-12-01'),
(2, 1, '2021-12-02'),
(3, 1, '2021-12-03'),
(4, 1, '2021-12-04'),
(5, 1, '2021-12-05'),
(6, 1, '2021-12-06'),
(7, 1, '2021-12-07'),
(8, 1, '2021-12-08'),
(9, 1, '2021-12-09'),
(10, 1, '2021-12-10'),
(11, 1, '2021-12-11'),
(12, 1, '2021-12-12'),
(13, 1, '2021-12-13'),
(14, 1, '2021-12-14'),
(15, 1, '2021-12-15'),
(16, 1, '2021-12-16'),
(17, 1, '2021-12-17'),
(18, 1, '2021-12-18'),
(19, 1, '2021-12-19'),
(20, 1, '2021-12-20'),
(21, 1, '2021-12-21'),
(22, 1, '2021-12-22'),
(23, 1, '2021-12-23'),
(24, 1, '2021-12-24'),
(25, 1, '2021-12-25'),
(26, 1, '2021-12-26'),
(27, 1, '2021-12-27'),
(28, 1, '2021-12-28'),
(29, 1, '2021-12-29'),
(30, 1, '2021-12-30'),
(31, 1, '2021-12-31'),
(32, 1, '2021-11-01'),
(33, 1, '2021-11-02'),
(34, 1, '2021-11-03'),
(35, 1, '2021-11-04'),
(36, 1, '2021-11-05'),
(37, 1, '2021-11-06'),
(38, 1, '2021-11-07'),
(39, 1, '2021-11-08'),
(40, 1, '2021-11-09'),
(41, 1, '2021-11-10'),
(42, 1, '2021-11-11'),
(43, 1, '2021-11-12'),
(44, 1, '2021-11-13'),
(45, 1, '2021-11-14'),
(46, 1, '2021-11-15'),
(47, 1, '2021-11-16'),
(48, 1, '2021-11-17'),
(49, 1, '2021-11-18'),
(50, 1, '2021-11-19'),
(51, 1, '2021-11-20'),
(52, 1, '2021-11-21'),
(53, 1, '2021-11-22'),
(54, 1, '2021-11-23'),
(55, 1, '2021-11-24'),
(56, 1, '2021-11-25'),
(57, 1, '2021-11-26'),
(58, 1, '2021-11-27'),
(59, 1, '2021-11-28'),
(60, 1, '2021-11-29'),
(61, 1, '2021-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `slot_time`
--

CREATE TABLE `slot_time` (
  `id` int(11) NOT NULL,
  `slot_date_id` int(11) NOT NULL,
  `slot_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot_time`
--

INSERT INTO `slot_time` (`id`, `slot_date_id`, `slot_time`) VALUES
(1, 1, '11.30AM-11.45AM'),
(2, 1, '2.15PM-2.30PM'),
(3, 1, '2.30PM-2.45PM'),
(4, 1, '2.45PM-3.00PM'),
(5, 1, '3.00PM-3.15PM'),
(6, 1, '3.15PM-3.30PM'),
(7, 1, '3.30PM-3.45PM'),
(8, 2, '11.30AM-11.45AM'),
(9, 2, '2.15PM-2.30PM'),
(10, 2, '2.30PM-2.45PM'),
(11, 2, '2.45PM-3.00PM'),
(12, 2, '3.00PM-3.15PM'),
(13, 2, '3.15PM-3.30PM'),
(14, 2, '3.30PM-3.45PM'),
(15, 3, '11.30AM-11.45AM'),
(16, 3, '2.15PM-2.30PM'),
(17, 3, '2.30PM-2.45PM'),
(18, 3, '2.45PM-3.00PM'),
(19, 3, '3.00PM-3.15PM'),
(20, 3, '3.15PM-3.30PM'),
(21, 3, '3.30PM-3.45PM'),
(22, 4, '11.30AM-11.45AM'),
(23, 4, '2.15PM-2.30PM'),
(24, 4, '2.30PM-2.45PM'),
(25, 4, '2.45PM-3.00PM'),
(26, 4, '3.00PM-3.15PM'),
(27, 4, '3.15PM-3.30PM'),
(28, 4, '3.30PM-3.45PM'),
(29, 5, '11.30AM-11.45AM'),
(30, 5, '2.15PM-2.30PM'),
(31, 5, '2.30PM-2.45PM'),
(32, 5, '2.45PM-3.00PM'),
(33, 5, '3.00PM-3.15PM'),
(34, 5, '3.15PM-3.30PM'),
(35, 5, '3.30PM-3.45PM'),
(36, 6, '11.30AM-11.45AM'),
(37, 6, '2.15PM-2.30PM'),
(38, 6, '2.30PM-2.45PM'),
(39, 6, '2.45PM-3.00PM'),
(40, 6, '3.00PM-3.15PM'),
(41, 6, '3.15PM-3.30PM'),
(42, 6, '3.30PM-3.45PM'),
(43, 7, '11.30AM-11.45AM'),
(44, 7, '2.15PM-2.30PM'),
(45, 7, '2.30PM-2.45PM'),
(46, 7, '2.45PM-3.00PM'),
(47, 7, '3.00PM-3.15PM'),
(48, 7, '3.15PM-3.30PM'),
(49, 7, '3.30PM-3.45PM'),
(50, 8, '11.30AM-11.45AM'),
(51, 8, '2.15PM-2.30PM'),
(52, 8, '2.30PM-2.45PM'),
(53, 8, '2.45PM-3.00PM'),
(54, 8, '3.00PM-3.15PM'),
(55, 8, '3.15PM-3.30PM'),
(56, 8, '3.30PM-3.45PM'),
(57, 9, '11.30AM-11.45AM'),
(58, 9, '2.15PM-2.30PM'),
(59, 9, '2.30PM-2.45PM'),
(60, 9, '2.45PM-3.00PM'),
(61, 9, '3.00PM-3.15PM'),
(62, 9, '3.15PM-3.30PM'),
(63, 9, '3.30PM-3.45PM'),
(64, 10, '11.30AM-11.45AM'),
(65, 10, '2.15PM-2.30PM'),
(66, 10, '2.30PM-2.45PM'),
(67, 10, '2.45PM-3.00PM'),
(68, 10, '3.00PM-3.15PM'),
(69, 10, '3.15PM-3.30PM'),
(70, 10, '3.30PM-3.45PM'),
(71, 11, '11.30AM-11.45AM'),
(72, 11, '2.15PM-2.30PM'),
(73, 11, '2.30PM-2.45PM'),
(74, 11, '2.45PM-3.00PM'),
(75, 11, '3.00PM-3.15PM'),
(76, 11, '3.15PM-3.30PM'),
(77, 11, '3.30PM-3.45PM'),
(78, 12, '11.30AM-11.45AM'),
(79, 12, '2.15PM-2.30PM'),
(80, 12, '2.30PM-2.45PM'),
(81, 12, '2.45PM-3.00PM'),
(82, 12, '3.00PM-3.15PM'),
(83, 12, '3.15PM-3.30PM'),
(84, 12, '3.30PM-3.45PM'),
(85, 13, '11.30AM-11.45AM'),
(86, 13, '2.15PM-2.30PM'),
(87, 13, '2.30PM-2.45PM'),
(88, 13, '2.45PM-3.00PM'),
(89, 13, '3.00PM-3.15PM'),
(90, 13, '3.15PM-3.30PM'),
(91, 13, '3.30PM-3.45PM'),
(92, 14, '11.30AM-11.45AM'),
(93, 14, '2.15PM-2.30PM'),
(94, 14, '2.30PM-2.45PM'),
(95, 14, '2.45PM-3.00PM'),
(96, 14, '3.00PM-3.15PM'),
(97, 14, '3.15PM-3.30PM'),
(98, 14, '3.30PM-3.45PM'),
(99, 15, '11.30AM-11.45AM'),
(100, 15, '2.15PM-2.30PM'),
(101, 15, '2.30PM-2.45PM'),
(102, 15, '2.45PM-3.00PM'),
(103, 15, '3.00PM-3.15PM'),
(104, 15, '3.15PM-3.30PM'),
(105, 15, '3.30PM-3.45PM'),
(106, 16, '11.30AM-11.45AM'),
(107, 16, '2.15PM-2.30PM'),
(108, 16, '2.30PM-2.45PM'),
(109, 16, '2.45PM-3.00PM'),
(110, 16, '3.00PM-3.15PM'),
(111, 16, '3.15PM-3.30PM'),
(112, 16, '3.30PM-3.45PM'),
(113, 17, '11.30AM-11.45AM'),
(114, 17, '2.15PM-2.30PM'),
(115, 17, '2.30PM-2.45PM'),
(116, 17, '2.45PM-3.00PM'),
(117, 17, '3.00PM-3.15PM'),
(118, 17, '3.15PM-3.30PM'),
(119, 17, '3.30PM-3.45PM'),
(120, 18, '11.30AM-11.45AM'),
(121, 18, '2.15PM-2.30PM'),
(122, 18, '2.30PM-2.45PM'),
(123, 18, '2.45PM-3.00PM'),
(124, 18, '3.00PM-3.15PM'),
(125, 18, '3.15PM-3.30PM'),
(126, 18, '3.30PM-3.45PM'),
(127, 19, '11.30AM-11.45AM'),
(128, 19, '2.15PM-2.30PM'),
(129, 19, '2.30PM-2.45PM'),
(130, 19, '2.45PM-3.00PM'),
(131, 19, '3.00PM-3.15PM'),
(132, 19, '3.15PM-3.30PM'),
(133, 19, '3.30PM-3.45PM'),
(134, 20, '11.30AM-11.45AM'),
(135, 20, '2.15PM-2.30PM'),
(136, 20, '2.30PM-2.45PM'),
(137, 20, '2.45PM-3.00PM'),
(138, 20, '3.00PM-3.15PM'),
(139, 20, '3.15PM-3.30PM'),
(140, 20, '3.30PM-3.45PM'),
(141, 21, '11.30AM-11.45AM'),
(142, 21, '2.15PM-2.30PM'),
(143, 21, '2.30PM-2.45PM'),
(144, 21, '2.45PM-3.00PM'),
(145, 21, '3.00PM-3.15PM'),
(146, 21, '3.15PM-3.30PM'),
(147, 21, '3.30PM-3.45PM'),
(148, 22, '11.30AM-11.45AM'),
(149, 22, '2.15PM-2.30PM'),
(150, 22, '2.30PM-2.45PM'),
(151, 22, '2.45PM-3.00PM'),
(152, 22, '3.00PM-3.15PM'),
(153, 22, '3.15PM-3.30PM'),
(154, 22, '3.30PM-3.45PM'),
(155, 23, '11.30AM-11.45AM'),
(156, 23, '2.15PM-2.30PM'),
(157, 23, '2.30PM-2.45PM'),
(158, 23, '2.45PM-3.00PM'),
(159, 23, '3.00PM-3.15PM'),
(160, 23, '3.15PM-3.30PM'),
(161, 23, '3.30PM-3.45PM'),
(162, 24, '11.30AM-11.45AM'),
(163, 24, '2.15PM-2.30PM'),
(164, 24, '2.30PM-2.45PM'),
(165, 24, '2.45PM-3.00PM'),
(166, 24, '3.00PM-3.15PM'),
(167, 24, '3.15PM-3.30PM'),
(168, 24, '3.30PM-3.45PM'),
(169, 25, '11.30AM-11.45AM'),
(170, 25, '2.15PM-2.30PM'),
(171, 25, '2.30PM-2.45PM'),
(172, 25, '2.45PM-3.00PM'),
(173, 25, '3.00PM-3.15PM'),
(174, 25, '3.15PM-3.30PM'),
(175, 25, '3.30PM-3.45PM'),
(176, 26, '11.30AM-11.45AM'),
(177, 26, '2.15PM-2.30PM'),
(178, 26, '2.30PM-2.45PM'),
(179, 26, '2.45PM-3.00PM'),
(180, 26, '3.00PM-3.15PM'),
(181, 26, '3.15PM-3.30PM'),
(182, 26, '3.30PM-3.45PM'),
(183, 27, '11.30AM-11.45AM'),
(184, 27, '2.15PM-2.30PM'),
(185, 27, '2.30PM-2.45PM'),
(186, 27, '2.45PM-3.00PM'),
(187, 27, '3.00PM-3.15PM'),
(188, 27, '3.15PM-3.30PM'),
(189, 27, '3.30PM-3.45PM'),
(190, 28, '11.30AM-11.45AM'),
(191, 28, '2.15PM-2.30PM'),
(192, 28, '2.30PM-2.45PM'),
(193, 28, '2.45PM-3.00PM'),
(194, 28, '3.00PM-3.15PM'),
(195, 28, '3.15PM-3.30PM'),
(196, 28, '3.30PM-3.45PM'),
(197, 29, '11.30AM-11.45AM'),
(198, 29, '2.15PM-2.30PM'),
(199, 29, '2.30PM-2.45PM'),
(200, 29, '2.45PM-3.00PM'),
(201, 29, '3.00PM-3.15PM'),
(202, 29, '3.15PM-3.30PM'),
(203, 29, '3.30PM-3.45PM'),
(204, 30, '11.30AM-11.45AM'),
(205, 30, '2.15PM-2.30PM'),
(206, 30, '2.30PM-2.45PM'),
(207, 30, '2.45PM-3.00PM'),
(208, 30, '3.00PM-3.15PM'),
(209, 30, '3.15PM-3.30PM'),
(210, 30, '3.30PM-3.45PM'),
(211, 31, '11.30AM-11.45AM'),
(212, 31, '2.15PM-2.30PM'),
(213, 31, '2.30PM-2.45PM'),
(214, 31, '2.45PM-3.00PM'),
(215, 31, '3.00PM-3.15PM'),
(216, 31, '3.15PM-3.30PM'),
(217, 31, '3.30PM-3.45PM'),
(222, 32, '2.15PM-2.30PM'),
(223, 32, '2.30PM-2.45PM'),
(224, 32, '2.45PM-3.00PM'),
(225, 32, '3.00PM-3.15PM'),
(226, 32, '3.15PM-3.30PM'),
(227, 32, '3.30PM-3.45PM'),
(228, 33, '10.45AM-11.00AM'),
(229, 33, '11.00AM-11.15AM'),
(230, 33, '11.15AM-11.30AM'),
(231, 33, '11.30AM-11.45AM'),
(232, 33, '2.15PM-2.30PM'),
(233, 33, '2.30PM-2.45PM'),
(234, 33, '2.45PM-3.00PM'),
(235, 33, '3.00PM-3.15PM'),
(236, 33, '3.15PM-3.30PM'),
(237, 33, '3.30PM-3.45PM'),
(238, 34, '10.45AM-11.00AM'),
(239, 34, '11.00AM-11.15AM'),
(240, 34, '11.15AM-11.30AM'),
(241, 34, '11.30AM-11.45AM'),
(242, 34, '2.15PM-2.30PM'),
(243, 34, '2.30PM-2.45PM'),
(244, 34, '2.45PM-3.00PM'),
(245, 34, '3.00PM-3.15PM'),
(246, 34, '3.15PM-3.30PM'),
(247, 34, '3.30PM-3.45PM'),
(248, 35, '10.45AM-11.00AM'),
(249, 35, '11.00AM-11.15AM'),
(250, 35, '11.15AM-11.30AM'),
(251, 35, '11.30AM-11.45AM'),
(252, 35, '2.15PM-2.30PM'),
(253, 35, '2.30PM-2.45PM'),
(254, 35, '2.45PM-3.00PM'),
(255, 35, '3.00PM-3.15PM'),
(256, 35, '3.15PM-3.30PM'),
(257, 35, '3.30PM-3.45PM'),
(258, 36, '10.45AM-11.00AM'),
(259, 36, '11.00AM-11.15AM'),
(260, 36, '11.15AM-11.30AM'),
(261, 36, '11.30AM-11.45AM'),
(262, 36, '2.15PM-2.30PM'),
(263, 36, '2.30PM-2.45PM'),
(264, 36, '2.45PM-3.00PM'),
(265, 36, '3.00PM-3.15PM'),
(266, 36, '3.15PM-3.30PM'),
(267, 36, '3.30PM-3.45PM'),
(268, 37, '10.45AM-11.00AM'),
(269, 37, '11.00AM-11.15AM'),
(270, 37, '11.15AM-11.30AM'),
(271, 37, '11.30AM-11.45AM'),
(272, 37, '2.15PM-2.30PM'),
(273, 37, '2.30PM-2.45PM'),
(274, 37, '2.45PM-3.00PM'),
(275, 37, '3.00PM-3.15PM'),
(276, 37, '3.15PM-3.30PM'),
(277, 37, '3.30PM-3.45PM'),
(278, 38, '10.45AM-11.00AM'),
(279, 38, '11.00AM-11.15AM'),
(280, 38, '11.15AM-11.30AM'),
(281, 38, '11.30AM-11.45AM'),
(282, 38, '2.15PM-2.30PM'),
(283, 38, '2.30PM-2.45PM'),
(284, 38, '2.45PM-3.00PM'),
(285, 38, '3.00PM-3.15PM'),
(286, 38, '3.15PM-3.30PM'),
(287, 38, '3.30PM-3.45PM'),
(288, 39, '10.45AM-11.00AM'),
(289, 39, '11.00AM-11.15AM'),
(290, 39, '11.15AM-11.30AM'),
(291, 39, '11.30AM-11.45AM'),
(292, 39, '2.15PM-2.30PM'),
(293, 39, '2.30PM-2.45PM'),
(294, 39, '2.45PM-3.00PM'),
(295, 39, '3.00PM-3.15PM'),
(296, 39, '3.15PM-3.30PM'),
(297, 39, '3.30PM-3.45PM'),
(298, 40, '10.45AM-11.00AM'),
(299, 40, '11.00AM-11.15AM'),
(300, 40, '11.15AM-11.30AM'),
(301, 40, '11.30AM-11.45AM'),
(302, 40, '2.15PM-2.30PM'),
(303, 40, '2.30PM-2.45PM'),
(304, 40, '2.45PM-3.00PM'),
(305, 40, '3.00PM-3.15PM'),
(306, 40, '3.15PM-3.30PM'),
(307, 40, '3.30PM-3.45PM'),
(308, 41, '10.45AM-11.00AM'),
(309, 41, '11.00AM-11.15AM'),
(310, 41, '11.15AM-11.30AM'),
(311, 41, '11.30AM-11.45AM'),
(312, 41, '2.15PM-2.30PM'),
(313, 41, '2.30PM-2.45PM'),
(314, 41, '2.45PM-3.00PM'),
(315, 41, '3.00PM-3.15PM'),
(316, 41, '3.15PM-3.30PM'),
(317, 41, '3.30PM-3.45PM'),
(318, 42, '10.45AM-11.00AM'),
(319, 42, '11.00AM-11.15AM'),
(320, 42, '11.15AM-11.30AM'),
(321, 42, '11.30AM-11.45AM'),
(322, 42, '2.15PM-2.30PM'),
(323, 42, '2.30PM-2.45PM'),
(324, 42, '2.45PM-3.00PM'),
(325, 42, '3.00PM-3.15PM'),
(326, 42, '3.15PM-3.30PM'),
(327, 42, '3.30PM-3.45PM'),
(328, 43, '10.45AM-11.00AM'),
(329, 43, '11.00AM-11.15AM'),
(330, 43, '11.15AM-11.30AM'),
(331, 43, '11.30AM-11.45AM'),
(332, 43, '2.15PM-2.30PM'),
(333, 43, '2.30PM-2.45PM'),
(334, 43, '2.45PM-3.00PM'),
(335, 43, '3.00PM-3.15PM'),
(336, 43, '3.15PM-3.30PM'),
(337, 43, '3.30PM-3.45PM'),
(338, 44, '10.45AM-11.00AM'),
(339, 44, '11.00AM-11.15AM'),
(340, 44, '11.15AM-11.30AM'),
(341, 44, '11.30AM-11.45AM'),
(342, 44, '2.15PM-2.30PM'),
(343, 44, '2.30PM-2.45PM'),
(344, 44, '2.45PM-3.00PM'),
(345, 44, '3.00PM-3.15PM'),
(346, 44, '3.15PM-3.30PM'),
(347, 44, '3.30PM-3.45PM'),
(348, 45, '10.45AM-11.00AM'),
(349, 45, '11.00AM-11.15AM'),
(350, 45, '11.15AM-11.30AM'),
(351, 45, '11.30AM-11.45AM'),
(352, 45, '2.15PM-2.30PM'),
(353, 45, '2.30PM-2.45PM'),
(354, 45, '2.45PM-3.00PM'),
(355, 45, '3.00PM-3.15PM'),
(356, 45, '3.15PM-3.30PM'),
(357, 45, '3.30PM-3.45PM'),
(358, 46, '10.45AM-11.00AM'),
(359, 46, '11.00AM-11.15AM'),
(360, 46, '11.15AM-11.30AM'),
(361, 46, '11.30AM-11.45AM'),
(362, 46, '2.15PM-2.30PM'),
(363, 46, '2.30PM-2.45PM'),
(364, 46, '2.45PM-3.00PM'),
(365, 46, '3.00PM-3.15PM'),
(366, 46, '3.15PM-3.30PM'),
(367, 46, '3.30PM-3.45PM'),
(368, 47, '10.45AM-11.00AM'),
(369, 47, '11.00AM-11.15AM'),
(370, 47, '11.15AM-11.30AM'),
(371, 47, '11.30AM-11.45AM'),
(372, 47, '2.15PM-2.30PM'),
(373, 47, '2.30PM-2.45PM'),
(374, 47, '2.45PM-3.00PM'),
(375, 47, '3.00PM-3.15PM'),
(376, 47, '3.15PM-3.30PM'),
(377, 47, '3.30PM-3.45PM'),
(378, 48, '10.45AM-11.00AM'),
(379, 48, '11.00AM-11.15AM'),
(380, 48, '11.15AM-11.30AM'),
(381, 48, '11.30AM-11.45AM'),
(382, 48, '2.15PM-2.30PM'),
(383, 48, '2.30PM-2.45PM'),
(384, 48, '2.45PM-3.00PM'),
(385, 48, '3.00PM-3.15PM'),
(386, 48, '3.15PM-3.30PM'),
(387, 48, '3.30PM-3.45PM'),
(388, 49, '10.45AM-11.00AM'),
(389, 49, '11.00AM-11.15AM'),
(390, 49, '11.15AM-11.30AM'),
(391, 49, '11.30AM-11.45AM'),
(392, 49, '2.15PM-2.30PM'),
(393, 49, '2.30PM-2.45PM'),
(394, 49, '2.45PM-3.00PM'),
(395, 49, '3.00PM-3.15PM'),
(396, 49, '3.15PM-3.30PM'),
(397, 49, '3.30PM-3.45PM'),
(398, 50, '10.45AM-11.00AM'),
(399, 50, '11.00AM-11.15AM'),
(400, 50, '11.15AM-11.30AM'),
(401, 50, '11.30AM-11.45AM'),
(402, 50, '2.15PM-2.30PM'),
(403, 50, '2.30PM-2.45PM'),
(404, 50, '2.45PM-3.00PM'),
(405, 50, '3.00PM-3.15PM'),
(406, 50, '3.15PM-3.30PM'),
(407, 50, '3.30PM-3.45PM'),
(408, 51, '10.45AM-11.00AM'),
(409, 51, '11.00AM-11.15AM'),
(410, 51, '11.15AM-11.30AM'),
(411, 51, '11.30AM-11.45AM'),
(412, 51, '2.15PM-2.30PM'),
(413, 51, '2.30PM-2.45PM'),
(414, 51, '2.45PM-3.00PM'),
(415, 51, '3.00PM-3.15PM'),
(416, 51, '3.15PM-3.30PM'),
(417, 51, '3.30PM-3.45PM'),
(418, 52, '10.45AM-11.00AM'),
(419, 52, '11.00AM-11.15AM'),
(420, 52, '11.15AM-11.30AM'),
(421, 52, '11.30AM-11.45AM'),
(422, 52, '2.15PM-2.30PM'),
(423, 52, '2.30PM-2.45PM'),
(424, 52, '2.45PM-3.00PM'),
(425, 52, '3.00PM-3.15PM'),
(426, 52, '3.15PM-3.30PM'),
(427, 52, '3.30PM-3.45PM'),
(428, 53, '10.45AM-11.00AM'),
(429, 53, '11.00AM-11.15AM'),
(430, 53, '11.15AM-11.30AM'),
(431, 53, '11.30AM-11.45AM'),
(432, 53, '2.15PM-2.30PM'),
(433, 53, '2.30PM-2.45PM'),
(434, 53, '2.45PM-3.00PM'),
(435, 53, '3.00PM-3.15PM'),
(436, 53, '3.15PM-3.30PM'),
(437, 53, '3.30PM-3.45PM'),
(438, 54, '10.45AM-11.00AM'),
(439, 54, '11.00AM-11.15AM'),
(440, 54, '11.15AM-11.30AM'),
(441, 54, '11.30AM-11.45AM'),
(442, 54, '2.15PM-2.30PM'),
(443, 54, '2.30PM-2.45PM'),
(444, 54, '2.45PM-3.00PM'),
(445, 54, '3.00PM-3.15PM'),
(446, 54, '3.15PM-3.30PM'),
(447, 54, '3.30PM-3.45PM'),
(448, 55, '10.45AM-11.00AM'),
(449, 55, '11.00AM-11.15AM'),
(450, 55, '11.15AM-11.30AM'),
(451, 55, '11.30AM-11.45AM'),
(452, 55, '2.15PM-2.30PM'),
(453, 55, '2.30PM-2.45PM'),
(454, 55, '2.45PM-3.00PM'),
(455, 55, '3.00PM-3.15PM'),
(456, 55, '3.15PM-3.30PM'),
(457, 55, '3.30PM-3.45PM'),
(458, 56, '10.45AM-11.00AM'),
(459, 56, '11.00AM-11.15AM'),
(460, 56, '11.15AM-11.30AM'),
(461, 56, '11.30AM-11.45AM'),
(462, 56, '2.15PM-2.30PM'),
(463, 56, '2.30PM-2.45PM'),
(464, 56, '2.45PM-3.00PM'),
(465, 56, '3.00PM-3.15PM'),
(466, 56, '3.15PM-3.30PM'),
(467, 56, '3.30PM-3.45PM'),
(468, 57, '10.45AM-11.00AM'),
(469, 57, '11.00AM-11.15AM'),
(470, 57, '11.15AM-11.30AM'),
(471, 57, '11.30AM-11.45AM'),
(472, 57, '2.15PM-2.30PM'),
(473, 57, '2.30PM-2.45PM'),
(474, 57, '2.45PM-3.00PM'),
(475, 57, '3.00PM-3.15PM'),
(476, 57, '3.15PM-3.30PM'),
(477, 57, '3.30PM-3.45PM'),
(478, 58, '10.45AM-11.00AM'),
(479, 58, '11.00AM-11.15AM'),
(480, 58, '11.15AM-11.30AM'),
(481, 58, '11.30AM-11.45AM'),
(482, 58, '2.15PM-2.30PM'),
(483, 58, '2.30PM-2.45PM'),
(484, 58, '2.45PM-3.00PM'),
(485, 58, '3.00PM-3.15PM'),
(486, 58, '3.15PM-3.30PM'),
(487, 58, '3.30PM-3.45PM'),
(488, 59, '10.45AM-11.00AM'),
(489, 59, '11.00AM-11.15AM'),
(490, 59, '11.15AM-11.30AM'),
(491, 59, '11.30AM-11.45AM'),
(492, 59, '2.15PM-2.30PM'),
(493, 59, '2.30PM-2.45PM'),
(494, 59, '2.45PM-3.00PM'),
(495, 59, '3.00PM-3.15PM'),
(496, 59, '3.15PM-3.30PM'),
(497, 59, '3.30PM-3.45PM'),
(498, 60, '10.45AM-11.00AM'),
(499, 60, '11.00AM-11.15AM'),
(500, 60, '11.15AM-11.30AM'),
(501, 60, '11.30AM-11.45AM'),
(502, 60, '2.15PM-2.30PM'),
(503, 60, '2.30PM-2.45PM'),
(504, 60, '2.45PM-3.00PM'),
(505, 60, '3.00PM-3.15PM'),
(506, 60, '3.15PM-3.30PM'),
(507, 60, '3.30PM-3.45PM'),
(508, 61, '10.45AM-11.00AM'),
(509, 61, '11.00AM-11.15AM'),
(510, 61, '11.15AM-11.30AM'),
(511, 61, '11.30AM-11.45AM'),
(512, 61, '2.15PM-2.30PM'),
(513, 61, '2.30PM-2.45PM'),
(514, 61, '2.45PM-3.00PM'),
(515, 61, '3.00PM-3.15PM'),
(516, 61, '3.15PM-3.30PM'),
(517, 61, '3.30PM-3.45PM');

-- --------------------------------------------------------

--
-- Table structure for table `spelization`
--

CREATE TABLE `spelization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(200) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spelization`
--

INSERT INTO `spelization` (`id`, `specilization`, `status`) VALUES
(6, 'ENT1', 'Y'),
(7, 'ENT', 'Y'),
(8, 'ENT2', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `status`, `createdOn`) VALUES
(1, 'Vishal', 'vishal@gmail.com', '123', '999', 'Y', '2021-06-02 23:07:05'),
(2, 'Vishal', 'vishal1@gmail.com', '123', '343', 'Y', '2021-06-04 11:13:03'),
(3, 'Visahl', 'vishal12@gmail.com', '123', '999999999', 'Y', '2021-06-04 11:13:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferferred_slot`
--
ALTER TABLE `preferferred_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_date`
--
ALTER TABLE `slot_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_time`
--
ALTER TABLE `slot_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spelization`
--
ALTER TABLE `spelization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `preferferred_slot`
--
ALTER TABLE `preferferred_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slot_date`
--
ALTER TABLE `slot_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `slot_time`
--
ALTER TABLE `slot_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=518;

--
-- AUTO_INCREMENT for table `spelization`
--
ALTER TABLE `spelization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
