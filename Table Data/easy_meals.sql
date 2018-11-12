-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2017 at 05:17 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easy_meals`
--
CREATE DATABASE IF NOT EXISTS `easy_meals` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easy_meals`;

-- --------------------------------------------------------

--
-- Table structure for table `menu_card`
--

CREATE TABLE IF NOT EXISTS `menu_card` (
  `R_Id` varchar(10) DEFAULT NULL,
  `Menu_Id` varchar(10) DEFAULT NULL,
  `Dish_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Dish_Name` varchar(30) DEFAULT NULL,
  `Dish_Type` varchar(15) DEFAULT NULL,
  `Dish_Price` double(6,2) DEFAULT NULL,
  `Dish_Available` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`Dish_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `menu_card`
--

INSERT INTO `menu_card` (`R_Id`, `Menu_Id`, `Dish_Id`, `Dish_Name`, `Dish_Type`, `Dish_Price`, `Dish_Available`) VALUES
('1', 'MID1', 1, 'Italian Tacos', 'Starter', 150.00, 1),
('1', 'MID1', 2, 'Manchow Soup', 'Starter', 100.00, 1),
('1', 'MID1', 4, 'Veg Pulao', 'Main_Course', 200.00, 1),
('1', 'MID1', 5, 'Shahi Paneer', 'Main_Course', 180.00, 1),
('1', 'MID1', 6, 'Malai Kofta', 'Main_Course', 170.00, 0),
('1', 'MID1', 7, 'Sizzling Brownie', 'Dessert', 150.00, 1),
('1', 'MID1', 8, 'Ice cream', 'Dessert', 100.00, 1),
('1', 'MID1', 9, 'Apple Pie', 'Dessert', 150.00, 0),
('2', 'MID2', 10, 'Manchurian', 'Starter', 120.00, 0),
('2', 'MID2', 11, 'Tomato Soup', 'Starter', 180.00, 1),
('2', 'MID2', 12, 'Ghee Rice', 'Main_Course', 200.00, 1),
('2', 'MID2', 13, 'Lemon Rice', 'Main_Course', 180.00, 0),
('2', 'MID2', 14, 'Kolhapuri', 'Main_Course', 170.00, 1),
('2', 'MID2', 15, 'Poached Pears', 'Dessert', 150.00, 1),
('2', 'MID2', 16, 'Ice cream', 'Dessert', 100.00, 1),
('2', 'MID2', 17, 'Cake', 'Dessert', 150.00, 1),
('2', 'MID2', 18, 'Babycorn Soup', 'Starter', 100.00, 1),
('3', 'MID3', 19, 'Chicken Lollipop', 'Starter', 100.00, 1),
('3', 'MID3', 20, 'Manchow Soup', 'Starter', 100.00, 1),
('3', 'MID3', 21, 'Finger Chips', 'Starter', 180.00, 1),
('3', 'MID3', 22, 'Schezuan Rice', 'Main_Course', 200.00, 1),
('3', 'MID3', 23, 'Lemon Rice', 'Main_Course', 180.00, 1),
('3', 'MID3', 24, 'Masala Dosa', 'Main_Course', 170.00, 1),
('3', 'MID3', 25, 'Gulab Jamun', 'Dessert', 150.00, 1),
('3', 'MID3', 26, 'Rasagulla', 'Dessert', 100.00, 1),
('3', 'MID3', 27, 'Apple Tart', 'Dessert', 150.00, 1),
('4', 'MID4', 28, 'Chicken Lollipop', 'Starter', 100.00, 1),
('4', 'MID4', 29, 'Manchow Soup', 'Starter', 100.00, 1),
('4', 'MID4', 30, 'Finger Chips', 'Starter', 180.00, 1),
('4', 'MID4', 31, 'Schezuan Rice', 'Main_Course', 200.00, 1),
('4', 'MID4', 32, 'Lemon Rice', 'Main_Course', 180.00, 1),
('4', 'MID4', 33, 'Masala Dosa', 'Main_Course', 170.00, 1),
('4', 'MID4', 34, 'Gulab Jamun', 'Dessert', 150.00, 1),
('4', 'MID4', 35, 'Rasagulla', 'Dessert', 100.00, 1),
('4', 'MID4', 36, 'Apple Tart', 'Dessert', 150.00, 1),
('5', 'MID5', 37, 'Chicken Lollipop', 'Starter', 100.00, 1),
('5', 'MID5', 38, 'Manchow Soup', 'Starter', 100.00, 1),
('5', 'MID5', 39, 'Finger Chips', 'Starter', 180.00, 1),
('5', 'MID5', 40, 'Schezuan Rice', 'Main_Course', 200.00, 1),
('5', 'MID5', 41, 'Lemon Rice', 'Main_Course', 180.00, 1),
('5', 'MID5', 42, 'Masala Dosa', 'Main_Course', 170.00, 1),
('5', 'MID5', 43, 'Gulab Jamun', 'Dessert', 150.00, 1),
('5', 'MID5', 44, 'Rasagulla', 'Dessert', 100.00, 1),
('5', 'MID5', 45, 'Apple Tart', 'Dessert', 150.00, 1),
('6', 'MID6', 55, 'Paneer Lollipop', 'Starter', 150.00, 1),
('6', 'MID6', 56, 'Cheese & Corn Soup', 'Starter', 100.00, 1),
('6', 'MID6', 57, 'Manchurian', 'Starter', 180.00, 1),
('6', 'MID6', 58, 'Schezuan Rice', 'Main_Course', 200.00, 1),
('6', 'MID6', 59, 'Lemon Rice', 'Main_Course', 180.00, 1),
('6', 'MID6', 60, 'Masala Dosa', 'Main_Course', 170.00, 1),
('6', 'MID6', 61, 'Chocolate Mousse', 'Dessert', 150.00, 1),
('6', 'MID6', 62, 'Rasagulla', 'Dessert', 100.00, 1),
('6', 'MID6', 63, 'Apple Tart', 'Dessert', 150.00, 1),
('1', 'MID1', 64, 'Paneer Roll', 'Starter', 60.00, 1),
('2', 'MID2', 71, 'Paneer Roll', 'Starter', 60.00, 1),
('2', 'MID2', 72, 'Idli', 'Starter', 30.00, 1),
('2', 'MID2', 74, 'Lemon Rice', 'Starter', 60.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Order_Id` int(11) NOT NULL AUTO_INCREMENT,
  `R_Id` varchar(10) DEFAULT NULL,
  `Dishes_Ordered` varchar(50) DEFAULT NULL,
  `Order_Time` datetime DEFAULT NULL,
  `Order_Bill` double(10,2) DEFAULT NULL,
  `Order_CustId` varchar(10) DEFAULT NULL,
  `Order_Status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Order_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `R_Id`, `Dishes_Ordered`, `Order_Time`, `Order_Bill`, `Order_CustId`, `Order_Status`) VALUES
(9, '1', '1,2,64', '2017-12-17 12:59:54', 310.00, '1', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `R_Id` int(11) NOT NULL AUTO_INCREMENT,
  `R_Name` varchar(40) DEFAULT NULL,
  `R_OwnerId` varchar(10) DEFAULT NULL,
  `R_Phno` varchar(11) DEFAULT NULL,
  `R_MenuId` varchar(10) NOT NULL,
  `R_Address` varchar(300) DEFAULT NULL,
  `R_Img` varchar(30) NOT NULL,
  PRIMARY KEY (`R_Id`,`R_MenuId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`R_Id`, `R_Name`, `R_OwnerId`, `R_Phno`, `R_MenuId`, `R_Address`, `R_Img`) VALUES
