-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 07:35 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `Account_number` varchar(256) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `current_balance` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `City` varchar(256) NOT NULL,
  `State` varchar(256) NOT NULL,
  `Country` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Name`, `email`, `Account_number`, `mobile_no`, `current_balance`, `CustomerID`, `City`, `State`, `Country`) VALUES
('KUNJ TRIVEDI', 'kunjtrivedi@mail.com', 'XXXXXX000012', 1234567899, 3092000, 1, 'MUMBAI', 'MAHARASHTRA', 'INDIA'),
('HITESH TRIVEDI', 'hiteshtrivedi@mail.com', 'XXXXXX000014', 1234589992, 1200000, 2, 'AHEMDABAD', 'GUJARAT', 'INDIA'),
('JAINISH SHAH', 'jainish@mail.com', 'XXXXXX000017', 1234546129, 90000, 3, 'PUNE', 'MAHARASHTRA', 'INDIA'),
('AJAY KOTAK', 'ajaykotak@mail.com', 'XXXXXX000015', 1234589993, 1498000, 4, 'AHEMDABAD', 'GUJARAT', 'INDIA'),
('MOKSHA SHAH', 'mokshashah@mail.com', 'XXXXXX000020', 1234546128, 97000, 5, 'PUNE', 'MAHARASHTRA', 'INDIA'),
('HARSHI SHAH', 'harshi@mail.com', 'XXXXXX000018', 1234546120, 105000, 6, 'NASHIK', 'MAHARASHTRA', 'INDIA'),
('SAURABH OZA', 'saurabhoza@mail.com', 'XXXXXX000019', 2143658719, 150000, 7, 'PANJI', 'GOA', 'INDIA'),
('PARAG JAIN', 'parag@mail.com', 'XXXXXX000016', 1324657986, 75000, 8, 'NASHIK', 'MAHARASHTRA', 'INDIA'),
('MANTHAN KHIVASARA', 'manthankhivasara@mail.com', 'XXXXXX000013', 1324657985, 80000, 9, 'MAPUSA', 'GOA', 'INDIA'),
('PARUL TRIVEDI', 'parultrivedi@mail.com', 'XXXXXX000011', 2143658717, 155000, 10, 'SURAT', 'GUJARAT', 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `TransactionID` int(11) NOT NULL,
  `Sender` varchar(256) NOT NULL,
  `Reciever` varchar(256) NOT NULL,
  `Amount` varchar(256) NOT NULL,
  `Day` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`TransactionID`, `Sender`, `Reciever`, `Amount`, `Day`) VALUES
(1, 'AJAY KOTAK', 'KUNJ TRIVEDI', '1000', '14/07/2021 17:45:51'),
(2, 'AJAY KOTAK', 'KUNJ TRIVEDI', '1000', '14/07/2021 17:47:33'),
(3, 'KUNJ TRIVEDI', 'JAINISH SHAH', '10000', '18/07/2021 14:26:16'),
(4, 'JAINISH SHAH', 'HARSHI SHAH', '10000', '18/07/2021 14:26:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`TransactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
