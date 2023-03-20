-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2021 at 02:37 PM
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
-- Database: `beautypala`
--

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `id` int(11) NOT NULL,
  `os_name` varchar(100) NOT NULL,
  `os_pricing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_services`
--

INSERT INTO `other_services` (`id`, `os_name`, `os_pricing`) VALUES
(1, 'Classic Facial', '18.24'),
(2, 'Manicure Dip Powder', '50.21'),
(3, 'Nail Clippers', '20.34'),
(4, 'Nail Design', '30.11'),
(5, 'Single Nail Extension', '18.98'),
(6, 'Nail Fix', '50.67'),
(7, 'Classic manicure', '20.08'),
(8, 'Fill With Gel Color', '30.81');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_id` varchar(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `pricing` varchar(11) NOT NULL,
  `image_banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_id`, `category_name`, `service_name`, `pricing`, `image_banner`) VALUES
(1, '23456b', 'Feet Treatment', 'Classic Pedicure', '18.90', '5dbceece64706d10bdf6b2ec27fd7ad3.jpg'),
(2, '4r3456', 'Hand Treatment', '\r\nPriming Moisturizer', '44.32', 'Shop-single-02-main-img.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
