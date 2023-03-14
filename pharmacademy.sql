-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 03:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(200) NOT NULL,
  `name` varchar(999) NOT NULL,
  `Date` datetime NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(999) NOT NULL,
  `lastname` varchar(999) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `role`, `modified`, `created`) VALUES
(11, '', '', 'tetteh12345', 'tettehsolomon106@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', '', 'thyh', 'catetteh11@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Solomon', 'Tetteh', '12345', 'miran5@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'kate', 'tetteh', 'tetteh12345', 'catetteh11@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'esther', 'oni', '12345', 'ether@yahoo.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'thre', 'four', '12345', 'tee@yahoo.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'ouifjld', 'kld', 'dgdg', 'hshs@t.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
