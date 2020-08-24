-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2020 at 11:04 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `hotelname` varchar(20) NOT NULL,
  `room_no` int(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `rooms` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `lils` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `username`, `hotelname`, `room_no`, `checkin`, `checkout`, `rooms`, `adults`, `lils`) VALUES
(1, '', '', 2, '2020-07-08', '2020-07-16', 3, 4, 0),
(2, '', '', 1, '2020-08-01', '2020-08-02', 1, 1, 0),
(3, '', '', 3, '2020-08-01', '2020-08-02', 1, 1, 0),
(4, '', '', 1, '2020-08-03', '2020-08-04', 1, 1, 0),
(5, '', '', 1, '2020-07-11', '2020-07-12', 1, 1, 0),
(6, '', '', 2, '2020-08-26', '2020-08-27', 1, 1, 0),
(7, '', 'sssp', 8, '2020-07-16', '2020-07-17', 3, 1, 0),
(8, '', 'sssp', 9, '2020-08-01', '2020-08-02', 1, 1, 0),
(9, '', 'sssp', 8, '2020-07-15', '2020-07-16', 1, 1, 0),
(10, '', 'sssp', 9, '2020-08-08', '2020-08-09', 1, 1, 0),
(11, '', 'sssp', 7, '2020-08-21', '2020-08-22', 1, 1, 0),
(12, 'test1', 'sssp', 7, '2020-08-07', '2020-08-08', 1, 1, 0),
(13, '', 'sssp', 8, '2020-08-21', '2020-08-22', 1, 1, 0),
(14, 'test1', 'sssp', 7, '2020-08-14', '2020-08-15', 1, 1, 0),
(15, '', 'sssp', 7, '2020-08-01', '2020-08-02', 1, 1, 0),
(16, '', 'sssp', 8, '2020-08-01', '2020-08-02', 1, 1, 0),
(17, '', 'sssp', 7, '2020-08-20', '2020-08-22', 1, 1, 0),
(18, 'test1', 'sssp', 7, '2020-08-15', '2020-08-16', 1, 1, 0),
(19, 'test1', 'sssp', 7, '2020-09-11', '2020-09-12', 1, 1, 0),
(20, 'test1', 'sswp', 11, '2020-08-21', '2020-08-22', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
