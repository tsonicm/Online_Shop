-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 02:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `ewd`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagedb`
--

CREATE TABLE `imagedb` (
  `ID` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `imagedb`
--

INSERT INTO `imagedb` (`ID`, `image`, `name`, `price`) VALUES
(1, '5-dots.webp', '5 Dots Pattern', 5),
(2, 'circle-blues.webp', 'Circle Blues Pattern', 10),
(3, 'cork-board.webp', 'Cork Board Pattern', 10),
(4, 'wheat.webp', 'Wheat Pattern', 10),
(5, 'pink-flower.webp', 'Pink Flower Pattern', 5),
(6, 'washi.webp', 'Washi Pattern', 5),
(7, 'food.webp', 'Food Pattern', 5),
(8, 'watercolor.webp', 'Watercolor Pattern', 5),
(9, 'bush.webp', 'Bush Pattern', 5),
(10, 'y-so-serious.webp', 'Y so serious Pattern', 5),
(11, 'dark-grey-terrazzo.webp', 'Dark Grey Terrazzo Pattern', 10),
(12, 'darkness.webp', 'Darkness Pattern', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagedb`
--
ALTER TABLE `imagedb`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagedb`
--
ALTER TABLE `imagedb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
