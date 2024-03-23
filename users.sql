-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 12:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `birthdate`, `age`, `username`, `email`, `password`) VALUES
(0, '', '', '', '', 0, 0, 'jamaicazhaynenacor', 'justinacor@gmail.com', '56e67d204c77a66db35ffe83825c85b2'),
(0, '', '', '', '', 0, 0, 'jamaicazhaynenacor', 'justinacor@gmail.com', '6aee117ee49c22efc0f535fce8307834'),
(0, '', '', '', '', 0, 0, 'jaaaammmm', 'jamaicazhaynenaor04#@gmail.com', '6aee117ee49c22efc0f535fce8307834'),
(0, '', '', '', '', 0, 0, 'jamaicanacor', 'jamaicazhaynenaor04#@gmail.com', '6aee117ee49c22efc0f535fce8307834'),
(0, '', '', '', '', 0, 0, 'jamaicazhaynenacor', 'jamaicazhaynenaor04#@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(0, '', '', '', '', 0, 0, 'Jamaica', 'zhaynnenacor@gmail.com', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
