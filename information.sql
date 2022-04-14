-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 06:57 PM
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
  `Sr.No` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `YourProfilePicture` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `PermanentAddress` varchar(50) NOT NULL,
  `ndAddress` varchar(50) NOT NULL,
  `PhoneNo` varchar(50) NOT NULL,
  `CnicNo` varchar(50) NOT NULL,
  `BloodGroup` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Religion` varchar(50) NOT NULL,
  `DegreeType` varchar(50) NOT NULL,
  `DegreeName` varchar(50) NOT NULL,
  `PassingYear` date NOT NULL,
  `Marks` varchar(50) NOT NULL,
  `DegreeType1` varchar(50) NOT NULL,
  `DegreeName1` varchar(50) NOT NULL,
  `PassingYear1` date NOT NULL,
  `Marks1` varchar(50) NOT NULL,
  `DegreeType2` varchar(50) NOT NULL,
  `DegreeName2` varchar(50) NOT NULL,
  `PassingYear2` date NOT NULL,
  `Marks2` varchar(50) NOT NULL,
  `DegreeType3` varchar(50) NOT NULL,
  `DegreeName3` varchar(50) NOT NULL,
  `PassingYear3` date NOT NULL,
  `Marks3` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `CompanyDesignation` varchar(50) NOT NULL,
  `EmployeeType` varchar(50) NOT NULL,
  `BasicSalary` varchar(50) NOT NULL,
  `Salary` varchar(50) NOT NULL,
  `Allowncess` varchar(50) NOT NULL,
  `TotalAmount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Sr.No`, `Name`, `FatherName`, `YourProfilePicture`, `Age`, `Gender`, `PermanentAddress`, `ndAddress`, `PhoneNo`, `CnicNo`, `BloodGroup`, `DateOfBirth`, `Nationality`, `Religion`, `DegreeType`, `DegreeName`, `PassingYear`, `Marks`, `DegreeType1`, `DegreeName1`, `PassingYear1`, `Marks1`, `DegreeType2`, `DegreeName2`, `PassingYear2`, `Marks2`, `DegreeType3`, `DegreeName3`, `PassingYear3`, `Marks3`, `EmployeeID`, `CompanyDesignation`, `EmployeeType`, `BasicSalary`, `Salary`, `Allowncess`, `TotalAmount`) VALUES
(1, 'farzan ', 'MUHAMMAD ZAHID NADEEM PARSOTA', 'maxresdefault.jpg', '21', 'Male', 'House No p94 street number 10 by 4 Ahmad bad near ', ' FSD', ' +923167739011', ' 33100000000000', 'd', '2022-04-13', 'Pakistani', 'Islam', '1', 'CS', '2022-03-27', '3.3', '2', 'CSS', '2022-03-28', ' 3.0', ' 3', 'Pre Engineer', '2022-03-30', '546', '3', 'science', '2022-04-11', '702', '', '', '', '', '', '', ''),
(2, 'Hamid', 'Zahid', 'maxresdefault.jpg', '21', 'Male', 'House No p94 street number 10 by 4 Ahmad bad near ', ' FSD', ' +923167739011', ' 33100000000000', 'A+', '2022-03-27', 'Pakistani', 'Islam', '1', 'CS', '2022-04-11', '3.3', '2', 'CSS', '2022-04-10', ' 3.0', ' 3', 'Pre Engineer', '2022-04-12', '546', 'Select Degree', 'science', '2022-04-25', '702', '100', 'Second', 'Full Stack Developer', '10000', '1000', '20', '2333'),
(3, 'farzan ', 'sohaib', 'depositphotos_448335982-stock-illustration-vector-', '152', 'Other', 'House No p94 street number 10 by 4 Ahmad bad near ', ' LAHORE', ' +923167739011', ' 3423234223423', 'f', '2022-04-14', 'Pakistani', 'Islam', '1', 'CS', '2022-03-28', '3.3', '2', 'CSS', '2022-03-28', ' 3.0', ' 3', 'Pre Engineer', '2022-03-28', '546', '3', 'science', '2022-03-28', '702', '100', 'Six', 'BlockChain Developer', '10000', '1000', '20%', '2333'),
(4, 'farzan ', 'sohaib', 'depositphotos_448335982-stock-illustration-vector-', '152', 'Other', 'House No p94 street number 10 by 4 Ahmad bad near ', ' LAHORE', ' +923167739011', ' 3423234223423', 'f', '2022-04-14', 'Pakistani', 'Islam', '1', 'CS', '2022-03-28', '3.3', '2', 'CSS', '2022-03-28', ' 3.0', ' 3', 'Pre Engineer', '2022-03-28', '546', '3', 'science', '2022-03-28', '702', '100', 'Six', 'BlockChain Developer', '10000', '1000', '20%', '2333'),
(5, 'hamida bibi', 'ssssss', 'depositphotos_448335982-stock-illustration-vector-', '21', 'Male', 'House No p94 street number 10 by 4 Ahmad bad near ', ' ddddddd', ' +923167739011', ' 0310000000000', 'A+', '2022-04-19', 'Pakistani', 'Islam', '1', 'CS', '2022-04-05', '3.3', '3', 'CSS', '2022-04-04', ' 3.0', ' 2', 'Pre Engineer', '2022-04-11', '546', '3', 'science', '2022-04-19', '702', '23', 'First', 'Full Stack Developer', '10000', '1000', '20', '2333'),
(6, 'hamida bibi', 'ssssss', 'depositphotos_448335982-stock-illustration-vector-', '21', 'Male', 'House No p94 street number 10 by 4 Ahmad bad near ', ' ddddddd', ' +923167739011', ' 0310000000000', 'A+', '2022-04-19', 'Pakistani', 'Islam', '1', 'CS', '2022-04-05', '3.3', '3', 'CSS', '2022-04-04', ' 3.0', ' 2', 'Pre Engineer', '2022-04-11', '546', '3', 'science', '2022-04-19', '702', '23', 'First', 'Full Stack Developer', '10000', '1000', '20', '2333'),
(7, 'Aliyan', 'nigaa', '273783454_2749440932016290_1131601210271122890_n.j', '21', 'Female', 'House No p94 street number 10 by 4 Ahmad bad near ', ' ghghgh', ' +923167739011', ' 5656565656', 'B-', '2022-04-04', 'Pakistani', 'Islam', '1', 'CS', '2022-03-27', '3.3', '2', 'CSS', '2022-04-11', ' 3.0', ' 3', 'Pre Engineer', '2022-04-10', '546', '4', 'science', '2022-04-18', '702', '1', 'Fourth', 'BlockChain Developer', '1000022222222', '10002222222', '22222222', '22222222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Sr.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `Sr.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
