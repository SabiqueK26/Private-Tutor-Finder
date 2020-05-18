-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 08:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptfswebtecproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `UserType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `UserName`, `Password`, `UserType`) VALUES
(1, 'Sabique Islam Khan', 'SabiqueK', '1111', 'Admin'),
(2, 'Alvee Talukder', 'AlveeT', '2222', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `UserType` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Profession` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `Name`, `UserName`, `UserType`, `Password`, `Gender`, `Profession`, `Phone`, `Address`) VALUES
(1, 'Drubo Chowdhury', 'DruboC', 'Parents', '3333', 'M', 'Service Holder at Daraaz', 1777777111, 'Mirpur'),
(2, 'Tasvir Hossain', 'TasvirH', 'Parents', '3344', 'M', 'Service Holder at GSK', 1811991122, 'Baridhara DOHS'),
(3, 'Dalia Sultana', 'DaliaS', 'Parents', '6666', 'F', 'Housewife', 1954246016, 'Dhaka Cantonment'),
(20, 'Sumaiya Nusrat Khan Toma', 'TomaK', 'Parents', '12345', 'F', 'Banker', 1622113344, 'Gulshan Niketon'),
(22, 'SM Rizvi Rahman', 'SmrRahman', 'Parents', '112233', 'M', 'Civil Engineer', 1778899224, 'Gulshan'),
(24, 'Susmita Chowdhury Selmi ', 'SelmiC', 'Parents', '1100', 'F', 'Doctor', 1223344556, 'selmi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `UserType` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `AcademicInstitution` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `Name`, `UserName`, `UserType`, `Password`, `Gender`, `Phone`, `Email`, `Address`, `AcademicInstitution`) VALUES
(1, 'Sajid Islam Khan', 'SajidK', 'Tutors', '4455', 'M', 1855522244, 'sajidkhan@gmail.com', 'Bhashantek', 'HSC Candidate'),
(2, 'Yea Laila Onti', 'yeaonti', 'Tutors', '7777', 'F', 1998822123, 'yeaonti@gmail.com', 'shamoli', 'aiub'),
(3, 'Sadia Nusrat Khan', 'SadiaK', 'Tutors', '9999', 'F', 2147483647, 'sadiakhan@gmail.com', 'Dhaka Cantonment', 'Pursuing MBA at AIUB '),
(4, 'Tonima Pia', 'Tpia', 'Tutors', '2233', 'F', 1666555444, 'tonimapia@gmail.com', 'Baridhara DOHS', 'Pursuing CSE at AIUB '),
(17, 'Anika Tabassum', 'AnikaTa', 'Tutors', '8877', 'F', 1922334453, 'anikat@yahoo.com', 'Bashundhara', 'Pursing BBA at NSU'),
(18, 'Faika Tabannum', 'Phayeka', 'Tutors', '8899', 'F', 1355566622, 'faikat@yahoo.com', 'Bashundhara', 'Pursuing BBA at NSU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User Name` (`UserName`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User Name` (`UserName`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User Name` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
