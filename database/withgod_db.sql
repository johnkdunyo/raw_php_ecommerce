-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 05:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `withgod_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `cart` (
  `id` int(30) NOT NULL,
  `client_ip` varchar(20) NOT NULL,
  `user_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `client_ip`, `user_id`, `product_id`, `qty`) VALUES
(35, '', 4, 13, 3),
(66, '', 6, 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`) VALUES
(1, 'Farm Produce'),
(2, 'Processed Produce');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `mobile`, `email`, `status`) VALUES
(37, 'jon dexter', 'PMB, Kumasi', '+233501656', 'kkk@gmail.com', 0),
(38, 'jon dexter', 'PMB, Kumasi', '+233501656', 'kkk@gmail.com', 0),
(39, 'jon dexter', 'PMB, Kumasi', '+233501656', 'kkk@gmail.com', 0),
(40, 'John Kwame Dunyo', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA', '0543460633', 'johnkduny0@gmail.com', 0),
(41, 'John Kwame Dunyo', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA', '0543460633', 'johnkduny0@gmail.com', 0),
(42, 'John Kwame Dunyo', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA', '0543460633', 'johnkdunyo@gmail.com', 0),
(43, 'John Kwame Dunyo', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA', '0543460633', 'johnkdunyo@gmail.com', 0),
(44, 'John Kwame Dunyo', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA', '0543460633', 'johnkdunyo@gmail.com', 0),
(45, 'John Kwame Dunyo', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA', '0543460633', 'johnkdunyo@gmail.com', 0),
(46, 'John Kwame Dunyo', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA', '0543460633', 'johnkdunyo@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `order_id`, `product_id`, `qty`) VALUES
(46, 37, 12, 10),
(47, 37, 11, 3),
(48, 38, 12, 4),
(49, 39, 10, 6),
(50, 39, 10, 7),
(51, 40, 8, 4),
(52, 41, 15, 1),
(53, 42, 12, 1),
(54, 43, 12, 1),
(55, 44, 12, 3),
(56, 45, 8, 3),
(57, 45, 15, 4),
(58, 45, 13, 6),
(59, 46, 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `ref` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `product_list` (
  `id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `img_path` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0= unavailable, 2 Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `category_id`, `name`, `description`, `price`, `img_path`, `status`) VALUES
(8, 2, 'Premium Gari', 'Fortified premium gari\r\nA premium and organic product of WithGod Farms. Healthly and safe for consumption. No added chemicals or preservatives.', 29.99, '1638694500_gari.jpg', 1),
(9, 1, 'Fresh tomatoes', '12kg basket of freshly harvested tomatoes', 34.99, '1638694620_basket_tomatoes.jpg', 1),
(10, 1, 'Sweet Potatoes', 'Freshly harvested sweet potatoes', 19.99, '1638694680_potatoes.jpg', 1),
(11, 2, 'Fortied Corn flour', 'Processed fortified Domo corn flour', 18.99, '1638694740_corn-flour.jpg', 1),
(12, 1, 'Fresh Chillies', 'Super fresh chillies', 9.99, '1638694800_basket-peppers.jpeg', 1),
(13, 2, 'Organic Garlic Oil', 'Fortified organic garlic oil', 15.89, '1638711720_organic groundnut oil.jpg', 1),
(14, 2, 'Perfume rice', 'Special perfume rice', 34.99, '1638711900_Rice.jpg', 1),
(15, 1, 'Bags of Onion', 'Bags of fresshly harvested onions.', 24.69, '1638712020_onion bags.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'WithGod Farms', 'admin@admin.com', '+2330541111111', '1638694260_banner.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;WITHGOD FARMS!&lt;/b&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;/h2&gt;&lt;p style=&quot;text-align: center; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400;&quot;&gt;\r\nWithGod Farms specializes in the production, packaging and nationwide delivery of high quality agricultural produce such as rice, maize, groundnut etc\r\n We also process some of our produce into organic food products, highly nutritious cereals and easy-to-use processed   products.\r\n &lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '@admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--
-- Creation: Dec 08, 2021 at 08:17 AM
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address`) VALUES
(3, 'jon', 'dexter', 'kkk@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', '+233501656', 'PMB, Kumasi'),
(6, 'John Kwame', 'Dunyo', 'johnkdunyo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0543460633', 'ECOBANK GHANA LTD,  HAPER ROAD, KNUST, KUMASI, GHANA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
