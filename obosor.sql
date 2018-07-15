-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 03:13 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obosor`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cat_id`, `cat_title`) VALUES
(1, 'Phyics'),
(2, 'Chemistry'),
(3, 'English'),
(4, 'Accounting'),
(5, 'Zoology');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_writer` varchar(200) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_writer`, `product_cat`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 'Physics 1st paper', 'Ishaq', 1, 250, ' ', 'f579cebe34ea464e2e19d2540a4b60e5.png', 'physic,1,ishaq'),
(2, 'Inorganic Chemistry', 'James E. House', 2, 180, ' ', '9780123851109.jpg', 'chemistry.inorganic,house'),
(3, 'A Text Book of Complete Inorganic Chemistry', 'K. D. Sharma', 2, 220, ' ', 'inorganic-chemistry-book-500x500.png', 'chemistry.inorganic,Sharma'),
(4, 'IoBEE', 'IQbator', 5, 400, ' ', 'HoneyBeeSuite-logo-121916.jpg', 'IoT,bee'),
(5, 'ki jani ki boi', 'bla vla', 4, 250, ' adsaf saef wf AD wf sD qef sF R V wv svWw fAF qef ADC qef adc QEF DC ZDCqe qef EFC XZC QFE C qef EF', 'cartoon-image-of-cellphone-icon-smartphone-vector-15659675.jpg', 'AS; ADF;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
