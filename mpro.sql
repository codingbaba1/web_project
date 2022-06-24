-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 11:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `uphone` int(10) NOT NULL,
  `upin` varchar(8) NOT NULL,
  `umail` varchar(20) NOT NULL,
  `sub` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`uphone`, `upin`, `umail`, `sub`) VALUES
(2147483647, '201307', 'imran1@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(20) NOT NULL,
  `uphone` varchar(13) DEFAULT NULL,
  `uemail` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `uadd` varchar(30) NOT NULL,
  `upsw` varchar(10) NOT NULL,
  `status` enum('Active','Unactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `uphone`, `uemail`, `user`, `uadd`, `upsw`, `status`) VALUES
('9990421471', '0', '', '', 'imran123', '', ''),
('raj', '2147483647', 'raj@gmail.com', '', 'raj123', '', ''),
('shekhar', '2147483647', 'shekhar@gmail.com', '', '', 'shekhar123', ''),
('imran@gmail.com', '2147483647', 'imran1@gmail.com', 'plumber', 'CHHAJARSI COLONY SECTOR-63 NOI', 'imran123', ''),
('Pooja', '2147483647', 'pooja@gmail.com', '', '', 'pooja123', ''),
('Priya', '9199887755', 'priya@gmail.com', '', '', 'priya123', ''),
('Arti', '+917836861471', 'arti@gmail.com', '', '', 'art123', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
