-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 05:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `nakit`
--

CREATE TABLE `nakit` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nakit`
--

INSERT INTO `nakit` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(1, 'Nina', 'zanimljivo', 4),
(2, 'Ina', 'ok', 3),
(3, 'gala', 'supp', 4),
(4, 'milos', 'hejt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newslettter`
--

CREATE TABLE `newslettter` (
  `ID` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newslettter`
--

INSERT INTO `newslettter` (`ID`, `ime`, `email`) VALUES
(1, 'Iva', 'iva@gmail.com'),
(2, 'nina', 'i@gm.com');

-- --------------------------------------------------------

--
-- Table structure for table `obuca`
--

CREATE TABLE `obuca` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obuca`
--

INSERT INTO `obuca` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(1, 'Sof', 'bas lose', 1),
(2, 'milan', 'lose jer je samo za zene', 1),
(3, 'andrea', 'fuj', 1),
(4, 'riks', 'lose', 3),
(5, 'riks', 'super je', 5);

-- --------------------------------------------------------

--
-- Table structure for table `odeca`
--

CREATE TABLE `odeca` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odeca`
--

INSERT INTO `odeca` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(1, 'Riks', 'Uuuu jako dobro!', 5),
(3, 'iva', 'supp', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nakit`
--
ALTER TABLE `nakit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newslettter`
--
ALTER TABLE `newslettter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `obuca`
--
ALTER TABLE `obuca`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `odeca`
--
ALTER TABLE `odeca`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nakit`
--
ALTER TABLE `nakit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newslettter`
--
ALTER TABLE `newslettter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obuca`
--
ALTER TABLE `obuca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `odeca`
--
ALTER TABLE `odeca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
