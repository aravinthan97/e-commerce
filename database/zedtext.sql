-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 11:32 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zedtext`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_ID` int(11) NOT NULL,
  `Company_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Street` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `Poscode` int(15) NOT NULL,
  `Logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_ID`, `Company_Name`, `Email`, `Password`, `Street`, `City`, `State`, `Poscode`, `Logo`) VALUES
(1, 'aravinthanq', 'aravinthan@gmail.com', '1234', 'lutea lane', 'jindalee', 'wa', 6036, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(3, 'dfsdfdsfg', 'sdfsdfdsfdsfsdf', 'dsfdsfdsfdsf', 'ssdfdsfsdf', 'sdfdsfsdf', 'sdfsdfdsf', 21312, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(4, 'sadsad', 'asdasdf43dsfdsf', 'sadadasd', 'sadasdasd', 'asdasdasd', 'asdasdasdasd', 324234, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(5, 'fafsdfdsfg', 'adsfadasd', 'asdasdbgcvhrd', 'sadsrgfcv ', 'fsdfg ', 'dsf', 345, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(6, 'fdsfsdfdsfdsfdsfsdf', 'dsfsdfsdf', 'asdasd', 'asdasdasd', 'asdasdasd', 'asdadsasd', 342532, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(7, 'fafsdfdsfg', 'adsfadasd', 'asdasdbgcvhrd', 'sadsrgfcv ', 'fsdfg ', 'dsf', 345, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(8, 'fdsfsdfdsfdsfdsfsdf', 'dsfsdfsdf', 'asdasd', 'asdasdasd', 'asdasdasd', 'asdadsasd', 342532, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(9, 'aravinthanq', 'aravinthan@gmail.com', '1234', 'lutea lane', 'jindalee', 'wa', 6036, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(10, 'dfsdfdsfg', 'sdfsdfdsfdsfsdf', 'dsfdsfdsfdsf', 'ssdfdsfsdf', 'sdfdsfsdf', 'sdfsdfdsf', 21312, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(11, 'sadsad', 'asdasdf43dsfdsf', 'sadadasd', 'sadasdasd', 'asdasdasd', 'asdasdasdasd', 324234, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(12, 'fafsdfdsfg', 'adsfadasd', 'asdasdbgcvhrd', 'sadsrgfcv ', 'fsdfg ', 'dsf', 345, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(13, 'fdsfsdfdsfdsfdsfsdf', 'dsfsdfsdf', 'asdasd', 'asdasdasd', 'asdasdasd', 'asdadsasd', 342532, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(14, 'fafsdfdsfg', 'adsfadasd', 'asdasdbgcvhrd', 'sadsrgfcv ', 'fsdfg ', 'dsf', 345, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg'),
(15, 'fdsfsdfdsfdsfdsfsdf', 'dsfsdfsdf', 'asdasd', 'asdasdasd', 'asdasdasd', 'asdadsasd', 342532, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'sdasdfd', 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg', 20),
(2, 'ddsfdsfdsfds', 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Australian_milo.jpg', 333);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Joined_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `UserName`, `Email`, `Password`, `Date_Of_Birth`, `Joined_Time`) VALUES
(1, 'aravvv', 'aravinthancracker@gmail.com', '$2y$10$.89Q75wiohhnlfKPb.99NOJFWwCrEKya89.bk.LHptjGNVj.m9Y.a', '2018-05-17', '0000-00-00 00:00:00'),
(3, 'aravinthan', 'aravinthan@gmail.com', '$2y$10$busezCvAKfF99dfEtMS5/erQP9QPoy4QurJZEQj13QP1VFUkn9w6S', '2018-05-23', '0000-00-00 00:00:00'),
(4, 'punkkk', 'punkkkk@gmail.com', '$2y$10$GH5t2fKYnp/8r9w2cpyTlufsZ5KKiYDYJahKnf36tsVtCXNZAB3Qu', '2018-05-22', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Company_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
