-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 06:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lost&found`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anonymous`
--

CREATE TABLE `anonymous` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lostname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `email`, `lostname`, `category`, `description`, `photo`, `location`) VALUES
(9, 'arjunsingh73362@gmail.com', 'arjun', 'qwerty', 'lost', './IMAGES/upload/arjun.jpg', 'qwerty'),
(10, 'arjunsingh73362@gmail.com', 'kljsaxn', 'laksc', 'lkasnc', 'IMAGES/upload/kljsaxn.jpg', 'lkass'),
(11, 'arjunsingh73362@gmail.com', 'akash', 'person', 'qwertyu', 'IMAGES/upload/akash.jpg', 'qwerty'),
(12, 'arjunsingh73362@gmail.com', 'akhil', 'person', 'qwerty', 'IMAGES/upload/akhil.jpg', 'qwertyu'),
(13, 'arjunsingh73362@gmail.com', 'qwert', 'qwert', 'wert', 'IMAGES/upload/qwert.png', 'werty'),
(14, 'arjunsingh73362@gmail.com', 'qwert', 'qwert', 'wert', 'IMAGES/upload/qwert.jpg', 'werty'),
(15, 'arjunsingh73362@gmail.com', 'qwert', 'qwert', 'wert', 'IMAGES/upload/qwert.jpg', 'werty'),
(16, 'arjunsingh73362@gmail.com', 'qwert', 'qwert', 'wert', 'IMAGES/upload/qwert.png', 'werty'),
(17, 'arjunsingh73362@gmail.com', 'qwert', 'qwert', 'wert', 'IMAGES/upload/qwert.jpg', 'werty');

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

CREATE TABLE `registereduser` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registereduser`
--

INSERT INTO `registereduser` (`id`, `name`, `email`, `phone`, `password`) VALUES
(3, 'qwerty', 'qwerty@gmail.com', '123456789', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anonymous`
--
ALTER TABLE `anonymous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost`
--
ALTER TABLE `lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registereduser`
--
ALTER TABLE `registereduser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anonymous`
--
ALTER TABLE `anonymous`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registereduser`
--
ALTER TABLE `registereduser`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
