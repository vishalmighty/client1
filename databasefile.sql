-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 10:58 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `client1`
--

CREATE TABLE `client1` (
  `sno` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `birthday` date NOT NULL,
  `number` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pincode` int(10) NOT NULL,
  `schoolname` varchar(40) NOT NULL,
  `SSLCmark` int(10) NOT NULL,
  `HSCmark` int(10) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `dept` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client1`
--

INSERT INTO `client1` (`sno`, `firstname`, `lastname`, `mailid`, `password`, `birthday`, `number`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `schoolname`, `SSLCmark`, `HSCmark`, `degree`, `dept`) VALUES
(4, 'Vish', 'al', 'vishal@gmail.com', 'asdf', '2021-08-20', 2147483647, 'MALE', 'addressssss', 'india', 'tn', 'Chennai', 609609, 'school', 500, 1200, 'BE', ''),
(5, 'Vish', 'al', 'vishal@gmail.com', 'asdf', '2021-08-20', 2147483647, 'MALE', 'addressssss', 'india', 'tn', 'Chennai', 609609, 'school', 500, 1200, 'BE', ''),
(6, 'Vish', 'al', 'vishal@gmail.com', 'asdf', '2021-08-20', 2147483647, 'MALE', 'addressssss', 'india', 'tn', 'Chennai', 609609, 'school', 500, 1200, 'BE', ''),
(7, 'Vish', 'al', 'vishal@gmail.com', 'asdf', '2021-08-20', 2147483647, 'MALE', 'addressssss', 'india', 'tn', 'Chennai', 609609, 'school', 500, 1200, 'BE', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client1`
--
ALTER TABLE `client1`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client1`
--
ALTER TABLE `client1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
