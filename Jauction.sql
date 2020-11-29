-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 12:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Jauction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` char(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `login_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `bid_start_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bid_products`
--

CREATE TABLE `bid_products` (
  `prod_id` int(11) NOT NULL,
  `bid_start_price` decimal(10,2) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid_products`
--

INSERT INTO `bid_products` (`prod_id`, `bid_start_price`, `b_id`) VALUES
(1, '30.00', 10),
(2, '40.00', 20),
(3, '50.00', 30),
(4, '100.00', 40),
(5, '150.00', 80),
(6, '12.00', 70),
(7, '24.00', 60),
(8, '120.00', 50),
(9, '99.00', 90);

-- --------------------------------------------------------

--
-- Table structure for table `bid_won_product`
--

CREATE TABLE `bid_won_product` (
  `prod_id` int(11) NOT NULL,
  `bid_final_price` decimal(10,2) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid_won_product`
--

INSERT INTO `bid_won_product` (`prod_id`, `bid_final_price`, `b_id`) VALUES
(1, '30.00', 10),
(3, '50.00', 30);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `login_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `b_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `sellers_rating` int(11) NOT NULL,
  `sellers_descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `login_id`, `sellers_rating`, `sellers_descr`) VALUES
(1, 1, 4, 'Very Good Seller, I am very happy'),
(2, 2, 1, 'Very Late Delivery and product was not as expected'),
(3, 3, 4, 'Very Good Customer Service'),
(4, 4, 5, 'Sehr toll, Ich bin sehr glucklich'),
(5, 5, 3, 'Average Product'),
(6, 1, 5, 'Good Product'),
(7, 2, 5, 'Good Product'),
(8, 6, 1, 'Bad Product'),
(9, 6, 2, 'Bad Product'),
(10, 8, 2, 'Not so good Product'),
(11, 7, 3, 'Average Product');

-- --------------------------------------------------------

--
-- Table structure for table `newadmin`
--

CREATE TABLE `newadmin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newadmin`
--

INSERT INTO `newadmin` (`adminid`, `username`, `password`) VALUES
(1, 'dashingram', 'ramismypassword');

-- --------------------------------------------------------

--
-- Table structure for table `newadmins`
--

CREATE TABLE `newadmins` (
  `id` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newadmins`
--

INSERT INTO `newadmins` (`id`, `user_name`, `password`) VALUES
(1, 'jauction', 'JAuction24?');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `o_date` date NOT NULL,
  `o_total` decimal(10,2) NOT NULL,
  `o_status` text NOT NULL,
  `o_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_date`, `o_total`, `o_status`, `o_address`) VALUES
(1, '2020-11-13', '7.00', 'Paid', 'Baneshwor'),
(2, '2020-11-21', '100.00', 'Paid', 'Bremen'),
(3, '2020-11-20', '50.00', 'Unpaid', 'Brussels'),
(4, '2020-06-12', '29.00', 'Paid', 'Hamburg'),
(5, '2020-06-12', '200.00', 'Paid', 'Dresden'),
(6, '2020-06-20', '150.00', 'Unpaid', 'Cologne'),
(7, '2020-07-18', '130.00', 'Unpaid', 'Stuttgart'),
(8, '2020-09-18', '20.00', 'Paid', 'Munich'),
(9, '2020-11-15', '340.00', 'Paid', 'Heidelberg'),
(10, '2019-11-15', '130.00', 'Paid', 'Braunshweig');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(40) NOT NULL,
  `prod_descr` varchar(40) NOT NULL,
  `prod_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_descr`, `prod_type`) VALUES
(1, 'Television', 'Good Electronic', 'Electronic'),
(2, 'Washing Machine', 'Good Washing Machine', 'Electronic'),
(3, 'Fan', 'Wonderful fan', 'Electronic'),
(4, 'Fanshoes', 'Wonderful Shiny Strong Shoes', 'Fashion'),
(5, 'Necklace', 'Golden Necklace that adds to your beauty', 'Jewelary'),
(6, 'Iron', 'Good Electronic', 'Electronic'),
(7, 'Tastyfood', 'Good Electronic', 'Electronic'),
(8, 'Tastatur', 'Good Electronic', 'Electronic'),
(9, 'Sari', 'Beautiful red Sari for Women', 'Fashion'),
(10, 'Jeans', 'Stylish Jeans as your perfect wear', 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `login_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `login_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `login_id` int(11) NOT NULL,
  `u_name` char(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`login_id`, `u_name`, `u_email`, `u_pwd`) VALUES
(1, 'Sita', 'sita@gmail.com', 'sitakumari'),
(2, 'Sita', 'sita@gmail.com', 'sitakumari'),
(3, 'Rita', 'rita@gmail.com', 'ritakumari'),
(4, 'Hari', 'hari@gmail.com', 'harikumar'),
(5, 'Michael', 'michael@gmail.com', 'Michael'),
(6, 'Daniels', 'daniels@yahoo.com', 'danielcheck'),
(7, 'undertaker', 'undertaker@gmail.com', 'undertakerishero'),
(8, 'patrick', 'patrick@yahoo.com', 'patrickis'),
(9, 'Tony', 'tony@gmail.com', 'tonyishero'),
(10, 'Claudia', 'claudia@outlook.com', 'claudia iam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`login_id`,`prod_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `bid_start_price` (`bid_start_price`);

--
-- Indexes for table `bid_products`
--
ALTER TABLE `bid_products`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `bid_start_price` (`bid_start_price`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `bid_won_product`
--
ALTER TABLE `bid_won_product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `b_id` (`b_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `newadmin`
--
ALTER TABLE `newadmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `newadmins`
--
ALTER TABLE `newadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`login_id`,`prod_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newadmin`
--
ALTER TABLE `newadmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newadmins`
--
ALTER TABLE `newadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `users` (`login_id`),
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`),
  ADD CONSTRAINT `bids_ibfk_3` FOREIGN KEY (`bid_start_price`) REFERENCES `bid_products` (`bid_start_price`);

--
-- Constraints for table `bid_products`
--
ALTER TABLE `bid_products`
  ADD CONSTRAINT `bid_products_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE;

--
-- Constraints for table `bid_won_product`
--
ALTER TABLE `bid_won_product`
  ADD CONSTRAINT `bid_won_product_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE;

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `users` (`login_id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `users` (`login_id`) ON DELETE CASCADE;

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `users` (`login_id`) ON DELETE CASCADE;

--
-- Constraints for table `sells`
--
ALTER TABLE `sells`
  ADD CONSTRAINT `sells_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `users` (`login_id`),
  ADD CONSTRAINT `sells_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
