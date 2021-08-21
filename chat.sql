-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 11:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(50) NOT NULL,
  `incoming_msg_id` int(50) NOT NULL,
  `outgoing_msg_id` int(50) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(0, 336649930, 529221746, 'hi noura');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `unique_id` int(50) NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(6, 1242766246, 'noura', 'mahmod', 'noura@gmail.com', '81dc9bdb52d04dc20036', '1615881185nourhan.jpg', 'Offline now'),
(7, 619034667, 'دكتور', 'باطنة', 'stomach@gmail.com', '81dc9bdb52d04dc20036', '1615881270staff-1.jpg', 'Offline now'),
(8, 1277729688, 'noyra', 'nn', 'n@gmail.com', '496b4aa5cda4e394065f', '16158917001615881270staff-1.jpg', 'Offline now'),
(9, 440021747, 'noura', 'nasr', 'nourac2s@gmail.com', '496b4aa5cda4e394065f', '16158929241615480939thKZU21PAI.jpg', 'Active now'),
(10, 1329665152, 'noura', 'nn', 'nscsc@gmail.com', '496b4aa5cda4e394065f', '16159785361615863301nourhan.jpg', 'Active now'),
(11, 1341062766, 'nnn', 'fcf', 'ghvkg@gmail.com', '496b4aa5cda4e394065f', '1616177860staff-3.jpg', 'Active now'),
(12, 1138972942, 'dr ', 'islam', 'gchg@gmail.com', '496b4aa5cda4e394065f', '1624169598staff-2.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
