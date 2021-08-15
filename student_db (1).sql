-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2021 at 09:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `fname`, `email`, `password`, `cpassword`) VALUES
(8, 'Anjali Rengade', 'anjalirengade23@gmail.com', '$2y$10$w9zC.imV4AKUAegGTe/4L.xmFn7YYyjo81Wk6nRF6m7fszMkXjTmG', '$2y$10$um1PWQcYqYIQFooy98YNheaBglKNXQrX4ZaxPTK4tMcePePffHaQq'),
(9, 'Anjali Rengade', 'anjalirengade23@gmail.c', '$2y$10$5bvTPs1Lf2I3AipJSv.oVeMF6n.qp5Gj6eGGmJBW.vjE9s7EmcxYu', '$2y$10$OL3paHxCUURCE6yDd8roP.EWURMS6T9jgNDa3/abCixPBC9CcZsFy');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `st_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `class` int(255) NOT NULL,
  `rollno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`st_id`, `fname`, `lname`, `email`, `mobile`, `dob`, `gender`, `address`, `city`, `state`, `class`, `rollno`) VALUES
(1, 'Anjali', 'R', 'anjalirengade23@gmail.com', '8669563962', '2001-08-21', 'Female', 'Bharamatanagar Dighi', 'Pune', 'Maharashtra', 12, '39'),
(2, 'Anjali', 'R', 'anjalirengade23@gmail.com', '8669563962', '2001-08-21', 'Female', 'GH-1,Bajaj Nagar, VNIT, Nagpur', 'Nagpur', 'Maharashtra', 12, '39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
  MODIFY `st_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
