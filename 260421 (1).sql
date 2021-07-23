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
-- Database: `260421`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_key`
--

CREATE TABLE `auth_key` (
  `id` int(11) NOT NULL,
  `auth_key` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `max_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_key`
--

INSERT INTO `auth_key` (`id`, `auth_key`, `status`, `count`, `max_count`) VALUES
(1, 'vishal', 1, 27, 27),
(2, 'amit', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `state_id`) VALUES
(1, 'Agra', 1),
(2, 'Meerut', 1),
(3, 'Amritsar', 2),
(4, 'Gurdaspur', 2);

-- --------------------------------------------------------

--
-- Table structure for table `city_nor`
--

CREATE TABLE `city_nor` (
  `id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_nor`
--

INSERT INTO `city_nor` (`id`, `city`, `state_id`) VALUES
(1, 'Delhi', 2),
(2, 'Patna', 2);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amt` int(11) NOT NULL,
  `payment_request_id` varchar(100) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `amt`, `payment_request_id`, `payment_id`, `payment_status`) VALUES
(1, 'Vishal', 30, '3d33ba3330cf457f9fd333860af6675e', 'MOJO1710R05A67416887', 'success'),
(2, 'Vishal', 20, '64231b79566447acb8a569cd12e3b606', '', 'pending'),
(3, 'Vishal', 34, '1fbbbfa8912d4a0c86cbe1c7c30a2943', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `desc`, `status`) VALUES
(2, 'about', 'About', 'I m About', 1),
(3, 'services', 'Services', 'I m Services', 1),
(6, 'hello', 'Hello', '', 0),
(7, '0', 'Hello', 'Test', 0),
(8, '0', 'Hello1', 'Test1', 0),
(9, '0', 'Hello2', 'Test2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE `population` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `population` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`id`, `country`, `population`) VALUES
(1, 'India', 100),
(2, 'UK', 60),
(3, 'US', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `city`) VALUES
(1, 'Vishal', 'Delhi'),
(2, 'Amit', 'Mubai');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'UP'),
(2, 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `state_nor`
--

CREATE TABLE `state_nor` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_nor`
--

INSERT INTO `state_nor` (`id`, `state`) VALUES
(1, 'Delhi'),
(2, 'Bihar');

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
(1, 'Vishal', 'Delhi', 10, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `temp_user`
--

CREATE TABLE `temp_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_user`
--

INSERT INTO `temp_user` (`id`, `name`, `city`) VALUES
(1, 'Vishal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email_verify` int(11) NOT NULL,
  `forgot_password_id` varchar(50) NOT NULL,
  `status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `email_verify`, `forgot_password_id`, `status`) VALUES
(1, 'Vishal', 'vishal@gmail.com', '$2y$10$5.xv40taZT2GvHyXZTGt9O64vyeOFYQMNvUukEDDb.5KvinkJeO.u', '123', 0, '', 'active'),
(2, 'asd', 'asd@gmail.com', '$2y$10$B13BItq5S9vzokzgE1xZbOErYeLnTfmXWU8rKTjHbo8zhnCcKpl5G', 'asd', 1, '', 'active'),
(4, 'Vishal', 'learnweblessons@gmail.com', '$2y$10$kou5PL4bX.jlgyyvaD3rg.50Z.Jntmcq0nqbPmCG.NfU84Zplvw2C', '999', 1, '', 'active'),
(5, 'aa', 'aa@gmail.com', '', '', 0, '', 'active'),
(7, 'AS', 'ASD', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_key`
--
ALTER TABLE `auth_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_nor`
--
ALTER TABLE `city_nor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population`
--
ALTER TABLE `population`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_nor`
--
ALTER TABLE `state_nor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_user`
--
ALTER TABLE `temp_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_key`
--
ALTER TABLE `auth_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city_nor`
--
ALTER TABLE `city_nor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `population`
--
ALTER TABLE `population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state_nor`
--
ALTER TABLE `state_nor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_user`
--
ALTER TABLE `temp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
