-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 04:05 PM
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
-- Database: `store-qodra`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(50) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `promo` varchar(255) NOT NULL,
  `promovalue` int(255) NOT NULL,
  `sessionid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `itemname`, `category`, `price`, `total`, `image`, `size`, `quantity`, `promo`, `promovalue`, `sessionid`) VALUES
(322, 'Black Shirt', 'shirts', 14, '14', 'images/item-3-shirts.jpg', 'L', 1, '0', 0, 1),
(325, 'Red Shirt', 'shirts', 10, '10$', 'images/item-1-shirts.jpeg', 'L', 1, '', 0, 0),
(329, 'Blue Shirt', 'shirts', 19, '19$', 'images/item-4-shirts.jpeg', 'L', 1, '', 0, 0),
(330, 'Panda Shirt', 'shirts', 12, '12$', 'images/item-2-shirts.jpg', 'L', 1, '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(50) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `image`) VALUES
(1, 'Shirts', 'images/shirts.jpeg'),
(2, 'Shoes', 'images/shoes.jpg'),
(3, 'Jeans', 'images/jeans.png'),
(4, 'Hoodies', 'images/hoodies.png'),
(5, 'Jackets', 'images/jackets.jpg'),
(6, 'Hats', 'images/hats.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `Lsize` varchar(50) NOT NULL,
  `Msize` varchar(50) NOT NULL,
  `Ssize` varchar(30) NOT NULL,
  `counts` varchar(255) NOT NULL,
  `no of sells` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cname`, `details`, `image`, `image2`, `price`, `Lsize`, `Msize`, `Ssize`, `counts`, `no of sells`) VALUES
(1, 'Modern Jeans', 'jeans', 'new modern jeans for all men ', 'images/item-1-jeans.jpg', 'images/item-1_1-jeans.jpeg', '25', '20', '10', '30', '100', '21'),
(2, ' Black Hoodie', 'hoodies', 'new modern Hoodie for all men ', 'images/item-1-hoodies.jpeg', '', '15', '20', '10', '30', '100', '20'),
(3, 'Red Shirt', 'shirts', 'new red shirt for all men ', 'images/item-1-shirts.jpeg', '', '10', '20', '10', '30', '100', '20'),
(4, 'Panda Shirt', 'shirts', 'new panda shirt for all men ', 'images/item-2-shirts.jpg', '', '12', '20', '10', '30', '100', '12'),
(5, 'Army Jeans', 'jeans', 'new army jeans for all men ', 'images/item-2-jeans.jpg', '', '17', '20', '10', '30', '100', '13'),
(6, 'Doing thing Hat', 'Hats', 'new Doing thing hat for all men ', 'images/item-1-hats.jpg', '', '10', '20', '10', '30', '100', '14'),
(8, 'Black Shirt', 'shirts', 'new black shirt for all men ', 'images/item-3-shirts.jpg', '', '14', '20', '10', '30', '100', '12'),
(9, 'Blue Shirt', 'shirts', 'new Blue shirt for all men ', 'images/item-4-shirts.jpeg', '', '19', '20', '10', '30', '100', '12'),
(10, 'Colorful Shirt', 'shirts', 'new colorful shirt for all men ', 'images/item-5-shirts.jpg', '', '11', '20', '10', '30', '100', '12');

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE `promocodes` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promocodes`
--

INSERT INTO `promocodes` (`id`, `name`, `sdate`, `edate`, `description`, `value`) VALUES
(1, 'STORE15', '2022-11-16', '2022-11-18', '15% OFF', '15'),
(2, 'STORE10', '2022-11-16', '2022-11-18', '10% OFF', '10');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sub-title` varchar(50) DEFAULT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `sub-title`, `title`) VALUES
(1, 'images/slider-1.jpg', '', 'New Hoodies Collection'),
(2, 'images/slider-2.jpeg', 'Order one & GET ONE FREE', 'T-shirts OFFERS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `phoneno`) VALUES
(1, 'Husam Ahmad', 'husamalmorr11@gmail.com', 'husamalmorr', 'e10adc3949ba59abbe56e057f20f883e', '0796463366');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocodes`
--
ALTER TABLE `promocodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `promocodes`
--
ALTER TABLE `promocodes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
