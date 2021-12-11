-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 19, 2021 at 08:43 AM
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
-- Database: `covidhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

CREATE TABLE `request_form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  `condition` text NOT NULL,
  `need` text NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_form`
--

INSERT INTO `request_form` (`id`, `name`, `email`, `number`, `condition`, `need`, `address`) VALUES
(1, 'CHANDAN PAL', 'cpchandanpal7@gmail.com', '7757806864', 'home quarantine and need oxygen supply.', 'Need oxygen-cylinder', 'C/301, Ashok-dham bldg no.2, Ostwal nagari, Central park, Nallasopara (East)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
(1, 'CHHAYANK SINGH', '8108068904', 'chhayank.singh2912@gmail.com', 'Zatch@29'),
(2, 'AYUSH SINGH', '7021742976', 'ayushking001@yahoo.com', 'Ayush@123'),
(3, 'ANIKET SINGH', '9518530925', 'singhaniket1501@gmail.com', 'Aniket@123'),
(4, 'CHANDAN PAL', '7757806864', 'cpchandanpal7@gmail.com', 'Chandan@123'),
(5, 'CHHAYANK', '8108068904', 'chhayank.singh2912@gmail.com', 'Chhayank@12'),
(6, 'CHANDAN PAL', '8108068904', 'cpchandanpal7@gmail.com', 'Chandan@12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_form`
--
ALTER TABLE `request_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_form`
--
ALTER TABLE `request_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
