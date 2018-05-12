-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 08:01 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oag`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `earnings` double DEFAULT NULL,
  `address` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `firstname`, `lastname`, `password`, `earnings`, `address`, `usertype`) VALUES
(5, 'fahim@gmail.com', 'fahim', 'afser', '123', NULL, 'mirpur', 'Admin'),
(11, 'testuser1', '1', '1', '123', NULL, '123', 'User'),
(13, 'soaib@gmail.com', 'soaib', 'safi', '123', NULL, '123', 'User'),
(14, 'test@gmail.com', 'test', 'test', '123', NULL, '123', 'User'),
(15, 'aaaaa', 'aaa', 'aaa', 'aaa', NULL, 'aaa', 'User'),
(16, 'dsddas@gmail.com', 'asaad', 'dsadsd', 'aaaa', NULL, 'gdfgdfgdf', 'User'),
(17, 'a@a.com', 'aaas', 'aasas', 'aaaa', NULL, 'fdfg', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
