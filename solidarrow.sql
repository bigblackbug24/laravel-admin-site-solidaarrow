-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 01:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solidarrow`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagaries`
--

CREATE TABLE `catagaries` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdiscription` text NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `Pid`, `price`, `created_by`, `created_on`) VALUES
(1, 3, '100', 0, '0000-00-00 00:00:00'),
(2, 3, '100', 0, '0000-00-00 00:00:00'),
(3, 6, '23', 0, '0000-00-00 00:00:00'),
(4, 6, '23', 0, '0000-00-00 00:00:00'),
(5, 0, '100', 0, '2016-04-05 06:30:19'),
(6, 10, '100', 0, '2016-04-05 07:13:05'),
(7, 10, '400', 0, '2016-04-05 07:21:41'),
(8, 11, '300', 0, '2016-04-05 07:22:31'),
(9, 11, '100', 0, '2016-04-06 10:09:40'),
(13, 11, '100', 0, '2016-04-06 10:58:00'),
(14, 0, '100', 0, '2016-04-06 11:01:35'),
(15, 54, '100', 0, '2016-04-06 11:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `Asin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `created_on`, `created_by`, `updated_by`, `updated_on`, `Asin`) VALUES
(7, 'pen', 0, '2016-04-04 13:07:16', 0, 0, '0000-00-00 00:00:00', ''),
(8, 'lux', 0, '2016-04-04 13:27:45', 0, 0, '0000-00-00 00:00:00', ''),
(9, 'pen', 0, '2016-04-05 06:30:19', 0, 0, '0000-00-00 00:00:00', ''),
(10, 'lux', 0, '2016-04-05 07:13:04', 0, 0, '2016-04-05 08:33:37', ''),
(12, 'tibat', 0, '2016-04-05 07:22:31', 0, 0, '0000-00-00 00:00:00', ''),
(13, 'tibat', 0, '2016-04-06 08:53:18', 0, 0, '0000-00-00 00:00:00', ''),
(46, 'pen', 0, '2016-04-06 11:03:30', 0, 0, '0000-00-00 00:00:00', ''),
(47, 'pen', 0, '2016-04-06 11:03:44', 0, 0, '0000-00-00 00:00:00', ''),
(48, 'pen', 0, '2016-04-06 11:10:29', 0, 0, '0000-00-00 00:00:00', ''),
(49, 'pen', 0, '2016-04-06 11:11:25', 0, 0, '0000-00-00 00:00:00', ''),
(50, 'pen', 0, '2016-04-06 11:11:25', 0, 0, '0000-00-00 00:00:00', ''),
(51, 'pen', 0, '2016-04-06 11:11:56', 0, 0, '0000-00-00 00:00:00', ''),
(52, 'pen', 0, '2016-04-06 11:11:56', 0, 0, '0000-00-00 00:00:00', ''),
(53, 'pen', 0, '2016-04-06 11:12:12', 0, 0, '0000-00-00 00:00:00', ''),
(54, 'pen', 0, '2016-04-06 11:20:05', 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `password`, `Phone_no`, `Address`, `status`) VALUES
(12, 'admin', 'admin@gmail.com', 'admin', '21', '', 1),
(13, 'sam', 'sam@gmail.com', 'sam', '35', '', 0),
(16, 'jimmy', 'jimmy@yahoo.com', 'jimmy', '35', '', 0),
(17, 'jonny', 'jonny@gmail.com', 'jonny', '0300-2589631', 'floor 3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagaries`
--
ALTER TABLE `catagaries`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagaries`
--
ALTER TABLE `catagaries`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
