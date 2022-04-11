-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 09:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `SelectDegreeType` varchar(40) NOT NULL,
  `DegreeName` varchar(40) NOT NULL,
  `PassingYear` varchar(40) NOT NULL,
  `Marks` varchar(40) NOT NULL,
  `SelectDegreeTypee` varchar(40) NOT NULL,
  `DegreeName1` varchar(40) NOT NULL,
  `PassingYear1` varchar(40) NOT NULL,
  `Marks1` varchar(40) NOT NULL,
  `SelectDegreeTypeee` varchar(40) NOT NULL,
  `DegreeName2` varchar(40) NOT NULL,
  `PassingYear2` varchar(40) NOT NULL,
  `Marks2` varchar(40) NOT NULL,
  `SelectDegreeTypeeee` varchar(40) NOT NULL,
  `DegreeName3` varchar(40) NOT NULL,
  `PassingYear3` varchar(40) NOT NULL,
  `Marks3` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `Name`, `SelectDegreeType`, `DegreeName`, `PassingYear`, `Marks`, `SelectDegreeTypee`, `DegreeName1`, `PassingYear1`, `Marks1`, `SelectDegreeTypeee`, `DegreeName2`, `PassingYear2`, `Marks2`, `SelectDegreeTypeeee`, `DegreeName3`, `PassingYear3`, `Marks3`) VALUES
(1, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', ' ', ' ', ' ', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
