-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2020 at 09:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13898760_contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `number` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile1` varchar(255) NOT NULL,
  `mobile2` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`number`, `name`, `dob`, `mobile1`, `mobile2`, `email1`, `email2`) VALUES
(1, 'Priya', '1998-12-12', '7665688977', '6657657671', 'priya5632@gmail.com', ''),
(2, 'Rahul Mishra', '1999-09-15', '7836788871', '5662667991', 'rahul676@gmail.com', ''),
(3, 'Rehan', '1999-08-25', '8765457681', '9675436456', 'rehan345@gmail.com', ''),
(4, 'Vaibhav  Goel', '1999-09-10', '7873478978', '9865466999', 'vaibhav@gmail.com', 'vgoel@gmail.com'),
(5, 'sam', '1999-09-11', '7675434899', '', 'samsam@yahoo.com', ''),
(6, 'Arnav', '1999-08-11', '8765445676', '', 'arnav76@gmail.com', ''),
(7, 'Deepak', '1989-09-10', '7654679876', '', 'deepak875@yahoo.com', ''),
(8, 'Sumit Tyagi', '1999-09-11', '7765458781', '9765357865', 'sumittyagi32@gmail.com', ''),
(9, 'Nikhil', '2003-07-19', '8786543476', '7635678979', 'nikhil765@gmail.com', 'niknik009@yahoo.com'),
(10, 'Abhishek', '1995-04-11', '4356758987', '9865786546', 'abhishek08@gmail.com', ''),
(11, 'Dharminder', '1989-09-19', '8676543456', '8786543428', 'dharminder987@gmail.com', ''),
(12, 'Jasmeet Singh', '1997-10-06', '9876543238', '8765643567', 'jasmeet23@gmail.com', ''),
(13, 'Harmanpreet Singh', '1998-03-23', '4567889765', '9876678978', 'harmanpreet06@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`number`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
