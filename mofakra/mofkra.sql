-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 10:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mofkra`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `id` int(50) NOT NULL,
  `taskname` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'غير منجز اليوم',
  `addedtime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `taskname`, `description`, `status`, `addedtime`) VALUES
(3, 'الدراسة اليومية', '', 'غير منجز اليوم', '2021-12-19'),
(4, 'الصلاة', 'يجب الصلاة في وقتها', 'غير منجز اليوم', '2021-12-19'),
(5, 'قراءة القران', '', 'غير منجز اليوم', '2021-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `projectname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mainname` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`projectname`, `mainname`, `description`, `startdate`, `enddate`, `id`) VALUES
('البرمجة', 'برمجة المواقع الالكترونية', '', '2021-12-19', '2021-12-19', 2),
('البرمجة', 'برمجة تطبيقات الهواتف', '', '2021-12-19', '2021-12-23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(50) NOT NULL,
  `projectname` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectname`, `description`, `startdate`, `enddate`, `category`) VALUES
(7, 'البرمجة', '', '2021-12-22', '2022-12-22', 'الشخصي');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(12, 'husamalmorr@gmail.com', 'husam', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'husamalmorr11@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
