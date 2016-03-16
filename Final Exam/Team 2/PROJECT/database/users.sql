-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 01:16 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectreal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hero_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `hero_id`) VALUES
(3, 'tester', 'f5d1278e8109edd94e1e4197e04873b9', '1@d.b', NULL),
(4, 'zdravko', 'c9a43a39d6155531602c670e54b2a93b', 'zdravo98@gmail.com', NULL),
(5, 'fefe', '084fe8aecafea8b2f84cca493377eb9b', 'fef@g.s', NULL),
(6, 'gordon', 'e10adc3949ba59abbe56e057f20f883e', 'gordon@gmail.com', NULL),
(7, 'sa6o', '5c63f2ef9c4caad6d1d3f6776fa68dc6', 'sa60@gmail.com', NULL),
(8, 'Tato', '827ccb0eea8a706c4c34a16891f84e7b', '2@d.a', 1),
(9, 'patkata', '1be4a785d86c8f6228cc9d05eca029e1', 'patkata@mistana.sega', NULL),
(10, 'valq', 'bc79bcfd0d543dea69a281c9cc510bfd', 'valq@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
