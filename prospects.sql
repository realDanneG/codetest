-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 07:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prospects`
--

-- --------------------------------------------------------

--
-- Table structure for table `prospects`
--

CREATE TABLE `prospects` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(128) NOT NULL,
  `Lastname` varchar(128) NOT NULL,
  `Loan` decimal(65,5) NOT NULL,
  `Interest` decimal(10,5) NOT NULL,
  `Years` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prospects`
--

INSERT INTO `prospects` (`id`, `Firstname`, `Lastname`, `Loan`, `Interest`, `Years`) VALUES
(1, 'John', 'Doe', '1000.00000', '5.00000', 1),
(2, 'Eric', 'Persson', '10000.00000', '4.00000', 3),
(3, 'Peter', 'Buté', '5000.00000', '5.00000', 2),
(4, 'Nick', 'Utter', '7500.00000', '4.00000', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prospects`
--
ALTER TABLE `prospects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prospects`
--
ALTER TABLE `prospects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
