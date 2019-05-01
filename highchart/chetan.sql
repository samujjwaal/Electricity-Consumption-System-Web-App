-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 04:55 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sprdh`
--

-- --------------------------------------------------------

--
-- Table structure for table `chetan`
--

CREATE TABLE `chetan` (
  `appliance` text,
  `12hr` int(11) NOT NULL DEFAULT '0',
  `13hr` int(11) NOT NULL DEFAULT '0',
  `14hr` int(11) NOT NULL DEFAULT '0',
  `15hr` int(11) NOT NULL DEFAULT '0',
  `16hr` int(11) NOT NULL DEFAULT '0',
  `17hr` int(11) NOT NULL DEFAULT '0',
  `18hr` int(11) NOT NULL DEFAULT '0',
  `19hr` int(11) NOT NULL DEFAULT '0',
  `20hr` int(11) NOT NULL DEFAULT '0',
  `21hr` int(11) NOT NULL DEFAULT '0',
  `22hr` int(11) NOT NULL DEFAULT '0',
  `23hr` int(11) NOT NULL DEFAULT '0',
  `0hr` int(11) NOT NULL DEFAULT '0',
  `1hr` int(11) NOT NULL DEFAULT '0',
  `2hr` int(11) NOT NULL DEFAULT '0',
  `3hr` int(11) NOT NULL DEFAULT '0',
  `4hr` int(11) NOT NULL DEFAULT '0',
  `5hr` int(11) NOT NULL DEFAULT '0',
  `6hr` int(11) NOT NULL DEFAULT '0',
  `7hr` int(11) NOT NULL DEFAULT '0',
  `8hr` int(11) NOT NULL DEFAULT '0',
  `9hr` int(11) NOT NULL DEFAULT '0',
  `10hr` int(11) NOT NULL DEFAULT '0',
  `11hr` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chetan`
--

INSERT INTO `chetan` (`appliance`, `12hr`, `13hr`, `14hr`, `15hr`, `16hr`, `17hr`, `18hr`, `19hr`, `20hr`, `21hr`, `22hr`, `23hr`, `0hr`, `1hr`, `2hr`, `3hr`, `4hr`, `5hr`, `6hr`, `7hr`, `8hr`, `9hr`, `10hr`, `11hr`, `total`) VALUES
('001HALBUL000N', 20, 12, 63, 63, 63, 63, 63, 63, 63, 63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 536),
('002HALTUB001E', 30, 13, 13, 13, 13, 13, 13, 13, 13, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 147),
('001HALFAN002C', 40, 54, 45, 45, 45, 45, 45, 45, 45, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 454),
('003KITFAN003C', 50, 34, 34, 34, 34, 34, 34, 34, 34, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 356),
('004GPKTUB004C', 10, 34, 24, 24, 24, 24, 24, 24, 24, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 236),
('002HALTUB005E', 20, 12, 12, 12, 12, 12, 12, 12, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 128),
('001HALFAN006C', 30, 67, 56, 56, 56, 56, 56, 56, 56, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 545),
('004GPKFAN007C', 40, 45, 45, 45, 45, 45, 45, 45, 45, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 445),
('002HALTUB008E', 50, 34, 23, 23, 23, 23, 23, 23, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 268),
('totalhr', 290, 305, 315, 315, 315, 315, 315, 315, 315, 315, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3115);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
