-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 10:36 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiber_cops`
--

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `farm_id` int(11) NOT NULL,
  `cost_id` int(11) NOT NULL,
  `seed` varchar(255) NOT NULL,
  `water` varchar(255) NOT NULL,
  `electricity` varchar(255) NOT NULL,
  `chemical` varchar(255) NOT NULL,
  `equipments` varchar(255) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `othercost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`farm_id`, `cost_id`, `seed`, `water`, `electricity`, `chemical`, `equipments`, `transport`, `othercost`) VALUES
(0, 1, '122', '155', '145', '144', '165', '456', '7894');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `farm_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `verify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`farm_id`, `first_name`, `last_name`, `email`, `mobile_number`, `username`, `password`, `role`, `verify`) VALUES
(1, 'hihow', 'yoyo', 'ayumodi12@gmail.com', '7383077949', '', '$2y$10$ilxxr8PchjINW5VRpHN79uZk3I2mNk5ZNfs4wLQ6M3zyY3LoUaaQK', 'Mill Worker', 'no'),
(2, 'Bhau', 'Gaddi', 'technojar12@gmail.com', '9852146558', '', '$2y$10$yA5CU8I08Ehm94/Fh0P/3ulBu/z/jSORpwXFFIPFL6gZ/MJQKbqIa', 'Farmer', 'no'),
(3, 'Dhairya', 'Sharma', 'dhairyasharma7120@gmail.com', '8320085121', '', '$2y$10$kdDnM5nut.0DiPM8LZqIvuXsyFRt9fioHfCAu1pxIWjX7amtzB5t6', 'Farmer', 'yes'),
(5, 'carry', 'minati', 'edisonmodi@gmail.com', '9852146587', '', '$2y$10$wL8wTNzvL49SPhs73tNzU.ndF9vIruVlERfBLUmbHof.dDsuLP9Pa', 'Farmer', 'no'),
(6, 'dude', 'Modi', 'modiayush98@gmail.com', '9825214658', '', '$2y$10$TiN.5Bis5Y3VXDFhPxyKwOM6.QyH3AYIJsdK.pEG0eNNFrff9YzCC', 'Farmer', 'yes'),
(7, 'abcd', 'xyz', 'ayushmodi12@yahoo.co.in', '9825214658', '', '$2y$10$jfduRadt0NdrGuOiNPUH1ON4zTLnhYtWFlAIojfaPOIUKG03Ig5dC', 'Mill Worker', 'no'),
(8, 'Hhairya', 'Sharma', 'dhairyasharma7120@gmail.com', '8320085121', 'dddd', '$2y$10$COKBqHXzhpxswtpykmGh2efNvKgEcICRGB6/P516loxc.EMhrIcoC', 'Farmer', 'no'),
(9, 'lamha', 'bansal', 'lamhabansal@gmail.com', '8320085121', 'lamhaaaa', '$2y$10$5HYq8bfpHtbPPOcjTqlAreVbpJBHHzEDOj/wrjYFaG0NpKfq.8obS', 'Farmer', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`cost_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`farm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `cost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `farm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
