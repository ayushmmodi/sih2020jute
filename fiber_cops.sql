-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 06:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `verify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `mobile_number`, `username`, `password`, `role`, `verify`) VALUES
('hihow', 'yoyo', 'ayumodi12@gmail.com', '7383077949', 'ayushmodi12', '$2y$10$ilxxr8PchjINW5VRpHN79uZk3I2mNk5ZNfs4wLQ6M3zyY3LoUaaQK', 'Mill Worker', 'no'),
('Bhau', 'Gaddi', 'technojar12@gmail.com', '9852146558', 'bhau11', '$2y$10$yA5CU8I08Ehm94/Fh0P/3ulBu/z/jSORpwXFFIPFL6gZ/MJQKbqIa', 'Farmer', 'no'),
('carry', 'minati', 'edisonmodi@gmail.com', '9852146587', 'edison', '$2y$10$wL8wTNzvL49SPhs73tNzU.ndF9vIruVlERfBLUmbHof.dDsuLP9Pa', 'Farmer', 'no'),
('dude', 'Modi', 'modiayush98@gmail.com', '9825214658', 'manager', '$2y$10$TiN.5Bis5Y3VXDFhPxyKwOM6.QyH3AYIJsdK.pEG0eNNFrff9YzCC', 'Farmer', 'yes'),
('abcd', 'xyz', 'ayushmodi12@yahoo.co.in', '9825214658', 'modi', '$2y$10$jfduRadt0NdrGuOiNPUH1ON4zTLnhYtWFlAIojfaPOIUKG03Ig5dC', 'Mill Worker', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
