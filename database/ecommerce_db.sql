-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2024 at 07:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(500) NOT NULL,
  `admin_password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `category_code` varchar(500) NOT NULL,
  `category_details` varchar(500) NOT NULL,
  `category_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_code`, `category_details`, `category_image`) VALUES
(1, 'Automobile', 'automobile.car', 'This is automobile category', 'automobile.png'),
(16, 'Mobile ', 'mobile.phone', 'This is mobile phone category', 'mobile.png'),
(20, 'Furniture', 'furniture.bedroom.bed', 'This is the category for bed furniture', ''),
(23, 'Headphones', 'electronics.audio.headphone', 'This is headphones category', ''),
(24, 'Clocks', 'electronics.clocks', 'This is the category for clocks', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(500) NOT NULL,
  `customer_username` varchar(500) NOT NULL,
  `customer_password` varchar(500) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `customer_phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_username`, `customer_password`, `customer_email`, `customer_phone`) VALUES
(4, 'user', 'user', 'user', 'user@gmail.com', '99999999999'),
(5, 'hari', 'hari', 'hari@123', 'abdulla@gmail.com', '8888888'),
(9, 'john', 'john', 'pass123', 'hanumantha@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_name` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `item_price` double NOT NULL,
  `item_details` varchar(500) NOT NULL,
  `item_image` varchar(500) NOT NULL,
  `added_by_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `category_id`, `item_name`, `brand`, `item_price`, `item_details`, `item_image`, `added_by_admin`) VALUES
(1, 16, 'Oppo F1', 'Oppo', 1234, 'This is latest model of oppo phone', 'oppo.jpg', 2),
(18, 1, 'Model X', 'Tesla', 99999999, 'This is latest model of Tesla', 'tesla.jpg', 2),
(19, 1, 'BMW', 'BMW', 77777, 'This is latest model of BMW', 'bmw.jpeg', 2),
(21, 1, 'Model 3', 'Tesla', 111111, 'This is model X', 'teslax.jpg', 2),
(22, 16, 'Iphone X', 'Apple', 999, 'This is latest version of IPhone', 'iphone.jpg', 2),
(23, 1, 'Bed', 'Yasuda', 1000, 'The comfortable bed.', 'bed.jpeg', 0),
(25, 23, 'Headphone 1', 'Huawei', 111, 'This is excellent headphones.', 'headphones.jpg', 0),
(26, 23, 'Apple Headphones', 'Apple', 2099, 'This is excellent headphones.', 'headphone_apple.jpeg', 0),
(27, 24, 'Titan Clock', 'Titan', 121, 'This is excellent clock.', 'clock.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `number_of_items` int(11) NOT NULL,
  `order_date` varchar(500) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `customer_id`, `item_id`, `category_id`, `number_of_items`, `order_date`, `order_status`) VALUES
(23, 4, 18, 1, 1, '2024-12-20 04:59:24', 0),
(24, 5, 22, 16, 2, '2024-12-20 04:59:48', 0),
(25, 4, 27, 24, 1, '2024-12-21 06:47:17', 0),
(26, 5, 25, 23, 11, '2024-12-22 09:01:25', 0),
(27, 4, 1, 16, 1, '2024-12-22 06:47:32', 0),
(28, 4, 26, 23, 1, '2024-12-24 09:05:22', 0),
(29, 5, 26, 23, 1, '2024-12-24 11:06:09', 0),
(30, 9, 26, 23, 1, '2024-12-28 06:56:25', 0),
(31, 9, 23, 1, 2, '2024-12-28 10:44:32', 0),
(32, 9, 22, 16, 5, '2024-12-28 06:56:41', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
