-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 07:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buyandsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`email`, `password`) VALUES
('richaishanki@obex.com', 'richaishanki');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `reviews` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `contact`, `reviews`) VALUES
('Richa', 'richa.jain947@gmail.com', '7788765432', 'It\'s a very cool website ;-)');

-- --------------------------------------------------------

--
-- Table structure for table `newad`
--

CREATE TABLE `newad` (
  `id` int(11) NOT NULL,
  `book` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newad`
--

INSERT INTO `newad` (`id`, `book`, `category`, `amount`, `name`, `number`, `email`, `password`, `feedback`, `image`) VALUES
(13, 'Algorithms 222', '1st year books', 100, 'ankit', '1000000000', 'richaishanki@obex.com', 'aaaaa', 'heyo aosh', 'uploads/feed2.jpg'),
(14, 'maths', '1st year books', 253, 'Ankit tiwari', '1236547896', 'ankit@gmail.com', '123', 'this is really helpful', 'uploads/feedback.jpg'),
(15, 'English', '1st year books', 250, 'Ankit tiwari', '1234569874', 'aish96annie@gmail.com', '123', 'This is great way to interact.', 'uploads/bookimages.jpg'),
(16, 'Algorithms and design', '1st year books', 500, 'Aishwarya', '9818244319', 'aish96annie@gmail.com', '1234', 'hey this is nice video', 'uploads/DSC01663.JPG'),
(17, 'English', '1st year books', 350, 'Aishwarya', '1098767891', 'aish96annie@gmail.com', '123', '12345', 'uploads/IMG_20160109_181952.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `verified`
--

CREATE TABLE `verified` (
  `id` int(11) NOT NULL,
  `book` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verified`
--

INSERT INTO `verified` (`id`, `book`, `category`, `amount`, `name`, `number`, `email`, `password`, `feedback`, `image`) VALUES
(13, 'Algorithms 222', '1st year books', 100, 'ankit', '1000000000', 'richaishanki@obex.com', 'aaaaa', 'heyo aosh', 'uploads/feed2.jpg'),
(14, 'maths', '1st year books', 253, 'Ankit tiwari', '1236547896', 'ankit@gmail.com', '123', 'this is really helpful', 'uploads/feedback.jpg'),
(15, 'English', '1st year books', 250, 'Ankit tiwari', '1234569874', 'aish96annie@gmail.com', '123', 'This is great way to interact.', 'uploads/bookimages.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newad`
--
ALTER TABLE `newad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newad`
--
ALTER TABLE `newad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
