-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 01:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediseba01`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `contactnumber` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `division` varchar(300) NOT NULL,
  `district` varchar(300) NOT NULL,
  `thana` varchar(300) NOT NULL,
  `village` varchar(300) NOT NULL,
  `DoB` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `contactnumber`, `password`, `division`, `district`, `thana`, `village`, `DoB`) VALUES
(1, 'Soykot16', '01784286885', '123456', 'Rajshahi', 'Bogura', 'Shibganj', 'ABC', '20-11-1997'),
(2, 'Utshab', '01710598673', '123456', 'Rajshahi', 'Rajshahi', 'Bolaia', 'BNM', '23-12-1998'),
(3, 'Shadib', '015214678377', '123456', 'AHSg', 'sjdnm,nm,', 'asdjJNK', 'asdBJJ', 'asdjhjh'),
(4, 'MOHAMMAD IMRAN KHAN', '017837363666', '123456', 'AHSg', 'sjdnm,nm,', 'asdjJNK', 'asdBJJ', 'asdjhjh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
