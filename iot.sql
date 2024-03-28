-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 06:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `phdata`
--

CREATE TABLE `phdata` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `reading` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phdata`
--

INSERT INTO `phdata` (`id`, `time`, `reading`) VALUES
(1, '2024-02-20 10:00:00', 7.50),
(2, '2024-02-20 11:00:00', 8.00),
(3, '2024-02-20 12:00:00', 8.50),
(4, '2024-02-20 13:00:00', 9.00),
(5, '2024-02-20 14:00:00', 9.50),
(6, '2024-02-20 15:00:00', 10.00),
(7, '2024-02-20 16:00:00', 10.50),
(8, '2024-02-20 17:00:00', 11.00),
(9, '2024-02-20 18:00:00', 11.50),
(10, '2024-02-20 19:00:00', 12.00);

-- --------------------------------------------------------

--
-- Table structure for table `tank01`
--

CREATE TABLE `tank01` (
  `date` date NOT NULL,
  `numberOfTurtles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tank01`
--

INSERT INTO `tank01` (`date`, `numberOfTurtles`) VALUES
('2024-02-21', 21),
('2024-01-01', 10),
('2024-01-02', 15),
('2024-01-03', 20),
('2024-01-04', 25),
('2024-01-05', 30),
('2024-01-06', 35),
('2024-01-07', 40),
('2024-01-08', 45),
('2024-01-09', 50),
('2024-01-10', 55),
('2024-02-28', 50),
('2024-02-28', 50),
('2024-02-28', 50),
('2024-03-01', 210),
('2024-02-29', 12),
('2024-02-29', 12),
('0000-00-00', 12323),
('2024-02-08', 121212213),
('2024-02-08', 2147483647),
('2024-02-17', 1212),
('2024-02-17', 1212),
('2024-02-23', 1212);

-- --------------------------------------------------------

--
-- Table structure for table `tank02`
--

CREATE TABLE `tank02` (
  `date` date NOT NULL,
  `numberOfTurtles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tank02`
--

INSERT INTO `tank02` (`date`, `numberOfTurtles`) VALUES
('2024-01-01', 100),
('2024-01-02', 95),
('2024-01-03', 90),
('2024-01-04', 85),
('2024-01-05', 80),
('2024-02-28', 8797);

-- --------------------------------------------------------

--
-- Table structure for table `tank03`
--

CREATE TABLE `tank03` (
  `date` date NOT NULL,
  `numberOfTurtles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tank03`
--

INSERT INTO `tank03` (`date`, `numberOfTurtles`) VALUES
('2024-01-01', 100),
('2024-01-02', 95),
('2024-01-03', 90),
('2024-01-04', 85),
('2024-01-05', 80),
('2024-01-06', 75),
('2024-01-07', 70),
('2024-01-08', 65),
('2024-01-09', 60),
('2024-01-10', 55),
('2024-02-23', 82398723);

-- --------------------------------------------------------

--
-- Table structure for table `tdpdata`
--

CREATE TABLE `tdpdata` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `reading` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tdpdata`
--

INSERT INTO `tdpdata` (`id`, `time`, `reading`) VALUES
(0, '2024-02-20 10:00:00', 1),
(1, '2024-02-20 11:00:00', 1.5),
(2, '2024-02-20 12:00:00', 2),
(3, '2024-02-20 13:00:00', 2.5),
(4, '2024-02-20 14:00:00', 3),
(5, '2024-02-20 15:00:00', 3.5),
(6, '2024-02-20 16:00:00', 4),
(7, '2024-02-20 17:00:00', 4.5),
(8, '2024-02-20 18:00:00', 5),
(9, '2024-02-20 19:00:00', 5.5);

-- --------------------------------------------------------

--
-- Table structure for table `tempdata`
--

CREATE TABLE `tempdata` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `temp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tempdata`
--

INSERT INTO `tempdata` (`id`, `time`, `temp`) VALUES
(1, '2024-02-20 10:00:00', 20),
(2, '2024-02-20 11:00:00', 21),
(3, '2024-02-20 12:00:00', 22),
(4, '2024-02-20 13:00:00', 23),
(5, '2024-02-20 14:00:00', 24),
(6, '2024-02-20 15:00:00', 25),
(7, '2024-02-20 16:00:00', 26),
(8, '2024-02-20 17:00:00', 27),
(9, '2024-02-20 18:00:00', 28),
(10, '2024-02-20 19:00:00', 29),
(11, '2024-02-20 10:00:00', 20),
(12, '2024-02-20 11:00:00', 21),
(13, '2024-02-20 12:00:00', 22),
(14, '2024-02-20 13:00:00', 23),
(15, '2024-02-20 14:00:00', 24),
(16, '2024-02-20 15:00:00', 25),
(17, '2024-02-20 16:00:00', 26),
(18, '2024-02-20 17:00:00', 27),
(19, '2024-02-20 18:00:00', 28),
(20, '2024-02-20 19:00:00', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phdata`
--
ALTER TABLE `phdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdpdata`
--
ALTER TABLE `tdpdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempdata`
--
ALTER TABLE `tempdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phdata`
--
ALTER TABLE `phdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tempdata`
--
ALTER TABLE `tempdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
