-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 01:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golfball`
--

-- --------------------------------------------------------

--
-- Table structure for table `golf`
--

CREATE TABLE `golf` (
  `dx` int(200) NOT NULL,
  `dy` int(200) NOT NULL,
  `direction` varchar(1000) NOT NULL,
  `sector` int(200) NOT NULL,
  `holeposition` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golf`
--

INSERT INTO `golf` (`dx`, `dy`, `direction`, `sector`, `holeposition`) VALUES
(-20, 40, 'North-West', 4, 1),
(-60, 100, 'North', 1, 1),
(-100, 200, 'North', 1, 1),
(20, 120, 'North', 2, 2),
(40, 20, 'North-East', 2, 2),
(40, 20, 'North-East', 2, 2),
(90, 80, 'North-East', 3, 3),
(60, 20, 'North-East', 2, 3),
(-20, -60, 'North-East', 7, 7),
(-80, -100, 'North-East', 7, 7),
(30, -40, 'North-West', 9, 9),
(40, -180, 'North', 8, 8),
(90, 60, 'North-East', 6, 3),
(100, 40, 'North-East', 6, 3),
(140, 220, 'North-East', 3, 3),
(-140, 180, 'North', 1, 1),
(-100, -90, 'North-East', 7, 7),
(-90, -80, 'North-East', 7, 7),
(-90, -20, 'North-East', 4, 7),
(-40, -20, 'North-East', 4, 7),
(40, 20, 'North-East', 5, 8),
(130, 40, 'North-East', 6, 3),
(10, 20, 'North', 2, 2),
(10, 40, 'North', 2, 2),
(20, 20, 'North', 2, 2),
(10, 60, 'North', 5, 2),
(10, 80, 'North', 5, 2),
(10, 100, 'North', 2, 2),
(10, 120, 'North', 2, 2),
(10, 180, 'North', 2, 2),
(10, 140, 'North', 2, 2),
(20, 140, 'North', 5, 2),
(20, 60, 'North', 5, 2),
(20, 80, 'North', 5, 2),
(30, 20, 'North-East', 5, 2),
(40, 40, 'North-East', 5, 2),
(50, 20, 'North-East', 5, 2),
(60, 40, 'North-East', 5, 2),
(10, 180, 'North', 2, 2),
(-50, 60, 'North-West', 4, 1),
(-80, 80, 'North-West', 4, 1),
(-70, 80, 'North-West', 4, 1),
(-80, 180, 'North-West', 1, 1),
(-100, 220, 'North', 1, 1),
(-50, 80, 'North-West', 4, 1),
(-80, 160, 'North-West', 1, 1),
(-70, 40, 'North-West', 4, 1),
(-40, 120, 'North', 1, 1),
(-50, 160, 'North', 1, 1),
(-60, 180, 'North', 1, 1),
(-90, 220, 'North', 1, 1),
(-100, 100, 'North-West', 1, 1),
(-90, 60, 'North-West', 4, 1),
(-100, 40, 'North-West', 4, 1),
(-170, 40, 'North-West', 1, 1),
(-70, 160, 'North-West', 1, 1),
(60, 160, 'North', 2, 2),
(-40, 120, 'North', 1, 1),
(10, 60, 'North', 5, 2),
(20, 80, 'North', 5, 2),
(30, 120, 'North', 2, 2),
(50, 120, 'North', 2, 2),
(40, 80, 'North', 5, 2),
(50, 80, 'North', 5, 2),
(70, 80, 'North-East', 6, 2),
(80, 40, 'North-East', 6, 3),
(120, -40, 'North-East', 6, 3),
(80, 200, 'North', 3, 3),
(90, 220, 'North', 3, 3),
(100, 160, 'North', 3, 3),
(120, 240, 'north', 3, 3),
(60, 60, 'north', 5, 3),
(40, 20, 'north-east', 5, 3),
(20, 20, 'north-east', 5, 3),
(30, 40, 'north-east', 6, 3),
(50, 60, 'North', 5, 3),
(140, 120, 'North-East', 3, 3),
(0, 60, 'North', 4, 2),
(0, 180, 'North', 1, 1),
(0, 0, 'Center', 0, 0),
(0, 240, 'North', 3, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
