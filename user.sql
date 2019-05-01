-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 07:31 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sn` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `mob` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sn`, `username`, `firstname`, `lastname`, `mob`, `address`, `email`, `password`, `type`) VALUES
(1, 'admin', 'sags', 'admin', 9969625644, 'Kharghar', 'sprdhsags@gmail.com', '447ed5811c1e5e4a84039ea207a9401a', 0x31),
(2, 'siri123', 'Sai ', 'Sirisha', 9969625644, 'Kharghar', 'n.sirisha@hotmail.com', 'bbcfb757e7b943911281a31768e3cf9a', 0x30),
(3, 'guru123', 'Gurpreet', 'Singh', 123456789, 'Sion', '2015gurpreet.nagpal@ves.ac.in', 'b5a05a53b792931b6c354d52c42dcab5', 0x30),
(4, 'sam123', 'Samujjwaal', 'Dey', 789456123, 'Nerul', '2015samujjwaal.dey@ves.ac.in', 'd51204f173607d67f2c8fabbeccbdb1d', 0x30),
(5, 'derpu', 'Neha', 'Prabhavalkar', 9999999999, 'Kurla', '2015neha.prabhavalkar@ves.ac.in', '72b121fe1fd0343095d0d36dfc8abb71', 0x30),
(6, 'testuser', 'Test', 'User', 789456123, 'Computer', '2015sai.nadiminti@ves.ac.in', '11055975f856b0b7fe95f3a12986e7f1', 0x30),
(7, 'Chetan', 'Chetan', 'chetan', 123456789, 'Chembur', 'chetan@gmail.com', 'ba0e1dfea8a44a98e755c036338277dc', 0x30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sn` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
