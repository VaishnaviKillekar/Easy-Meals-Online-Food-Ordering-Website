-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2017 at 05:02 PM
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
-- Table structure for table `menu_card`
--

CREATE TABLE `menu_card` (
  `R_Id` varchar(10) DEFAULT NULL,
  `Menu_Id` varchar(10) DEFAULT NULL,
  `Dish_Id` varchar(10) NOT NULL,
  `Dish_Name` varchar(30) DEFAULT NULL,
  `Dish_Type` varchar(15) DEFAULT NULL,
  `Dish_Price` double(4,2) DEFAULT NULL,
  `Dish_Available` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_card`
--

INSERT INTO `menu_card` (`R_Id`, `Menu_Id`, `Dish_Id`, `Dish_Name`, `Dish_Type`, `Dish_Price`, `Dish_Available`) VALUES
('R_Id1', 'M_Id1', 'D_Id1', 'Veg Manchurian', 'STARTER', 10.00, 1),
('R_Id2', 'M_Id2', 'D_Id3', 'Paneer Chilli', 'STARTER', 12.00, 1),
('R_Id3', 'M_Id3', 'D_Id5', 'Chicken65', 'STARTER', 11.10, 1),
('R_Id4', 'M_Id4', 'D_Id10', 'Veg Pulao', 'MAIN-COURSE', 15.67, 1),
('R_Id5', 'M_Id5', 'D_Id8', 'Chicken Biryani', 'MAIN-COURSE', 18.75, 1),
('R_Id4', 'M_Id4', 'D_Id11', 'Fried Rice', 'MAIN-COURSE', 20.55, 1),
('R_Id4', 'M_Id4', 'D_Id15', 'Chocolate Brownie', 'DESERT', 28.55, 1),
('R_Id6', 'M_Id6', 'D_Id16', 'Icecream', 'DESERT', 16.55, 1),
('R_Id2', 'M_Id2', 'D_Id13', 'ChocoLava Cake', 'DESERT', 21.55, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_card`
--
ALTER TABLE `menu_card`
  ADD PRIMARY KEY (`Dish_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
