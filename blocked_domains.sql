-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19. Jan, 2021 23:40 PM
-- Tjener-versjon: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blocked_domains`
--
CREATE DATABASE IF NOT EXISTS `blocked_domains` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blocked_domains`;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `domains`
--

CREATE TABLE `domains` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dataark for tabell `domains`
--

INSERT INTO `domains` (`id`, `url`, `date`, `active`) VALUES
(1, 'example.com', '19.01.2021 - 12:14:51pm', 0),
(2, 'example.net', '19.01.2021 - 12:15:22pm', 0),
(3, 'example.org', '19.01.2021 - 11:31:58pm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
