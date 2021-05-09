-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 09:45 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playbees_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `rent_goods`
--

CREATE TABLE `rent_goods` (
  `Category` text NOT NULL,
  `Heading` text NOT NULL,
  `Description` text NOT NULL,
  `Phone` decimal(10,0) NOT NULL,
  `Price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Img1` text NOT NULL,
  `Img2` text NOT NULL,
  `Img3` text NOT NULL,
  `Img4` text NOT NULL,
  `Sl` int NOT NULL,
  `Status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Location` text NOT NULL,
  `Featured` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rent_goods`
--

INSERT INTO `rent_goods` (`Category`, `Heading`, `Description`, `Phone`, `Price`, `Img1`, `Img2`, `Img3`, `Img4`, `Sl`, `Status`, `Location`, `Featured`) VALUES
('Car', 'Fastest car with 500 km/hour and 100 km/ltr.', 'Fastest car with 500 km/hour and 100 km/ltr.', '9046194892', '2000', 'car3.jpg', 'car4.jpg', 'car3.jpg', 'car4.jpg', 40, 'Active', 'Fastest car with 500 km/hour and 100 km/ltr.', '1'),
('Bike', 'Fastest car with 500 km/hour and 100 km/ltr.', 'Fastest car with 500 km/hour and 100 km/ltr.', '9046194892', '1000', 'bike.jpg', 'bike.jpg', 'bike.jpg', 'bike.jpg', 41, 'Active', 'Salt Lake', '0'),
('Mobile', '1 Year used mobile', '1 Year used mobile', '9046194892', '1000', 'mobile.jpg', 'mobile.jpg', 'mobile.jpg', 'mobile.jpg', 42, 'Pending', 'Bolpur', '0'),
('Car', 'Fastest bike with 500 km/hour and 100km/ltr.', 'Fastest bike with 500 km/hour and 100km/ltr.', '9046194892', '1000', 'car4.jpg', '', '', '', 43, 'Active', 'Bolpur', '1'),
('Car', 'Fastest car with 500 km/hour and 100 km/ltr.', 'Fastest car with 500 km/hour and 100 km/ltr.', '9046194892', '3000', 'car3.jpg', 'car3.jpg', 'car3.jpg', 'car3.jpg', 44, 'Active', 'Bolpur', '1'),
('Mobile', '2 Year used mobile', '2 Year used mobile', '9046194892', '300', 'mobile.jpg', 'mobile.jpg', 'mobile.jpg', 'mobile.jpg', 45, 'Pending', 'Dhanbad', '0'),
('Bike', 'Fastest car with 500 km/hour and 100 km/ltr.', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '7074850985', '2000', 'bike.jpg', 'bike.jpg', '', '', 46, 'Active', 'Bolpur', '1'),
('Mobile', 'Bike', 'fffff', '7074850985', '2000', 'mobile.jpg', '', '', '', 47, 'Pending', 'Bolpur', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phnbr` text NOT NULL,
  `state` text NOT NULL,
  `prfsn` text NOT NULL,
  `rating` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `phnbr`, `state`, `prfsn`, `rating`) VALUES
('Rajib Shaw', 'rajibshaw582@gmail.com', '7074850985', 'West Bengal', 'Businessman', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_rent`
--

CREATE TABLE `users_rent` (
  `Id` int NOT NULL,
  `Name` text NOT NULL,
  `Phone` decimal(10,0) NOT NULL,
  `Password` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_rent`
--

INSERT INTO `users_rent` (`Id`, `Name`, `Phone`, `Password`, `Image`) VALUES
(13, 'Rajib Shaw', '9046194892', 'cmFqaWI=', ''),
(14, 'Rajib Shaw', '9046194892', 'cm9vdA==', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rent_goods`
--
ALTER TABLE `rent_goods`
  ADD PRIMARY KEY (`Sl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`(30));

--
-- Indexes for table `users_rent`
--
ALTER TABLE `users_rent`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent_goods`
--
ALTER TABLE `rent_goods`
  MODIFY `Sl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users_rent`
--
ALTER TABLE `users_rent`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
