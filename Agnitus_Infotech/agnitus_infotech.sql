-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 25, 2021 at 11:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agnitus_infotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Rajib', 'rajib@gmail.com', 12345678),
(2, 'Ram', 'ram@gmail.com', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `buy_status`
--

CREATE TABLE `buy_status` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy_status`
--

INSERT INTO `buy_status` (`id`, `client_id`, `product_id`) VALUES
(1, 1, 5),
(2, 1, 5),
(3, 1, 5),
(4, 1, 5),
(5, 1, 6),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 19, 1),
(10, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `country` text NOT NULL,
  `password` text NOT NULL,
  `wallet` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `phone`, `country`, `password`, `wallet`) VALUES
(1, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '160'),
(2, 'Ram', 'ram582@gmail.com', '7074850985', 'India', '12345678', '500'),
(3, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '1000'),
(4, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '5000'),
(5, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '2000'),
(6, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '3000'),
(7, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '2000'),
(8, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '8000'),
(9, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '1200'),
(10, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '6000'),
(11, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '5000'),
(12, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '0'),
(13, 'Rajib', 'rajibshaw582@gmail.com', '7074850985', 'India', '12345678', '5000'),
(19, 'Sam', 'sam@gmail.com', '7074850985', 'Australia', '123', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` decimal(10,0) NOT NULL,
  `brand` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `brand`) VALUES
(1, 'T-shirt', '1000', '10', 'Pantaloons'),
(2, 'Trouser', '2000', '20', 'Pantaloons'),
(4, 'av', '120', '5', 'xxxx'),
(5, 'av', '120', '5', 'xxxx'),
(6, 'av', '120', '5', 'xxxx'),
(7, 'c', '120', '3', 'c'),
(8, 'fbrfr', '120', '5', 'x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_status`
--
ALTER TABLE `buy_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buy_status`
--
ALTER TABLE `buy_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
