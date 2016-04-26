-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.9-MariaDB
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
-- Структура на таблица `heroes`
--

CREATE TABLE `heroes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `STR` varchar(255) NOT NULL,
  `DEX` int(255) NOT NULL,
  `VIT` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `INT_` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `STR`, `DEX`, `VIT`, `user_id`, `INT_`) VALUES
(1, 'Cyka', '14', 2, 200, 8, 0),
(2, 'Vrat', '11', 12, 34, 0, 1),
(3, 'Proben Geroi', '10', 11, 12, 0, 43),
(4, '', '', 0, 0, 0, 0),
(5, 'jorkata', '8', 2, 11, 0, 16);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hero_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `hero_id`) VALUES
(3, 'tester', 'f5d1278e8109edd94e1e4197e04873b9', '1@d.b', NULL),
(4, 'zdravko', 'c9a43a39d6155531602c670e54b2a93b', 'zdravo98@gmail.com', NULL),
(5, 'fefe', '084fe8aecafea8b2f84cca493377eb9b', 'fef@g.s', NULL),
(6, 'gordon', 'e10adc3949ba59abbe56e057f20f883e', 'gordon@gmail.com', NULL),
(7, 'sa6o', '5c63f2ef9c4caad6d1d3f6776fa68dc6', 'sa60@gmail.com', NULL),
(8, 'Tato', '827ccb0eea8a706c4c34a16891f84e7b', '2@d.a', 1),
(9, 'patkata', '1be4a785d86c8f6228cc9d05eca029e1', 'patkata@mistana.sega', NULL),
(10, 'valq', 'bc79bcfd0d543dea69a281c9cc510bfd', 'valq@gmail.com', NULL),
(11, 'kapak', '10838cb867be70d6fa017413aefa15f6', 'kapak@yahoo.com', NULL),
(12, 'mamam', 'e10adc3949ba59abbe56e057f20f883e', 'mamam@mam.am', NULL),
(13, 'cyka', '48e13bf48cc254a975ec6a0da1fd58e1', 'cyka@cyka.cyka', NULL),
(14, 'proverka', '08a4a56c0f9c6dea0bb890cd24120335', 'proverka@pro.verka', NULL),
(15, 'dadadada', '6d2cf3fdab44bdfc1990230f21e4c25d', 'dada@da.da', NULL),
(16, 'dqqqq', '437599f1ea3514f8969f161a6606ce18', 'qqqq@q.q', NULL),
(17, 'valawa', '6cdb30c0ed29cbc7e6db34755d055019', 'laq@lad.ca', NULL),
(18, 'gagaag', 'bea2d2108715272f3f56493a4c8739c8', 'gagaag@d.d', NULL),
(19, 'adgggg', '6f4fe8d952241e08ccc764d657f379a5', 'adgggg@dd.d', NULL),
(20, 'jajaja', '655faa8ba799a3a1ae309c2b40d142fc', 'jajaja@s.s', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
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
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
