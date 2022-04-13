-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 11:42 PM
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
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FatherName` varchar(100) NOT NULL,
  `YourProfilePicture` blob NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `PermanentAddress` varchar(100) NOT NULL,
  `ndAddress` varchar(100) NOT NULL,
  `PhoneNo` varchar(100) NOT NULL,
  `CnicNo` varchar(100) NOT NULL,
  `BloodGroup` varchar(100) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `SelectDegreeType` text NOT NULL,
  `DegreeName` text NOT NULL,
  `PassingYear` date NOT NULL,
  `Marks` varchar(100) NOT NULL,
  `SelectDegreeType1` varchar(100) NOT NULL,
  `DegreeName1` varchar(100) NOT NULL,
  `PassingYear1` date NOT NULL,
  `Marks1` varchar(100) NOT NULL,
  `SelectDegreeType2` varchar(100) NOT NULL,
  `DegreeName2` varchar(100) NOT NULL,
  `PassingYear2` date NOT NULL,
  `Marks2` varchar(100) NOT NULL,
  `SelectDegreeType3` varchar(100) NOT NULL,
  `DegreeName3` varchar(100) NOT NULL,
  `PassingYear3` date NOT NULL,
  `Marks3` varchar(100) NOT NULL,
  `EmployeeID` varchar(100) NOT NULL,
  `CompanyDesignation` varchar(100) NOT NULL,
  `EmployeeType` varchar(100) NOT NULL,
  `BasicSalary` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `Allowncess` varchar(100) NOT NULL,
  `Amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `Name`, `FatherName`, `YourProfilePicture`, `Age`, `Gender`, `PermanentAddress`, `ndAddress`, `PhoneNo`, `CnicNo`, `BloodGroup`, `DateOfBirth`, `Nationality`, `Religion`, `SelectDegreeType`, `DegreeName`, `PassingYear`, `Marks`, `SelectDegreeType1`, `DegreeName1`, `PassingYear1`, `Marks1`, `SelectDegreeType2`, `DegreeName2`, `PassingYear2`, `Marks2`, `SelectDegreeType3`, `DegreeName3`, `PassingYear3`, `Marks3`, `EmployeeID`, `CompanyDesignation`, `EmployeeType`, `BasicSalary`, `Salary`, `Allowncess`, `Amount`) VALUES
(1, 'Hamid', 'Zahid', 0x31646365626334356563636165363836356338643666656662653536356161642e6a7067, '21', 'Male', 'House No p94 street number 10 by 4 Ahmad bad near Gulistan Colony Faisalabad', ' fsd', ' +923167739011', ' 33100000000000', 'B-', '2022-04-13', 'Other', 'Islam', '', '', '0000-00-00', '0', '', '', '0000-00-00', '0', '', '', '0000-00-00', '0', '', '', '0000-00-00', '0', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
