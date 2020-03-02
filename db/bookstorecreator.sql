-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 02:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstorecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(50) NOT NULL,
  `Author_name` varchar(50) NOT NULL,
  `Book_description` varchar(1000) NOT NULL,
  `Book_price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`Book_id`, `Book_name`, `Author_name`, `Book_description`, `Book_price`, `Quantity`, `Image`) VALUES
(1, 'Android Programming For Beginners', 'John Hortons', 'Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as smartphones and tablets.', 78, 60, 'images/Android_Programming.jpg'),
(2, 'PHP and MySQL ', 'Larry Ullman', 'Easy visual approach uses demonstrations and real-world examples to guide you step by step through advanced techniques for dynamic Web development using PHP and MySQL', 58, 55, 'images/php.jpg'),
(3, 'Getting MEAN with Mongo,Express,Angular,Node', 'Simon Holmes', 'Getting MEAN with Mongo, Express, Angular, and Node teaches readers how to develop web applications end-to-end using the MEAN stack. You\'ll systematically discover each technology in the MEAN stack as you build up an application one layer at a time, just as you\'d do in a real project', 68, 70, 'images/mean.jpg'),
(4, 'Google Analytics Breakthrough', 'Feras Alhlou, Shiraz Asif, Eric Fettman', 'Google Analytics Breakthrough is a much-needed comprehensive resource for the world\'s most widely adopted analytics tool. Designed to provide a complete, best-practices foundation in measurement strategy, implementation, reporting, and optimization, this book systematically demystifies the broad range of Google Analytics features and configurations', 60, 70, 'images/Google_Analytics.jpg'),
(5, 'Adobe Photoshop CC ', 'Andrew Faulkner, Conrad Chavez', 'Creative professionals seeking the fastest, easiest, most comprehensive way to learn Adobe Photoshop choose Adobe Photoshop CC Classroom in a Book (2017 release) from Adobe Press. The 15 project-based lessons in this book show users step-by-step the key techniques for working in Photoshop and how to correct, enhance, and distort digital images, create image composites, and prepare images for print and the web', 62, 70, 'images/adobe.jpg'),
(7, 'Responsive Web Design With HTML5 and CSS', 'Ben Frain', 'Understand what responsive design is, and why it\'s vital for modern web development\r\nHTML5 markup is cleaner, faster, and more semantically rich than anything that has come before - learn how to use it and its latest features', 39, 60, 'images/responsive.jpg'),
(8, 'Computer and Network Security', 'Richard R', 'A comprehensive survey of computer network security concepts, methods, and practices. This authoritative volume provides an optimal description of the principles and applications of computer network security in particular, and cyberspace security in general', 70, 40, 'images/Network_Security.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
