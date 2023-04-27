-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 12:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yukti`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `serial_number` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_category` text NOT NULL,
  `datetime_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial_number`, `product_name`, `product_image`, `product_price`, `product_category`, `datetime_added`, `product_id`) VALUES
(2, 'Vajero Billfold Leather Wall', 'product_images/3-piece-glass-cake-stand-set.jpg', 25, 'Male Wallet', '2022-10-20 10:09:57', 'PDCT63511e7533650'),
(3, 'Designer Tote Bags At Nei', 'product_images/hummingbird-notebook.jpg', 13, 'Ladies Handbag', '2022-10-20 10:11:14', 'PDCT63511ec271841'),
(4, 'Bianchi Holsters Glock L', 'product_images/mountain-fox-notebook.jpg', 12, 'Leather', '2022-10-20 10:13:36', 'PDCT63511f506ab4a'),
(5, 'Leather Bag', 'product_images/hummingbird-vector-graphics.jpg', 9, 'Leather Bag', '2022-10-20 10:14:33', 'PDCT63511f892303f'),
(6, '45 Degree Angle Scabbard', 'product_images/customizable-mug.jpg', 309, 'Knife Cover', '2022-10-20 10:36:14', 'PDCT6351249e53227'),
(7, 'Oil Pull Genuine Leather ', 'product_images/brown-bear-notebook.jpg', 11, 'Leather Belt', '2022-10-20 10:37:08', 'PDCT635124d4143cc'),
(8, 'Daily Objects Tan Vegan Le', 'product_images/pack-mug-framed-poster.jpg', 35, 'Leather Round Bag', '2022-10-20 10:38:06', 'PDCT6351250e3cdc9'),
(9, 'Leather Book Cover With No', 'product_images/brown-bear-vector-graphics.jpg', 8, 'Leather Book Cover', '2022-10-20 10:39:02', 'PDCT63512546500b2');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `serial_number` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`serial_number`, `category_name`, `category_id`) VALUES
(3, 'Male Wallet', 'CT63511746e750d'),
(4, 'Ladies Handbag', 'CT63511d293c77a'),
(5, 'Leather Gun Cover', 'CT63511d4cc5db5'),
(6, 'Leather Bag', 'CT63511d89cc743'),
(7, 'Knife Cover', 'CT63511d9b7abae'),
(8, 'Leather Belt', 'CT63511db9843e1'),
(9, 'Leather Round Bag', 'CT63511dd5b4d10'),
(10, 'Leather Book Cover', 'CT63511dea6ad8e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$6a/kUcBfHrcrs3z8uD374OL85GvW0KhnqtoYQOVTb1.ITqt/IvL0C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
