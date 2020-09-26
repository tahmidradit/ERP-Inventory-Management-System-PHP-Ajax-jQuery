-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 05:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmPassword` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `confirmPassword`, `name`, `email`) VALUES
(1, '12345', '12345', 'Name', 'name@gmail.com'),
(2, '123456', '123456', 'Name2', 'name2@gmail.com'),
(3, 'ad23112', 'ad23112', 'Name3', 'name3@gmail.com'),
(4, '43215', '43215', 'Name4', 'name4@gmail.com'),
(5, '654321', '654321', 'Name5', 'name5@gmail.com'),
(6, 'abcd234', 'abcd234', 'Name6', 'name6@gmail.com'),
(7, 'Name7', 'Name7', 'Name7', 'name7@gmail.com'),
(8, 'Name8', 'Name8', 'Name8', 'name8@gmail.com'),
(9, '9', '9', 'admin', '9@gmail.com'),
(12, '1234567', '1234567', 'Name12', 'name12@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
