-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 11:12 PM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `number` int(20) NOT NULL,
  `checks` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`number`, `checks`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nose`
--

CREATE TABLE `nose` (
  `number` int(20) NOT NULL,
  `checks` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nose`
--

INSERT INTO `nose` (`number`, `checks`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 0),
(9, 0),
(10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `person1`
--

CREATE TABLE `person1` (
  `name` char(30) NOT NULL,
  `id` int(20) NOT NULL,
  `age` int(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `medicalhistory` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person1`
--

INSERT INTO `person1` (`name`, `id`, `age`, `city`, `area`, `gender`, `medicalhistory`, `email`, `password`) VALUES
('لرلر', 1, 55, 'الاالا', 'لااتا', 'الااتلا', 'تنلاتى', 'الاتالا', 'تلاتلات'),
('نورا', 525252, 55, 'الغردقة', 'bjb', 'ذكر', 'بلابليليسلرير', 'hjvjhv@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 0, 23, '', 'Ø¹Ø¬Ù…ÙŠ', '', '', 'hjvjhv@gmail.com', ''),
('Ù†ÙˆØ±Ø§', 0, 655, '', 'Ø¹Ø¬Ù…ÙŠ', '', '', 'bvjhb@gmail.com', 'kjjkj'),
('Ù†ÙˆØ±Ø§', 2147483647, 54, '', 'Ø¹Ø¬Ù…ÙŠ', '', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 2147483647, 54, '', 'Ø¹Ø¬Ù…ÙŠ', '', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 2147483647, 55, '', 'Ø¹Ø¬Ù…ÙŠ', '', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 2147483647, 55, '', 'Ø¹Ø¬Ù…ÙŠ', '', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 2147483647, 55, '', 'Ø¹Ø¬Ù…ÙŠ', '', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', ''),
('Ù†ÙˆØ±Ø§', 2147483647, 55, '', 'Ø¹Ø¬Ù…ÙŠ', '', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', ''),
('Ù†ÙˆØ±Ø§', 2147483647, 55, '', 'Ø¹Ø¬Ù…ÙŠ', 'Ø§Ù†Ø«Ù‰', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 2147483647, 55, '', 'Ø¹Ø¬Ù…ÙŠ', 'Ø§Ù†Ø«Ù‰', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bkjb@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 2147483647, 55, '', 'Ø¹Ø¬Ù…ÙŠ', 'Ø§Ù†Ø«Ù‰', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bkjb@gmail.com', 'LJWr2V4D2HgTWwX'),
('Ù†ÙˆØ±Ø§', 2147483647, 55, 'Ù…Ø·Ø±ÙˆØ­', 'Ø¹Ø¬Ù…ÙŠ', 'Ø§Ù†Ø«Ù‰', 'Ù„Ø±ØªØ±ØªØ§Ø±Ø§ØªÙ„Ø§Ø§Ù„Ø§Ù†', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX'),
('نورا', 2147483647, 55, 'الجيزة', 'عجمي', 'انثى', 'لرترتاراتلاالانت', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX'),
('نورا', 2147483647, 55, 'المنصورة', 'عجمي', 'انثى', 'لرترتاراتلاالانت', 'bvjhb@gmail.com', 'LJWr2V4D2HgTWwX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `nose`
--
ALTER TABLE `nose`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nose`
--
ALTER TABLE `nose`
  MODIFY `number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `person1`
--
ALTER TABLE `person1`
  ADD CONSTRAINT `test` FOREIGN KEY (`id`) REFERENCES `person` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
