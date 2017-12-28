-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 05:48 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `ContactNumber` varchar(14) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `LastLoginDate` varchar(30) NOT NULL,
  `ProductPurchased` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Username`, `Email`, `Address`, `ContactNumber`, `Password`, `Gender`, `DOB`, `LastLoginDate`, `ProductPurchased`) VALUES
(1, '', 'admin', '', '', '', 'admin', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `ContactNumber` varchar(14) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Salary` int(10) NOT NULL,
  `ProductSold` int(11) NOT NULL DEFAULT '0',
  `Image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `OrderId` varchar(10) NOT NULL,
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `PhoneNo` varchar(14) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `ModelNo` varchar(10) NOT NULL,
  `Category` varchar(25) NOT NULL,
  `Brand` varchar(15) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `InStock` int(11) NOT NULL,
  `Feature` varchar(60) NOT NULL,
  `Image` varchar(60) NOT NULL,
  `DT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `ModelNo`, `Category`, `Brand`, `Color`, `Price`, `InStock`, `Feature`, `Image`, `DT`) VALUES
(11, 'C-100942', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(12, 'C-1008', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(13, 'C-1009', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(14, 'C-1008', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(15, 'C-1009', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(18, 'C-2020', 'PICKUP TRUCK', 'MITSUBISHI', 'Black', '$15000', 2, 'abcdfvhjnakdakd', 'product4.jpg', ''),
(19, 'C-100942', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(20, 'C-1008', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(21, 'C-1009', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(22, 'C-1008', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(23, 'C-1009', 'SEDAN', 'PORSCHE', 'White', '$20000', 5, 'abcdefghijlkmno', 'product1.jpg', ''),
(24, 'C-2020', 'PICKUP TRUCK', 'MITSUBISHI', 'Black', '$15000', 2, 'abcdfvhjnakdakd', 'product4.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
