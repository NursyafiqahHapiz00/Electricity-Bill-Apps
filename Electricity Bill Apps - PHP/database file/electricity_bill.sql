-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 06:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electricity_bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bills_id` int(11) NOT NULL,
  `bills_date` date NOT NULL,
  `bills_current` int(11) NOT NULL,
  `bills_previous` int(11) NOT NULL,
  `bills_amount` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bills_id`, `bills_date`, `bills_current`, `bills_previous`, `bills_amount`) VALUES
(1, '2021-03-10', 4600, 4200, '128.60'),
(2, '2021-03-24', 8600, 8500, '21.80'),
(3, '2021-01-15', 4950, 3569, '634.80'),
(4, '2021-02-22', 7896, 7541, '105.38'),
(5, '2021-04-17', 4659, 3265, '641.50'),
(6, '2021-05-15', 7845, 7776, '15.04'),
(7, '2021-07-29', 6954, 6236, '292.69'),
(8, '2021-08-16', 4444, 4356, '19.18'),
(9, '2021-06-14', 4987, 4500, '173.49'),
(10, '2021-09-04', 2800, 2659, '30.74'),
(11, '2021-10-19', 1856, 1345, '185.88'),
(12, '2021-11-16', 4512, 4511, '0.22'),
(13, '2021-12-15', 8888, 8585, '78.55'),
(14, '2021-12-19', 1111, 1010, '22.02'),
(15, '2022-01-13', 325, 189, '29.65'),
(16, '2022-01-13', 3256, 2659, '230.25'),
(17, '2022-02-19', 1569, 1356, '47.94');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bills_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
