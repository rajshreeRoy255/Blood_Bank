-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 03:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  `user_type` int(100) NOT NULL,
  `password` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `username`, `images`, `user_type`, `password`, `age`, `disease`, `phone`, `address`) VALUES
(1, 'saumya', 't10.jpg', 1, 22, 12, 'fever', 91112233, 'panbazar3'),
(2, 'jay', 't5 - Copy.jpg', 2, 22, 50, 'fever', 99991919, 'Kashmir'),
(3, 'koyal', 't3.jpg', 1, 22, 11, 'fever', 4444, 'Panbazar22'),
(4, 'kajol', 't2.jpg', 2, 22, 100, 'high fever', 123456, 'lokhra road'),
(5, 'admin', 't15.jpg', 3, 22, 24, 'none', 78900090, 'panbazar'),
(6, 'virath', 't9 - Copy.jpg', 2, 22, 33, 'none', 3333, 'abcdefg'),
(7, 'anushka', 't12.jpg', 1, 22, 22, 'fever', 456789, '456tyuio'),
(8, 'sobha', 't14.jpg', 2, 22, 24, 'nothing', 2222, 'sdfr');

-- --------------------------------------------------------

--
-- Table structure for table `blood_rqst`
--

CREATE TABLE `blood_rqst` (
  `rqst_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `blood_group` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_rqst`
--

INSERT INTO `blood_rqst` (`rqst_id`, `user_id`, `usertype`, `quantity`, `blood_group`, `status`, `date`) VALUES
(1, 4, '2', 20, 5, 'accepted', '2022-10-28 17:04:17'),
(2, 4, '2', 200, 1, 'accepted', '2022-10-27 21:41:44'),
(3, 2, '2', 67, 6, 'accepted', '2022-10-28 17:04:54'),
(4, 1, '1', 20, 4, 'accepted', '2022-10-27 21:41:28'),
(5, 1, '1', 50, 4, 'rejected', '2022-10-28 17:04:26'),
(6, 1, '1', 67, 4, 'accepted', '2022-10-27 21:41:47'),
(7, 2, '2', 34, 2, 'accepted', '2022-10-27 21:41:38'),
(8, 2, '2', 34, 3, 'accepted', '2022-10-27 21:41:49'),
(9, 1, '1', 200, 5, 'rejected', '2022-10-27 21:41:52'),
(10, 1, '1', 450, 1, 'accepted', '2022-10-28 08:23:06'),
(11, 6, '2', 50, 1, 'accepted', '2022-10-28 08:20:01'),
(12, 7, '1', 50, 1, 'accepted', '2022-10-28 08:27:17'),
(13, 6, '2', 40, 8, 'rejected', '2022-10-28 16:44:22'),
(14, 2, '2', 1000, 1, 'accepted', '2022-11-05 21:09:51'),
(15, 1, '1', 45, 4, 'pending', '2022-11-08 15:47:50'),
(16, 1, '1', 55, 5, 'pending', '2022-11-08 15:48:06'),
(17, 1, '1', 23, 1, 'accepted', '2022-11-09 15:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `blood_stock_available`
--

CREATE TABLE `blood_stock_available` (
  `stk_id` int(11) NOT NULL,
  `blood_grp` varchar(255) NOT NULL,
  `stk_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_stock_available`
--

INSERT INTO `blood_stock_available` (`stk_id`, `blood_grp`, `stk_qty`) VALUES
(1, 'A+', 365),
(2, 'A-', 531),
(3, 'AB+', 193),
(4, 'AB-', 128),
(5, 'B+', 37),
(6, 'B-', 22),
(7, 'O+', 16),
(8, 'O-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation_tbl`
--

CREATE TABLE `donation_tbl` (
  `donation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `bld_group` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_tbl`
--

INSERT INTO `donation_tbl` (`donation_id`, `user_id`, `qty`, `bld_group`, `status`, `date`) VALUES
(1, 4, 500, 1, 'rejected', '2022-10-27 21:50:50'),
(2, 2, 34, 1, 'rejected', '2022-10-27 21:50:31'),
(3, 2, 67, 2, 'accepted', '2022-10-27 21:50:36'),
(4, 2, 56, 1, 'rejected', '2022-10-27 21:50:53'),
(5, 2, 44, 3, 'accepted', '2022-10-27 21:49:24'),
(6, 2, 56, 1, 'rejected', '2022-10-27 21:50:44'),
(7, 6, 50, 2, 'accepted', '2022-10-28 08:20:29'),
(8, 6, 40, 5, 'accepted', '2022-10-28 16:44:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_rqst`
--
ALTER TABLE `blood_rqst`
  ADD PRIMARY KEY (`rqst_id`);

--
-- Indexes for table `blood_stock_available`
--
ALTER TABLE `blood_stock_available`
  ADD PRIMARY KEY (`stk_id`);

--
-- Indexes for table `donation_tbl`
--
ALTER TABLE `donation_tbl`
  ADD PRIMARY KEY (`donation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood_rqst`
--
ALTER TABLE `blood_rqst`
  MODIFY `rqst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blood_stock_available`
--
ALTER TABLE `blood_stock_available`
  MODIFY `stk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donation_tbl`
--
ALTER TABLE `donation_tbl`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
