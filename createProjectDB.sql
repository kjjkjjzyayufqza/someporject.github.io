-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2021 at 10:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- DROP existing database
DROP DATABASE IF EXISTS `ProjectDB`;

--
-- Database: `ProjectDB`
--
CREATE DATABASE IF NOT EXISTS `ProjectDB` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
-- select `ProjectDB` as the default database
USE `ProjectDB`;

START TRANSACTION;
SET time_zone = "+00:00";
-- --------------------------------------------------------

-- The AUTO_INCREMENT attribute can be used to generate a unique identity for new rows

--
-- Table structure for table `AirWaybill`
--

CREATE TABLE `AirWaybill` (
  `airWaybillNo` int(50) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `staffID` varchar(15) DEFAULT NULL,
  `locationID` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `receiverName` varchar(100) NOT NULL,
  `receiverPhoneNumber` varchar(100) NOT NULL,
  `receiverAddress` varchar(255) NOT NULL,
  `weight` float DEFAULT NULL,
  `totalPrice` decimal(10,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AirWaybill`
--

INSERT INTO `AirWaybill` (`airWaybillNo`, `customerEmail`, `staffID`, `locationID`, `date`, `receiverName`, `receiverPhoneNumber`, `receiverAddress`, `weight`, `totalPrice`) VALUES
(1, 'marcus@gmail.com', 'Mary112', 1, '2021-03-24 08:12:13', 'Peter', '23456454', 'Flat 8, Chates Farm Court, John Street, Brighton', 25.5, '1880.0'),
(2, 'marcus@gmail.com', NULL, 2, '2021-03-25 09:20:30', 'John', '76548273', 'Flat 1, Trevena Court, Avenue Road, London', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `AirWaybillDeliveryRecord`
--

CREATE TABLE `AirWaybillDeliveryRecord` (
  `airWaybillDeliveryRecordID` int(11) NOT NULL,
  `airWaybillNo` int(50) NOT NULL,
  `deliveryStatusID` int(2) NOT NULL,
  `recordDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `currentLocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AirWaybillDeliveryRecord`
--

INSERT INTO `AirWaybillDeliveryRecord` (`airWaybillDeliveryRecordID`, `airWaybillNo`, `deliveryStatusID`, `recordDateTime`, `currentLocation`) VALUES
(1, 1, 1, '2021-03-22 20:36:00', NULL),
(2, 2, 1, '2021-03-25 21:37:00', NULL),
(3, 1, 2, '2021-03-23 23:36:00', NULL),
(4, 1, 3, '2021-03-24 09:36:00', 'Hong Kong'),
(5, 1, 3, '2021-03-25 09:36:00', 'Shenzhen'),
(6, 1, 3, '2021-03-26 09:36:00', 'Shanghai'),
(7, 1, 4, '2021-03-27 09:36:00', 'Shanghai'),
(8, 1, 5, '2021-03-28 09:36:00', 'Shanghai');

-- --------------------------------------------------------

--
-- Table structure for table `ChargeTable`
--

CREATE TABLE `ChargeTable` (
  `chargeID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `weight` float NOT NULL,
  `rate` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ChargeTable`
--

INSERT INTO `ChargeTable` (`chargeID`, `locationID`, `weight`, `rate`) VALUES
(1, 1, 1, '150.0'),
(2, 1, 2, '298.0'),
(3, 1, 3, '440.0'),
(4, 1, 4, '586.0'),
(5, 1, 5, '731.0'),
(6, 1, 6, '876.0'),
(7, 1, 7, '1021.0'),
(8, 1, 8, '1166.0'),
(9, 1, 9, '1311.0'),
(10, 1, 10, '1456.0'),
(11, 2, 1, '300.0'),
(12, 2, 2, '590.0'),
(13, 2, 3, '880.0'),
(14, 2, 4, '1170.0'),
(15, 2, 5, '1460.0'),
(16, 2, 6, '1750.0'),
(17, 2, 7, '2040.0'),
(18, 2, 8, '2330.0'),
(19, 2, 9, '2620.0'),
(20, 2, 10, '2910.0'),
(21, 3, 1, '549.0'),
(22, 3, 2, '1096.0'),
(23, 3, 3, '1643.0'),
(24, 3, 4, '2190.0'),
(25, 3, 5, '2737.0'),
(26, 3, 6, '3284.0'),
(27, 3, 7, '3831.0'),
(28, 3, 8, '4378.0'),
(29, 3, 9, '4925.0'),
(30, 3, 10, '5472.0');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `customerEmail` varchar(50) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerPassword` varchar(40) NOT NULL,
  `accountCreationDate` date NOT NULL,
  `phoneNumber` varchar(8) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customerEmail`, `customerName`, `customerPassword`, `accountCreationDate`, `phoneNumber`, `address`) VALUES
('marcus@gmail.com', 'Marcus Cheung', 'a1234', '2021-03-21', '57685876', '2/F 7 Carmel Village Street HO MAN TIN KOWLOON');
INSERT INTO `Customer` (`customerEmail`, `customerName`, `customerPassword`, `accountCreationDate`, `phoneNumber`, `address`) VALUES
('potatochipuncle@123.com', 'potatochipuncle', '123321', '2015-03-21', '12312312', '2/F LWL');


-- --------------------------------------------------------

--
-- Table structure for table `DeliveryStatus`
--

CREATE TABLE `DeliveryStatus` (
  `deliveryStatusID` int(2) NOT NULL,
  `deliveryStatusName` varchar(255) NOT NULL,
  `deliveryStatusDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DeliveryStatus`
--

INSERT INTO `DeliveryStatus` (`deliveryStatusID`, `deliveryStatusName`, `deliveryStatusDescription`) VALUES
(1, 'Waiting for Confirmation', 'Waiting staff to verify the information'),
(2, 'Confirmed', 'Order is confirmed'),
(3, 'In Transit', 'Means that the parcel is on the way to the destination'),
(4, 'Delivering', 'Means that the deliveryman is sending the parcel to the receiver'),
(5, 'Completed', 'Means that the receiver received the parcel');

-- --------------------------------------------------------

--
-- Table structure for table `Location`
--

CREATE TABLE `Location` (
  `locationID` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Location`
--

INSERT INTO `Location` (`locationID`, `locationName`) VALUES
(1, 'China Shanghai'),
(2, 'Japan'),
(3, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `staffID` varchar(15) NOT NULL,
  `staffName` varchar(255) NOT NULL,
  `staffPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`staffID`, `staffName`, `staffPassword`) VALUES
('Mary112', 'Mary Chau', 'mary999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AirWaybill`
--
ALTER TABLE `AirWaybill`
  ADD PRIMARY KEY (`airWaybillNo`),
  ADD KEY `FKAirWaybill444828` (`customerEmail`),
  ADD KEY `FKAirWaybill454482` (`staffID`),
  ADD KEY `FKAirWaybill118245` (`locationID`);

--
-- Indexes for table `AirWaybillDeliveryRecord`
--
ALTER TABLE `AirWaybillDeliveryRecord`
  ADD PRIMARY KEY (`airWaybillDeliveryRecordID`),
  ADD KEY `FKAirWaybill437304` (`deliveryStatusID`),
  ADD KEY `FKAirWaybill115654` (`airWaybillNo`);

--
-- Indexes for table `ChargeTable`
--
ALTER TABLE `ChargeTable`
  ADD PRIMARY KEY (`chargeID`),
  ADD KEY `FKChargeTabl634318` (`locationID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customerEmail`);

--
-- Indexes for table `DeliveryStatus`
--
ALTER TABLE `DeliveryStatus`
  ADD PRIMARY KEY (`deliveryStatusID`);

--
-- Indexes for table `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

-- ALTER TABLE ... AUTO_INCREMENT = N can only change the auto-increment counter value to a value larger than the current maximum.


--
-- AUTO_INCREMENT for table `AirWaybill`
--
ALTER TABLE `AirWaybill`
  MODIFY `airWaybillNo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airwaybilldeliveryrecord`
--
ALTER TABLE `airwaybilldeliveryrecord`
  MODIFY `airWaybillDeliveryRecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ChargeTable`
--
ALTER TABLE `ChargeTable`
  MODIFY `chargeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `DeliveryStatus`
--
ALTER TABLE `DeliveryStatus`
  MODIFY `deliveryStatusID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AirWaybill`
--
ALTER TABLE `AirWaybill`
  ADD CONSTRAINT `FKAirWaybill118245` FOREIGN KEY (`locationID`) REFERENCES `Location` (`locationID`),
  ADD CONSTRAINT `FKAirWaybill444828` FOREIGN KEY (`customerEmail`) REFERENCES `Customer` (`customerEmail`),
  ADD CONSTRAINT `FKAirWaybill454482` FOREIGN KEY (`staffID`) REFERENCES `Staff` (`staffID`);

--
-- Constraints for table `AirWaybillDeliveryRecord`
--
ALTER TABLE `AirWaybillDeliveryRecord`
  ADD CONSTRAINT `FKAirWaybill115654` FOREIGN KEY (`airWaybillNo`) REFERENCES `AirWaybill` (`airWaybillNo`),
  ADD CONSTRAINT `FKAirWaybill437304` FOREIGN KEY (`deliveryStatusID`) REFERENCES `DeliveryStatus` (`deliveryStatusID`);

--
-- Constraints for table `ChargeTable`
--
ALTER TABLE `ChargeTable`
  ADD CONSTRAINT `FKChargeTabl634318` FOREIGN KEY (`locationID`) REFERENCES `Location` (`locationID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