(1, 'Saffron', '5', ' 2442563', 'MID1', 'Opp. 2nd gate, Tilakwadi, Belgaum', 'images/res7.jpg'),
(2, 'Food Pradise', '6', ' 2442563', 'MID2', 'Opp. 3nd gate, Bhagyanagar, Belgaum', 'images/res2.jpg'),
(3, 'Pick ''N'' pack', '7', ' 2442589', 'MID3', 'Brigade Road, Belgaum', 'images/res6.jpg'),
(4, 'Food Circle', '8', ' 4209637', 'MID4', 'Spurthi Road, Belgaum', 'images/res4.jpg'),
(5, 'Tasty Treat', '9', ' 4209637', 'MID5', 'M. G. Road, Belgaum', 'images/res5.jpg'),
(9, 'Foodilicious', '5', '469614', 'MID7', 'Camp, 5th cross, Belgaum', 'images/res3.jpg'),
(6, 'Food Corner', '10', '4201025', 'MID6', 'College Road, Belgaum', 'images/res1.jpg'),
(10, 'Nath', '6', '245874', 'MID8', 'Deshmukh road, Tilakwadi', 'images/res5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_ratings`
--

CREATE TABLE IF NOT EXISTS `reviews_ratings` (
  `R_Id` varchar(10) DEFAULT NULL,
  `Reviews` varchar(40) DEFAULT NULL,
  `Ratings` double(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Pwd` varchar(70) DEFAULT NULL,
  `User_Type` varchar(20) DEFAULT NULL,
  `User_Fname` varchar(20) DEFAULT NULL,
  `User_Lname` varchar(20) DEFAULT NULL,
  `User_Mobile` varchar(11) DEFAULT NULL,
  `User_Email` varchar(50) NOT NULL DEFAULT '',
  `User_Address` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `User_Pwd`, `User_Type`, `User_Fname`, `User_Lname`, `User_Mobile`, `User_Email`, `User_Address`) VALUES
(1, '827ccb0eea8a706c4c34a16891f84e7b', 'Customer', 'Aditi', 'Killekar', '9986656006', 'vaishnavibgm@gmail.com', 'Tilakwadi'),
(2, '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Vaishnavi', 'Killekar', '9739760910', 'vaishnavikillekar@gmail.com', 'Belgaum'),
(3, '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Ram', 'Sharma', '9067432498', 'abc@xyz.com', 'Hanuman Nagar'),
(4, '827ccb0eea8a706c4c34a16891f84e7b', 'Customer', 'Amol', 'Deshpande', '8277609456', 'amol.deshpande04@gmail.com', 'Tilakwadi, Belagavi'),
(5, '827ccb0eea8a706c4c34a16891f84e7b', 'Rest_Owner', 'Shruti', 'Pathak', '9067432498', 'killekar.aditi50@gmail.com', 'Shahpur, Belgaum'),
(6, '827ccb0eea8a706c4c34a16891f84e7b', 'Rest_Owner', 'Akshata', 'Naik', '7899456007', 'test@gmail.com', 'Hanuman Nagar'),
(7, '827ccb0eea8a706c4c34a16891f84e7b', 'Rest_Owner', 'Ram', 'Naik', '8050615715', 'abc@xyz.com', 'Hanuman Nagar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
