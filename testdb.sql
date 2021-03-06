-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2020 at 11:59 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `custumers`
--

CREATE TABLE `custumers` (
  `id` int(11) UNSIGNED NOT NULL,
  `CustumerAdr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custumers`
--

INSERT INTO `custumers` (`id`, `CustumerAdr`) VALUES
(1, 'Bylochnaya street');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderDescription` text NOT NULL,
  `totalprice` int(11) NOT NULL,
  `Custumer_id` int(11) NOT NULL,
  `adr` text NOT NULL,
  `orderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderDescription`, `totalprice`, `Custumer_id`, `adr`, `orderDate`) VALUES
(1, 'texttextext', 1521, 1, 'bylochnaya street', '2020-09-24'),
(3, 'text text text', 1721, 1, 'Bylochnaya street', '2020-09-24'),
(5, 'bombombom', 1821, 1, 'Bokuleva street', '2020-09-25'),
(6, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(7, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(8, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(9, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(10, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(11, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(12, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(13, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(14, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(15, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(16, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(17, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(18, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(19, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(20, 'blabla', 1721, 1, 'Bolotnaya street', '2022-09-24'),
(21, '15,2,17,44', 2222, 1, 'Bulgakova street', '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `productName` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custumers`
--
ALTER TABLE `custumers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custumers`
--
ALTER TABLE `custumers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
