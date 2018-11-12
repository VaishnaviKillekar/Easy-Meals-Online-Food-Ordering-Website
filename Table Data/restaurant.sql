-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2017 at 05:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_meals`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `R_Id` int(11) NOT NULL,
  `R_Name` varchar(40) DEFAULT NULL,
  `R_OwnerId` varchar(10) DEFAULT NULL,
  `R_Phno` varchar(11) DEFAULT NULL,
  `R_MenuId` varchar(10) NOT NULL,
  `R_Address` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`R_Id`, `R_Name`, `R_OwnerId`, `R_Phno`, `R_MenuId`, `R_Address`) VALUES
(1, 'Saffron', 'O_Id1', '2448971', 'M_Id1', 'Opp 2nd Gate,Tilakwadi,Belgaum'),
(2, 'Food Paradise', 'O_Id2', '2443587', 'M_id2', 'RPD road,Belgaum'),
(3, 'Pick N Pack', 'O_Id3', '2456978', 'M_Id3', 'Brigade road,Belgaum'),
(4, 'Food Circle', 'O_id4', '2447569', 'M_Id4', 'Gandhi Nagar Mumbai'),
(5, 'Tasty Treat', 'O_Id5', '4207386', 'M_Id5', 'Station road,Pune'),
(6, 'Niyaz', 'O_Id6', '4207368', 'M_Id6', 'Opp.Tv Tower,Maruti Nagar,Banglore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`R_Id`,`R_MenuId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `R_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
