-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 08:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theflorist`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowertype`
--

CREATE TABLE `flowertype` (
  `bid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flowertype`
--

INSERT INTO `flowertype` (`bid`, `sid`, `bg`) VALUES
(1, 1, 'Roses'),
(2, 2, 'Tulips');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `reqid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`reqid`, `sid`, `cid`, `bg`, `status`) VALUES
(1, 1, 1, 'Roses', 'Pending');
(2, 1, 3, 'Tulips', 'Accepted');
(3, 1, 4, 'Roses', 'Pending');
(4, 2, 4, 'Tulips', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `spassword` varchar(100) NOT NULL,
  `sphone` varchar(100) NOT NULL,
  `scity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `sname`, `semail`, `spassword`, `sphone`, `scity`) VALUES
(1, 'Floweraura', 'floweraura@gmail.com', 'floweraura123', '0909090909', 'bangalore'),
(2, 'Easy flower', 'easyflowers@gmail.com', 'easyflowers123', '9876543210','bengaluru');
(3, 'belshop','shopbelroad@gmail.com','shop123','9878998765','bengaluru');
-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `cphone` varchar(100) NOT NULL,
  `rbg` varchar(10) NOT NULL,
  `ccity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cname`, `cemail`, `cpassword`, `cphone`, `rbg`, `ccity`) VALUES
(4, 'rahul', 'rahul@gmail.com', 'rahul123', '8292876785','Sunflowers','delhi),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flowertype`
--
ALTER TABLE `flowertype`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semail` (`semail`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cemail` (`cemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flowertype`
--
ALTER TABLE `flowertype`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flowertype`
--
ALTER TABLE `flowertype`
  ADD CONSTRAINT `flowertype_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `shop` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
